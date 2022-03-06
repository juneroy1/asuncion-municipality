<?php

namespace App\Http\Controllers;
use App\BarangayModel;
use Illuminate\Support\Facades\Auth;

use Intervention\Image\ImageManagerStatic as Image;
use App\Department;
use Illuminate\Http\Request;

class BarangayController extends Controller
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
        $barangays = BarangayModel::where('department_id', '=', $department)->get();
        $user = Auth::user();
        $id = Auth::id();
        $departmentUser = $user->department_admin_model_id;
        // dd($departmentUser);
        return view('admin.baranggay', [
            'barangays'=> $barangays, 
            'department' => $departmentUser,
            'idPage' => $department,
        ]);
    }
    public function index($idPost = false)
    {
        //
         //
         $user = Auth::user();
         $id = Auth::id();
         $department = $user->department_admin_model_id;
         //
         if ($department =='super_admin') {
             # code...
             $barangays = BarangayModel::all();
         }else{
             $barangays = BarangayModel::where('department_id', '=', $department)->get();
         }
        
         $listRequest = Department::withCount('barangays')->get();
         $update = $idPost? BarangayModel::find($idPost):false;
        //  dd($listRequest);
         if ($department =='super_admin') {
            return view('admin.before.index', [
                'updates'=> $barangays, 
                'department' => $department,
                'listRequests' => $listRequest,
                'pageName' => 'Barangay',
                'pagePrefix' => 'admin-barangay'
            ]);
        }else{
            return view('admin.baranggay', [
                'barangays'=> $barangays, 
                'department' => $department,
                'listRequests' => $listRequest,
                'pageName' => 'Barangay',
                'update' => $update,
                'edit' => $idPost? true:false,
                // 'idPage' => $department,
            ]);
 
        }
 
        //  return view('admin.baranggay', ['barangays'=> $barangays,'department' => $department]);
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
    public function store(Request $request, $idPost)
    {
        //
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        $barangays = BarangayModel::all();
        $member = $idPost? BarangayModel::find($idPost):  new BarangayModel;

        if ($request->image) {
            # code...
            //
            // $request->validate([
            //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // ]);
            // $imageName = time().'.'.$request->image->extension(); 
            // $request->image->move(public_path('images'), $imageName);
            $imageName = time().'.'.$request->image->extension(); 
            // $request->image->move(public_path('uploadImage/'.$department), $imageName);
            $image = $request->image;
            $destinationPath = public_path('barangay/');
            // \File::mkdir($destinationPath);
            $img = Image::make($image->getRealPath());
            $img->resize(null,800,function($constraint){ $constraint->aspectRatio(); })->save($destinationPath.'/'.$imageName);
            // echo $imageName;die;
        
            $member->image = $imageName;
        }
        
        $member->name = $request->name;
        $member->user_id = $id;
        $member->is_approved = 2;
        $member->department_id = $department;
        $member->remarks = $request->remarks;
        $member->save();
        session()->flash('success', $idPost? 'successfully update barangay':'successfully added new barangay');
        return redirect('/admin-barangay')->with(['barangays'=>$barangays]);
    }

    public function approve($idPost)
    {
        // dd('dada');
        //
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        //
       
       

        if ($department =='super_admin') {
            # code...
            $barangays = BarangayModel::all();
        }else{
            $barangays = BarangayModel::where('department_id', '=', $department)->get();
        }

        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['barangays'=>$barangays]);  
        }
        $find = BarangayModel::find($idPost);
        $find->is_approved = 1;
        $find->remarks = "";
        $find->save();


        session()->flash('success', 'successfully approved barangay');
        return redirect()->back()->with(['barangays'=>$barangays]);  
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
            $barangays = BarangayModel::all();
        }else{
            $barangays = BarangayModel::where('department_id', '=', $department)->get();
        }

        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['barangays'=>$barangays]);  
        }

        $find = BarangayModel::find($idPost);
        $find->is_approved = 3;
        $find->remarks = $request->remarks;
        $find->save();

        session()->flash('success', 'successfully removed barangay Official');
        return redirect("/admin-barangay/$idPage");
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
