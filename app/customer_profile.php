<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class customer_profile extends Model
{
    protected $table='customer_profiles';
    public $primaryKey='profile_id';
    
    public function getAgeAttribute()
    {
        return Carbon::parse($this->attributes['dateOfBirth'])->age;
    }
}
