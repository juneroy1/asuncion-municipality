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
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showArchive()
    {
        //
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department;
        //
       
            $archives = Archive::all();
       

        return view('archive', ['archives'=> $archives,'department' => $department]);
    }
    public function showArchiveSubmit(Request $request){
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department;

        if ($request->search) {
           $search =  $request->search;
            $archives = DB::table('archive')->orWhere('title', 'LIKE', "%$search%")->orWhere('description', 'LIKE', "%$search%")->get();
            // print_r($archives);die;
        }else{
            $archives = Archive::all();
        }
        return view('archive', ['archives'=> $archives,'department' => $department]);
        // $archives = Archive::where('department', 'LIKE', "$searchArchive%")->get();
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
            $archives = Archive::all();
        }else{
            $archives = Archive::where('department_id', '=', $department)->get();
        }

        return view('admin.archive', ['archives'=> $archives,'department' => $department]);
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
        ]);
    }
    public function indexDepartment()
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

        // dd($listRequest);
        if ($department =='super_admin') {
            return view('admin.before.index', [
                'updates'=> $archives, 
                'department' => $department,
                'listRequests' => $listRequest,
                'pageName' => 'Archive Department',
                'pagePrefix' => 'admin-department-archive'
            ]);
        }else{
            return view('admin.archive_department', [
                'archives'=> $archives, 
                'department' => $department,
                'listRequests' => $listRequest,
                'pageName' => 'Archive Department',
                // 'idPage' => $department,
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
    public function store(Request $request)
    {
        //

        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        //
        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        // $imageName = time().'.'.$request->image->extension(); 
        // $request->image->move(public_path('images'), $imageName);
        $fileName = time().'.'.$request->file->extension(); 
        $request->file->move(public_path('archives/'), $fileName);
        
        // echo $imageName;die;
        $archives = Archive::all();
        $member = new Archive;
        $member->file = $fileName;
        $member->title = $request->title;
        $member->description = $request->description;
        $member->user_id = $id;
        $member->is_approved = 2;
        $member->department_id = $department;
        $member->save();
        session()->flash('success', 'successfully added new archive for official');
        return redirect()->back()->with(['archives'=>$archives]);
    }

    public function storeDepartment(Request $request){
        
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        //
        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        // $imageName = time().'.'.$request->image->extension(); 
        // $request->image->move(public_path('images'), $imageName);
        $fileName = time().'.'.$request->file->extension(); 
        $request->file->move(public_path('archives/'), $fileName);
        
        // echo $imageName;die;
        $archives = ArchiveDepartment::all();
        $member = new ArchiveDepartment;
        $member->file = $fileName;
        $member->title = $request->title;
        $member->description = $request->description;
        $member->user_id = $id;
        $member->is_approved = 1;
        $member->department_id = $department;
        $member->save();
        session()->flash('success', 'successfully added new archive for official');
        return redirect()->back()->with(['archives'=>$archives]);
    }
    public function approve($idPost)
    {
        //
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department;
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

    public function remove($idPost)
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
            $barangay_officials = Archive::where('department_id', '=', $department)->get();
        }

        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['archives'=>$archives]);  
        }

        $find = Archive::find($idPost);
        $find->is_approved = 1;
        $find->remarks = "";
        $find->save();

        session()->flash('success', 'successfully removed archives');
        return redirect()->back()->with(['archives'=>$archives]);  
    }

    public function removeDepartment(Request $request, $idPost, $idPage)
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
