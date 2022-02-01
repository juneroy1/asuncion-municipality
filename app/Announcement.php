<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    //
    protected $fillable = ['title', 'description', 'image', 'is_approved', 'user_id', 'department_id'];
    protected $table = "announcements";

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
