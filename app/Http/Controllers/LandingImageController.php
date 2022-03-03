<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LandingImage;
use App\Department;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;
class LandingImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewLandingImage($id){
        $landingImage = LandingImage::find($id);
        return view('announcement.view', [
            'update'=> $landingImage, 
        ]);
        // dd($landingImage);
    }
    public function indexAdmin($department){
        $landingImage = LandingImage::where('department_id', '=', $department)->get();
        $user = Auth::user();
        $id = Auth::id();
        $departmentUser = $user->department_admin_model_id;
        // dd($departmentUser);
        return view('admin.landingImage', [
            'landingImage'=> $landingImage, 
            'department' => $departmentUser,
            'idPage' => $department,
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
            $landingImage = LandingImage::all();
        }else{
            $landingImage = LandingImage::where('department_id', '=', $department)->get();
        }

        $listRequest = Department::withCount('landingImage')->get();
        // dd($listRequest);
        if ($department =='super_admin') {
            return view('admin.before.index', [
                'updates'=> $landingImage, 
                'department' => $department,
                'listRequests' => $listRequest,
                'pageName' => 'Landing Image',
                'pagePrefix' => 'admin-landingImage'
            ]);
        }else{
            return view('admin.landingImage', [
                'landingImage'=> $landingImage, 
                'department' => $department,
                'listRequests' => $listRequest,
                'pageName' => 'Landing Image'
            ]);
        }

        // return view('admin.landingImage', ['landingImage'=> $landingImage,'department' => $department]);
    }

    public function indexRd()
    {
        //
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department;
        //
        if ($department =='super_admin') {
            # code...
            $landingImage = LandingImage::all();
        }else{
            $landingImage = LandingImage::where('department', '=', $department)->get();
        }

        return view('admin.landingImage', ['landingImage'=> $landingImage,'department' => $department]);
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
        $imageName = time().'.'.$request->image->extension(); 
        // $request->image->move(public_path('uploadImage/'.$department), $imageName);
        $image = $request->image;
        $destinationPath = public_path('landing_images/');
        // \File::mkdir($destinationPath);
        $img = Image::make($image->getRealPath());
        $img->resize(2000,null,function($constraint){ $constraint->aspectRatio(); })->save($destinationPath.'/'.$imageName);
        // $img->move($destinationPath, $imageName);
        // $destinationPath = public_path('uploadImage/'.$department);
        // $image->move($destinationPath, $imageName);
        // echo $imageName;die;
        $landingImage = LandingImage::all();
        $update = new LandingImage;
        $update->image = $imageName;
        $update->title = $request->title;
        $update->subtitle = $request->subtitle;
        $update->user_id = $id;
        $update->is_approved = 2;
        $update->department_id = $department;
        $update->save();
        session()->flash('success', 'successfully added new lading pages');
        return redirect()->back()->with(['landingImage'=> $landingImage,'department' => $department]); 
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
            $landingImage = LandingImage::all();
        }else{
            $landingImage = LandingImage::where('department_id', '=', $department)->get();
        }

        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['landingImage'=>$landingImage]);  
        }
        $find = LandingImage::find($idPost);
        $find->is_approved = 1;
        $find->remarks = "";
        $find->save();


        session()->flash('success', 'successfully approved landing Image');
        return redirect()->back()->with(['landingImage'=>$landingImage]);  
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
            $landingImage = LandingImage::all();
        }else{
            $landingImage = LandingImage::where('department_id', '=', $department)->get();
        }

        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['functionalities'=>$functionalities]);  
        }

        $find = LandingImage::find($idPost);
        $find->is_approved = 3;
        $find->remarks = $request->remarks;
        $find->save();

        session()->flash('success', 'successfully removed DepartmentFunctionality');
        return redirect("/admin-landingImage/$idPage");
        // return redirect()->back()->with(['landingImage'=>$landingImage]);  
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
