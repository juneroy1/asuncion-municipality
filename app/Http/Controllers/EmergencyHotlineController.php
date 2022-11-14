<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\EmergencyHotline;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;
use App\Department;

class EmergencyHotlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAdmin($department){
        $emergencyHotlines = EmergencyHotline::where('department_id', '=', $department)->get();
        $user = Auth::user();
        $id = Auth::id();
        $departmentUser = $user->department_admin_model_id;
        // dd($departmentUser);
        return view('admin.emergency_hotline', [
            'emergencyHotlines'=> $emergencyHotlines, 
            'department' => $departmentUser,
            'idPage' => $department,
            'update'=> false,
            'edit' => false,
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
    public function index($idPost = false)
    {
        //
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        //
        if ($department =='super_admin') {
            # code...
            $emergencyHotlines = EmergencyHotline::all();
        }else{
            $emergencyHotlines = EmergencyHotline::where('department_id', '=', $department)->get();
        }
        $listRequest = Department::withCount('emergencyHotlines')->get();
        $update = $idPost? EmergencyHotline::find($idPost):false;
        // dd($listRequest);
        if ($department =='super_admin') {
            return view('admin.before.index', [
                'updates'=> $emergencyHotlines, 
                'department' => $department,
                'listRequests' => $listRequest,
                'pageName' => 'Emergency Hotlines',
                'pagePrefix' => 'emergencyHotlines',
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
        }else{
            return view('admin.emergency_hotline', [
                'emergencyHotlines'=> $emergencyHotlines, 
                'department' => $department,
                'listRequests' => $listRequest,
                'pageName' => 'Emergency Hotlines',
                'update' => $update,
                'edit' => $idPost? true:false,
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
                // 'idPage' => $department,
            ]);
 
        }
        // return view('admin.emergency_hotline', ['emergencyHotlines'=> $emergencyHotlines,'department' => $department]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        
    }


    public function approve($idPost)
    {
        //
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        //

       

        if ($department =='super_admin') {
            # code...
            $emergencyHotlines = EmergencyHotline::all();
        }else{
            $emergencyHotlines = EmergencyHotline::where('department_id', '=', $department)->get();
        }

        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['emergencyHotlines'=>$emergencyHotlines]);  
        }
        $find = EmergencyHotline::find($idPost);
        $find->is_approved = 1;
        $find->remarks = "";
        $find->save();


        session()->flash('success', 'successfully approved emergency hotlines');
        return redirect()->back()->with(['emergencyHotlines'=>$emergencyHotlines]);  
    }

    public function remove(Request $request, $idPost, $idPage)
    {
        //
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        //

       

        if ($department =='super_admin') {
            # code...
            $emergencyHotlines = EmergencyHotline::all();
        }else{
            $emergencyHotlines = EmergencyHotline::where('department_id', '=', $department)->get();
        }

        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['emergencyHotlines'=>$emergencyHotlines]);  
        }

        $find = EmergencyHotline::find($idPost);
        $find->is_approved = 3;
        $find->remarks = $request->remarks;
        $find->save();

        session()->flash('success', 'successfully removed emergencyHotlines');
        return redirect("/emergencyHotlines/$idPage");
        // return redirect()->back()->with(['emergencyHotlines'=>$emergencyHotlines]);  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $idPost = false)
    {
        $this->validate($request,[
            'name'=>'required',
            'number'=>'required',
            'network'=>'required',
            ]);
        //
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
       
        
        $emergencyHotlines = EmergencyHotline::all();
        $update =  $idPost? EmergencyHotline::find($idPost): new EmergencyHotline;
        $update->name = $request->name;
        $update->number = $request->number;
        $update->network = $request->network;
        $update->user_id = $id;
        $update->is_approved = 2;
        $update->department_id = $department;
        $update->remarks = $request->remarks;
        $update->save();
        session()->flash('success', $idPost?'successfully update mergency hotline':'successfully added new mergency hotline');
        return redirect('/emergencyHotlines')->with(['emergencyHotlines'=> $emergencyHotlines,'department' => $department]); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
