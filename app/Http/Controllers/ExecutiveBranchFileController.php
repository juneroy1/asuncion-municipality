<?php

namespace App\Http\Controllers;
use App\Archive;
use App\ArchiveDepartment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Department;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\DB;
use App\AgendaModel;

class ExecutiveBranchFileController extends Controller
{
    public function approveDepartment($idPost)
    {
        //
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        //

       
        if ($department =='super_admin') {
            # code...
            $agendas = AgendaModel::where('is_executive', '=', 1)->get();
        }else{
            $agendas = AgendaModel::where('department_id', '=', $department)->where('is_executive', '=', 0)->get();
        }

        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['agendas'=>$agendas]);  
        }
        $find = AgendaModel::find($idPost);
        $find->is_approved = 1;
        $find->remarks = "";
        $find->save();


        session()->flash('success', 'successfully approved executive files');
        return redirect()->back()->with(['agendas'=>$agendas]);  
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
            $archives = AgendaModel::where('department_id', '=', $department)->where('is_executive', '=', 0)->get();
        }else{
            $barangay_officials = AgendaModel::where('department_id', '=', $department)->get();
        }

        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['archives'=>$archives]);  
        }

        $find = AgendaModel::find($idPost);
        $find->is_approved = 3;
        $find->remarks = $request->remarks;
        $find->save();

        session()->flash('success', 'successfully removed executive file');
        return redirect("/admin-manage-executive-file/$idPage");
        // return redirect()->back()->with(['archives'=>$archives]);  
    }
    public function indexDepartmentAdmin($department){
        $agendas =  AgendaModel::where('department_id', '=', $department)->where('is_executive', '=', 1)->get();
        $user = Auth::user();
        $id = Auth::id();
        $departmentUser = $user->department_admin_model_id;
        
        // dd($departmentUser);
        return view('admin.executive_agenda', [
            'agendas'=> $agendas, 
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
        // dd('dadada');
        //
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        //
        if ($department =='super_admin') {
            # code...
            $agendas = AgendaModel::where('is_executive', '=', 1)->get();
        }else{
            $agendas = AgendaModel::where('department_id', '=', $department)->where('is_executive', '=', 1)->get();
        }
        $listRequest = Department::withCount('agendas')->get();
        // dd($listRequest[0]->agendas_count);
        $update = $idPost ? AgendaModel::find($idPost):false;
        // dd($listRequest);
        if ($department =='super_admin') {
            return view('admin.before.index', [
                'updates'=> $agendas, 
                'department' => $department,
                'idPage' => $department,
                'listRequests' => $listRequest,
                'pageName' => 'Executive Branch',
                'pagePrefix' => 'admin-manage-executive-file',
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
            // dd($agendas);
            return view('admin.executive_agenda', [
                'agendas'=> $agendas, 
                'department' => $department,
                'listRequests' => $listRequest,
                'pageName' => 'Executive Branch',
                'update' => $update,
                'edit' => $idPost? true:false,
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
                'idPage' => $department,
            ]);
 
        }
        // return view('admin.archive_department', ['archives'=> $archives,'department' => $department]);
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
        $agendas = AgendaModel::all();
        $member = $idPost? AgendaModel::find($idPost):  new AgendaModel;

        if ($request->file) {
            # code...
            //
            // $request->validate([
            //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // ]);
            // $imageName = time().'.'.$request->image->extension(); 
            // $request->image->move(public_path('images'), $imageName);
            $fileName = time().'.'.$request->file->extension(); 
            $request->file->move(public_path('agendas/'), $fileName);
            
            // echo $imageName;die;
            
            $member->file = $fileName;
        }
        
        $member->title = $request->title;
        $member->description = $request->description;
        $member->user_id = $id;
        $member->is_approved = 2;
        $member->department_id = $department;
        $member->remarks = $request->remarks;
        $member->is_executive = 1;
        $member->save();
        session()->flash('success', $idPost?'successfully update  agendas ':'successfully added new agendas ');
        return redirect('/admin-manage-executive-file')->with(['agendas'=>$agendas]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
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
