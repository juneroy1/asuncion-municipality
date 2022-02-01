<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrganizationalChart extends Model
{
    //
    protected $fillable = ['image', 'name', 'description', "is_approved","department_id", "user_id"];
    protected $table = "organization_chart";
}
