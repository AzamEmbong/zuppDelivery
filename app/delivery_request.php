<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class deliveryRequest extends Model
{
    protected $table='delivery_request';
    public $primaryKey='request_id';
}
