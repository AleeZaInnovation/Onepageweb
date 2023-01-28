<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SocialMedia;
use RealRashid\SweetAlert\Facades\Alert;

class SocialMediaController extends Controller
{
    //---- users view ----//
    public function view(){
        
        $data = SocialMedia::all();
        //dd($data->toArray());
    	
      return view('backend.social_media.index', compact('data'));
    }
    //---- users Add ----//
    public function add(){
    	return view('backend.social_media.add');
    }
    //---- users Store ----//
    public function store(Request $request){
        // Validation  
 
       // insert data
        
       $data = new SocialMedia;
       $data->title = $request->title;
       $data->link     = $request->link;
       $data->save();
       Alert::success('Add Social Media', 'See The Social Media');

       // Redirect 
      return redirect()->route('social.media.view');

    }
    //---- users Edit ----//
    public function edit($id){
    	$blogEdit['edits'] = SocialMedia::find($id);
    	return view('backend.social_media.edit', $blogEdit);
    }
    //---- users Update ----//
    public function update($id, Request $request){
         // Validation 
        // update
        $data = SocialMedia::find($id);
        // Image Check
       // Update 
       $data->title = $request->title;
       $data->link     = $request->link;
       $data->save();
       Alert::success('Update Social Media', 'See The Social Media');
       // Redirect
       return redirect()->route('social.media.view')->with('success', 'Blog Updated Successfully');
    }
    //---- users Delete ----//
    public function delete($id){
        $blogDelete = SocialMedia::find($id);
        $blogDelete->delete();
        return redirect()->route('social.media.view');
    }
}

