<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use RealRashid\SweetAlert\Facades\Alert;

class BannerController extends Controller
{
    //---- users view ----//
    public function view(){
        
        $data = Banner::all();
        //dd($data->toArray());
    	
      return view('backend.banner.index', compact('data'));
    }
    //---- users Add ----//
    public function add(){
    	return view('backend.banner.add');
    }
    //---- users Store ----//
    public function store(Request $request){
        // Validation  
 
       // insert data
        
       $data = new Banner;
       $data->title = $request->title;
       $data->summary     = $request->summary;
       if($request->file('image')){
         $file = $request->file('image');
          $fileName = date('YmdHi'). $file->getClientOriginalName();
          $file->move(public_path('assets/backend/images/blogs'), $fileName);
       $data['image'] = $fileName;          
       }
       $data->save();
       Alert::success('Add Banner', 'See The Banner');

       // Redirect 
      return redirect()->route('banner.view');

    }
    //---- users Edit ----//
    public function edit($id){
    	$blogEdit['edits'] = Banner::find($id);
    	return view('backend.banner.edit', $blogEdit);
    }
    //---- users Update ----//
    public function update($id, Request $request){
         // Validation 
        // update
        $data = Banner::find($id);
        // Image Check
       // Update 
       $data->title = $request->title;
       $data->summary     = $request->summary;
       if($request->file('image')){
         $file = $request->file('image');
          @unlink(public_path('assets/backend/images/blogs/'.$data->image));
          $fileName = date('YmdHi'). $file->getClientOriginalName();
          $file->move(public_path('assets/backend/images/blogs'), $fileName);
          $data['image'] = $fileName;
       }
       $data->save();
       Alert::success('Update Banner', 'See The Banner');
       // Redirect
       return redirect()->route('banner.view')->with('success', 'Blog Updated Successfully');
    }
    //---- users Delete ----//
    public function delete($id){
        $blogDelete = Banner::find($id);
        if (file_exists('public/assets/backend/images/blogs/'. $blogDelete->image) AND ! empty($blogDelete->image)){
        unlink('public/assets/backend/images/blogs/'. $blogDelete->image);
        }
        $blogDelete->delete();
        return redirect()->route('banner.view');
    }
}
