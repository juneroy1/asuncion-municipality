<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Personnel;
use App\Department;
use Illuminate\Support\Facades\Auth;
class MemberController extends Controller
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
        $members = Member::where('department_id', '=', $department)->withCount('department')->get();
        $user = Auth::user();
        $id = Auth::id();
        $departmentUser = $user->department_admin_model_id;
        // dd($departmentUser);
        return view('admin.member', [
            'members'=> $members, 
            'department' => $departmentUser,
            'idPage' => $department,
            'member' => false,
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
    public function indexPersonnel(){
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        //
        if ($department =='super_admin') {
            # code...
            $members = Personnel::all();
        }else{
            $members = Personnel::where('department_id', '=', $department)->get();
        }

        $listRequest = Department::withCount('member')->get();
        // dd($listRequest);
        if ($department =='super_admin') {
            return view('admin.before.index', [
                'updates'=> $members, 
                'department' => $department,
                'listRequests' => $listRequest,
                'pageName' => 'Personnel',
                'pagePrefix' => 'admin-member',
                'showDepartments' => true,
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
            return view('admin.member_image', [
                'members'=> $members, 
                'department' => $department,
                'listRequests' => $listRequest,
                'pageName' => 'Personnel',
                'showDepartments' => true,
                'member'=> false,
                'edit'=> false,
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
    }
    public function index()
    {
        //
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        //
        if ($department =='super_admin') {
            # code...
            $members = Member::all();
        }else{
            $members = Member::where('department_id', '=', $department)->get();
        }

        $listRequest = Department::withCount('member')->get();
        // dd($listRequest);
        if ($department =='super_admin') {
            return view('admin.before.index', [
                'updates'=> $members, 
                'department' => $department,
                'listRequests' => $listRequest,
                'pageName' => 'Member',
                'pagePrefix' => 'admin-member',
                'showDepartments' => false,
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
            return view('admin.member', [
                'members'=> $members, 
                'department' => $department,
                'listRequests' => $listRequest,
                'pageName' => 'Member',
                'showDepartments' => false,
                'member' => false,
                "edit" => false,
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
        // return view('admin.member', ['members'=> $members,'department' => $department]);
    }
    public function editMember($idPost)
    {
        //
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        //
        if ($department =='super_admin') {
            # code...
            $members = Member::all();
        }else{
            $members = Member::where('department_id', '=', $department)->get();
        }

        $member = Member::find($idPost);

        $listRequest = Department::withCount('member')->get();
        // dd($listRequest);
        if ($department =='super_admin') {
            return view('admin.before.index', [
                'updates'=> $members, 
                'department' => $department,
                'listRequests' => $listRequest,
                'pageName' => 'Member',
                'pagePrefix' => 'admin-member',
                'showDepartments' => false,
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
            return view('admin.member', [
                'members'=> $members, 
                'department' => $department,
                'listRequests' => $listRequest,
                'pageName' => 'Member',
                'showDepartments' => false,
                'member' => $member,
                "edit" => true,
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
        // return view('admin.member', ['members'=> $members,'department' => $department]);
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
    public function createPersonnel(Request $request, $idPost = false)
    {
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'image'=>'required',
            ]);
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        //
        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        
        // echo $imageName;die;
        $members = Personnel::all();
        $member = $idPost? Personnel::find($idPost): new Personnel;
        if ($request->image) {
            $imageName = time().'.'.$request->image->extension(); 
            $request->image->move(public_path('personnel'), $imageName);
            $member->image = $imageName;
        }
        
        $member->title = $request->title;
        $member->description = $request->description;
        $member->remarks = $request->remarks;
       
        $member->user_id = $id;
        $member->is_approved = 1;
        $member->department_id = $department;
        $member->save();
        session()->flash('success', $idPost?'successfully update personnal group image':'successfully added new personnal group image');
        return redirect('/admin-member-personnel')->with(['members'=>$members]);  
    }

    public function store(Request $request, $idPost=false)
    {

        $this->validate($request,[
            'first_name'=>'required',
            'last_name'=>'required',
            'position'=>'required',
            ]);
        //
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        //
        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        
        // echo $imageName;die;
        $members = Member::all();
        $member = $idPost? Member::find($idPost):new Member;
        if ($request->image) {
            $imageName = time().'.'.$request->image->extension(); 
            $request->image->move(public_path('images'), $imageName);
            $member->image = $imageName;
        }
        
        $member->first_name = $request->first_name;
        $member->last_name = $request->last_name;
        $member->position = $request->position;
        $member->address = $request->address?$request->address: '' ;
        $member->birthdate = $request->birthdate?$request->birthdate: '' ;
        $member->religion = $request->religion ?$request->religion: '' ;
        $member->educational_attainment = $request->educational_attainment ?$request->educational_attainment: '' ;
        $member->course = $request->course ?$request->course: '' ;
        $member->others = $request->others? $request->others: '';
        $member->user_id = $id;
        $member->is_approved = 2;
        $member->department_id = $department;
        $member->remarks = $request->remarks?$request->remarks: '' ;
        $member->save();
        session()->flash('success', $idPost?'successfully update member':'successfully added new member');
        return redirect('/admin-member')->with(['members'=>$members]);  
    }

    public function approvePersonnel($idPost)
    {
        //
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        //

       

        if ($department =='super_admin') {
            # code...
            $members = Personnel::all();
        }else{
            $members = Personnel::where('department_id', '=', $department)->get();
        }

        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['members'=>$members]);  
        }
        $find = Personnel::find($idPost);
        $find->is_approved = 1;
        $find->save();


        session()->flash('success', 'successfully approved personnel image');
        return redirect()->back()->with(['members'=>$members]);  
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
            $members = Member::all();
        }else{
            $members = Member::where('department_id', '=', $department)->get();
        }

        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['members'=>$members]);  
        }
        $find = Member::find($idPost);
        $find->is_approved = 1;
        $find->save();


        session()->flash('success', 'successfully approved member');
        return redirect()->back()->with(['members'=>$members]);  
    }

    public function disapprovePersonnelPage(){

    }
    public function disapprovePersonnel(Request $request, $idPost, $idPage)
    {
        //
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        //

       

        if ($department =='super_admin') {
            # code...
            $anns = Personnel::all();
        }else{
            $anns = Personnel::where('department_id', '=', $department)->get();
        }

        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['anns'=>$anns]);  
        }

        $find = Personnel::find($idPost);
        $find->is_approved = 3;
        $find->remarks = $request->remarks;
        $find->save();

        session()->flash('success', 'successfully removed Member');
        // return redirect()->back()->with(['anns'=>$anns]);  
        return redirect("admin-member/$idPage");
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
            $anns = Member::all();
        }else{
            $anns = Member::where('department_id', '=', $department)->get();
        }

        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['anns'=>$anns]);  
        }

        $find = Member::find($idPost);
        $find->is_approved = 3;
        $find->remarks = $request->remarks;
        $find->save();

        session()->flash('success', 'successfully removed Member');
        // return redirect()->back()->with(['anns'=>$anns]);  
        return redirect("admin-member/$idPage");
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
        $member = Member::find($id);

        // return 
    }
    public function editPersonnel($id){
        $member = Personnel::find($id);

        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        //
        if ($department =='super_admin') {
            # code...
            $members = Personnel::all();
        }else{
            $members = Personnel::where('department_id', '=', $department)->get();
        }

        $listRequest = Department::withCount('member')->get();
        return view('admin.member_image', [
            'members'=> $members, 
            'department' => $department,
            'listRequests' => $listRequest,
            'pageName' => 'Personnel',
            'member' => $member,
            'edit' => true,
            'update'=> true,
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
