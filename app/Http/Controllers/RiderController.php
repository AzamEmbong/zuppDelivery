<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Redirect;
use App\File;
use App\Delivery_details;
use App\delivery_details_2;
use Illuminate\Support\Facades\URL;
use App\customer_profile;
use App\user;
use App\delivery_approval;
use App\delivery_approval_2;
use Auth;


class RiderController extends Controller
{

    
    public function approval()
    {
        $approval = Delivery_details::orderBy('created_at', 'asc')
        
        ->get();
        return view('rider.approval')->with(['approval'=>$approval]);
    }


    public function confirmation($delivery_id)
    {
		$in = new delivery_approval;
        $in->rider_id = Auth::user()->id;
        $in->delivery_id = $delivery_id;
        $in->status = 1;
		$in->save();

        $input = new delivery_approval_2;
        $input->rider_id = Auth::user()->id;
        $input->delivery_id = $delivery_id;
        $input->status = 1;
		$input->save();
        Delivery_details::find($delivery_id)->delete();

        
        return redirect()->route('home1');
       

    }
    public function updateStatus($delivery_id)
    {
       
            $id = delivery_approval::find($delivery_id);
            DB::table('delivery_approvals')
            ->where(['delivery_id'=>$delivery_id])
            ->update(['status' => 1]);

            $id2 = delivery_approval_2::find($delivery_id);
            DB::table('delivery_approval_2s')
            ->where(['delivery_id'=>$delivery_id])
            ->update(['status' => 1]);


            return redirect()->route('home1');
        
        
    }
    public function updateStatus1($delivery_id)
    {
       
            $id = delivery_approval::find($delivery_id);
            DB::table('delivery_approvals')
            ->where(['delivery_id'=>$delivery_id])
            ->update(['status' => 2]);

            $id2 = delivery_approval_2::find($delivery_id);
            DB::table('delivery_approval_2s')
            ->where(['delivery_id'=>$delivery_id])
            ->update(['status' => 2]);

            return redirect()->route('home1');
        
        
    }

    public function updateStatus2($delivery_id)
    {
       
            $id = delivery_approval::find($delivery_id);
            DB::table('delivery_approvals')
            ->where(['delivery_id'=>$delivery_id])
            ->update(['status' => 3]);

            $id2 = delivery_approval_2::find($delivery_id);
            DB::table('delivery_approval_2s')
            ->where(['delivery_id'=>$delivery_id])
            ->update(['status' => 3]);

            return redirect()->route('home1');
        
        
    }
  
}