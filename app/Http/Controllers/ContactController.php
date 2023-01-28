<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    //---- users view ----//
    public function view(){
        
        $data = Contact::all();
        //dd($data->toArray());
    	
      return view('backend.contact.index', compact('data'));
    }
    //---- users Add ----//
    public function add(){
    	return view('backend.contact.add');
    }
    //---- users Store ----//
    public function store(Request $request){
        // Validation  
 
       // insert data
        
       $data = new Banner;
       $data->mobile = $request->mobile;
       $data->email     = $request->email;
       $data->address     = $request->address;
       $data->save();
       Alert::success('Add Contact', 'See The Contact');

       // Redirect 
      return redirect()->route('contact.view');

    }
    //---- users Edit ----//
    public function edit($id){
    	$blogEdit['edits'] = Contact::find($id);
    	return view('backend.contact.edit', $blogEdit);
    }
    //---- users Update ----//
    public function update($id, Request $request){
         // Validation 
        // update
        $data = Contact::find($id);
        // Image Check
       // Update 
       $data->mobile = $request->mobile;
       $data->email     = $request->email;
       $data->address     = $request->address;
       $data->save();
       Alert::success('Update Contact', 'See The Contact');
       // Redirect
       return redirect()->route('contact.view')->with('success', 'Blog Updated Successfully');
    }
    //---- users Delete ----//
    public function delete($id){
        $blogDelete = Contact::find($id);
        if (file_exists('public/assets/backend/images/blogs/'. $blogDelete->image) AND ! empty($blogDelete->image)){
        unlink('public/assets/backend/images/blogs/'. $blogDelete->image);
        }
        $blogDelete->delete();
        return redirect()->route('contact.view');
    }
}
