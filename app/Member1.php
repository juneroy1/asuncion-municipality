<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    protected $fillable = ['image', 'first_name', 'last_name','position', 'address', 'birthdate', 'religion', "educational_attainment", "course", "others","is_approved","department", "user_id"];
    protected $table = "members";
}
