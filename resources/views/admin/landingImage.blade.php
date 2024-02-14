@extends('layouts.master_admin', ['title' => 'landingImage', 'subtitle' => ''])

@section('content')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row align-items-center">
                <div class="col-md-6 col-8 align-self-center">
                    <h3 class="page-title mb-0 p-0">{{ $edit ? 'Edit Landing Image' : 'Create Landing Image' }}</h3>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    {{ $edit ? 'Edit Landing Image' : 'Create Landing Image' }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
             
            </div>
        </div>
     
        <div class="container-fluid">
          
            <div class="row">
            @if (\Session::has('error'))
                    <div class="alert alert-danger">
                        <ul>
                            <li>{!! \Session::get('error') !!}</li>
                        </ul>
                    </div>
                @endif
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <ul>
                            <li>{!! \Session::get('success') !!}</li>
                        </ul>
                    </div>
                @endif
                @if ($department != 'super_admin')
                    <form method="POST" action="{{ $edit ? '/admin-landingImage-update/' . $update->id : '/landingImage' }}"
                        enctype="multipart/form-data" class="row">
                        @csrf
                        <div class="col-lg-4 col-xlg-3 col-md-5">
                            <div class="card">
                                <div class="card-body profile-card">
                                    <center class="mt-4">
                                        <img src="{{ $edit ? '/landing_images/' . $update->image : '/foradmin/assets/images/users/5.jpg' }}"
                                            width="150" />
                                        <h4 class="card-title mt-2">{{ $edit ? 'Update Image' : 'Upload an Image' }}</h4>
                                        <input type="file" name="image" class="form-control"  accept="image/*">
                                       
                                    </center>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8 col-xlg-9 col-md-7">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-horizontal form-material mx-2">
                                        
                                        <div class="form-group">
                                            <label class="col-md-12 mb-0">Title</label>
                                            <div class="col-md-12">
                                                <input name="title" value="{{ $edit ? $update->title : '' }}" type="text"
                                                    placeholder="Title of the update"
                                                    class="form-control ps-0 form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12 mb-0">Description</label>
                                            <div class="col-md-12">
                                                <textarea name="subtitle" rows="5"
                                                    class="form-control ps-0 form-control-line">{{ $edit ? $update->subtitle : '' }}</textarea>
                                            </div>
                                        </div>
                                        @if ($edit)
                                            <div class="form-group">
                                                <label class="col-md-12 mb-0">Remarks
                                                    <span style="color:red">*</span>
                                                </label>
                                                <div class="col-md-12">
                                                    <textarea name="remarks" rows="5"
                                                        class="form-control ps-0 form-control-line">{{ $edit ? $update->remarks : '' }}</textarea>
                                                </div>
                                            </div>
                                        @endif
                                      
                                        <div class="form-group">
                                            <div class="col-sm-12 d-flex">
                                                <button type="submit"
                                                    class="btn btn-success mx-auto mx-md-0 text-white">Submit Landing
                                                    Image</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </form>
                @endif
                @if (!$edit)
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">List of Landing Image</h4>
                                <div class="table-responsive">
                                    <form action="/admin-functionalities/update-priority" method="POST">

                                    @csrf
                                   
                                    <table class="table user-table">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">#</th>
                                                <th class="border-top-0">Image</th>
                                                <th class="border-top-0">Title</th>
                                                <th class="border-top-0">Description</th>
                                                <th class="border-top-0">Remarks</th>
                                                <th class="border-top-0">Status</th>
                                                <th class="border-top-0">Priority</th>
                                                <th class="border-top-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($landingImage as $update)
                                                <tr>
                                                    <td>1</td>
                                                    <td><img width="200" src='../../landing_images/{{ $update->image }}'>
                                                    </td>
                                                    <td>{{ $update->title }}</td>
                                                    <td>{{ $update->subtitle }}</td>
                                                    <td>{{ $update->remarks }}
                                                        @if ($update->remarks && $update->is_approved == 0)
                                                            <span style="color: red">Not Approve</span>
                                                        @endif
                                                    </td>
                                                    <td
                                                        style="{{ $update->is_approved == 1? 'background:blue;color:white': ($update->is_approved == 2? 'background:green;color:white': 'background:red;color:white') }}">
                                                        {{ $update->is_approved == 1 ? 'Approved' : ($update->is_approved == 2 ? 'Pending' : 'Disapproved') }}
                                                        {{-- {{$update->is_approved == 3 ?$update->remarks:''}} --}}
                                                    </td>
                                                    <td>
                                                    <input class="w-50" type="number" name="priority[{{ $update->id }}]" value="{{ $update->priority }}">
                                                    </td>
                                                    <td>
                                                        @if ($department == 'super_admin')
                                                            {{-- @if ($update->is_approved == 0) --}}
                                                            {{-- href="/approve-landingImage/{{$update->id}}" --}}
                                                            {{-- href="/remove-landingImage/{{$update->id}}" --}}
                                                            <a class="btn btn-primary" style="color:white"
                                                                onclick="approve({{ $update->id }},{{ $idPage }})">Approve</a>

                                                            <a class="btn btn-danger" style="color:white"
                                                                onclick="disapprove({{ $update->id }},{{ $idPage }})">Disapprove</a>
                                                            {{-- @endif --}}
                                                        @else
                                                            <a class="btn btn-primary"
                                                                href="/admin-landingImage-edit/{{ $update->id }}"
                                                                style="color:white">Edit</a>

                                                            {{-- <a class="btn btn-danger" style="color:white">Delete</a> --}}
                                                            {{-- @endif --}}
                                                        @endif

                                                    </td>
                                                    {{-- <td><a href="/unapproved">Hide</a></td> --}}
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <button type="submit">Update Priorities</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <!-- Column -->
            </div>
            <!-- Row -->
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer"> © 2021 Test <a href="#"></a>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <script>
        function disapprove(id, idpage) {
            let confirm_Final = confirm("Do you really want to DISAPPROVE?");
            if (confirm_Final) {
                window.location.href = "/admin-remarks/" + id + "/" + idpage + "/LandingImage"
                // window.location.href = "/admin-remarks/"+id+"/"+idpage
            }

            // alert(id+" "+idpage);
            // document.getElementById("demo").style.color = "red";
        }

        function approve(id, idpage) {
            let confirm_Final = confirm("Do you really want to APPROVE?");
            if (confirm_Final) {
                window.location.href = "/approve-landingImage/" + id
            }

            // alert(id+" "+idpage);
            // document.getElementById("demo").style.color = "red";
        }
    </script>
@stop
