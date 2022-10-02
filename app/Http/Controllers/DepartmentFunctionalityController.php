<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DepartmentFunctionality;
use Illuminate\Support\Facades\Auth;
use App\Department;
class DepartmentFunctionalityController extends Controller
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
        $functionalities = DepartmentFunctionality::where('department_id', '=', $department)->get();
        $user = Auth::user();
        $id = Auth::id();
        $departmentUser = $user->department_admin_model_id;
        // dd($departmentUser);
        return view('admin.functionalities', [
            'functionalities'=> $functionalities, 
            'department' => $departmentUser,
            'idPage' => $department,
            'update'=> false,
            'edit' => false,
            'updateTotal' => false,
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
            $functionalities = DepartmentFunctionality::all();
        }else{
            $functionalities = DepartmentFunctionality::where('department_id', '=', $department)->get();
        }
        $listRequest = Department::withCount('officeMandate')->get();
        
        $update = $idPost? DepartmentFunctionality::find($idPost):false;
        // dd($listRequest);
        if ($department =='super_admin') {
            return view('admin.before.index', [
                'updates'=> $functionalities, 
                'department' => $department,
                'listRequests' => $listRequest,
                'pageName' => 'Office Mandate',
                'pagePrefix' => 'admin-functionalities',
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
            return view('admin.functionalities', [
                'functionalities'=> $functionalities, 
                'department' => $department,
                'listRequests' => $listRequest,
                'pageName' => 'Office Mandate',
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
            ]);
        }
        // return view('admin.functionalities', ['functionalities'=> $functionalities, 'department' => $department]);
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
            'description'=>'required',
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
        $functionalities = DepartmentFunctionality::all();
        $functionality = $idPost? DepartmentFunctionality::find($idPost): new DepartmentFunctionality;
        $functionality->description = $request->description;
        
        $functionality->user_id = $id;
        $functionality->is_approved = 2;
        $functionality->department_id = $department;
        $functionality->remarks = $request->remarks?$request->remarks:'' ;
        $functionality->save();
        session()->flash('success', $idPost?'successfully update office mandate':'successfully added new office mandate');
        return redirect('/admin-functionalities')->with(['functionalities'=>$functionalities]); 
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
            $functionalities = DepartmentFunctionality::all();
        }else{
            $functionalities = DepartmentFunctionality::where('department_id', '=', $department)->get();
        }

        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['functionalities'=>$functionalities]);  
        }
        $find = DepartmentFunctionality::find($idPost);
        $find->is_approved = 1;
        $find->remarks = "";
        $find->save();


        session()->flash('success', 'successfully approved DepartmentFunctionality');
        return redirect()->back()->with(['functionalities'=>$functionalities]);  
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
            $functionalities = DepartmentFunctionality::all();
        }else{
            $functionalities = DepartmentFunctionality::where('department_id', '=', $department)->get();
        }

        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['functionalities'=>$functionalities]);  
        }

        $find = DepartmentFunctionality::find($idPost);
        $find->is_approved = 3;
        $find->remarks = $request->remarks;
        $find->save();

        session()->flash('success', 'successfully removed DepartmentFunctionality');
        return redirect("/admin-functionalities/$idPage");
        // return redirect()->back()->with(['functionalities'=>$functionalities]);  
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
