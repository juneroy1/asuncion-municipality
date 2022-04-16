<?php

namespace App\Http\Controllers;
use App\BarangayOfficialModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Department;
use Intervention\Image\ImageManagerStatic as Image;

class BarangayOfficialsController extends Controller
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
        $barangay_officials = BarangayOfficialModel::where('department_id', '=', $department)->get();
        $user = Auth::user();
        $id = Auth::id();
        $departmentUser = $user->department_admin_model_id;
        // dd($departmentUser);
        return view('admin.baranggay_officials', [
            'barangay_officials'=> $barangay_officials, 
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
            $barangay_officials = BarangayOfficialModel::all();
        }else{
            $barangay_officials = BarangayOfficialModel::where('department_id', '=', $department)->get();
        }
        
        $update = $idPost ? BarangayOfficialModel::find($idPost):false;
        $listRequest = Department::withCount('barangayOfficials')->get();

        if ($department =='super_admin') {
            return view('admin.before.index', [
                'updates'=> $barangay_officials, 
                'department' => $department,
                'listRequests' => $listRequest,
                'pageName' => 'Barangay Officials',
                'pagePrefix' => 'admin-barangay-officials',
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
                'update'=> false,
                'edit' => false,
            ]);
        }else{
            return view('admin.baranggay_officials', [
                'barangay_officials'=> $barangay_officials, 
                'department' => $department,
                'listRequests' => $listRequest,
                'pageName' => 'Barangay Officials',
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
                // 'idPage' => $department,
            ]);
 
        }

        // return view('admin.baranggay_officials', ['barangay_officials'=> $barangay_officials,'department' => $department]);
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
                'first_name'=>'required',
                'last_name'=>'required',
                'position'=>'required',
             ]);
       
        //
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        $barangay_officials = BarangayOfficialModel::all();
        $member = $idPost? BarangayOfficialModel::find($idPost):new BarangayOfficialModel;
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
            $destinationPath = public_path('barangay_officials/');
            // \File::mkdir($destinationPath);
            $img = Image::make($image->getRealPath());
            $img->resize(null,800,function($constraint){ $constraint->aspectRatio(); })->save($destinationPath.'/'.$imageName);
            // echo $imageName;die;
            
            $member->image = $imageName;
        }
        
        $member->first_name = $request->first_name;
        $member->last_name = $request->last_name;
        $member->position = $request->position;
        $member->address = $request->address?$request->address:'';
        $member->birthdate = $request->birthdate?$request->birthdate:'';
        $member->religion = $request->religion?$request->religion:'';
        $member->educational_attainment = $request->educational_attainment?$request->educational_attainment:'';
        $member->course = $request->course?$request->course:'';
        $member->others = $request->others?$request->others:'';
        $member->remarks = $request->remarks?$request->remarks:'';
        $member->user_id = $id;
        $member->is_approved = 2;
        $member->department_id = $department;
        $member->save();
        session()->flash('success', $idPost? 'successfully update barangay official':'successfully added new barangay officials');
        return redirect('/admin-barangay-officials')->with(['barangay_officials'=>$barangay_officials]);
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
            $barangay_officials = BarangayOfficialModel::all();
        }else{
            $barangay_officials = BarangayOfficialModel::where('department_id', '=', $department)->get();
        }

        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['barangay_officials'=>$barangay_officials]);  
        }
        $find = BarangayOfficialModel::find($idPost);
        $find->is_approved = 1;
        $find->remarks = "";
        $find->save();


        session()->flash('success', 'successfully approved barangay Official');
        return redirect()->back()->with(['barangay_officials'=>$barangay_officials]);  
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
            $barangay_officials = BarangayOfficialModel::all();
        }else{
            $barangay_officials = BarangayOfficialModel::where('department_id', '=', $department)->get();
        }

        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['barangay_officials'=>$barangay_officials]);  
        }

        $find = BarangayOfficialModel::find($idPost);
        $find->is_approved = 3;
        $find->remarks = $request->remarks;
        $find->save();

        session()->flash('success', 'successfully removed barangay Official');
        return redirect("/admin-barangay-officials/$idPage");
        // return redirect()->back()->with(['barangay_officials'=>$barangay_officials]);  
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
