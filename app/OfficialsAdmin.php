<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfficialsAdmin extends Model
{
    //
    // protected $fillable = ['image', 'first_name', 'last_name','position',"is_approved","department", "user_id"];
    protected $fillable = ['image', 'first_name', 'last_name','position', 'address', 'birthdate', 'religion', "educational_attainment", "course", "others","is_approved","department_id", "term_of_service", "user_id", "remarks"];
    protected $table = "officials";
}
