<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgendaModel extends Model
{
    //
    protected $fillable = ['title', 'description', 'file', 'is_approved', 'remarks', 'user_id', 'department_id', 'is_executive'];
    protected $table = "agendas";

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
