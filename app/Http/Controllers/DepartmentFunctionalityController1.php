<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DepartmentFunctionality;
use Illuminate\Support\Facades\Auth;
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
    public function index()
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
            $functionalities = DepartmentFunctionality::where('department', '=', $department)->get();
        }
        
        return view('admin.functionalities', [
            'functionalities'=> $functionalities, 
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
       
        // echo $imageName;die;
        $functionalities = DepartmentFunctionality::all();
        $functionality = new DepartmentFunctionality;
        $functionality->description = $request->description;
        
        $functionality->user_id = $id;
        $functionality->is_approved = 0;
        $functionality->department = $department;
        $functionality->save();
        session()->flash('success', 'successfully added new functionalities');
        return redirect()->back()->with(['functionalities'=>$functionalities]); 
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
            $functionalities = DepartmentFunctionality::where('department', '=', $department)->get();
        }

        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['functionalities'=>$functionalities]);  
        }
        $find = DepartmentFunctionality::find($idPost);
        $find->is_approved = 1;
        $find->save();


        session()->flash('success', 'successfully approved DepartmentFunctionality');
        return redirect()->back()->with(['functionalities'=>$functionalities]);  
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
            $functionalities = DepartmentFunctionality::all();
        }else{
            $functionalities = DepartmentFunctionality::where('department', '=', $department)->get();
        }

        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['functionalities'=>$functionalities]);  
        }

        $find = DepartmentFunctionality::find($idPost);
        $find->is_approved = 0;
        $find->save();

        session()->flash('success', 'successfully removed DepartmentFunctionality');
        return redirect()->back()->with(['functionalities'=>$functionalities]);  
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
