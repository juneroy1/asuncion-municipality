<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmergencyHotline extends Model
{
    //
        //
        protected $fillable = ['name', 'number', 'network',"is_approved","department_id", "user_id"];
        protected $table = "emergency_hotline";
}
