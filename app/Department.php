<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Announcement;
use App\Member;
use App\LandingImage;
use App\DepartmentFunctionality;

class Department extends Model
{
    //
    protected $fillable = ['image', 'name', 'description',"is_approved","department", "user_id"];
    protected $table = "departments";


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
