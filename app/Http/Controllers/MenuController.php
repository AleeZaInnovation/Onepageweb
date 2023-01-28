<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use RealRashid\SweetAlert\Facades\Alert;

class MenuController extends Controller
{
    //---- users view ----//
    public function view(){
        
        $data = Menu::all();
        //dd($data->toArray());
    	
      return view('backend.menu.index', compact('data'));
    }
    //---- users Add ----//
    public function add(){
    	return view('backend.menu.add');
    }
    //---- users Store ----//
    public function store(Request $request){
        // Validation  
 
       // insert data
        
       $data = new Menu;
       $data->title = $request->title;
       $data->save();
       Alert::success('Add Menu', 'See The Menu');

       // Redirect 
      return redirect()->route('menu.view');

    }
    //---- users Edit ----//
    public function edit($id){
    	$blogEdit['edits'] = Menu::find($id);
    	return view('backend.menu.edit', $blogEdit);
    }
    //---- users Update ----//
    public function update($id, Request $request){
         // Validation 
        // update
        $data = Menu::find($id);
        // Image Check
       // Update 
       $data->title = $request->title;
       $data->save();
       Alert::success('Update Menu', 'See The Menu');
       // Redirect
       return redirect()->route('menu.view')->with('success', 'Blog Updated Successfully');
    }
    //---- users Delete ----//
    public function delete($id){
        $blogDelete = Menu::find($id);
        if (file_exists('public/assets/backend/images/blogs/'. $blogDelete->image) AND ! empty($blogDelete->image)){
        unlink('public/assets/backend/images/blogs/'. $blogDelete->image);
        }
        $blogDelete->delete();
        return redirect()->route('menu.view');
    }
}
