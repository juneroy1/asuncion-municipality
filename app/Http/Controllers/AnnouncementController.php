<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Update;
use App\Announcement;
use App\Department;
use Illuminate\Support\Facades\Auth;

class AnnouncementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAdmin($department){
        $anns = Announcement::where('department_id', '=', $department)->withCount('department')->get();
        $user = Auth::user();
        $id = Auth::id();
        $departmentUser = $user->department_admin_model_id;
        // dd($departmentUser);
        return view('admin.announcement', [
            'anns'=> $anns, 
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
            $anns = Announcement::all();
        }else{
            $anns = Announcement::where('department_id', '=', $department)->get();
        }
        $listRequest = Department::withCount('announcement')->get();

        $update = Announcement::find($idPost);
        // dd($listRequest);
        if ($department =='super_admin') {
            return view('admin.before.index', [
                'updates'=> $anns, 
                'department' => $department,
                'listRequests' => $listRequest,
                'pageName' => 'Announcement',
                'pagePrefix' => 'admin-announcement',
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
            return view('admin.announcement', [
                'anns'=> $anns, 
                'department' => $department,
                'listRequests' => $listRequest,
                'pageName' => 'Announcement',
                'edit' => $idPost? true: false,
                'update' => $idPost?$update: false,
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
            ]);
        }
        
        // return view('admin.announcement', ['anns'=> $anns,'department' => $department]);
    }

    public function indexAnnouncement($department)
    {
        $anns = Announcement::where('department_id', '=', $department)->withCount('announcement')->get();
        $user = Auth::user();
        $id = Auth::id();
        $departmentUser = $user->department_admin_model_id;
        // dd($departmentUser);
        return view('admin.announcement', [
            'anns'=> $anns, 
            'department' => $departmentUser,
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'title'=>'required',
            'description'=>'required',
            ]);
        //
        $user = Auth::user();
        $id = Auth::id();
        $anns = Announcement::all();
        // save announcement
        $ann = $idPost? Announcement::find($idPost): new Announcement;
        $department = $user->department_admin_model_id;

        if ($request->image) {
            $imageName = time().'.'.$request->image->extension(); 
            $request->image->move(public_path('images'), $imageName);
            $ann->image = $imageName;
        }
        
        $ann->title = $request->title;
        $ann->description = $request->description;
        $ann->is_approved = 2;
        $ann->user_id = $id;
        $ann->department_id = $department;
        $ann->remarks = $request->remarks;
        $ann->save();

        session()->flash('success', 'successfully added new announcement');
        return redirect('/admin-announcement')->with(['anns'=>$anns]);  
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
            $anns = Announcement::all();
        }else{
            $anns = Announcement::where('department_id', '=', $department)->get();
        }

        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['anns'=>$anns]);  
        }
        $find = Announcement::find($idPost);
        $find->is_approved = 1;
        $find->remarks = "";
        $find->save();


        session()->flash('success', 'successfully approved announcement');
        return redirect()->back()->with(['anns'=>$anns]);  
    }

    public function remove(Request $request, $idPost, $idPage)
    {
        // dd('dadadada');
        //
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        //

       

        if ($department =='super_admin') {
            # code...
            $anns = Announcement::all();
        }else{
            $anns = Announcement::where('department_id', '=', $department)->get();
        }
        
        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['anns'=>$anns]);  
        }

        $find = Announcement::find($idPost);
        $find->is_approved = 3;
        $find->remarks = $request->remarks;
        $find->save();

        session()->flash('success', 'successfully removed announcement');
        return redirect("admin-announcement/$idPage");
        // return redirect()->back()->with(['anns'=>$anns]);  
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
