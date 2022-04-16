@extends('layouts.master_admin', ['title' => 'emergency_hotline', 'subtitle' => ''])

@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row align-items-center">
                <div class="col-md-6 col-8 align-self-center">
                    <h3 class="page-title mb-0 p-0">{{ $edit ? 'View Message' : 'List of Messages'  }}
                    </h3>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    {{ $edit ? 'View Message' : 'List of Messages' }}</li>
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
                @if ($department != 'super_admin' && $edit)
                    <form method="POST"
                        action="{{ $edit ? '/emergencyHotlines-update/' . $update->id : '/emergencyHotlines-submit' }}"
                        enctype="multipart/form-data" class="row">
                        @csrf
                        <div class="col-lg-8 col-xlg-9 col-md-7">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-horizontal form-material mx-2">
                                        
                                        <div class="form-group">
                                            <label class="col-md-12 mb-0">Name</label>
                                            <div class="col-md-12">
                                                <input name="name" value="{{ $update ? $update->name : '' }}" type="text"
                                                    placeholder="Title of the update"
                                                    class="form-control ps-0 form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12 mb-0">Email</label>
                                            <div class="col-md-12">
                                                <input name="email" value="{{ $update ? $update->email : '' }}"
                                                    type="number" placeholder="Title of the update"
                                                    class="form-control ps-0 form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <label class="col-md-12 mb-0">Message</label>
                                                <div class="col-md-12">
                                                    <textarea name="message" rows="5"
                                                        class="form-control ps-0 form-control-line">{{ $update ? $update->message : '' }}</textarea>
                                                </div>
                                            </div>   
                                        <div class="form-group">
                                            <div class="col-sm-12 d-flex">
                                                <button type="submit"
                                                    class="btn btn-success mx-auto mx-md-0 text-white">Done Read</button>
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
                                <h4 class="card-title">List of Messages</h4>
                                <!-- <h6 class="card-subtitle">Add class <code>.table</code></h6> -->
                                <div class="table-responsive">
                                    <table class="table user-table">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Name</th>
                                                <th class="border-top-0">Email</th>
                                                <th class="border-top-0">Message</th>
                                                <th class="border-top-0">Done?</th>
                                                <th class="border-top-0">Read?</th>
                                                <th class="border-top-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($messages as $key => $message)
                                                <tr>


                                                    <td>{{ $message->name }}</td>
                                                    <td>{{ $message->email }}</td>
                                                    <td>{{ $message->message }}</td>
                                                    <td>{{ $message->is_done == 1? 'Yes' : 'No' }}</td>
                                                    <td>{{ $message->is_read == 1? 'Yes' : 'No' }}</td>
                                                   
                                            
                                                    <td>
                                                     
                                                          
                                                        <a class="btn btn-primary"
                                                                style="color:white">View </a>
                                                            <a class="btn btn-danger"
                                                                onclick="read({{ $message->id }})"
                                                                style="color:white">Read</a>
                                                            <a class="btn btn-danger"
                                                                onclick="done({{ $message->id }})"
                                                                style="color:white">Done</a>
                                                   



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
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer"> © 2022 <a href="#"></a>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <script>
        function done(id) {
            let confirm_Final = confirm("Do you really want to Done?");
            if (confirm_Final) {
                window.location.href = "/messages-done/" + id
            }
            // let confirm_Final = confirm("Do you really want to DISAPPROVE?");
            // if (confirm_Final) {
            //     // window.location.href = "/admin-remarks/" + id + "/" + idpage
            //     window.location.href = "/admin-remarks/" + id + "/" + idpage + "/EmergencyHotline"
            // }

            // alert(id+" "+idpage);
            // document.getElementById("demo").style.color = "red";
        }

        function read(id) {
            let confirm_Final = confirm("Do you really want to Read?");
            if (confirm_Final) {
                window.location.href = "/messages-read/" + id
            }
            // let confirm_Final = confirm("Do you really want to APPROVE?");
            // if (confirm_Final) {
            //     window.location.href = "/approve-emergencyHotlines/" + id
            // }

            // alert(id+" "+idpage);
            // document.getElementById("demo").style.color = "red";
        }
    </script>
@stop
