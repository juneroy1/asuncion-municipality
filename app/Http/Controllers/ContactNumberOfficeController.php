<?php

namespace App\Http\Controllers;
use App\ContactNumberOffice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Department;
use Intervention\Image\ImageManagerStatic as Image;

class ContactNumberOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAdmin($department){
        $contact_number_offices = ContactNumberOffice::where('department_id', '=', $department)->get();
        $user = Auth::user();
        $id = Auth::id();
        $departmentUser = $user->department_admin_model_id;
        // dd($departmentUser);
        return view('admin.contact_number_office', [
            'contact_number_offices'=> $contact_number_offices, 
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
    public function index($idPost= false)
    {
        //
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        //
        if ($department =='super_admin') {
            # code...
            $contact_number_offices = ContactNumberOffice::all();
        }else{
            $contact_number_offices = ContactNumberOffice::where('department_id', '=', $department)->get();
        }
        $listRequest = Department::withCount('contactNumberOffice')->get();
        $update = $idPost? ContactNumberOffice::find($idPost):false;
        // dd($listRequest);
        if ($department =='super_admin') {
            return view('admin.before.index', [
                'updates'=> $contact_number_offices, 
                'department' => $department,
                'listRequests' => $listRequest,
                'pageName' => 'Contact Number Office',
                'pagePrefix' => 'contact-number-office',
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
            return view('admin.contact_number_office', [
                'contact_number_offices'=> $contact_number_offices, 
                'department' => $department,
                'listRequests' => $listRequest,
                'pageName' => 'Contact Number Office',
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
        // return view('admin.contact_number_office', ['contact_number_offices'=> $contact_number_offices,'department' => $department]);
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
            'number'=>'required',
            'network'=>'required',
            'name'=>'required',
         ]);
        //
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
     
      
        $contact_number_offices = ContactNumberOffice::all();
        $member = $idPost? ContactNumberOffice::find($idPost): new ContactNumberOffice;
        $member->number = $request->number;
        $member->name = $request->name;
        $member->network = $request->network;
        $member->user_id = $id;
        $member->is_approved = 2;
        $member->department_id = $department;
        $member->remarks = $request->remarks;
        $member->save();
        session()->flash('success', $idPost? 'successfully update contact number for office':'successfully added new contact number for office');
        return redirect('/contact-number-office')->with(['contact_number_offices'=>$contact_number_offices]);
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
            $contact_number_offices = ContactNumberOffice::all();
        }else{
            $contact_number_offices = ContactNumberOffice::where('department_ID', '=', $department)->get();
        }

        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['contact_number_offices'=>$contact_number_offices]);  
        }
        $find = ContactNumberOffice::find($idPost);
        $find->is_approved = 1;
        $find->remarks = "";
        $find->save();


        session()->flash('success', 'successfully approved contact number office');
        return redirect()->back()->with(['contact_number_offices'=>$contact_number_offices]);  
    }

    public function remove(Request $request, $idPost,$idPage)
    {
        //
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        //

       

        if ($department =='super_admin') {
            # code...
            $contact_number_offices = ContactNumberOffice::all();
        }else{
            $contact_number_offices = ContactNumberOffice::where('department_id', '=', $department)->get();
        }

        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['contact_number_offices'=>$contact_number_offices]);  
        }

        $find = ContactNumberOffice::find($idPost);
        $find->is_approved = 3;
        $find->remarks = $request->remarks;
        $find->save();

        session()->flash('success', 'successfully removed contact number office');
        return redirect("/contact-number-office/$idPage");
        // return redirect()->back()->with(['contact_number_offices'=>$contact_number_offices]);  
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
