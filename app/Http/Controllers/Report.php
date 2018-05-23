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
use App\User;
use App\feedback;
use Redirect;


class Report extends Controller
{
    public function submission()
    {
        $user_id=Auth::user()->id;
        
        
        $user = DB::table('users')->where('id', '=', $user_id)
        
        ->get(); 
    
        return view ('customer.report',(['user'=>$user]));
    }
    public function submit(Request $request)
    {
       
        
        
       $in = new feedback;
       $in->customer_id =Auth::user()->id;
       $in->report=$request->input('report');
       $in->save();
       session()->flash('notif',' Your report has been submitted');
        return Redirect::to('/report');
    }
}