@extends('layouts.master_admin', ['title' => 'landingImage', 'subtitle' => ''])

@section('content')
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row align-items-center">
                <div class="col-md-6 col-8 align-self-center">
                    <h3 class="page-title mb-0 p-0">Create Department</h3>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Create Department</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- <div class="col-md-6 col-4 align-self-center">
                                        <div class="text-end upgrade-btn">
                                            <a href="https://www.wrappixel.com/templates/materialpro/"
                                                class="btn btn-danger d-none d-md-inline-block text-white" target="_blank">Upgrade to
                                                Pro</a>
                                        </div>
                                    </div> -->
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <!-- Row -->
            <div class="row">
                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <ul>
                            <li>{!! \Session::get('success') !!}</li>
                        </ul>
                    </div>
                @endif
                @if (\Session::has('error'))
                    <div class="alert alert-danger">
                        <ul>
                            <li>{!! \Session::get('error') !!}</li>
                        </ul>
                    </div>
                @endif
                @if ($department != 'super_admin')
                    <form method="POST" action="/department-create" enctype="multipart/form-data" class="row">
                        @csrf
                        <!-- Column -->
                        <div class="col-lg-4 col-xlg-3 col-md-5">
                            <div class="card">
                                <div class="card-body profile-card">
                                    <center class="mt-4">
                                        <img src="/foradmin/assets/images/users/5.jpg" class="rounded-circle" width="150" />
                                        <h4 class="card-title mt-2">Upload an Image</h4>
                                        <input type="file" name="image" class="form-control">
                                        <!-- <h6 class="card-subtitle"></h6> -->
                                        <!-- <div class="row text-center justify-content-center">
                                                        <div class="col-4">
                                                            <a href="javascript:void(0)" class="link">
                                                                <i class="icon-people" aria-hidden="true"></i>
                                                                <span class="value-digit">254</span>
                                                            </a></div>
                                                        <div class="col-4">
                                                            <a href="javascript:void(0)" class="link">
                                                                <i class="icon-picture" aria-hidden="true"></i>
                                                                <span class="value-digit">54</span>
                                                            </a></div>
                                                    </div> -->
                                    </center>
                                </div>

                                <div class="card-body profile-card">
                                    <center class="mt-4">
                                        {{-- <img src="/foradmin/assets/images/users/5.jpg"
                                            class="rounded-circle" width="150" /> --}}
                                        <h4 class="card-title mt-2">Upload an Image for with mask</h4>
                                        <input type="file" name="image_wmask" class="form-control">
                                        <!-- <h6 class="card-subtitle"></h6> -->
                                        <!-- <div class="row text-center justify-content-center">
                                                        <div class="col-4">
                                                            <a href="javascript:void(0)" class="link">
                                                                <i class="icon-people" aria-hidden="true"></i>
                                                                <span class="value-digit">254</span>
                                                            </a></div>
                                                        <div class="col-4">
                                                            <a href="javascript:void(0)" class="link">
                                                                <i class="icon-picture" aria-hidden="true"></i>
                                                                <span class="value-digit">54</span>
                                                            </a></div>
                                                    </div> -->
                                    </center>
                                </div>

                                <div class="card-body profile-card">
                                    <center class="mt-4">
                                        {{-- <img src="/foradmin/assets/images/users/5.jpg"
                                            class="rounded-circle" width="150" /> --}}
                                        <h4 class="card-title mt-2">Upload an Image for w/o mask</h4>
                                        <input type="file" name="image_womask" class="form-control">
                                        <!-- <h6 class="card-subtitle"></h6> -->
                                        <!-- <div class="row text-center justify-content-center">
                                                        <div class="col-4">
                                                            <a href="javascript:void(0)" class="link">
                                                                <i class="icon-people" aria-hidden="true"></i>
                                                                <span class="value-digit">254</span>
                                                            </a></div>
                                                        <div class="col-4">
                                                            <a href="javascript:void(0)" class="link">
                                                                <i class="icon-picture" aria-hidden="true"></i>
                                                                <span class="value-digit">54</span>
                                                            </a></div>
                                                    </div> -->
                                    </center>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->

                        <div class="col-lg-8 col-xlg-9 col-md-7">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-horizontal form-material mx-2">
                                        <!-- <div class="form-group">
                                                        <label class="col-md-12 mb-0">Full Name</label>
                                                        <div class="col-md-12">
                                                            <input type="text" placeholder="Johnathan Doe"
                                                                class="form-control ps-0 form-control-line">
                                                        </div>
                                                    </div> -->
                                        <!-- <div class="form-group">
                                                        <label for="example-email" class="col-md-12">Email</label>
                                                        <div class="col-md-12">
                                                            <input type="email" placeholder="johnathan@admin.com"
                                                                class="form-control ps-0 form-control-line" name="example-email"
                                                                id="example-email">
                                                        </div>
                                                    </div> -->
                                        <!-- <div class="form-group">
                                                        <label class="col-md-12 mb-0">Password</label>
                                                        <div class="col-md-12">
                                                            <input type="password" value="password"
                                                                class="form-control ps-0 form-control-line">
                                                        </div>
                                                    </div> -->
                                        <div class="form-group">
                                            <label class="col-md-12 mb-0">Department Name</label>
                                            <div class="col-md-12">
                                                <input name="name" type="text" placeholder="Title of the update"
                                                    class="form-control ps-0 form-control-line">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-12 mb-0">Department Head Name</label>
                                            <div class="col-md-12">
                                                <input name="d_head_name" type="text" placeholder="Title of the update"
                                                    class="form-control ps-0 form-control-line">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-12 mb-0">Department Description</label>
                                            <div class="col-md-12">
                                                <input name="description" type="text" placeholder="Title of the update"
                                                    class="form-control ps-0 form-control-line">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-12 mb-0">Type of Office</label>
                                            <div class="col-md-12">
                                                <select name="type_office" class="form-select"
                                                    aria-label="Default select example">
                                                    <option value="1" selected>Executive</option>
                                                    <option value="2">Legislative</option>
                                                </select>
                                            </div>
                                        </div>

                                        @if ($showDepartmentsPart)
                                            <div class="form-group">
                                                <label class="col-md-12 mb-0">Select Department Part</label>
                                                <div class="col-md-12">
                                                    <select name="department_id" class="form-select"
                                                        aria-label="Default select example">
                                                        @foreach ($getAlldepartments as $department)
                                                            <option value="{{ $department->id }}" >
                                                                {{ $department->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        @endif




                                        <!-- <div class="form-group">
                                                        <label class="col-sm-12">Select Country</label>
                                                        <div class="col-sm-12 border-bottom">
                                                            <select class="form-select shadow-none ps-0 border-0 form-control-line">
                                                                <option>London</option>
                                                                <option>India</option>
                                                                <option>Usa</option>
                                                                <option>Canada</option>
                                                                <option>Thailand</option>
                                                            </select>
                                                        </div>
                                                    </div> -->
                                        <div class="form-group">
                                            <div class="col-sm-12 d-flex">
                                                <button type="submit"
                                                    class="btn btn-success mx-auto mx-md-0 text-white">Submit
                                                    Department</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </form>
                @endif
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">List of Department</h4>
                            <!-- <h6 class="card-subtitle">Add class <code>.table</code></h6> -->
                            <div class="table-responsive">
                                <table class="table user-table">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            {{-- <th class="border-top-0">Image</th> --}}
                                            <th class="border-top-0">Title</th>
                                            <th class="border-top-0">Description</th>
                                            <th class="border-top-0">Department Section</th>
                                            <th class="border-top-0">Status</th>
                                            <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- {{$departments[3]->department}} --}}
                                        @foreach ($departments as $department_one)
                                            <tr>
                                                <td>1</td>
                                                {{-- <td><img width="200"  src='departments/{{$department_one->image}}'></td> --}}
                                                <td>{{ $department_one->name }}</td>
                                                <td>{{ $department_one->description }}</td>
                                                <td>{{ $department_one->department?$department_one->department->name: ''  }}</td>
                                                <td
                                                    style="{{ $department_one->is_approved == 1? 'background:blue;color:white': ($department_one->is_approved == 2? 'background:green;color:white': 'background:red;color:white') }}">
                                                    {{ $department_one->is_approved == 1? 'Approved': ($department_one->is_approved == 2? 'Pending': 'Disapproved') }}
                                                    {{-- {{ $department_one->is_approved == 2 ? $department_one->is_approved : '' }} --}}
                                                </td>



                                                <td>
                                                    @if ($department == 'super_admin')
                                                        <a class="btn btn-primary"
                                                            href="/department-edit/{{ $department_one->id }}">Edit</a>
                                                        <a class="btn btn-success"
                                                            href="/approve-department/{{ $department_one->id }}">Approve</a>

                                                        <a class="btn btn-danger"
                                                            href="/remove-department/{{ $department_one->id }}">Disapprove</a>
                                                    @else
                                                        {{-- <a class="btn btn-primary"
                                                            href="/approve-landingImage/{{ $department_one->id }}">Edit</a> --}}
                                                        <a class="btn btn-primary"
                                                            href="/department-edit/{{ $department_one->id }}">Edit</a>
                                                    @endif

                                                </td>
                                                {{-- <td><a href="/unapproved">Hide</a></td> --}}
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
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
                window.location.href = "/admin-remarks/" + id + "/" + idpage
            }

            // alert(id+" "+idpage);
            // document.getElementById("demo").style.color = "red";
        }

        function approve(id, idpage) {
            let confirm_Final = confirm("Do you really want to APPROVE?");
            if (confirm_Final) {
                window.location.href = "/approve-list/" + id + "/" + idpage
            }

            // alert(id+" "+idpage);
            // document.getElementById("demo").style.color = "red";
        }
    </script>
@stop
