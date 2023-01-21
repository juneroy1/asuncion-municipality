@extends('layouts.master_admin', ['title' => 'emergency_hotline', 'subtitle' => ''])

@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row align-items-center">
                <div class="col-md-6 col-8 align-self-center">
                    <h3 class="page-title mb-0 p-0">{{ $edit ? 'Update Emergency Hotline' : 'Create Emergency Hotline' }}
                    </h3>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    {{ $edit ? 'Update Emergency Hotline' : 'Create Emergency Hotline' }}</li>
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
                    <form method="POST"
                        action="{{ $edit ? '/emergencyHotlines-update/' . $update->id : '/emergencyHotlines-submit' }}"
                        enctype="multipart/form-data" class="row">
                        @csrf
                        <!-- Column -->
                        {{-- <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body profile-card">
                        <center class="mt-4"> <img src="/foradmin/assets/images/users/5.jpg"
                                class="rounded-circle" width="150" />
                            <h4 class="card-title mt-2">Upload an Image</h4>
                            <input type="file" name="image" class="form-control">
                            
                        </center>
                    </div>
                </div>
            </div> --}}
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
                                            <label class="col-md-12 mb-0">Name</label>
                                            <div class="col-md-12">
                                                <input name="name" value="{{ $update ? $update->name : '' }}" type="text"
                                                    placeholder="Title of the update"
                                                    class="form-control ps-0 form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12 mb-0">Number</label>
                                            <div class="col-md-12">
                                                <input name="number" value="{{ $update ? $update->number : '' }}"
                                                    type="text" placeholder="Title of the update"
                                                    class="form-control ps-0 form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12 mb-0">Network</label>
                                            <div class="col-md-12">
                                                <input name="network" type="text"
                                                    value="{{ $update ? $update->network : '' }}"
                                                    placeholder="Title of the update"
                                                    class="form-control ps-0 form-control-line">
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
                                        {{-- <div class="form-group">
                                <label class="col-md-12 mb-0">Add Native Language</label>
                                <div class="col-md-12">
                                    <textarea name="description_local" rows="5" class="form-control ps-0 form-control-line"></textarea>
                                </div>
                            </div> --}}
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
                                                    class="btn btn-success mx-auto mx-md-0 text-white">Submit Emergency
                                                    Hotline</button>
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
                                <h4 class="card-title">List of Emergency Hotline</h4>
                                <!-- <h6 class="card-subtitle">Add class <code>.table</code></h6> -->
                                <div class="table-responsive">
                                    <table class="table user-table">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Name</th>
                                                <th class="border-top-0">Number</th>
                                                <th class="border-top-0">Network</th>
                                                <th class="border-top-0">remarks</th>
                                                <th class="border-top-0">status</th>
                                                {{-- <th class="border-top-0">created by</th> --}}
                                                <th class="border-top-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($emergencyHotlines as $key => $emergency_hotline)
                                                <tr>


                                                    <td>{{ $emergency_hotline->name }}</td>
                                                    <td>{{ $emergency_hotline->number }}</td>
                                                    <td>{{ $emergency_hotline->network }}</td>
                                                    <td>{{ $emergency_hotline->remarks }}</td>
                                                    <td
                                                        style="{{ $emergency_hotline->is_approved == 1? 'background:blue;color:white': ($emergency_hotline->is_approved == 2? 'background:green;color:white': 'background:red;color:white') }}">
                                                        {{ $emergency_hotline->is_approved == 1? 'Approved': ($emergency_hotline->is_approved == 2? 'Pending': 'Disapproved') }}
                                                        {{-- {{$update->is_approved == 3 ?$update->remarks:''}} --}}
                                                    </td>
                                                    {{-- <td>{{$functionality->description}}</td> --}}
                                                    <td>
                                                        @if ($department == 'super_admin')
                                                            {{--  --}}
                                                            {{-- @if ($emergency_hotline->is_approved == 0) --}}
                                                            {{-- href="/remove-emergencyHotlines/{{ $emergency_hotline->id }}" --}}
                                                            {{-- href="/approve-emergencyHotlines/{{ $emergency_hotline->id }}" --}}
                                                            <a class="btn btn-primary"
                                                                onclick="approve({{ $emergency_hotline->id }},{{ $idPage }})"
                                                                style="color:white">Approve</a>
                                                            <a class="btn btn-danger"
                                                                onclick="disapprove({{ $emergency_hotline->id }},{{ $idPage }})"
                                                                style="color:white">Disapprove</a>
                                                        @else
                                                            <a class="btn btn-primary"
                                                                href="/emergencyHotlines-edit/{{ $emergency_hotline->id }}"
                                                                style="color:white">Edit</a>
                                                            {{-- <a class="btn btn-danger" style="color:white">Delete</a> --}}
                                                            {{-- @endif --}}
                                                        @endif



                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
    <!-- ============================================================== -->
    <script>
        function disapprove(id, idpage) {
            let confirm_Final = confirm("Do you really want to DISAPPROVE?");
            if (confirm_Final) {
                // window.location.href = "/admin-remarks/" + id + "/" + idpage
                window.location.href = "/admin-remarks/" + id + "/" + idpage + "/EmergencyHotline"
            }

            // alert(id+" "+idpage);
            // document.getElementById("demo").style.color = "red";
        }

        function approve(id, idpage) {
            let confirm_Final = confirm("Do you really want to APPROVE?");
            if (confirm_Final) {
                window.location.href = "/approve-emergencyHotlines/" + id
            }

            // alert(id+" "+idpage);
            // document.getElementById("demo").style.color = "red";
        }
    </script>
@stop
