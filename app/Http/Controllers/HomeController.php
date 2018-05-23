<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\customer_profile;
use App\user;
use App\rider;
use App\Report;
use App\delivery_approval_2;
use Auth;




class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if(Auth() == guest){
        //     return redirect('home');
        // }
        
        $user_id=Auth::user()->id;
        $profile = DB::table('users')
                    ->join('customer_profiles','users.id','=','customer_profiles.customer_id')
                    ->select('users.*','customer_profiles.*')
                    ->where(['customer_profiles.customer_id'=>$user_id])
                    ->first();

                   

      
        $input = DB::table('delivery_approval_2s')
            ->join('delivery_details_2s','delivery_approval_2s.delivery_id','=','delivery_details_2s.delivery_id')
            ->join('riders','delivery_approval_2s.rider_id','=','riders.id')
            ->select('delivery_approval_2s.*','delivery_details_2s.*','riders.*')
            ->where(['delivery_details_2s.customer_id'=>$user_id])
            ->orderBy('delivery_approval_2s.created_at','DESC')
            ->paginate(1);
            
            
            
            return view('home',compact('input','profile'));
    }

    public function index1()
    {
        // if(Auth() == guest){
        //     return redirect('home');
        // }
        $user_id=Auth::user()->id;
        
        
        $profile = DB::table('riders')->where('id', '=', $user_id)
        
        ->get(); 


        
      
        $input = DB::table('delivery_approval_2s')
            ->join('delivery_details_2s','delivery_approval_2s.delivery_id','=','delivery_details_2s.delivery_id')
            ->join('riders','delivery_approval_2s.rider_id','=','riders.id')
            ->select('delivery_approval_2s.*','delivery_details_2s.*','riders.*')
            ->where(['riders.id'=>$user_id])
            ->orderBy('delivery_approval_2s.created_at','DESC')
            ->paginate(3);
            

            // return view('rider.home1',compact('input','profile'));
            return view('rider.test')->with(['input'=> $input,'profile'=>$profile]);
    }
    public function index2()
    {
        // if(Auth() == guest){
        //     return redirect('home');
        // }
        
        // $user_id=Auth::rider()->id;
        // $in = DB::table('reports')
                    // ->join('riders','riders.id','=','reports.riders_id')
                    // ->join('delivery_details_2s','delivery_details_2s.delivery_id','=','reports.delivery_id')
                    // ->select('reports.*','delivery_details_2s.*')
                    // ->where(['rider_profiles.rider_id'=>$user_id])
                    
        
                    $input= DB::table('reports')
                    ->join('riders','reports.rider_id','=','riders.id')
                    ->join('delivery_details_2s','delivery_details_2s.delivery_id','=','reports.delivery_id')
                    ->select('reports.*','delivery_details_2s.*','riders.*')
                    ->paginate(5);

                    
                    $reg= DB::table('rider_news')
                    ->select('rider_news.*')
                    ->first();

                    $feed= DB::table('feedback')
                    ->join('users','users.name','=','feedback.name')
                
                    ->select('feedback.*','users.*')
                    ->paginate(5);
        
       
        return view('admin.home2',compact('input','reg','feed'));
        
    }
}
