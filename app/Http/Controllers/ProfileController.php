<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    public function view(){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('backend.profile.view-profile', compact('user'));
    }

    public function edit(){
        $id = Auth::user()->id;
        $edits = User::find($id);
        return view('backend.profile.edit-profile', compact('edits'));
    }

    public function update(Request $request){
         // Validation 
        $request->validate([
          'name'     => 'required',
          'email'    => 'required',
          'mobile'   => 'required'
        ]);
        // update
        $userUpdate = User::find(Auth::user()->id);
        // Image Check
       // Update 
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
       Alert::success('Update Profile', 'See The Profile');       
       // Redirect
       return redirect()->route('profile.view');
    }

    public function passwordView(){

        //dd('ok');
      return view('backend.profile.passwordChange');
    }
    //---- users Password Update ----//
    public function passwordUpdate(Request $request){
          if(Auth::attempt(['id'=>Auth::user()->id, 'password'=>$request->current_password])){
            // validation
            $validation = $request->validate([
              'password' => 'required|confirmed'
            ]);
            // Change Password
            $user = User::find(Auth::user()->id);
            $user->update([
              'password' => Hash::make($request->password)
            ]);
            // Redirect
            Alert::success('Update Password', 'Now you are safe'); 
            return redirect()->route('profile.view');
          } else{
            Alert::warning('Your Current Password Does Not Match', 'Please insert current password');
            return redirect()->back();
          }
    }
}
