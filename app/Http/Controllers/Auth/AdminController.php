<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Route;
use DB;


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
        
       
        return view('admin.home2',[ 'input'=>$input]);
    }

    

 
}