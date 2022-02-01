<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepartmentAdminModel extends Model
{
    //

    protected $fillable = ['name', 'd_head_name', 'image_wmask', 'image_womask', 'description', 'image', 'user_id','is_approved', 'department_name', "remarks"];
    protected $table = "departments";
    
}
