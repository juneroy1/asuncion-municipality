<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Update;
use App\Department;
use App\Announcement;
use App\Member;
use App\Archive;
use App\Councilors;
use App\DepartmentAdminModel;
use App\OfficialsAdmin;
use App\DepartmentFunctionality;
use App\LandingImage;
use App\EmergencyHotline;
use App\ArchiveDepartment;
use App\BarangayOfficialModel;
use App\BarangayModel;
use App\ContactNumberOffice;
use App\OrganizationalChart;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
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
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        //
        if ($department == 'super_admin') {
            # code...
            $updates = Update::all();
            // $listRequest = Department::withCount('updates')->get();
        } else {

            $updates = Update::where('department_id', '=', $department)->withCount('department')->get();
            // $listRequest = Department::where('department_id', '=', $department)->withCount('updates')->get();
        }
        $listRequest = Department::withCount('updates')->get();


        $updateTotal = Update::where('is_approved', '=', '2')->count();
        $AnnouncementTotal = Announcement::where('is_approved', '=', '2')->count();
        $ArchiveTotal = Archive::where('is_approved', '=', '2')->count();
        $ArchiveDepartmentTotal = ArchiveDepartment::where('is_approved', '=', '2')->count();
        $BarangayModelTotal = BarangayModel::where('is_approved', '=', '2')->count();
        $BarangayOfficialModelTotal = BarangayOfficialModel::where('is_approved', '=', '2')->count();
        $ContactNumberOfficeTotal = ContactNumberOffice::where('is_approved', '=', '2')->count();
        $CouncilorsTotal = Councilors::where('is_approved', '=', '2')->count();
        $DepartmentTotal = Department::where('is_approved', '=', '2')->count();
        $DepartmentAdminModelTotal = DepartmentAdminModel::where('is_approved', '=', '2')->count();
        $DepartmentFunctionalityTotal = DepartmentFunctionality::where('is_approved', '=', '2')->count();
        $EmergencyHotlineTotal = EmergencyHotline::where('is_approved', '=', '2')->count();
        $LandingImageTotal = LandingImage::where('is_approved', '=', '2')->count();
        $MemberTotal = Member::where('is_approved', '=', '2')->count();
        $OfficialsAdminTotal = OfficialsAdmin::where('is_approved', '=', '2')->count();
        $OrganizationalChartTotal = OrganizationalChart::where('is_approved', '=', '2')->count();
        // dd($updateTotal);
        if ($department == 'super_admin') {
            return view('admin.before.index', [
                'updates' => $updates,
                'department' => $department,
                'listRequests' => $listRequest,
                'pageName' => 'Update',
                'pagePrefix' => 'admin-index',
                'updateTotal' => $updateTotal,
                'update'=> false,
                'edit' => false,
            ]);
        } else {
            return view('admin.index', [
                'updates' => $updates,
                'department' => $department,
                'listRequests' => $listRequest,
                'pageName' => 'Update',
                'update'=> false,
                'edit' => false,
                'updateTotal' => false,
                // 'idPage' => $department,
            ]);
            //         // $allDepartments = DepartmentAdminModel::all();
            //         $users = DB::table('updates')
            //         ->select('updates.id as last_post_created_at','department',DB::raw('count(department) as count'))
            //         // ->select('user_id', DB::raw('MAX(created_at) as last_post_created_at'))
            //         // ->where('is_published', true)
            //         ->groupBy('name');

            //     $users2 = DB::table('departments')
            //     ->joinSub($users, 'updates', function ($join) {
            //         $join->on('departments.department', '=', 'updates.department');
            //     })->get();

            //     $users1 = DB::table('updates')
            //     ->select('updates.id as last_post_created_at','department',DB::raw('count(department) as count'))
            //     // ->select('user_id', DB::raw('MAX(created_at) as last_post_created_at'))
            //     // ->where('is_published', true)
            //     ->groupBy('department');

            // $users22 = DB::table('departments')
            // ->joinSub($users1, 'updates', function ($join) {
            //     $join->on('departments.department', '!=', 'updates.department');
            // })->get();
            //         dd($users22);

            //         return view('admin.indexDepartmentList', [
            //             'updates'=> $updates, 
            //             'department' => $department,
            //             'allDepartments' => $allDepartments
            //         ]);
        }
    }

    public function indexAdmin($department)
    {
        $updates = Update::where('department_id', '=', $department)->withCount('department')->get();
        $user = Auth::user();
        $id = Auth::id();
        $departmentUser = $user->department_admin_model_id;
        // dd($departmentUser);
        return view('admin.index', [
            'updates' => $updates,
            'department' => $departmentUser,
            'idPage' => $department,
            'update'=> false,
            'edit' => false,
            'updateTotal' => false,
        ]);
    }

    public function list()
    {
        //
        $updates = Update::all();
        return view('admin.list', ['updates' => $updates]);
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
                'remarks'=>'required',
                'title'=>'required',
                'description'=>'required',
                'description_local'=>'required',
             ]);
        }else{
            $this->validate($request,[
                'title'=>'required',
                'description'=>'required',
                'description_local'=>'required',
             ]);
        }
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        //
        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        $updates = Update::all();
        $update = $idPost? Update::find($idPost): new Update;

        if ($request->image) {
            $imageName = time() . '.' . $request->image->extension();
            // $request->image->move(public_path('uploadImage/'.$department), $imageName);
            $image = $request->image;
            $destinationPath = public_path('updates/');
            // \File::mkdir($destinationPath);
            $img = Image::make($image->getRealPath());
            $img->resize(null, 600, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $imageName);
            // $img->move($destinationPath, $imageName);
            // $destinationPath = public_path('uploadImage/'.$department);
            // $image->move($destinationPath, $imageName);
            // echo $imageName;die;
            
            $update->image = $imageName;
        }
        
        $update->title = $request->title;
        $update->description = $request->description;
        $update->description_local = $request->description_local;
        $update->remarks = $request->remarks;
        $update->user_id = $id;
        $update->is_approved = 2;
        $update->department_id = $department;
        $update->save();
        session()->flash('success', $idPost?'successfully updated':'successfully added new updates');
        return redirect('/admin')->with(['updates' => $updates]);
    }

    public function approve($idPost, $idPage)
    {
        //
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        //



        if ($department == 'super_admin') {
            # code...
            $updates = Update::all();
        } else {
            $updates = Update::where('department', '=', $department)->get();
        }

        if ($department != 'super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['updates' => $updates]);
        }

        $find = Update::find($idPost);
        $find->is_approved = 1;
        $find->remarks = '';
        $find->save();

        session()->flash('success', 'successfully approved update');
        return redirect()->back()->with(['updates' => $updates]);
    }
    public function removePage($idPost, $idPage, $model)
    {
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        if ($model == 'Update') {
            $find = Update::find($idPost);
        } else if ($model == 'Announcement') {
            $find = Announcement::find($idPost);
        } else if ($model == 'Member') {
            $find = Member::find($idPost);
        } else if ($model == 'OfficeMandate') {
            $find = DepartmentFunctionality::find($idPost);
        }else if($model == 'LandingImage'){
            $find = LandingImage::find($idPost);
        }else if($model == 'EmergencyHotline'){
            $find = EmergencyHotline::find($idPost);
        }else if($model== 'ArchiveDepartment'){
            $find = ArchiveDepartment::find($idPost);
            
        }else if($model== 'ArchiveOfficials'){
            $find = Archive::find($idPost);
            // dd($find);
            
        }else if($model == 'BarangayOfficialModel'){
            $find = BarangayOfficialModel::find($idPost);
        }else if($model == 'BarangayModel'){
        $find = BarangayModel::find($idPost);
        }else if($model == 'ContactNumberOffice'){
            $find = ContactNumberOffice::find($idPost); 
        }else if($model == 'OrganizationalChart'){
            $find = OrganizationalChart::find($idPost); 
        }

        return view('admin.remarks', [
            'update' => $find,
            'department' => $department,
            'idPage' => $idPage,
            'model' => $model,
            'edit' => false,
            'updateTotal' => false,
        ]);
    }
    public function remove(Request $request, $idPost, $idPage)
    {
        // echo $request->remarks;die;
        //
        //
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;


        //



        if ($department == 'super_admin') {
            # code...
            $updates = Update::all();
        } else {
            $updates = Update::where('department', '=', $department)->get();
        }

        // if ($department !='super_admin') {
        //     # code...
        //     session()->flash('error', 'only the admin can access the approval');
        //     return redirect()->back()->with(['updates'=>$updates]);  
        // }

        $find = Update::find($idPost);
        $find->is_approved = 3;
        $find->remarks = $request->remarks;
        $find->save();
        // dd('adadada');
        session()->flash('success', 'successfully removed update');
        // return view('admin.index', ['updates'=> $updates, 'department' => $department]);
        return redirect("/admin-index/$idPage")->with(['updates' => $updates, 'department' => $department]);
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
    public function edit($idPost)
    {
        //
        // $user = Auth::user();
        // $id = Auth::id();
        // $department = $user->department;
        // $find = Update::find($idPost);

        // // echo $find->title; die;
        // return view('admin.edit_update', [
        //     'update' => $find,
        //     'department' => $department,
        // ]);
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        //
        if ($department == 'super_admin') {
            # code...
            $updates = Update::all();
            // $listRequest = Department::withCount('updates')->get();
        } else {

            $updates = Update::where('department_id', '=', $department)->withCount('department')->get();
            // $listRequest = Department::where('department_id', '=', $department)->withCount('updates')->get();
        }
        $listRequest = Department::withCount('updates')->get();
        $update = Update::find($idPost);
        // dd($listRequest);
        if ($department == 'super_admin') {
            return view('admin.before.index', [
                'updates' => $updates,
                'department' => $department,
                'listRequests' => $listRequest,
                'pageName' => 'Update',
                'pagePrefix' => 'admin-index',
                'updateTotal' => false,
                'update'=> false,
                'edit' => false,
            ]);
        } else {
            return view('admin.index', [
                'updates' => $updates,
                'department' => $department,
                'listRequests' => $listRequest,
                'pageName' => 'Update',
                'update'=> $update,
                'edit' => true,
                'updateTotal' => false,
                // 'idPage' => $department,
            ]);
            //         // $allDepartments = DepartmentAdminModel::all();
            //         $users = DB::table('updates')
            //         ->select('updates.id as last_post_created_at','department',DB::raw('count(department) as count'))
            //         // ->select('user_id', DB::raw('MAX(created_at) as last_post_created_at'))
            //         // ->where('is_published', true)
            //         ->groupBy('name');

            //     $users2 = DB::table('departments')
            //     ->joinSub($users, 'updates', function ($join) {
            //         $join->on('departments.department', '=', 'updates.department');
            //     })->get();

            //     $users1 = DB::table('updates')
            //     ->select('updates.id as last_post_created_at','department',DB::raw('count(department) as count'))
            //     // ->select('user_id', DB::raw('MAX(created_at) as last_post_created_at'))
            //     // ->where('is_published', true)
            //     ->groupBy('department');

            // $users22 = DB::table('departments')
            // ->joinSub($users1, 'updates', function ($join) {
            //     $join->on('departments.department', '!=', 'updates.department');
            // })->get();
            //         dd($users22);

            //         return view('admin.indexDepartmentList', [
            //             'updates'=> $updates, 
            //             'department' => $department,
            //             'allDepartments' => $allDepartments
            //         ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idPost)
    {
        // $error = static::validateRequest(
            // \Validator::make($request->all(), [
            //     'remarks' => 'required',
            // ]);
        // );
        //
        // $user = Auth::user();
        // $id = Auth::id();
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department;
        if ($department == 'super_admin') {
            # code...
            $updates = Update::all();
        } else {
            $updates = Update::where('department_id', '=', $department)->get();
        }
        $department = $user->department;
        $find = Update::find($idPost);
        if ($request->image) {
            # code...
            $imageName = time() . '.' . $request->image->extension();
            // $request->image->move(public_path('uploadImage/'.$department), $imageName);
            $image = $request->image;
            $destinationPath = public_path('updates/');
            // \File::mkdir($destinationPath);
            $img = Image::make($image->getRealPath());
            $img->resize(null, 600, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $imageName);
            $find->image = $imageName;
        }

        $find->title = $request->title;
        $find->description = $request->description;
        $find->description_local = $request->description_local;
        $find->is_approved = 2;
        $find->remarks = $request->remarks;

        $find->save();


        session()->flash('success', 'successfully update information');
        return redirect('/admin');
        // return view('admin.index', ['updates'=> $updates, 'department' => $department]);

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
