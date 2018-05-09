<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class delivery_approval extends Model
{
    protected $table='delivery_approvals';
    public $primaryKey='delivery_id';
    public $timestamps = true;
}
