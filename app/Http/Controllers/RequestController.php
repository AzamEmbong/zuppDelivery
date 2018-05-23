<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use App\deliveryRequest;
use App\Delivery_details;
use App\delivery_details_2;
use App\index_quote;
use Auth;

class RequestController extends Controller
{

    public function store(Request $request)
    {
		// $this->validate($request, [
        //     'pickuplocation' => 'required|regex:/\b\d{5}\b/',
        //     'droplocation' => 'required|regex:/\b\d{5}\b/'
        // ]);
		$inputLoc = $request->input('pickupLocation');
		$dropLocation = $request->input('dropLocation');
		$item = $request->input('deliveryItemType');
		$size = $request->input('deliveryWeight');

		switch ($size) {
			case 0:
			$price = "RM 1";
				break;
			case 1:
			$price = "RM 2";
				break;
			case 2:
			$price = "RM 3";
				break;
			case 3:
			$price = "RM 4";
				break;
			case 4:
			$price = "RM 5";
				break;
			case 5:
			$price = "RM 6";
				break;
			default: 
			$price = "RM 7";

		}
		return view('customer.quoteDetails')->with(['inputLoc'=> $inputLoc, 'dropLocation' => $dropLocation,
		'item' => $item, 'size' => $size, 'price' => $price ]);
		
	}
	
	public function storeIndex(Request $request)
    {
		// $quote = new index_quote;

        // $quote->pickupLocation = $request->input('pickupLocation');
        // $quote->dropLocation = $request->input('dropLocation');
		// $quote->item = $request->input('deliveryItemType');
		// $quote->size = $request->input('deliveryWeight');
		// $quote->save();

		// $quote = index_quote::all();
		// return view('customer.quoteDetails')->with(['quote'=> $quote]);
		// $this->validate($request, [
        //     'pickuplocation' => 'required|regex:/\b\d{5}\b/',
        //     'droplocation' => 'required|regex:/\b\d{5}\b/'
        // ]);
		$inputLoc = $request->input('pickupLocation');
		$dropLocation = $request->input('dropLocation');
		$item = $request->input('deliveryItemType');
		$size = $request->input('deliveryWeight');

		switch ($size) {
			case 0:
			$price = "RM 1";
				break;
			case 1:
			$price = "RM 2";
				break;
			case 2:
			$price = "RM 3";
				break;
			case 3:
			$price = "RM 4";
				break;
			case 4:
			$price = "RM 5";
				break;
			case 5:
			$price = "RM 6";
				break;
			default: 
			$price = "RM 7";

		}
		return view('indexQuote')->with(['inputLoc'=> $inputLoc, 'dropLocation' => $dropLocation,
		'item' => $item, 'size' => $size, 'price' => $price ]);

		
	}
	
	public function storeDetails(Request $request)
    {
		$in = new Delivery_details;
        $in->customer_id = Auth::user()->id;
        $in->senderName = $request->input('sName');
        $in->senderAddress = $request->input('sAddress');
		$in->senderEmail = $request->input('sEmail');
		$in->senderNoTel = $request->input('sNoTel');
		$in->receiverName = $request->input('rName');
        $in->receiverAddress = $request->input('rAddress');
		$in->receiverEmail = $request->input('rEmail');
		$in->receiverNoTel = $request->input('rNoTel');
		$in->itemType = $request->input('iType');
		$in->itemSize = $request->input('iSize');
		$in->itemNote = $request->input('iNote');
		$in->save();

		$in = new delivery_details_2;
        $in->customer_id = Auth::user()->id;
        $in->senderName = $request->input('sName');
        $in->senderAddress = $request->input('sAddress');
		$in->senderEmail = $request->input('sEmail');
		$in->senderNoTel = $request->input('sNoTel');
		$in->receiverName = $request->input('rName');
        $in->receiverAddress = $request->input('rAddress');
		$in->receiverEmail = $request->input('rEmail');
		$in->receiverNoTel = $request->input('rNoTel');
		$in->itemType = $request->input('iType');
		$in->itemSize = $request->input('iSize');
		$in->itemNote = $request->input('iNote');
		$in->save();

		// session()->flash('notif',' Wait for your Rider!');
		$deliveryDetails = Delivery_details::all()->last();
            return view('customer.deliverySummary')->with(['deliveryDetails'=> $deliveryDetails]);
       

	}

	public function viewQuote()

	{

			 $quote = deliveryRequest::all();
			 return view('customer.quoteDetails')->with(['quote'=> $quote]);
 
	}

}
