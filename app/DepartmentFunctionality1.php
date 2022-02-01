<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepartmentFunctionality extends Model
{
    //
    protected $fillable = ['description', 'department', 'user_id', 'is_approved'];
    protected $table = "department_functionalities";
}
