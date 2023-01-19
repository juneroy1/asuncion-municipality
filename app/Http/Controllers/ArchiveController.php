<?php

namespace App\Http\Controllers;
use App\Archive;
use App\ArchiveDepartment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Department;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\DB;

class ArchiveController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['showArchive']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showArchive()
    {
        //
        // $user = Auth::user();
        // $id = Auth::id();
        // $department = $user->department;
        //
       
            $archives = Archive::all();
       

        return view('archive', [
            'archives'=> $archives,
            'department' => false,
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
    public function showArchiveSubmit(Request $request){
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;

        if ($request->search) {
           $search =  $request->search;
            $archives = DB::table('archive')->orWhere('title', 'LIKE', "%$search%")->orWhere('description', 'LIKE', "%$search%")->get();
            // print_r($archives);die;
        }else{
            $archives = Archive::all();
        }
        return view('archive', [
            'archives'=> $archives,
            'department' => $department,
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
        // $archives = Archive::where('department', 'LIKE', "$searchArchive%")->get();
    }
    public function index($idPost = false)
    {

        // dd($this->announcementTotal());
        //
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        //
        if ($department =='super_admin') {
            # code...
            $archives = Archive::all();
        }else{
            $archives = Archive::where('department_id', '=', $department)->get();
        }

        $update = $idPost? Archive::find($idPost):false;
        $listRequest = Department::withCount('archives')->get();
        // dd($this->archiveTotal());
        if ($department =='super_admin') {
            return view('admin.before.index', [
                'updates'=> $archives, 
                'department' => $department,
                'listRequests' => $listRequest,
                'pageName' => 'Archive Official',
                'pagePrefix' => 'admin-officials-archive',
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
            return view('admin.archive', [
                'archives'=> $archives,
                'department' => $department, 
                'idPage' => $department,
                'update' => $update,
                'edit' => $idPost? true:false,
                'updateTotal' => $this->updateTotal(),
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
       
    }

    public function indexDepartmentAdmin($department){
        $archives = ArchiveDepartment::where('department_id', '=', $department)->get();
        $user = Auth::user();
        $id = Auth::id();
        $departmentUser = $user->department_admin_model_id;
        
        // dd($departmentUser);
        return view('admin.archive_department', [
            'archives'=> $archives, 
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
    public function indexOfficialAdmin($department){
        $archives = Archive::where('department_id', '=', $department)->get();
        $user = Auth::user();
        $id = Auth::id();
        $departmentUser = $user->department_admin_model_id;
        
        // dd($department);
        return view('admin.archive', [
            'archives'=> $archives, 
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
    public function indexDepartment($idPost = false)
    {
        //
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        //
        if ($department =='super_admin') {
            # code...
            $archives = ArchiveDepartment::all();
        }else{
            $archives = ArchiveDepartment::where('department_id', '=', $department)->get();
        }
        $listRequest = Department::withCount('archiveDepartments')->get();
        $update = $idPost ? ArchiveDepartment::find($idPost):false;
        // dd($listRequest);
        if ($department =='super_admin') {
            return view('admin.before.index', [
                'updates'=> $archives, 
                'department' => $department,
                'idPage' => $department,
                'listRequests' => $listRequest,
                'pageName' => 'Archive Department',
                'pagePrefix' => 'admin-department-archive',
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
            return view('admin.archive_department', [
                'archives'=> $archives, 
                'department' => $department,
                'listRequests' => $listRequest,
                'pageName' => 'Archive Department',
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
                'idPage' => $department,
            ]);
 
        }
        // return view('admin.archive_department', ['archives'=> $archives,'department' => $department]);
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
        if ($idPost) {
            $this->validate($request,[
                'title'=>'required',
                'description'=>'required',
                'remarks'=>'required',
             ]);
        }else{
            $this->validate($request,[
                'file'=>'required',
                'title'=>'required',
                'description'=>'required',
             ]);
        }
        
        //

        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;

        $archives = Archive::all();
        $member = $idPost? Archive::find($idPost):new Archive;
        //
        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        // $imageName = time().'.'.$request->image->extension(); 
        // $request->image->move(public_path('images'), $imageName);
        if ($request->file) {
            $fileName = time().'.'.$request->file->extension(); 
            $request->file->move(public_path('archives/'), $fileName);
            
            // echo $imageName;die;
            
            $member->file = $fileName;
        }
        
        $member->title = $request->title;
        $member->description = $request->description;
        $member->user_id = $id;
        $member->is_approved = 2;
        $member->department_id = $department;
        $member->save();
        session()->flash('success', $idPost ? 'successfully update archive for official': 'successfully added new archive for official');
        return redirect('/admin-officials-archive')->with(['archives'=>$archives]);
    }

    public function storeDepartment(Request $request, $idPost =false){
        
        if ($idPost) {
            $this->validate($request,[
                'title'=>'required',
                'description'=>'required',
                'remarks'=>'required',
             ]);
        }else{
            $this->validate($request,[
                'file'=>'required',
                'title'=>'required',
                'description'=>'required',
             ]);
        }
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        $archives = ArchiveDepartment::all();
        $member = $idPost? ArchiveDepartment::find($idPost):  new ArchiveDepartment;

        if ($request->file) {
            # code...
            //
            // $request->validate([
            //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // ]);
            // $imageName = time().'.'.$request->image->extension(); 
            // $request->image->move(public_path('images'), $imageName);
            $fileName = time().'.'.$request->file->extension(); 
            $request->file->move(public_path('archives/'), $fileName);
            
            // echo $imageName;die;
            
            $member->file = $fileName;
        }
        
        $member->title = $request->title;
        $member->description = $request->description;
        $member->user_id = $id;
        $member->is_approved = 2;
        $member->department_id = $department;
        $member->remarks = $request->remarks;
        $member->save();
        session()->flash('success', $idPost?'successfully update  archive ':'successfully added new archive ');
        return redirect('/admin-department-archive')->with(['archives'=>$archives]);
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
            $archives = Archive::all();
        }else{
            $archives = Archive::where('department', '=', $department)->get();
        }

        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['archives'=>$archives]);  
        }
        $find = Archive::find($idPost);
        $find->is_approved = 1;
        $find->save();


        session()->flash('success', 'successfully approved archives');
        return redirect()->back()->with(['archives'=>$archives]);  
    }
    public function approveDepartment($idPost)
    {
        //
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        //

       

        if ($department =='super_admin') {
            # code...
            $archives = ArchiveDepartment::all();
        }else{
            $archives = ArchiveDepartment::where('department_id', '=', $department)->get();
        }

        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['archives'=>$archives]);  
        }
        $find = ArchiveDepartment::find($idPost);
        $find->is_approved = 1;
        $find->remarks = "";
        $find->save();


        session()->flash('success', 'successfully approved archives');
        return redirect()->back()->with(['archives'=>$archives]);  
    }

    public function remove(Request $request, $idPost, $idPage)
    {

        $this->validate($request,[
            'remarks'=>'required',
            ]);
        //
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        //

       

        if ($department =='super_admin') {
            # code...
            $archives = Archive::all();
        }else{
            $barangay_officials = Archive::where('department_id', '=', $department)->get();
        }

        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['archives'=>$archives]);  
        }

        $find = Archive::find($idPost);
        $find->is_approved = 3;
        $find->remarks = $request->remarks;
        $find->save();

        session()->flash('success', 'successfully removed archives');
         return redirect("/admin-officials-archive/$idPage"); 
    }

    public function removeDepartment(Request $request, $idPost, $idPage)
    {
        $this->validate($request,[
            'remarks'=>'required',
            ]);
        //
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        //

       

        if ($department =='super_admin') {
            # code...
            $archives = ArchiveDepartment::all();
        }else{
            $barangay_officials = ArchiveDepartment::where('department_id', '=', $department)->get();
        }

        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['archives'=>$archives]);  
        }

        $find = ArchiveDepartment::find($idPost);
        $find->is_approved = 3;
        $find->remarks = $request->remarks;
        $find->save();

        session()->flash('success', 'successfully removed archives');
        return redirect("/admin-department-archive/$idPage");
        // return redirect()->back()->with(['archives'=>$archives]);  
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
