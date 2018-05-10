<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Delivery_details;
use App\report;
use Auth;
use DB;

class PagesController extends Controller
{
    public function index()
    {

        if(\Auth::check() && \Auth::guard() ) {
           
                return redirect()->route('home');
            }
           
            return view('index');
        }
        
        
       
   
    
    public function summary()
    {
        $deliveryDetails = Delivery_details::all()->last();
            return view('customer.deliverySummary')->with(['deliveryDetails'=> $deliveryDetails]);
    }
    public function submit()
    {
        $user_id=Auth::user()->id;
        $profile = DB::table('users')
                    ->join('customer_profiles','users.id','=','customer_profiles.customer_id')
                    ->select('users.*','customer_profiles.*')
                    ->where(['customer_profiles.customer_id'=>$user_id])
                    ->first();
       
       
        
    
        session()->flash('notif',' Your delivery request has been registered.');
        return view('home',['profile'=>$profile]);
    }

    public function makeReport(Request $request)
    {
        $in = new report;
        $in->delivery_id = $request->get('delivery_id');
        $in->rider_id = $request->get('rider_id');
        $in->report = $request->get('report');
        $in->save();

        session()->flash('notif',' Report has been submitted');

        return redirect()->route('home');
    }


    public function read($report_id)
    {
        
        $in = DB::table('reports')
                    ->join('riders','reports.rider_id','=','riders.id')
                    ->join('delivery_details_2s','delivery_details_2s.delivery_id','=','reports.delivery_id')
                    ->select('reports.*','delivery_details_2s.*','riders.*')
                    ->where(['reports.report_id'=>$report_id])
                    ->first();
        // return view('admin.readReport',['in'=>$in]);
        return view('admin.readReport',compact('in'));
    }

}
