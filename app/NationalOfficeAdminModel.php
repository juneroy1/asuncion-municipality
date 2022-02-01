<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NationalOfficeAdminModel extends Model
{
    //
    protected $fillable = ['image', 'name', 'description',"is_approved","department", "user_id"];
    protected $table = "national_offices";
}
