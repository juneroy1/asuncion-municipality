<?php

namespace App\Http\Controllers;
use App\DepartmentAdminModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Intervention\Image\ImageManagerStatic as Image;

class DepartmentAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function section()
    {
        //
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        //
        if ($department =='super_admin') {
            # code...
            $departments = DepartmentAdminModel::all();
        }else{
            $departments = DepartmentAdminModel::where('department_name', '=', $department)->with('department')->get();
        }

        $getAlldepartments = DepartmentAdminModel::all();

        return view('admin.department', ['departments'=> $departments,'department' => $department, 'showDepartmentsPart'=> true, 'getAlldepartments' => $getAlldepartments]);
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
            $departments = DepartmentAdminModel::all();
        }else{
            $departments = DepartmentAdminModel::where('department_name', '=', $department)->with('department')->get();
        }
        // dd($departments[3]);
        $getAlldepartments = DepartmentAdminModel::all();
        return view('admin.department', [
            'departments'=> $departments,
            'department' => $department, 
            'showDepartmentsPart'=> false, 
            'getAlldepartments' => $getAlldepartments,
            'updateTotal' => false,
            'update'=> false,
            'edit' => false,
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
        //
        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        // $imageName = time().'.'.$request->image->extension(); 
        // $request->image->move(public_path('images'), $imageName);
       
        // echo $imageName;die;
        $departments = DepartmentAdminModel::all();
        $member = new DepartmentAdminModel;
            if ($request->image) {
                $imageName = time().'.'.$request->image->extension(); 
                // $request->image->move(public_path('uploadImage/'.$department), $imageName);
                $image = $request->image;
                $destinationPath = public_path('departments/');
                // \File::mkdir($destinationPath);
                $img = Image::make($image->getRealPath());
                $img->resize(800,null,function($constraint){ $constraint->aspectRatio(); })->save($destinationPath.'/'.$imageName);
                $member->image = $imageName;
            }

            if ($request->image_wmask) {
                $imageName_image_wmask = time().'.'.$request->image_wmask->extension(); 
                // $request->image->move(public_path('uploadImage/'.$department), $imageName);
                $image = $request->image_wmask;
                $destinationPath = public_path('departments_image_wmask/');
                // \File::mkdir($destinationPath);
                $img = Image::make($image->getRealPath());
                $img->resize(800,null,function($constraint){ $constraint->aspectRatio(); })->save($destinationPath.'/'.$imageName_image_wmask);
                $member->image_wmask = $imageName_image_wmask;
            }

            if ($request->image_womask) {
                $imageName_image_womask = time().'.'.$request->image_womask->extension(); 
                // $request->image->move(public_path('uploadImage/'.$department), $imageName);
                $image = $request->image_womask;
                $destinationPath = public_path('departments_image_womask/');
                // \File::mkdir($destinationPath);
                $img = Image::make($image->getRealPath());
                $img->resize(800,null,function($constraint){ $constraint->aspectRatio(); })->save($destinationPath.'/'.$imageName_image_womask);
                $member->image_womask = $imageName_image_womask;
            }
        

            if ($request->department_id) {
               $member->department_id = $request->department_id;
            }


        $member->name = $request->name;
        $member->d_head_name = $request->d_head_name;
        $member->description = $request->description;
        $member->user_id = $id;
        $member->is_approved = 2;
        $member->department_name = $department;
        $member->type_office = $request->type_office;
        $member->save();
        session()->flash('success', 'successfully added new departments');
        return redirect()->back()->with(['departments'=>$departments]);
    }

    public function approve($idPost)
    {
        //
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        //

       
        // dd($department);
        if ($department =="super_admin") {
            # code...
            $departments = DepartmentAdminModel::all();
        }else{
            $departments = DepartmentAdminModel::where('department', '=', $department)->get();
        }

        if ($department !="super_admin") {
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
        $department = $user->department_admin_model_id;
        //

       

        if ($department =='super_admin') {
            # code...
            $departments = DepartmentAdminModel::all();
        }else{
            $departments = DepartmentAdminModel::where('department_id', '=', $department)->get();
        }

        if ($department !='super_admin') {
            # code...
            session()->flash('error', 'only the admin can access the approval');
            return redirect()->back()->with(['departments'=>$departments]);  
        }

        $find = DepartmentAdminModel::find($idPost);
        $find->is_approved = 3;
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
    public function edit($idPost)
    {
        //
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        
        $admint_department  = DepartmentAdminModel::find($idPost);
        // dd($admint_department);
        return view('admin.edit_department', ['admint_department'=> $admint_department,'department' => $department]);

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
        //
        $this->validate($request,[
            'image'=>'required',
            'description'=>'required',
            'department_name'=>'required',
            'remarks'=>'required',
         ]);
        $user = Auth::user();
        $id = Auth::id();
        $department = $user->department_admin_model_id;
        //
        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        // $imageName = time().'.'.$request->image->extension(); 
        // $request->image->move(public_path('images'), $imageName);
       
        // echo $imageName;die;
        $departments = DepartmentAdminModel::all();
        $member = DepartmentAdminModel::find($idPost);
            if ($request->image) {
                $imageName = time().'.'.$request->image->extension(); 
                // $request->image->move(public_path('uploadImage/'.$department), $imageName);
                $image = $request->image;
                $destinationPath = public_path('departments/');
                // \File::mkdir($destinationPath);
                $img = Image::make($image->getRealPath());
                $img->resize(800,null,function($constraint){ $constraint->aspectRatio(); })->save($destinationPath.'/'.$imageName);
                $member->image = $imageName;
            }

            if ($request->image_wmask) {
                $imageName_image_wmask = time().'.'.$request->image_wmask->extension(); 
                // $request->image->move(public_path('uploadImage/'.$department), $imageName);
                $image = $request->image_wmask;
                $destinationPath = public_path('departments_image_wmask/');
                // \File::mkdir($destinationPath);
                $img = Image::make($image->getRealPath());
                // ->resize(800,null,function($constraint){ $constraint->aspectRatio(); })
                $img->save($destinationPath.'/'.$imageName_image_wmask);
                $member->image_wmask = $imageName_image_wmask;
            }

            if ($request->image_womask) {
                $imageName_image_womask = time().'.'.$request->image_womask->extension(); 
                // $request->image->move(public_path('uploadImage/'.$department), $imageName);
                $image = $request->image_womask;
                $destinationPath = public_path('departments_image_womask/');
                // \File::mkdir($destinationPath);
                $img = Image::make($image->getRealPath());
                // ->resize(800,null,function($constraint){ $constraint->aspectRatio(); })
                $img->save($destinationPath.'/'.$imageName_image_womask);
                $member->image_womask = $imageName_image_womask;
            }
        


        $member->name = $request->name;
        // $member->d_head_name = $request->d_head_name;
        $member->description = $request->description;
        $member->user_id = $id;
        $member->is_approved = 2;
        $member->department_name = $department;
        $member->type_office = $request->type_office;
        $member->save();
        session()->flash('success', 'successfully updated departments');
        return redirect()->back()->with(['departments'=>$departments]);
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
