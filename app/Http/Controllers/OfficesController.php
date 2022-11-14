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
use App\DepartmentAdminModel;
use App\Personnel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\AgendaModel;
class OfficesController extends Controller
{
    //
    public function listLegislative(){
        $departments = DepartmentAdminModel::where('type_office', '2')->where('is_approved', '1')->whereNull('deleted_at')->get();
        return view('offices.seeAllOffices',[
            "departments"=> $departments,
            'updateTotal' => $this->updateTotal(),
            'archiveTotal' => $this->archiveTotal(),
            'announcementTotal' => $this->announcementTotal(),
            'memberTotal' => $this->memberTotal(),
            'personnelTotal' => $this->personnelTotal(),
            'departmentFunctionalityTotal' => $this->departmentFunctionalityTotal(),
            'landingImageTotal' => $this->landingImageTotal(),
            'emergencyHotlineTotal' => $this->emergencyHotlineTotal(),
            'archiveDepartmentTotal' => $this->archiveDepartmentTotal(),
            'barangayOfficialModelTotal' => $this->barangayOfficialModelTotal(),
            'barangayModelTotal' => $this->barangayModelTotal(),
            'contactNumberOfficeTotal' => $this->contactNumberOfficeTotal(),
            'organizationalChartTotal' => $this->organizationalChartTotal(),
            'legislativeBranchCountSuperAdmin' => $this->legislativeBranchCountSuperAdmin(),
                'executiveBranchCountSuperAdmin' => $this->executiveBranchCountSuperAdmin(),
            "title" => "THE LEGISLATIVE OFFICES"
        ]); 
    }
    public function list()
    {
        $departments = DepartmentAdminModel::where('type_office', '1')->where('is_approved', '1')->whereNull('deleted_at')->get();
        return view('offices.seeAllOffices',[
            "departments"=> $departments,
            'updateTotal' => $this->updateTotalNotApprove($department),
                'archiveTotal' => $this->archiveTotalNotApprove($department),
                'announcementTotal' => $this->announcementTotalNotApprove($department),
                'memberTotal' => $this->memberTotalNotApproved($department),
                'personnelTotal' => $this->personnelTotalNotApproved($department),
                'departmentFunctionalityTotal' => $this->departmentFunctionalityTotalNotApproved($department),
                'landingImageTotal' => $this->landingImageTotalNotApproved($department),
                'emergencyHotlineTotal' => $this->emergencyHotlineTotalNotApproved($department),
                'archiveDepartmentTotal' => $this->archiveDepartmentTotalNotApproved($department),
                'barangayOfficialModelTotal' => $this->barangayOfficialModelTotalNotApproved($department),
                'barangayModelTotal' => $this->barangayModelTotalNotApproved($department),
                'contactNumberOfficeTotal' => $this->contactNumberOfficeTotalNotApproved($department),
                'organizationalChartTotal' => $this->organizationalChartTotalNotApproved($department),
                'legislativeBranchCountSuperAdmin' => $this->legislativeBranchCountSuperAdmin(),
                'executiveBranchCountSuperAdmin' => $this->executiveBranchCountSuperAdmin(),
            "title" => "THE EXECUTIVE OFFICES"
        ]);
    }

