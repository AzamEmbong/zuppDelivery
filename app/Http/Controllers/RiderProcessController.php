<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

use App\File;
use App\Delivery_details;
use App\delivery_details_2;
use Illuminate\Support\Facades\URL;
use App\customer_profile;
use App\user;
use App\delivery_approval;
use App\delivery_approval_2;
use Auth;
use App\rider;
use Redirect;


class RiderProcessController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:rider');
    }
    
    public function approval()
    {
       
       
        $approval = Delivery_details::orderBy('created_at', 'asc')
        ->get();
        return view('rider.approval')->with(['approval'=>$approval]);
    }


    public function confirmation($delivery_id)
    {
       
   

        $user_id = Auth::id();
		$in = new delivery_approval;
        $in->rider_id = $user_id;
        $in->delivery_id = $delivery_id;
        $in->status = 1;
		$in->save();

        $input = new delivery_approval_2;
        $input->rider_id = $user_id;
        $input->delivery_id = $delivery_id;
        $input->status = 1;
		$input->save();
        Delivery_details::find($delivery_id)->delete();

        
        return Redirect::to('/rider');
       
    
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


            return Redirect::to('/rider');
        
        
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

            return Redirect::to('/rider');
        
        
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

           
            return Redirect::to('/rider');
        
    }
    public function register()
    {
        return view('rider.register-rider');
    }

    public function edit($id)
    {
        $rider = rider::find($id);
        return view('rider.editProfile',['rider'=>$rider]);
    }
    public function update(Request $request,$id)
    {
        $in = rider::find($id);
        $in->name = $request->input('name');
        $in->noTel = $request->input('noTel');
       
      
        $in->vehicle = $request->input('vehicle');
        $in->plateNo = $request->input('plateNo');

           
       if($request->hasFile('profile_pic')){
        
        $fileNameWithExt2 = $request->file('profile_pic')->getClientOriginalName();
        $fileName2 = pathInfo($fileNameWithExt2,PATHINFO_FILENAME);
        $extension2 = $request->file('profile_pic')->getClientOriginalExtension();
        $FileNameStore2 = $fileName2.'_'.time().'.'.$extension2;
        $path2 = $request->file('profile_pic')->storeAs('public/uploads', $FileNameStore2);
        
   }
     
       $in->profile_pic = $FileNameStore2;
       $in->save();

       session()->flash('notif',' Your profile updated!');
       return Redirect::to('/rider');
    }
  
    
}