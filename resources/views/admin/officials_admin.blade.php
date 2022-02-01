@extends('layouts.master_admin', ['title' => 'member', 'subtitle' => ''])

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
                        <h3 class="page-title mb-0 p-0">Create Officials</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Create Officials</li>
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
                @if ($department == "super_admin")
                    
                
                    <form method="POST" action="/officials-admin" enctype="multipart/form-data" class="row">
                        @csrf
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body profile-card">
                                <center class="mt-4"> <img src="/foradmin/assets/images/users/5.jpg"
                                        class="rounded-circle" width="150" />
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
                                        <label class="col-md-12 mb-0">First name</label>
                                        <div class="col-md-12">
                                            <input name="first_name" type="text" placeholder="Enter first name"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Last name</label>
                                        <div class="col-md-12">
                                            <input name="last_name" type="text" placeholder="Enter last name"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Position</label>
                                        <div class="col-md-12">
                                            <input name="position" type="text" placeholder="Enter position"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Address</label>
                                        <div class="col-md-12">
                                            <input name="address" type="text" placeholder="Enter address"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Birthdate</label>
                                        <div class="col-md-12">
                                            <input name="birthdate" type="date" placeholder="Enter birthdate"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Religion</label>
                                        <div class="col-md-12">
                                            <input name="religion" type="text" placeholder="Enter religion"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Term of Service:</label>
                                        <div class="col-md-12">
                                            <input name="term_of_service" type="text" placeholder="Type of service"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Elective title experience:</label>
                                        <div class="col-md-12">
                                            <input name="elective_title_experience" type="text" placeholder="Enter elective title experience"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Educational Attainment</label>
                                        {{-- <div class="col-md-12">
                                            <input name="educational_attainment" type="text" placeholder="Title of the update"
                                                class="form-control ps-0 form-control-line">
                                        </div> --}}
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Primary</label>
                                        <div class="col-md-12">
                                            <input name="eb_primary" type="text" placeholder="Enter Primary"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Secondary</label>
                                        <div class="col-md-12">
                                            <input name="eb_secondary" type="text" placeholder="Enter secondary"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">College</label>
                                        <div class="col-md-12">
                                            <input name="eb_college" type="text" placeholder="Enter college"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Chairmanship:</label>
                                        <div class="col-md-12">
                                            <input name="chairmanship" type="text" placeholder="Enter chairmanship"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Vice Chairmanship:</label>
                                        <div class="col-md-12">
                                            <input name="vice_chairmanship" type="text" placeholder="Enter vice chairmanship"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Committee Membership:</label>
                                        <div class="col-md-12">
                                            <input name="committee_membership" type="text" placeholder="Enter committee membership"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Course</label>
                                        <div class="col-md-12">
                                            <input name="course" type="text" placeholder="Enter Course"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">QUOTATION</label>
                                        <div class="col-md-12">
                                            <textarea name="quotation" rows="5" placeholder="Enter quotation" class="form-control ps-0 form-control-line"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Others</label>
                                        <div class="col-md-12">
                                            <textarea name="others" rows="5" placeholder="Enter Others" class="form-control ps-0 form-control-line"></textarea>
                                        </div>
                                    </div>
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
                                            <button type="submit" class="btn btn-success mx-auto mx-md-0 text-white">Submit Officials</button>
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
                            <h4 class="card-title">List of Officials</h4>
                            <!-- <h6 class="card-subtitle">Add class <code>.table</code></h6> -->
                            <div class="table-responsive">
                                <table class="table user-table">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">profile</th>
                                            <th class="border-top-0">position</th>
                                            <th class="border-top-0">address</th>
                                            <th class="border-top-0">birthdate</th>
                                            <th class="border-top-0">remarks</th>
                                            <th class="border-top-0">status</th>
                                            {{-- <th class="border-top-0">others</th> --}}
                                            <th class="border-top-0">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        @foreach ($officials as $official)
                                        <tr>
                                            <td>
                                                <div>
                                                <img width="100" src="officials/{{$official->image}}" alt="">
                                                <label for="">{{$official->first_name}} {{$official->last_name}}</label>    
                                            </div>
                                        </td>
                                            
                                            <td>{{$official->position}}</td>
                                            <td>{{$official->address}}</td>
                                            <td>{{$official->birthdate}}</td>
                                            <td>{{$official->remarks}}</td>
                                            <td style="{{$official->is_approved == 1 ? 'background:#6262dd;color:white':($official->is_approved== 2? 'background:#228d51;color:white': 'background:#d34d60;color:white')}}">
                                                {{$official->is_approved == 1 ? 'Approved':($official->is_approved== 2? 'Pending': 'Disapproved')}}
                                                {{-- {{$official->is_approved == 2 ?$official->is_approved:''}} --}}
                                            </td>
                                            {{-- <td>{{$official->others}}</td> --}}
                                            <td style="display: flex">
                                                
                                                @if ($department == 'super_admin')
                                                <a class="btn btn-default" style="color:white" href="/edit-officials/{{$official->id}}">Edit/Show</a>
                                                {{-- <a  class="btn btn-danger"  href="/delete-officials/{{$official->id}}">Delete</a> --}}
                                                <a class="btn btn-success" style="color:white" href="/approve-officials/{{$official->id}}">Approve</a>
                                                
                                                <a  class="btn btn-danger" style="color:white"  href="/remove-officials/{{$official->id}}">Disapprove</a>
                                               

                                                {{-- @else
                                               
                                                <a  class="btn btn-danger"  href="/remove-officials/{{$official->id}}">Remove</a> --}}
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
                    window.location.href = "/admin-remarks/"+id+"/"+idpage
                }
                
                // alert(id+" "+idpage);
                // document.getElementById("demo").style.color = "red";
            }

            function approve(id, idpage) {
                let confirm_Final = confirm("Do you really want to APPROVE?");
                if (confirm_Final) {
                    window.location.href = "/approve-list/"+id+"/"+idpage
                }
                
                // alert(id+" "+idpage);
                // document.getElementById("demo").style.color = "red";
            }
        </script>
   @stop