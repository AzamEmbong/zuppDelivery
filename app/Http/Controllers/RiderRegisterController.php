<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
Use Redirect;
use App\File;
use Illuminate\Support\Facades\URL;
use App\rider_new;
use App\rider_full;
use Hash;


use Auth;

class RiderRegisterController extends Controller
{
    public function addRider(Request $request)
    {
        $in = new rider_new;
        $in->name = $request->input('name');
        $in->email = $request->input('email');
        $in->password = Hash::make($request->input('password'));
        $in->noTel = $request->input('noTel');
        $in->IC = $request->input('IC');
        $in->zipcode = $request->input('zipcode');
        $in->vehicle = $request->input('vehicle');
        $in->plateNo = $request->input('plateNo');

            if($request->hasFile('license'))
        {
            $fileNameWithExt = $request->file('license')->getClientOriginalName();
            $fileName = pathInfo($fileNameWithExt,PATHINFO_FILENAME);
            $extension = $request->file('license')->getClientOriginalExtension();
            $FileNameStore = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('license')->storeAs('public/licenses', $FileNameStore);
        }
        if($request->hasFile('ICFile')){
        
            $fileNameWithExt1 = $request->file('ICFile')->getClientOriginalName();
            $fileName1 = pathInfo($fileNameWithExt1,PATHINFO_FILENAME);
            $extension1 = $request->file('ICFile')->getClientOriginalExtension();
            $FileNameStore1 = $fileName1.'_'.time().'.'.$extension1;
            $path1 = $request->file('ICFile')->storeAs('public/IC', $FileNameStore1);
            
       }
       if($request->hasFile('profile_pic')){
        
        $fileNameWithExt2 = $request->file('profile_pic')->getClientOriginalName();
        $fileName2 = pathInfo($fileNameWithExt2,PATHINFO_FILENAME);
        $extension2 = $request->file('profile_pic')->getClientOriginalExtension();
        $FileNameStore2 = $fileName2.'_'.time().'.'.$extension2;
        $path2 = $request->file('profile_pic')->storeAs('public/uploads', $FileNameStore2);
        
   }
       $in->license = $FileNameStore;
       $in->ICFile = $FileNameStore1;
       $in->profile_pic = $FileNameStore2;
       $in->save();
       

       $inp = new rider_full;
        $inp->name = $request->input('name');
        $inp->email = $request->input('email');
        $inp->password = Hash::make($request->input('password'));
        $inp->noTel = $request->input('noTel');
        $inp->IC = $request->input('IC');
        $inp->zipcode = $request->input('zipcode');
        $inp->vehicle = $request->input('vehicle');
        $inp->plateNo = $request->input('plateNo');

            if($request->hasFile('license'))
        {
            $fileNameWithExt = $request->file('license')->getClientOriginalName();
            $fileName = pathInfo($fileNameWithExt,PATHINFO_FILENAME);
            $extension = $request->file('license')->getClientOriginalExtension();
            $FileNameStore = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('license')->storeAs('public/licenses', $FileNameStore);
        }
        if($request->hasFile('ICFile')){
        
            $fileNameWithExt1 = $request->file('ICFile')->getClientOriginalName();
            $fileName1 = pathInfo($fileNameWithExt1,PATHINFO_FILENAME);
            $extension1 = $request->file('ICFile')->getClientOriginalExtension();
            $FileNameStore1 = $fileName1.'_'.time().'.'.$extension1;
            $path1 = $request->file('ICFile')->storeAs('public/IC', $FileNameStore1);
            
       }
       if($request->hasFile('profile_pic')){
        
        $fileNameWithExt2 = $request->file('profile_pic')->getClientOriginalName();
        $fileName2 = pathInfo($fileNameWithExt2,PATHINFO_FILENAME);
        $extension2 = $request->file('profile_pic')->getClientOriginalExtension();
        $FileNameStore2 = $fileName2.'_'.time().'.'.$extension2;
        $path2 = $request->file('profile_pic')->storeAs('public/uploads', $FileNameStore2);
        
   }
       $inp->license = $FileNameStore;
       $inp->ICFile = $FileNameStore1;
       $inp->profile_pic = $FileNameStore2;
       $inp->save();
       session()->flash('notif',' Wait for your Account Approval!');
       return Redirect::to('/');
}
       public function register()
       {
           return view('rider.register-rider');
       }
   

}
