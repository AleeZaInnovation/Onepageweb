<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    //---- users view ----//
    public function view(){
        
        $users = User::all();
        //dd($users->toArray());
    	
      return view('backend.usermanage.index', compact('users'));
    }
    //---- users Add ----//
    public function add(){
    	return view('backend.usermanage.add');
    }
    //---- users Store ----//
    public function store(Request $request){
        // Validation
        $request->validate([
          'usertype' => 'required',
          'name'     => 'required',
          'email'    => 'required|unique:users,email',
          'password' => 'required|min:5',
          'mobile'   => 'required'
        ]);

        //dd($request->all());

      //   if($request->file('image')){
      //    $file = $request->file('image');
      //    dd($file);
      //     $fileName = date('YmdHi'). $file->getClientOriginalName();
      //     $file->move(public_path('assets/backend/images'), $fileName);          
      //  }

       
 
       // insert data
        
       $data = new User;
       $data->usertype = $request->usertype;
       $data->name     = $request->name;
       $data->email    = $request->email;
       $data->password = Hash::make($request->password);
       $data->mobile   = $request->mobile;
       $data->designation   = $request->designation;
       $data->address  = $request->address;
       $data->gender = $request->gender;
       if($request->file('image')){
         $file = $request->file('image');
          $fileName = date('YmdHi'). $file->getClientOriginalName();
          $file->move(public_path('assets/backend/images'), $fileName);
       $data['image'] = $fileName;          
       }
       $data->save();
       Alert::success('Add User', 'See The Users');
       // Redirect 
      return redirect()->route('user.view');

    }
    //---- users Edit ----//
    public function edit($id){
    	$userEdit['edits'] = User::find($id);
    	return view('backend.usermanage.edit', $userEdit);
    }
    //---- users Update ----//
    public function update($id, Request $request){
         // Validation 
    	$request->validate([
          'usertype' => 'required',
          'name'     => 'required',
          'email'    => 'required',
          'mobile'   => 'required'
        ]);
        // update
        $userUpdate = User::find($id);
        // Image Check
       // Update 
       $userUpdate->usertype = $request->usertype;
       $userUpdate->name     = $request->name;
       $userUpdate->email    = $request->email;
       $userUpdate->mobile   = $request->mobile;
       $userUpdate->designation = $request->designation;
       $userUpdate->address  = $request->address;
       $userUpdate->gender  = $request->gender;
       if($request->file('image')){
         $file = $request->file('image');
          @unlink(public_path('assets/backend/images/'.$userUpdate->image));
          $fileName = date('YmdHi'). $file->getClientOriginalName();
          $file->move(public_path('assets/backend/images'), $fileName);
          $userUpdate['image'] = $fileName;
       }
       $userUpdate->save();
       Alert::success('Update User', 'See The Users');
       // Redirect
       return redirect()->route('user.view');
    }
    //---- users Delete ----//
    public function delete($id){
        $userDelete = User::find($id);
        if (file_exists('public/assets/backend/images/'. $userDelete->image) AND ! empty($userDelete->image)){
        unlink('public/assets/backend/images/'. $userDelete->image);
        }
        $userDelete->delete();
        return redirect()->route('user.view');
    }
}
