@extends('layouts.master_admin', ['title' => 'announcement', 'subtitle' => ''])

@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row align-items-center">
                <div class="col-md-6 col-8 align-self-center">
                    <h3 class="page-title mb-0 p-0">{{ $edit ? 'Update Office Mandate' : 'Create Office Mandate' }}</h3>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    {{ $edit ? 'Update Office Mandate' : 'Create Office Mandate' }}</li>
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
                @if ($department == 'super_admin')
                    <form method="POST"
                        action="{{ $edit ? '/admin-functionalities-update/' . $update->id : '/functionalities' }}"
                        enctype="multipart/form-data" class="row">
                        @csrf
                       
                        <div class="col-lg-8 col-xlg-9 col-md-7">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-horizontal form-material mx-2">
                                        <h1>Current Status: {{$deploy->is_deploy == 1? 'Deployed':'Pending'}}</h1>
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
                                                <button type="button" 
                                                onclick="deployNow()"
                                                    class="btn btn-success mx-auto mx-md-0 text-white">Deploy</button>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12 d-flex">
                                                <button type="button" 
                                                onclick="revertNow()"
                                                    class="btn btn-success mx-auto mx-md-0 text-white">Revert Deployment</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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
        function deployNow(id, idpage) {
            let confirm_Final = confirm("Do you really want to DEPLOY the website?");
            if (confirm_Final) {
                window.location.href = "/admin-deploy-status-submit-get"
                // window.location.href = "/admin-remarks/"+id+"/"+idpage
            }

            // alert(id+" "+idpage);
            // document.getElementById("demo").style.color = "red";
        }

        function revertNow(id, idpage) {
            let confirm_Final = confirm("Do you really want to REVERT the DEPLOY of website?");
            if (confirm_Final) {
                window.location.href = "/admin-deploy-status-submit-get-revert"
                // window.location.href = "/admin-remarks/"+id+"/"+idpage
            }

            // alert(id+" "+idpage);
            // document.getElementById("demo").style.color = "red";
        }

      
    </script>
@stop
