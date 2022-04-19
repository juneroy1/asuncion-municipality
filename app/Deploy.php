<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deploy extends Model
{
    //
    protected $fillable = ['is_deploy', 'message', 'user_id'];
    protected $table = "deploy";
}
