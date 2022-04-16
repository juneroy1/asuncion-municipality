<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    protected $fillable = ["name", "email", "message", "is_done", "is_read"];
    protected $table = "messages";
}
