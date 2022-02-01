<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArchiveDepartment extends Model
{
    //
    protected $fillable = ['title', 'description', 'file', 'is_approved', 'user_id', 'department_id'];
    protected $table = "archive_departments";
}
