<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Department;
class Update extends Model
{
    //
    protected $fillable = ['title', 'description', 'description_local', 'image', 'user_id', 'is_approved', "department_id"];
    protected $table = "updates";

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
