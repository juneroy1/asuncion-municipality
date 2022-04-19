<?php

namespace App\Http\Controllers;

use App\Deploy;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DeployController extends Controller
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
      
            $deploy = Deploy::first();
            if (!$deploy) {
                # code...
                $deploy = new Deploy;
                $deploy->is_deploy = 0;
                $deploy->message = 0;
                $deploy->user_id = 'department';
                $deploy->save();
            }
            $deploys = Deploy::all();
            // foreach ($deploys as $key => $deploy) {
            //     # code...
            //     $update = Deploy::find($deploy->id);
            //     $
            // }
            // dd($deploy);

        //
         return view('admin.deploy', [
            'deploy'=> $deploy, 
            'department' => $department,
            'pageName' => 'Deploy',
            'pagePrefix' => 'deploy',
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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;

        $deploy = Deploy::first();
        $deploy_id = $deploy->id;

        if ($department != 'super_admin') {
            # code...
            session()->flash('error', 'only the super admin can access the deployment');
            return redirect()->back();
        }

        $update = Deploy::find($deploy_id);
        $update->is_deploy = 1;
        $update->save();

        session()->flash('success', 'Successfully deploy the website, please check it in the home');
        return redirect()->back();  
        //
    }

    public function revert(Request $request)
    {
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;

        $deploy = Deploy::first();
        $deploy_id = $deploy->id;

        if ($department != 'super_admin') {
            # code...
            session()->flash('error', 'only the super admin can access the deployment');
            return redirect()->back();
        }

        $update = Deploy::find($deploy_id);
        $update->is_deploy = 0;
        $update->save();

        session()->flash('success', 'Successfully REVERT DEPLOY the website, please check it in the home');
        return redirect()->back();  
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
