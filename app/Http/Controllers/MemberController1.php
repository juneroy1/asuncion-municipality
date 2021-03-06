<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use Illuminate\Support\Facades\Auth;
class MemberController extends Controller
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
        $department = $user->department;
        //
        if ($department =='super_admin') {
            # code...
            $members = Member::all();
        }else{
            $members = Member::where('department', '=', $department)->get();
        }

        return view('admin.member', ['members'=> $members,'department' => $department]);
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
        $imageName = time().'.'.$request->image->extension(); 
        $request->image->move(public_path('images'), $imageName);
        // echo $imageName;die;
        $members = Member::all();
        $member = new Member;
        $member->image = $imageName;
        $member->first_name = $request->first_name;
        $member->last_name = $request->last_name;
        $member->position = $request->position;
        $member->address = $request->address;
        $member->birthdate = $request->birthdate;
        $member->religion = $request->religion;
        $member->educational_attainment = $request->educational_attainment;
        $member->course = $request->course;
        $member->others = $request->others;
        $member->user_id = $id;
        $member->is_approved = 0;
        $member->department = $department;
        $member->save();
        session()->flash('success', 'successfully added new member');
        return redirect()->back()->with(['members'=>$members]);  
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
            $members = Member::all();
        }else{
            $members = Member::where('department', '=', $department)->get();
        }

        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['members'=>$members]);  
        }
        $find = Member::find($idPost);
        $find->is_approved = 1;
        $find->save();


        session()->flash('success', 'successfully approved member');
        return redirect()->back()->with(['members'=>$members]);  
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
            $anns = Member::all();
        }else{
            $anns = Member::where('department', '=', $department)->get();
        }

        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['anns'=>$anns]);  
        }

        $find = Member::find($idPost);
        $find->is_approved = 0;
        $find->save();

        session()->flash('success', 'successfully removed Member');
        return redirect()->back()->with(['anns'=>$anns]);  
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
