<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangayOfficialModel extends Model
{
    //
    protected $fillable = ['image', 'first_name', 'last_name','position', 'address', 'birthdate', 'religion', "educational_attainment", "course", "others","is_approved","department_id", "user_id", "remarks"];
    protected $table = "barangay_officials";
}
