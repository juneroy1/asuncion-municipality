<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OrganizationalChart;
use Illuminate\Support\Facades\Auth;
use App\Department;
use Intervention\Image\ImageManagerStatic as Image;

class OrganizationalChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAdmin($department){
        $org_charts = OrganizationalChart::where('department_id', '=', $department)->get();
        $user = Auth::user();
        $id = Auth::id();
        $departmentUser = $user->department_admin_model_id;
        // dd($departmentUser);
        return view('admin.organizational_chart', [
            'org_charts'=> $org_charts, 
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
            $org_charts = OrganizationalChart::all();
        }else{
            $org_charts = OrganizationalChart::where('department_id', '=', $department)->get();
        }

        $listRequest = Department::withCount('organizationalChart')->get();
        $update = $idPost? OrganizationalChart::find($idPost):false;
        // dd($listRequest);
        if ($department =='super_admin') {
            return view('admin.before.index', [
                'updates'=> $org_charts, 
                'department' => $department,
                'listRequests' => $listRequest,
                'pageName' => 'Organizational Chart',
                'pagePrefix' => 'org-chart-office',
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
            return view('admin.organizational_chart', [
                'org_charts'=> $org_charts, 
                'department' => $department,
                'listRequests' => $listRequest,
                'pageName' => 'Organizational Chart',
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

        // return view('admin.organizational_chart', ['org_charts'=> $org_charts,'department' => $department]);

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
        //
        $this->validate($request,[
            'image'=>'required',
            'name'=>'required',
            'discription'=>'required',
         ]);
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        $org_charts = OrganizationalChart::all();
        $update = $idPost? OrganizationalChart::find($idPost): new OrganizationalChart;

        if ($request->image) {
            //
            // $request->validate([
            //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // ]);
            $imageName = time().'.'.$request->image->extension(); 
            // $request->image->move(public_path('uploadImage/'.$department), $imageName);
            $image = $request->image;
            $destinationPath = public_path('organizational_charts/');
            // \File::mkdir($destinationPath);
            $img = Image::make($image->getRealPath());
            $img->resize(null,800,function($constraint){ $constraint->aspectRatio(); })->save($destinationPath.'/'.$imageName);
            // $img->move($destinationPath, $imageName);
            // $destinationPath = public_path('uploadImage/'.$department);
            // $image->move($destinationPath, $imageName);
            // echo $imageName;die;
            
            $update->image = $imageName;
        }
       
        $update->name = $request->name;
        $update->discription = $request->discription;
        $update->user_id = $id;
        $update->is_approved = 2;
        $update->department_id = $department;
        $update->remarks = $request->remarks;
        $update->save();
        session()->flash('success', $idPost?'successfully update organizational chart':'successfully added new organizational chart');
        return redirect('/org-chart-office')->with(['org_charts'=> $org_charts,'department' => $department]); 
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
            $org_charts = OrganizationalChart::all();
        }else{
            $org_charts = OrganizationalChart::where('department_id', '=', $department)->get();
        }

        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['org_charts'=>$org_charts]);  
        }
        $find = OrganizationalChart::find($idPost);
        $find->is_approved = 1;
        $find->remarks = "";
        $find->save();


        session()->flash('success', 'successfully approved landing Image');
        return redirect()->back()->with(['org_charts'=>$org_charts]);  
    }

    public function remove(Request $request,$idPost, $idPage)
    {
        //
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        //

       

        if ($department =='super_admin') {
            # code...
            $org_charts = OrganizationalChart::all();
        }else{
            $org_charts = OrganizationalChart::where('department_id', '=', $department)->get();
        }

        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['org_charts'=>$org_charts]);  
        }

        $find = OrganizationalChart::find($idPost);
        $find->is_approved = 3;
        $find->remarks = $request->remarks;
        $find->save();

        session()->flash('success', 'successfully removed DepartmentFunctionality');
        return redirect("/org-chart-office/$idPage");

        // return redirect()->back()->with(['org_charts'=>$org_charts]);  
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
