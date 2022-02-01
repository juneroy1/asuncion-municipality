<?php

namespace App\Http\Controllers;

use App\NationalOfficeAdminModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Intervention\Image\ImageManagerStatic as Image;

class NationalOfficeController extends Controller
{
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
        $department = $user->department;
        //
        if ($department =='super_admin') {
            # code...
            $nationalOffices = NationalOfficeAdminModel::all();
        }else{
            $nationalOffices = NationalOfficeAdminModel::where('department', '=', $department)->get();
        }

        return view('admin.nationalOffice', ['nationalOffices'=> $nationalOffices,'department' => $department]);
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
        $department = $user->department;
        //
        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        // $imageName = time().'.'.$request->image->extension(); 
        // $request->image->move(public_path('images'), $imageName);
        $imageName = time().'.'.$request->image->extension(); 
        // $request->image->move(public_path('uploadImage/'.$department), $imageName);
        $image = $request->image;
        $destinationPath = public_path('nationalOffices/');
        // \File::mkdir($destinationPath);
        $img = Image::make($image->getRealPath());
        $img->resize(800,null,function($constraint){ $constraint->aspectRatio(); })->save($destinationPath.'/'.$imageName);
        // echo $imageName;die;
        $nationalOffices = NationalOfficeAdminModel::all();
        $member = new NationalOfficeAdminModel;
        $member->image = $imageName;
        $member->name = $request->name;
        $member->description = $request->description;
        $member->user_id = $id;
        $member->is_approved = 0;
        $member->department = $department;
        $member->save();
        session()->flash('success', 'successfully added new national office');
        return redirect()->back()->with(['nationalOffices'=>$nationalOffices]);
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
            $departments = DepartmentAdminModel::all();
        }else{
            $departments = DepartmentAdminModel::where('department', '=', $department)->get();
        }

        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['departments'=>$departments]);  
        }
        $find = DepartmentAdminModel::find($idPost);
        $find->is_approved = 1;
        $find->save();


        session()->flash('success', 'successfully approved department');
        return redirect()->back()->with(['departments'=>$departments]);  
    }

    public function remove($idPost)
    {
        //
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department;
        //

       

        if ($department =='super_admin') {
            # code...
            $departments = DepartmentAdminModel::all();
        }else{
            $departments = DepartmentAdminModel::where('department', '=', $department)->get();
        }

        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['departments'=>$departments]);  
        }

        $find = DepartmentAdminModel::find($idPost);
        $find->is_approved = 0;
        $find->save();

        session()->flash('success', 'successfully removed department');
        return redirect()->back()->with(['departments'=>$departments]);  
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
