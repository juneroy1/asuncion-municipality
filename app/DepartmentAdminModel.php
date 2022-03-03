<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Department;
class DepartmentAdminModel extends Model
{
    //

    protected $fillable = ['name', 'd_head_name', 'image_wmask', 'image_womask', 'description', 'image', 'user_id','is_approved', 'department_name', "remarks", "department_id"];
    protected $table = "departments";

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }
    
}
