<?php

namespace App\Http\Controllers;
use App\Update;
use App\Member;
use App\DepartmentFunctionality;
use App\Announcement;
use App\LandingImage;
use App\EmergencyHotline;
use App\OfficialsAdmin;
use App\BarangayOfficialModel;
use App\BarangayModel;
use App\ContactNumberOffice;
use App\OrganizationalChart;
use App\ArchiveDepartment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OfficesController extends Controller
{
    //

    public function list()
    {
        return view('offices.seeAllOffices');
    }

    public function goToOffice($name)
    {

        $updates = Update::where('department', '=', $name)
        ->where('is_approved', '=', 1)->get();
        $members = Member::where('department', '=', $name)->where('is_approved', '=', 1)->get();
        $functionality = DepartmentFunctionality::where('department', '=', $name)->where('is_approved', '=', 1)->first();
        $contactNumberOffices = ContactNumberOffice::where('department', '=', $name)->where('is_approved', '=', 1)->get();
        $organizationalChart = OrganizationalChart::where('department', '=', $name)->where('is_approved', '=', 1)->first();
        // get first functionality
        
        // get all announcement per department
        $announcements = Announcement::where('department', '=', $name)->where('is_approved', '=', 1)->get();

        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        //
       
            $archives = ArchiveDepartment::all();
       

        // return view('archive', ['archives'=> $archives,'department' => $department]);

        return view('offices.'.$name.'.'.$name, [
            'updates'=>$updates,
            'members'=> $members,
            'functionality'=> $functionality,
            'announcements'=>$announcements,
            'contactNumberOffices'=>$contactNumberOffices,
            'organizationalChart' => $organizationalChart,
            'archives' => $archives
        ]);
    }

    public function goToOfficeSearch(Request $request, $name)
    {

        $updates = Update::where('department', '=', $name)
        ->where('is_approved', '=', 1)->get();
        $members = Member::where('department', '=', $name)->where('is_approved', '=', 1)->get();
        $functionality = DepartmentFunctionality::where('department', '=', $name)->where('is_approved', '=', 1)->first();
        $contactNumberOffices = ContactNumberOffice::where('department', '=', $name)->where('is_approved', '=', 1)->get();
        $organizationalChart = OrganizationalChart::where('department', '=', $name)->where('is_approved', '=', 1)->first();
        // get first functionality
        
        // get all announcement per department
        $announcements = Announcement::where('department', '=', $name)->where('is_approved', '=', 1)->get();

        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        //
       
        if ($request->search) {
            $search =  $request->search;
             $archives = DB::table('archive_departments')->orWhere('title', 'LIKE', "%$search%")->orWhere('description', 'LIKE', "%$search%")->get();
             // print_r($archives);die;
         }else{
             $archives = ArchiveDepartment::all();
         }
       

        // return view('archive', ['archives'=> $archives,'department' => $department]);

        return view('offices.'.$name.'.'.$name, [
            'updates'=>$updates,
            'members'=> $members,
            'functionality'=> $functionality,
            'announcements'=>$announcements,
            'contactNumberOffices'=>$contactNumberOffices,
            'organizationalChart' => $organizationalChart,
            'archives' => $archives
        ]);
    }

    public function seeProjects(){
        $updates = Update::where('is_approved', '=', 1)->orderBy('created_at', 'DESC')->get();
        return view('projects.seeAllProjects', ['updates'=> $updates]);
    }

    public function welcome(){
        $latestUpdate = Update::where('is_approved', '=', 1)->orderBy('created_at', 'DESC')->limit('2')->get();
        $updates = Update::where('is_approved', '=', 1)->orderBy('created_at', 'DESC')->limit('10')->get();
        $landingImage = LandingImage::where('is_approved', '=', 1)->orderBy('created_at', 'DESC')->get();
        $emergencyHotlines = EmergencyHotline::where('is_approved', '=', 1)->orderBy('created_at', 'ASC')->get();
        $officials = OfficialsAdmin::where('is_approved', '=', 1)->orderBy('created_at', 'ASC')->get();
        $barangay_officials = BarangayOfficialModel::where('is_approved', '=', 1)->orderBy('created_at', 'ASC')->get();
        $barangays = BarangayModel::where('is_approved', '=', 1)->orderBy('created_at', 'ASC')->get();
        return view('welcome', [
            'updates'=> $updates,
            'latestUpdate'=> $latestUpdate, 
            'landingImage' => $landingImage,
            'emergencyHotlines'=> $emergencyHotlines,
            'officials'=> $officials,
            'barangay_officials'=> $barangay_officials,
            'barangays'=> $barangays,
        ]);
    }
}
