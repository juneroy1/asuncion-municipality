<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    //
    protected $fillable = ['title', 'description', 'image', 'is_approved', 'user_id', 'department'];
    protected $table = "announcements";
}
