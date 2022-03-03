<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Department;
use App\User;
class Personnel extends Model
{
    //
    protected $fillable = ['image', 'title', 'description',"is_approved","department_id", "user_id", "remarks"];
    protected $table = "personnels";


    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
