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
                    <!-- {{$department}} -->
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
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
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
                <form method="POST" action="/department-update/{{ $admint_department->id }}" enctype="multipart/form-data"
                    class="row">
                    @csrf
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body profile-card">
                                <center class="mt-4">
                                    {{-- class="rounded-circle" --}}
                                    <img src="{{ $admint_department->image? '/departments/' . $admint_department->image: '/foradmin/assets/images/users/5.jpg' }}"
                                        width="150" />
                                    <h4 class="card-title mt-2">Upload an Image</h4>
                                    <label for=""><em>Note: the new file image update here will be replace the current
                                            image</em></label>
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

                            <!-- <div class="card-body profile-card">
                                <center class="mt-4">
                                    <img src="{{ $admint_department->image_wmask? '/departments_image_wmask/' . $admint_department->image_wmask: '/foradmin/assets/images/users/5.jpg' }}"
                                        width="150" />
                                    <h4 class="card-title mt-2">Upload an Image for with mask</h4>
                                    <label for=""><em>Note: the new file image update here will be replace the current
                                            image</em></label>
                                    <input type="file" name="image_wmask" class="form-control">
                                    
                                </center>
                            </div> -->
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

                            <!-- <div class="card-body profile-card">
                                <center class="mt-4">
                                    <img src="{{ $admint_department->image_womask? '/departments_image_womask/' . $admint_department->image_womask: '/foradmin/assets/images/users/5.jpg' }}"
                                        width="150" />
                                    <h4 class="card-title mt-2">Upload an Image for w/o mask</h4>
                                    <label for=""><em>Note: the new file image update here will be replace the current
                                            image</em></label>
                                    <input type="file" name="image_womask" class="form-control">
                                    
                                </center>
                            </div> -->
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
                                            <input name="name" value="{{ $admint_department->name }}" type="text"
                                                placeholder="Title of the update"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>

                                    {{-- <div class="form-group">
                                        <label class="col-md-12 mb-0">Department Head Name</label>
                                        <div class="col-md-12">
                                            <input name="d_head_name" value="{{ $admint_department->d_head_name }}"
                                                type="text" placeholder="Title of the update"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div> --}}

                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Department Description</label>
                                        <div class="col-md-12">
                                            <input name="description" value="{{ $admint_department->description }}"
                                                type="text" placeholder="Title of the update"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Type of Office</label>
                                        <div class="col-md-12">
                                            <select name="type_office" class="form-select"
                                                aria-label="Default select example">
                                                <option 
                                                    value="1"
                                                    @if($admint_department->type_office == 1) selected @endif
                                                    >Executive</option>
                                                <option  
                                                
                                                    value="2" 
                                                    @if($admint_department->type_office == 2) selected @endif
                                                    >Legislative {{$admint_department->type_office }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Select Department Part</label>
                                        <div class="col-md-12">
                                            <select name="department_id" class="form-select"
                                                aria-label="Default select example">
                                                <option value="" >
                                                        Select Department Head</option>
                                                @foreach ($getAlldepartments as $department_name)
                                                    <option value="{{ $department_name->id }}"
                                                    @if($admint_department->department_id ==  $department_name->id ) selected @endif
                                                     >
                                                        {{ $department_name->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>



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
                                            <button type="submit" class="btn btn-success mx-auto mx-md-0 text-white">Submit
                                                Department</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </form>
                {{-- @endif --}}

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
