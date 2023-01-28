<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
use RealRashid\SweetAlert\Facades\Alert;



class BlogsController extends Controller
{
    //---- users view ----//
    public function view(){
        
        $data = Blogs::all();
        //dd($data->toArray());
    	
      return view('backend.blog.index', compact('data'));
    }
    //---- users Add ----//
    public function add(){
    	return view('backend.blog.add');
    }
    //---- users Store ----//
    public function store(Request $request){
        // Validation
        $request->validate([
          'title' => 'required',
          'summary'     => 'required',
        ]);    
 
       // insert data
        
       $data = new Blogs;
       $data->title = $request->title;
       $data->summary     = $request->summary;
       $data->description    = $request->description;
       if($request->file('image')){
         $file = $request->file('image');
          $fileName = date('YmdHi'). $file->getClientOriginalName();
          $file->move(public_path('assets/backend/images/blogs'), $fileName);
       $data['image'] = $fileName;          
       }
       $data->save();
       Alert::success('Add Block', 'See The Blocks');

       // Redirect 
      return redirect()->route('blog.view');

    }
    //---- users Edit ----//
    public function edit($id){
    	$blogEdit['edits'] = Blogs::find($id);
    	return view('backend.blog.edit', $blogEdit);
    }
    //---- users Update ----//
    public function update($id, Request $request){
         // Validation 
    	$request->validate([
          'title' => 'required',
          'summary'     => 'required',
        ]);
        // update
        $blogUpdate = Blogs::find($id);
        // Image Check
       // Update 
       $blogUpdate->title = $request->title;
       $blogUpdate->summary     = $request->summary;
       $blogUpdate->description    = $request->description;
       if($request->file('image')){
         $file = $request->file('image');
          @unlink(public_path('assets/backend/images/blogs/'.$blogUpdate->image));
          $fileName = date('YmdHi'). $file->getClientOriginalName();
          $file->move(public_path('assets/backend/images/blogs'), $fileName);
          $blogUpdate['image'] = $fileName;
       }
       $blogUpdate->save();
       Alert::success('Update Block', 'See The Blocks');
       // Redirect
       return redirect()->route('blog.view')->with('success', 'Blog Updated Successfully');
    }
    //---- users Delete ----//
    public function delete($id){
        $blogDelete = Blogs::find($id);
        if (file_exists('public/assets/backend/images/blogs/'. $blogDelete->image) AND ! empty($blogDelete->image)){
        unlink('public/assets/backend/images/blogs/'. $blogDelete->image);
        }
        $blogDelete->delete();
        return redirect()->route('blog.view');
    }
}
