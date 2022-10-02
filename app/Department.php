<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;
use App\Announcement;
use App\Member;
use App\LandingImage;
use App\DepartmentFunctionality;
use App\AgendaModel;

class Department extends Model
{
    use SoftDeletes;
    //
    protected $fillable = ['image', 'name', 'description',"is_approved","department", "user_id"];
    protected $dates = ['deleted_at'];
    protected $table = "departments";

    function toArray() {
        return [
            'image'        =>    $this->image,
            'name'        =>    $this->name,
            'description'        =>    $this->description,
            'is_approved'        =>    $this->is_approved,
            'department'        =>    $this->department,
            'user_id'        =>    $this->user_id,
        ];
    }
    public function agendas()
    {
        return $this->hasMany(AgendaModel::class)->where('is_approved', 2);
    }
    public function updates()
    {
        return $this->hasMany(Update::class)->where('is_approved', 2);
    }

    public function announcement()
    {
        return $this->hasMany(Announcement::class)->where('is_approved', 2);
    }

    public function member()
    {
        return $this->hasMany(Member::class)->where('is_approved', 2);
    }

    public function officeMandate()
    {
        return $this->hasMany(DepartmentFunctionality::class)->where('is_approved', 2);
    }

    public function landingImage()
    {
        return $this->hasMany(LandingImage::class)->where('is_approved', 2);
    }

    public function emergencyHotlines()
    {
        return $this->hasMany(EmergencyHotline::class)->where('is_approved', 2);
    }

    public function archiveDepartments()
    {
        return $this->hasMany(ArchiveDepartment::class)->where('is_approved', 2);
    }

    public function archives()
    {
        return $this->hasMany(Archive::class)->where('is_approved', 2);
    }

    public function barangayOfficials()
    {
        return $this->hasMany(BarangayOfficialModel::class)->where('is_approved', 2);
    }

    public function barangays()
    {
        return $this->hasMany(BarangayModel::class)->where('is_approved', 2);
    }

    public function contactNumberOffice()
    {
        return $this->hasMany(ContactNumberOffice::class)->where('is_approved', 2);
    }

    public function organizationalChart()
    {
        return $this->hasMany(OrganizationalChart::class)->where('is_approved', 2);
    }
}
