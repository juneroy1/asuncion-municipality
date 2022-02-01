<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactNumberOffice extends Model
{
    //
    protected $fillable = ['number',"is_approved","department_id", "user_id"];
    protected $table = "contact_number_office";
}
