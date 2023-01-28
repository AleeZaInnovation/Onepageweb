<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LogoController extends Controller
{
    //---- users view ----//
    public function view(){
        
        $data = Logo::all();
        //dd($data->toArray());
    	
      return view('backend.logo.index', compact('data'));
    }
    //---- users Add ----//
    public function add(){
    	return view('backend.logo.add');
    }
    //---- users Store ----//
    public function store(Request $request){
        // Validation  
 
       // insert data
        
       $data = new Logo;
       if($request->file('image')){
         $file = $request->file('image');
          $fileName = date('YmdHi'). $file->getClientOriginalName();
          $file->move(public_path('assets/backend/images/blogs'), $fileName);
       $data['image'] = $fileName;          
       }
       $data->save();
       Alert::success('Add Logo', 'See The Logo');

       // Redirect 
      return redirect()->route('logo.view');

    }
    //---- users Edit ----//
    public function edit($id){
    	$blogEdit['edits'] = Logo::find($id);
    	return view('backend.logo.edit', $blogEdit);
    }
    //---- users Update ----//
    public function update($id, Request $request){
         // Validation 
        // update
        $data = Logo::find($id);
        // Image Check
       // Update 
       if($request->file('image')){
         $file = $request->file('image');
          @unlink(public_path('assets/backend/images/blogs/'.$data->image));
          $fileName = date('YmdHi'). $file->getClientOriginalName();
          $file->move(public_path('assets/backend/images/blogs'), $fileName);
          $data['image'] = $fileName;
       }
       $data->save();
       Alert::success('Update Logo', 'See The Logo');
       // Redirect
       return redirect()->route('logo.view');
    }
    //---- users Delete ----//
    public function delete($id){
        $blogDelete = Logo::find($id);
        if (file_exists('public/assets/backend/images/blogs/'. $blogDelete->image) AND ! empty($blogDelete->image)){
        unlink('public/assets/backend/images/blogs/'. $blogDelete->image);
        }
        $blogDelete->delete();
        return redirect()->route('logo.view');
    }
}

