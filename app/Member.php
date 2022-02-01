<?php

namespace App;
use App\Department;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    protected $fillable = ['image', 'first_name', 'last_name','position', 'address', 'birthdate', 'religion', "educational_attainment", "course", "others","is_approved","department_id", "user_id", "remarks"];
    protected $table = "members";


    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
