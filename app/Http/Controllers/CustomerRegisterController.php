<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\customer_profile;
use Hash;
Use Redirect;
use App\File;

class CustomerRegisterController extends Controller
{
    public function form()
    {
        return view('customer.register');
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $in = new User;
        $in->name = $request->input('name');
        $in->email = $request->input('email');
		$in->password = Hash::make($request->input('password'));
		$in->save();

       
  

       $inp = new customer_profile;
       
       $inp->name = $request->input('name');
       $inp->customer_id = $in->id;
       $inp->dateOfBirth = $request->input('date');
       $inp->noTel = $request->input('noTel');
       if($request->hasFile('profile_pic'))
       {
           $fileNameWithExt = $request->file('profile_pic')->getClientOriginalName();
           $fileName = pathInfo($fileNameWithExt,PATHINFO_FILENAME);
           $extension = $request->file('profile_pic')->getClientOriginalExtension();
           $FileNameStore = $fileName.'_'.time().'.'.$extension;
           $path = $request->file('profile_pic')->storeAs('public/uploads', $FileNameStore);
         
           
      }else{
       $FileNameStore = "avatar.png";
      }
          
       $inp->profile_pic = $FileNameStore;
       $inp->save();
    
       return Redirect::to('home');
    }
}