    public function goToOffice($name, $id)
    {

        $updates = Update::where('department_id', '=', $id)
        ->where('is_approved', '=', 1)->get();
        $members = Member::where('department_id', '=', $id)->where('is_approved', '=', 1)->get();
        $functionality = DepartmentFunctionality::where('department_id', '=', $id)->where('is_approved', '=', 1)->first();
        $department = DepartmentAdminModel::where('id', '=', $id)->where('is_approved', '=', 1)->first();

        
        $contactNumberOffices = ContactNumberOffice::where('department_id', '=', $id)->where('is_approved', '=', 1)->get();
        $organizationalChart = OrganizationalChart::where('department_id', '=', $id)->where('is_approved', '=', 1)->get();
        $personnel = Personnel::where('department_id', '=', $id)->where('is_approved', '=', 1)->get();
        // get first functionality
        
        // get all announcement per department
        $announcements = Announcement::where('department_id', '=', $id)->where('is_approved', '=', 1)->get();

        $user = Auth::user();
        // $id = Auth::id();
        // $department = $user->department_admin_model_id;
        //
       
            $archives = ArchiveDepartment::where('department_id', '=', $id)->where('is_approved', '=', 1)->get();
       
        // dd($id);
        // return view('archive', ['archives'=> $archives,'department' => $department]);

        return view('offices.'.$name.'.'.$name, [
            'updates'=>$updates,
            'members'=> $members,
            'functionality'=> $functionality,
            'announcements'=>$announcements,
            'contactNumberOffices'=>$contactNumberOffices,
            'organizationalChart' => $organizationalChart,
            'archives' => $archives,
            'department' => $department,
            'personnel' => $personnel,
            'updateTotal' => $this->updateTotal(),
            'archiveTotal' => $this->archiveTotal(),
            'announcementTotal' => $this->announcementTotal(),
            'memberTotal' => $this->memberTotal(),
            'personnelTotal' => $this->personnelTotal(),
            'departmentFunctionalityTotal' => $this->departmentFunctionalityTotal(),
            'landingImageTotal' => $this->landingImageTotal(),
            'emergencyHotlineTotal' => $this->emergencyHotlineTotal(),
            'archiveDepartmentTotal' => $this->archiveDepartmentTotal(),
            'barangayOfficialModelTotal' => $this->barangayOfficialModelTotal(),
            'barangayModelTotal' => $this->barangayModelTotal(),
            'contactNumberOfficeTotal' => $this->contactNumberOfficeTotal(),
            'organizationalChartTotal' => $this->organizationalChartTotal(),
            'legislativeBranchCountSuperAdmin' => $this->legislativeBranchCountSuperAdmin(),
                'executiveBranchCountSuperAdmin' => $this->executiveBranchCountSuperAdmin(),
            'update'=> false,
                'edit' => false,
        ]);
    }

    public function goToOfficeSearch(Request $request, $name,$id)
    {

        $updates = Update::where('department_id', '=', $id)
        ->where('is_approved', '=', 1)->get();
        $members = Member::where('department_id', '=', $id)->where('is_approved', '=', 1)->get();
        $functionality = DepartmentFunctionality::where('department_id', '=', $id)->where('is_approved', '=', 1)->first();
        $department = DepartmentAdminModel::where('id', '=', $id)->where('is_approved', '=', 1)->first();

        
        $contactNumberOffices = ContactNumberOffice::where('department_id', '=', $id)->where('is_approved', '=', 1)->get();
        $organizationalChart = OrganizationalChart::where('department_id', '=', $id)->where('is_approved', '=', 1)->get();
        $personnel = Personnel::where('department_id', '=', $id)->where('is_approved', '=', 1)->get();
        // get first functionality
        
        // get all announcement per department
        $announcements = Announcement::where('department_id', '=', $id)->where('is_approved', '=', 1)->get();

        
        $user = Auth::user();
        // $id = Auth::id();
        $department = $user->department_admin_model_id;
        //
        $department = DepartmentAdminModel::where('id', '=', $id)->where('is_approved', '=', 1)->first();
        // dd($id);
        if ($request->search) {
            $search =  $request->search;
             $archives = DB::table('archive_departments')->where('department_id', '=', $id)->where('title', 'LIKE', "%$search%")->orWhere('description', 'LIKE', "%$search%")->get();
             // print_r($archives);die;
         }else{
             $archives = ArchiveDepartment::where('department_id', '=', $id)->where('is_approved', '=', 1)->get();
         }
       

        // return view('archive', ['archives'=> $archives,'department' => $department]);

        return view('offices.'.$name.'.'.$name, [
            'updates'=>$updates,
            'members'=> $members,
            'functionality'=> $functionality,
            'announcements'=>$announcements,
            'contactNumberOffices'=>$contactNumberOffices,
            'organizationalChart' => $organizationalChart,
            'archives' => $archives,
            'department' => $department,
            'personnel' => $personnel,
            'updateTotal' => $this->updateTotal(),
            'archiveTotal' => $this->archiveTotal(),
            'announcementTotal' => $this->announcementTotal(),
            'memberTotal' => $this->memberTotal(),
            'personnelTotal' => $this->personnelTotal(),
            'departmentFunctionalityTotal' => $this->departmentFunctionalityTotal(),
            'landingImageTotal' => $this->landingImageTotal(),
            'emergencyHotlineTotal' => $this->emergencyHotlineTotal(),
            'archiveDepartmentTotal' => $this->archiveDepartmentTotal(),
            'barangayOfficialModelTotal' => $this->barangayOfficialModelTotal(),
            'barangayModelTotal' => $this->barangayModelTotal(),
            'contactNumberOfficeTotal' => $this->contactNumberOfficeTotal(),
            'organizationalChartTotal' => $this->organizationalChartTotal(),
            'legislativeBranchCountSuperAdmin' => $this->legislativeBranchCountSuperAdmin(),
                'executiveBranchCountSuperAdmin' => $this->executiveBranchCountSuperAdmin(),
            'update'=> false,
                'edit' => false,
        ]);
    }

