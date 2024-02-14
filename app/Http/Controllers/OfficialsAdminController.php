<?php

namespace App\Http\Controllers;
use App\OfficialsAdmin;
use App\Member;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Intervention\Image\ImageManagerStatic as Image;
class OfficialsAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except' => ['showAllOfficials','showAllLegislative', 'viewOfficial']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAllOfficials()
    {
        //
        // $user = Auth::user();
        // $id = Auth::id();
        // $department = $user->department;
        //
        // if ($department =='super_admin') {
            # code...
            // $officials = OfficialsAdmin::where('is_approved', '1')->orderBy('order', 'ASC')->get();
            $officials = OfficialsAdmin::where('is_approved', '1')->orderByRaw('ISNULL(priority), priority ASC')
            ->get();
        // }else{
        //     $officials = OfficialsAdmin::where('department', '=', $department)->get();
        // }

        return view('officials', [
            'officials'=> $officials,
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

    public function showAllLegislative()
    {
        //
        // $user = Auth::user();
        // $id = Auth::id();
        // $department = $user->department;
        //
        // if ($department =='super_admin') {
            # code...
            $officials = OfficialsAdmin::where('is_approved', '1')->orderBy('order', 'ASC')->get();
        // }else{
        //     $officials = OfficialsAdmin::where('department', '=', $department)->get();
        // }

        return view('legislative', [
            'officials'=> $officials,
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

    public function viewOfficial($type,$idOfficial){

        $user = Auth::user();
        $id = Auth::id();
        $department = $user?$user->department_admin_model_id:false;
        $official = OfficialsAdmin::find($idOfficial);
        return view('view_official', [
            'official'=> $official,
            'department' => $department,
            'type' => $type,
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
    public function viewOfficialHead($idOfficial){

        $user = Auth::user();
        $id = Auth::id();
        $department = $user?$user->department_admin_model_id:false;
        $official = Member::find($idOfficial);
        return view('view_official_head', [
            'official'=> $official,
            'department' => $department,
            'type' => 'head_office',
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



    
    public function index()
    {
        //
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        //
        if ($department =='super_admin') {
            # code...
            $officials = OfficialsAdmin::query()
            ->orderByRaw('ISNULL(priority), priority ASC')
            ->get();
        }else{
            // $officials = OfficialsAdmin::where('department_id', '=', $department)->orderBy('priority', 'ASC')->get();
            $officials = OfficialsAdmin::where('department_id', '=', $department)->query()
            ->orderByRaw('ISNULL(priority), priority ASC')
            ->get();
        }

        return view('admin.officials_admin', ['officials'=> $officials,'department' => $department,
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
    public function store(Request $request)
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
        // $imageName = time().'.'.$request->image->extension(); 
        // $request->image->move(public_path('images'), $imageName);
        if ($request->image) {
        $imageName = time().'.'.$request->image->extension(); 
        // $request->image->move(public_path('uploadImage/'.$department), $imageName);
        $image = $request->image;
        $destinationPath = public_path('officials/');
        // \File::mkdir($destinationPath);
        $img = Image::make($image->getRealPath());
        $img->resize(null,800,function($constraint){ $constraint->aspectRatio(); })->save($destinationPath.'/'.$imageName);
        }
        // echo $imageName;die;
        $officials = OfficialsAdmin::all();
        $member = new OfficialsAdmin;
        if ($request->image) {
        $member->image = $imageName;
        }
        $member->first_name = $request->first_name;
        $member->last_name = $request->last_name;
        $member->position = $request->position;
        $member->address = $request->address;//$request->address;
        $member->birthdate = $request->birthdate; //$request->birthdate;
        $member->religion = $request->religion;//$request->religion;
        $member->term_of_service = $request->term_of_service;//$request->religion;
        $member->elective_title_experience	 = $request->elective_title_experience	;//$request->religion;
        $member->eb_primary	 = $request->eb_primary	;//$request->religion;
        $member->eb_secondary	 = $request->eb_secondary	;//$request->religion;
        $member->eb_college	 = $request->eb_college	;//$request->religion;
        $member->chairmanship	 = $request->chairmanship	;//$request->religion;
        $member->vice_chairmanship	 = $request->vice_chairmanship	;//$request->religion;
        $member->committee_membership	 = $request->committee_membership	;//$request->religion;
        $member->quotation	 = $request->quotation	;//$request->religion;
        // $member->educational_attainment =''; //$request->educational_attainment;
        $member->course = $request->course;//$request->course;
        $member->others = $request->others;//$request->others;
        $member->user_id = $id;
        $member->is_approved = 1;
        $member->department_id = $department;
        $member->save();
        session()->flash('success', 'successfully added new officials');
        return redirect()->back()->with(['officials'=>$officials]);
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
            $officials = OfficialsAdmin::all();
        }else{
            $officials = OfficialsAdmin::where('department_id', '=', $department)->get();
        }

        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['officials'=>$officials]);  
        }
        $find = OfficialsAdmin::find($idPost);
        $find->is_approved = 1;
        $find->remarks = "";
        $find->save();


        session()->flash('success', 'successfully approved Official');
        return redirect()->back()->with(['officials'=>$officials]);  
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
            $officials = OfficialsAdmin::all();
        }else{
            $officials = OfficialsAdmin::where('department_id', '=', $department)->get();
        }

        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['officials'=>$officials]);  
        }

        $find = OfficialsAdmin::find($idPost);
        $find->is_approved = 0;
        $find->save();

        session()->flash('success', 'successfully removed Official');
        return redirect()->back()->with(['officials'=>$officials]);  
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

        $user = Auth::user();
        $idUser = Auth::id();
        $department = $user->department_admin_model_id;
        //
        if ($department =='super_admin') {
            # code...
            $officials = OfficialsAdmin::all();
            $official = OfficialsAdmin::find($id);
        }else{
            $officials = OfficialsAdmin::where('department', '=', $department)->get();
        }

        return view('admin.officials_admin_edit', [
            'officials'=> $officials,
            'official'=> $official,
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

     
        $this->validate($request,[
            'first_name'=>'required',
            'last_name'=>'required',
            'position'=>'required',
            'remarks'=>'required',
            ]);
      
        //
        $user = Auth::user();
        $idUser = Auth::id();
        $department = $user->department_admin_model_id;
        //
        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        // $imageName = time().'.'.$request->image->extension(); 
        // $request->image->move(public_path('images'), $imageName);
        if ($request->image) {
            $imageName = time().'.'.$request->image->extension(); 
        // $request->image->move(public_path('uploadImage/'.$department), $imageName);
            $image = $request->image;
            $destinationPath = public_path('officials/');
            // \File::mkdir($destinationPath);
            $img = Image::make($image->getRealPath());
            $img->resize(null,800,function($constraint){ $constraint->aspectRatio(); })->save($destinationPath.'/'.$imageName);
        }
        
        // echo $imageName;die;
        $officials = OfficialsAdmin::all();
        $member =  OfficialsAdmin::find($id);
        if ($request->image) {
            # code...
            $member->image = $imageName;
        }
        
        $member->first_name = $request->first_name;
        $member->last_name = $request->last_name;
        $member->position = $request->position;
        $member->address = $request->address? $request->address: '';//$request->address;
        $member->birthdate = $request->birthdate? $request->birthdate: ''; //$request->birthdate;
        $member->religion = $request->religion? $request->religion: '';//$request->religion;
        $member->term_of_service = $request->term_of_service? $request->term_of_service: '';//$request->religion;
        $member->elective_title_experience	 = $request->elective_title_experience? $request->elective_title_experience: ''	;//$request->religion;
        $member->eb_primary	 = $request->eb_primary ? $request->eb_primary: ''	;//$request->religion;
        $member->eb_secondary	 = $request->eb_secondary ? $request->eb_secondary: ''	;//$request->religion;
        $member->eb_college	 = $request->eb_college ? $request->eb_college: ''	;//$request->religion;
        $member->chairmanship	 = $request->chairmanship ? $request->chairmanship: ''	;//$request->religion;
        $member->vice_chairmanship	 = $request->vice_chairmanship ? $request->vice_chairmanship: ''	;//$request->religion;
        $member->committee_membership	 = $request->committee_membership ? $request->committee_membership: ''	;//$request->religion;
        $member->quotation	 = $request->quotation ? $request->quotation: ''	;//$request->religion;
        // $member->educational_attainment =''; //$request->educational_attainment;
        $member->course = $request->course ? $request->course: '';//$request->course;
        $member->others = $request->others ? $request->others: '';//$request->others;
        $member->user_id = $idUser;
        $member->is_approved = 2;
        $member->department_id = $department;
        $member->remarks = $request->remarks;
        $member->save();
        session()->flash('success', 'successfully updated new officials');
        return redirect('/admin-officials')->with(['officials'=>$officials]);
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
