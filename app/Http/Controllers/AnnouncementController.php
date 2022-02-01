<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Update;
use App\Announcement;
use App\Department;
use Illuminate\Support\Facades\Auth;

class AnnouncementController extends Controller
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
        $anns = Announcement::where('department_id', '=', $department)->withCount('department')->get();
        $user = Auth::user();
        $id = Auth::id();
        $departmentUser = $user->department_admin_model_id;
        // dd($departmentUser);
        return view('admin.announcement', [
            'anns'=> $anns, 
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
            $anns = Announcement::all();
        }else{
            $anns = Announcement::where('department_id', '=', $department)->get();
        }
        $listRequest = Department::withCount('announcement')->get();

        // dd($listRequest);
        if ($department =='super_admin') {
            return view('admin.before.index', [
                'updates'=> $anns, 
                'department' => $department,
                'listRequests' => $listRequest,
                'pageName' => 'Announcement',
                'pagePrefix' => 'admin-announcement'
            ]);
        }else{
            return view('admin.announcement', [
                'anns'=> $anns, 
                'department' => $department,
                'listRequests' => $listRequest,
                'pageName' => 'Announcement'
            ]);
        }
        
        // return view('admin.announcement', ['anns'=> $anns,'department' => $department]);
    }

    public function indexAnnouncement($department)
    {
        $anns = Announcement::where('department_id', '=', $department)->withCount('announcement')->get();
        $user = Auth::user();
        $id = Auth::id();
        $departmentUser = $user->department_admin_model_id;
        // dd($departmentUser);
        return view('admin.announcement', [
            'anns'=> $anns, 
            'department' => $departmentUser,
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
        $imageName = time().'.'.$request->image->extension(); 
        $request->image->move(public_path('images'), $imageName);

        $anns = Announcement::all();
        // save announcement
        $ann = new Announcement;
        
        $ann->image = $imageName;
        $ann->title = $request->title;
        $ann->description = $request->description;
        $ann->is_approved = 2;
        $ann->user_id = $id;
        $ann->department_id = $department;
        $ann->save();

        session()->flash('success', 'successfully added new announcement');
        return redirect()->back()->with(['anns'=>$anns]);  
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
            $anns = Announcement::all();
        }else{
            $anns = Announcement::where('department_id', '=', $department)->get();
        }

        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['anns'=>$anns]);  
        }
        $find = Announcement::find($idPost);
        $find->is_approved = 1;
        $find->remarks = "";
        $find->save();


        session()->flash('success', 'successfully approved announcement');
        return redirect()->back()->with(['anns'=>$anns]);  
    }

    public function remove(Request $request, $idPost, $idPage)
    {
        // dd('dadadada');
        //
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        //

       

        if ($department =='super_admin') {
            # code...
            $anns = Announcement::all();
        }else{
            $anns = Announcement::where('department_id', '=', $department)->get();
        }
        
        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['anns'=>$anns]);  
        }

        $find = Announcement::find($idPost);
        $find->is_approved = 3;
        $find->remarks = $request->remarks;
        $find->save();

        session()->flash('success', 'successfully removed announcement');
        return redirect("admin-announcement/$idPage");
        // return redirect()->back()->with(['anns'=>$anns]);  
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