    public function seeProjects($category = ''){
        if ($category) {
            $updates = Update::where('is_approved', '=', 1)->where('category',$category)->orderBy('created_at', 'DESC')->get();
        }else{
            $updates = Update::where('is_approved', '=', 1)->orderBy('created_at', 'DESC')->get();
        }
       
        return view('projects.seeAllProjects', [
            'updates'=> $updates,
            'updateTotal' => $this->updateTotal(),
            'archiveTotal' => $this->archiveTotal(),
            'announcementTotal' => $this->announcementTotal(),
            'memberTotal' => $this->memberTotal(),
            'personnelTotal' => $this->personnelTotal(),
            'departmentFunctionalityTotal' => $this->departmentFunctionalityTotal(),
            'landingImageTotal' => $this->landingImageTotal(),
            'emergencyHotlineTotal' => $this->emergencyHotlineTotal(),
            'archiveDepartmentTotal' => $this->archiveDepartmentTotal(),
            'barangayOfficialModelTotal' => $this->barangayOfficialModelTotal(),
            'barangayModelTotal' => $this->barangayModelTotal(),
            'contactNumberOfficeTotal' => $this->contactNumberOfficeTotal(),
            'organizationalChartTotal' => $this->organizationalChartTotal(),
            'legislativeBranchCountSuperAdmin' => $this->legislativeBranchCountSuperAdmin(),
            'executiveBranchCountSuperAdmin' => $this->executiveBranchCountSuperAdmin(),
        ]);
    }

    public function welcome(){
        $latestUpdate = Update::where('is_approved', '=', 1)->orderBy('created_at', 'DESC')->limit('2')->get();
        $updates = Update::where('is_approved', '=', 1)->orderBy('created_at', 'DESC')->limit('10')->get();
        $landingImage = LandingImage::where('is_approved', '=', 1)->orderBy('created_at', 'DESC')->get();
        $emergencyHotlines = EmergencyHotline::where('is_approved', '=', 1)->orderBy('created_at', 'ASC')->get();
        $officials = OfficialsAdmin::where('is_approved', '=', 1)->orderBy('created_at', 'ASC')->get();
        $barangay_officials = BarangayOfficialModel::where('is_approved', '=', 1)->orderBy('created_at', 'ASC')->get();
        $barangays = BarangayModel::where('is_approved', '=', 1)->orderBy('name', 'ASC')->get();
        $executive_agendas = AgendaModel::where('is_approved', '=', 1)->where('is_executive', 1)->orderBy('created_at', 'DESC')->first();
        $legislative_agendas = AgendaModel::where('is_approved', '=', 1)->where('is_executive', 0)->orderBy('created_at', 'DESC')->first();
        // dd($executive_agendas->title);
        return view('welcome', [
            'updates'=> $updates,
            'latestUpdate'=> $latestUpdate, 
            'landingImage' => $landingImage,
            'emergencyHotlines'=> $emergencyHotlines,
            'officials'=> $officials,
            'barangay_officials'=> $barangay_officials,
            'barangays'=> $barangays,
            'updateTotal' => $this->updateTotal(),
            'archiveTotal' => $this->archiveTotal(),
            'announcementTotal' => $this->announcementTotal(),
            'memberTotal' => $this->memberTotal(),
            'personnelTotal' => $this->personnelTotal(),
            'departmentFunctionalityTotal' => $this->departmentFunctionalityTotal(),
            'landingImageTotal' => $this->landingImageTotal(),
            'emergencyHotlineTotal' => $this->emergencyHotlineTotal(),
            'archiveDepartmentTotal' => $this->archiveDepartmentTotal(),
            'barangayOfficialModelTotal' => $this->barangayOfficialModelTotal(),
            'barangayModelTotal' => $this->barangayModelTotal(),
            'contactNumberOfficeTotal' => $this->contactNumberOfficeTotal(),
            'organizationalChartTotal' => $this->organizationalChartTotal(),
            'legislativeBranchCountSuperAdmin' => $this->legislativeBranchCountSuperAdmin(),
                'executiveBranchCountSuperAdmin' => $this->executiveBranchCountSuperAdmin(),
            'executive_agendas'=> $executive_agendas,
            'legislative_agendas'=> $legislative_agendas,
            'update'=> false,
                'edit' => false,
        ]);
    }
}
