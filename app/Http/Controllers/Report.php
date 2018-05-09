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


class Report extends Controller
{
    public function submission()
    {
        return view ('customer.report');
    }
}