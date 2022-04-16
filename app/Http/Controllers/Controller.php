<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Update;
use App\Announcement;
use App\Archive;
use App\ArchiveDepartment;
use App\BarangayModel;
use App\BarangayOfficialModel;
use App\ContactNumberOffice;
use App\Councilors;
use App\Department;
use App\DepartmentAdminModel;
use App\DepartmentFunctionality;
use App\EmergencyHotline;
use App\LandingImage;
use App\Member;
use App\OfficialsAdmin;
use App\OrganizationalChart;
use App\Personnel;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function updateTotal(){
        $updateTotal = Update::where('is_approved', '=', '2')->count();

        return $updateTotal;
    }

    public function announcementTotal(){
        $announcementTotal = Announcement::where('is_approved', '=', '2')->count();

        return $announcementTotal;
    }

    public function archiveTotal(){
        $archiveTotal = Archive::where('is_approved', '=', '2')->count();

        return $archiveTotal;
    }

    public function archiveDepartmentTotal(){
        $archiveDepartmentTotal = ArchiveDepartment::where('is_approved', '=', '2')->count();
        return $archiveDepartmentTotal;
    }
    public function barangayModelTotal(){
        $barangayModelTotal = BarangayModel::where('is_approved', '=', '2')->count();
        return $barangayModelTotal;
    }

    public function barangayOfficialModelTotal(){
        $barangayOfficialModelTotal = BarangayOfficialModel::where('is_approved', '=', '2')->count();
        return $barangayOfficialModelTotal;
    }

    public function contactNumberOfficeTotal(){
        $contactNumberOfficeTotal = ContactNumberOffice::where('is_approved', '=', '2')->count();
        return $contactNumberOfficeTotal;
    }

    public function councilorsTotal(){
        $councilorsTotal = Councilors::where('is_approved', '=', '2')->count();
        return $councilorsTotal;
    }

    public function departmentTotal(){
        $departmentTotal = Department::where('is_approved', '=', '2')->count();
        return $departmentTotal;
    }

    public function departmentAdminModelTotal(){
        $departmentAdminModelTotal = DepartmentAdminModel::where('is_approved', '=', '2')->count();
        return $departmentAdminModelTotal;
    }

    public function departmentFunctionalityTotal(){
        $departmentFunctionalityTotal = DepartmentFunctionality::where('is_approved', '=', '2')->count();
        return $departmentFunctionalityTotal;
    }

    public function emergencyHotlineTotal(){
        $emergencyHotlineTotal = EmergencyHotline::where('is_approved', '=', '2')->count();
        return $emergencyHotlineTotal;
    }

    public function landingImageTotal(){
        $landingImageTotal = LandingImage::where('is_approved', '=', '2')->count();
        return $landingImageTotal;
    }

    public function memberTotal(){
        $memberTotal = Member::where('is_approved', '=', '2')->count();
        return $memberTotal;
    }

    public function personnelTotal(){
        $memberTotal = Personnel::where('is_approved', '=', '2')->count();
        return $memberTotal;
    }

    public function officialsAdminTotal(){
        $officialsAdminTotal = OfficialsAdmin::where('is_approved', '=', '2')->count();
        return $officialsAdminTotal;
    }

    public function organizationalChartTotal(){
        $oganizationalChartTotal = OrganizationalChart::where('is_approved', '=', '2')->count();
        return $oganizationalChartTotal;
    }
}
