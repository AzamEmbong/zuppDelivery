<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Route;
use DB;
use Hash;
use App\rider;
use App\rider_profile;
use App\rider_new;
Use Redirect;
use App\terminateRider;
use App\rider_full;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
     
       
        $input= DB::table('reports')
                    ->join('riders','reports.rider_id','=','riders.id')
                    ->join('delivery_details_2s','delivery_details_2s.delivery_id','=','reports.delivery_id')
                    ->select('reports.*','delivery_details_2s.*','riders.*')
                    ->paginate(5);
        
       
                    $reg= DB::table('rider_news')
                    ->select('rider_news.*')
                    ->get();

         $feed= DB::table('feedback')
                    ->join('users','users.id','=','feedback.customer_id')
                
                    ->select('feedback.*','users.*')
                    ->paginate(5);
        
       
        return view('admin.home2',compact('input','reg','feed'));
    }

    public function approveReg($id,Request $request)
    {
        $rider = rider_new::find($id);

       
        $in = new rider;
        // $in->id = $id->id;
        $in->name = $rider->name;
        $in->email = $rider->email;
        $in->password = $rider->password;
        $in->noTel = $rider->noTel;
        $in->IC = $rider->IC;
        $in->zipcode = $rider->zipcode;
        $in->license = $rider->license;
        $in->ICFile = $rider->ICFile;
        $in->profile_pic = $rider->profile_pic;
        $in->vehicle = $rider->vehicle;
        $in->plateNo = $rider->plateNo;
        $in->save();
        rider_new::find($id)->delete();
       return Redirect::to('admin');
    }
    public function list()

	{

             $rider = rider::all();
            
			 return view('admin.riderList',compact('rider'));
 
    }
    public function terminate($id)
    {
        $rider = rider::find($id);
       
       
        $in = new terminateRider;
        // $in->id = $id->id;
        $in->name = $rider->name;
        $in->email = $rider->email;
        $in->password = $rider->password;
        $in->noTel = $rider->noTel;
        $in->IC = $rider->IC;
        $in->zipcode = $rider->zipcode;
        $in->license = $rider->license;
        $in->ICFile = $rider->ICFile;
        $in->profile_pic = $rider->profile_pic;
        $in->vehicle = $rider->vehicle;
        $in->plateNo = $rider->plateNo;
        $in->save();

        rider::find($id)->delete();

        
       return Redirect::to('/list');
    }



    

 
}