<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery_details extends Model
{
    protected $table='delivery_details';
    public $primaryKey='delivery_id';
    public $timestamps = true;
}
