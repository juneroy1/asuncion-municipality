<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangayModel extends Model
{
    //
    protected $fillable = ['image', 'name',"is_approved","department_id", "user_id"];
    protected $table = "barangays";
}
