<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Route;
use DB;
use App\rider;
use App\delivery_details;

class RiderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:rider');
    }
    /**
     * show dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $approval = Delivery_details::orderBy('created_at', 'asc')
        ->get();
    
        $user_id=Auth::user()->id;
        
        
        $profile = DB::table('riders')->where('id', '=', $user_id)
        
        ->first();
      
        $input = DB::table('delivery_approval_2s')
            ->join('delivery_details_2s','delivery_approval_2s.delivery_id','=','delivery_details_2s.delivery_id')
            ->join('riders','delivery_approval_2s.rider_id','=','riders.id')
            ->select('delivery_approval_2s.*','delivery_details_2s.*','riders.*')
            ->where(['riders.id'=>$user_id])
            ->orderBy('delivery_approval_2s.created_at','DESC')
            ->paginate(3);
            

            return view('rider.home1',['input'=>$input,'profile'=>$profile,'approval'=>$approval]);
       
    }
}