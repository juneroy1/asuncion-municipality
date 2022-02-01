<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LandingImage extends Model
{
    //
    protected $fillable = ['image', 'title', 'subtitle',"is_approved","department_id", "user_id"];
    protected $table = "landing_images";
}
