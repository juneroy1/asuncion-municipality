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
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAllOfficials()
    {
        //
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department;
        //
        // if ($department =='super_admin') {
            # code...
            $officials = OfficialsAdmin::all();
        // }else{
        //     $officials = OfficialsAdmin::where('department', '=', $department)->get();
        // }

        return view('officials', ['officials'=> $officials,'department' => $department]);
    }

    public function showAllLegislative()
    {
        //
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department;
        //
        // if ($department =='super_admin') {
            # code...
            $officials = OfficialsAdmin::all();
        // }else{
        //     $officials = OfficialsAdmin::where('department', '=', $department)->get();
        // }

        return view('legislative', ['officials'=> $officials,'department' => $department]);
    }

    public function viewOfficial($type,$idOfficial){

        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department;
        $official = OfficialsAdmin::find($idOfficial);
        return view('view_official', ['official'=> $official,'department' => $department,'type' => $type,]);
    }

    
    
    public function index()
    {
        //
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department;
        //
        if ($department =='super_admin') {
            # code...
            $officials = OfficialsAdmin::all();
        }else{
            $officials = OfficialsAdmin::where('department', '=', $department)->get();
        }

        return view('admin.officials_admin', ['officials'=> $officials,'department' => $department]);
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
        $destinationPath = public_path('officials/');
        // \File::mkdir($destinationPath);
        $img = Image::make($image->getRealPath());
        $img->resize(null,800,function($constraint){ $constraint->aspectRatio(); })->save($destinationPath.'/'.$imageName);
        // echo $imageName;die;
        $officials = OfficialsAdmin::all();
        $member = new OfficialsAdmin;
        $member->image = $imageName;
        $member->first_name = $request->first_name;
        $member->last_name = $request->last_name;
        $member->position = $request->position;
        // $member->address = '';//$request->address;
        // $member->birthdate = ''; //$request->birthdate;
        // $member->religion = '';//$request->religion;
        // $member->educational_attainment =''; //$request->educational_attainment;
        // $member->course = '';//$request->course;
        // $member->others = '';//$request->others;
        $member->user_id = $id;
        $member->is_approved = 1;
        $member->department = $department;
        $member->save();
        session()->flash('success', 'successfully added new officials');
        return redirect()->back()->with(['officials'=>$officials]);
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
            $officials = OfficialsAdmin::all();
        }else{
            $officials = OfficialsAdmin::where('department', '=', $department)->get();
        }

        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['officials'=>$officials]);  
        }
        $find = Member::find($idPost);
        $find->is_approved = 1;
        $find->save();


        session()->flash('success', 'successfully approved Official');
        return redirect()->back()->with(['officials'=>$officials]);  
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
            $officials = OfficialsAdmin::all();
        }else{
            $officials = OfficialsAdmin::where('department', '=', $department)->get();
        }

        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['officials'=>$officials]);  
        }

        $find = Member::find($idPost);
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
