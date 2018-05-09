<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\File;
use App\Delivery_details;
use Illuminate\Support\Facades\URL;
use App\customer_profile;
use Auth;


class CusProfileController extends Controller
{
    public function profile()
    {
        return view ('customer.profile');
    }

    public function deliveryDetails()
    {
        return view ('customer.deliveryDetails');
    }

    public function test()
    {
        return view ('customer.test');
    }

    public function addProfile(Request $request)
    {

        $profile = new customer_profile;
        $profile->customer_id = Auth::user()->id;
        $profile->name = $request->input('name');
        $profile->dateOfBirth = $request->input('dateOfBirth');
        $profile->noTel = $request->input('noTel');

       
        if($request->hasFile('profile_pic'))
        {
            $fileNameWithExt = $request->file('profile_pic')->getClientOriginalName();
            $fileName = pathInfo($fileNameWithExt,PATHINFO_FILENAME);
            $extension = $request->file('profile_pic')->getClientOriginalExtension();
            $FileNameStore = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('profile_pic')->storeAs('public/uploads', $FileNameStore);
          
            
       }else{
        $FileNameStore = "noting";
       }
           
        $profile->profile_pic = $FileNameStore;
        $profile->save();

        session()->flash('notif',' Success to save profile ');
        return view ('customer.profile');
    }

    public function printDetails()

    {
             
        $deliveryDetails = Delivery_details::all();
        
        return view('customer.printDeliveryDetails',['deliveryDetails'=> $deliveryDetails]);

   }

   public function viewPrint()

   {
    

            $deliveryDetails = Delivery_details::all()->last();
            return view('customer.DeliveryDetailsView')->with(['deliveryDetails'=> $deliveryDetails]);

   }

   public function toast()
   {
       $test = customer_profile::all();
        return view('customer.test');
   }
}


