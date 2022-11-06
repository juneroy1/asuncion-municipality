@extends('layouts.master_admin', ['title' => 'uploadUpdates', 'subtitle' => ''])

@section('content')
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
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
                    <h3 class="page-title mb-0 p-0">{{ $update ? 'Edit Update' : 'Create Update' }}</h3>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    {{ $update ? 'Edit Update' : 'Create Update' }}</li>
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
                    <form method="POST" action="{{ $edit ? '/admin-update/' . $update->id : '/admin' }}"
                        enctype="multipart/form-data" class="row">
                        @csrf
                        <!-- Column -->
                        <div class="col-lg-4 col-xlg-3 col-md-5">
                            <div class="card">
                                <div class="card-body profile-card">
                                    <center class="mt-4">
                                        {{-- class="rounded-circle" --}}
                                        <img src="{{ $update ? '/updates/' . $update->image : '/foradmin/assets/images/users/5.jpg' }}"
                                            width="150" />
                                        <h4 class="card-title mt-2">{{ $edit ? 'Update an Image' : 'Upload an Image' }}
                                        </h4>
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
                                            <label class="col-md-12 mb-0">Title</label>
                                            <div class="col-md-12">
                                                <input name="title" type="text"
                                                    value="{{ $update ? $update->title : '' }}"
                                                    placeholder="Title of the update"
                                                    class="form-control ps-0 form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12 mb-0">Description</label>
                                            <div class="col-md-12">
                                                <textarea name="description" rows="5"
                                                    class="form-control ps-0 form-control-line"> {{ $update ? $update->description : '' }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12 mb-0">Add Native Language</label>
                                            <div class="col-md-12">
                                                <textarea name="description_local" rows="5"
                                                    class="form-control ps-0 form-control-line">{{ $update ? $update->description_local : '' }}</textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-sm-12">Select Category</label>
                                            <div class="col-sm-12 border-bottom">
                                                <select name="category" class="form-select shadow-none ps-0 border-0 form-control-line">
                                                    @if ($update)
                                                        @if($update->category == 'help')
                                                            <option selected value="help">H-HELP</option>
                                                        @else
                                                            <option  value="help">H-HELP</option>
                                                        @endif

                                                        @if($update->category == 'education')
                                                            <option selected value="education">E-EDUCATION</option>
                                                        @else
                                                            <option  value="education">E-EDUCATION</option>
                                                        @endif

                                                        @if($update->category == 'livelihood')
                                                            <option selected value="livelihood">L-LIVELIHOOD</option>
                                                        @else
                                                            <option  value="livelihood">L-LIVELIHOOD</option>
                                                        @endif

                                                        @if($update->category == 'projects')
                                                            <option selected value="projects">P-PROJECTS</option>
                                                        @else
                                                            <option  value="projects">P-PROJECTS</option>
                                                        @endif
                                                    @else
                                                        <option  value="help">H-HELP</option>
                                                        <option  value="education">E-EDUCATION</option>
                                                        <option  value="livelihood">L-LIVELIHOOD</option>
                                                        <option  value="projects">P-PROJECTS</option>

                                                    @endif
                                                    
                                                    
                                                </select>
                                            </div>
                                        </div> 

                                        @if ($edit)
                                            <div class="form-group">
                                                <label class="col-md-12 mb-0">Remarks</label>
                                                <div class="col-md-12">
                                                    <textarea name="remarks" rows="5"
                                                        class="form-control ps-0 form-control-line">{{ $update ? $update->remarks : '' }}</textarea>
                                                </div>
                                            </div>
                                        @endif
                                        
                                        <div class="form-group">
                                            <div class="col-sm-12 d-flex">
                                                <button type="submit"
                                                    class="btn btn-success mx-auto mx-md-0 text-white">Submit
                                                    Update</button>
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
                                <h4 class="card-title">List of updates</h4>
                                <!-- <h6 class="card-subtitle">Add class <code>.table</code></h6> -->
                                <div class="table-responsive">
                                    <table class="table user-table">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">#</th>
                                                <th class="border-top-0">Image</th>
                                                <th class="border-top-0">Title</th>
                                                <th class="border-top-0">Description</th>
                                                <th class="border-top-0">Native Description</th>
                                                <th class="border-top-0">Remarks</th>
                                                <th class="border-top-0">Status</th>
                                                <th class="border-top-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($updates as $update)
                                                <tr>
                                                    <td>1</td>
                                                    <td><img width="200" src='/updates/{{ $update->image }}'></td>
                                                    <td>{{ $update->title }}</td>
                                                    <td>{{ $update->description }}</td>
                                                    <td>{{ $update->description_local }}</td>
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
                                                        {{-- <a href="/admin-remarks/{{$update->id}}">Remove</a> --}}
                                                        @if ($department == 'super_admin')
                                                            {{-- @if ($update->is_approved == 0) --}}
                                                            {{-- style="color:white" href="/approve-list/{{$update->id}}/{{$idPage}}" --}}
                                                            <a class="btn btn-success"
                                                                onclick="approve({{ $update->id }},{{ $idPage }})"
                                                                style="color:white" href="#">Approve</a>

                                                            {{-- @else --}}
                                                            {{-- /admin-remarks/{{$update->id}}/{{$idPage}} --}}
                                                            <a class="btn btn-danger"
                                                                onclick="disapprove({{ $update->id }},{{ $idPage }})"
                                                                style="color:white" href="#">Disapprove</a>
                                                            {{-- @endif --}}
                                                        @else
                                                            <a class="btn btn-success" style="color:white"
                                                                href="/admin-edit/{{ $update->id }}">Edit</a>
                                                            {{-- <a class="btn btn-danger" href="/admin-edit/{{$update->id}}">Delete</a> --}}
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
        <footer class="footer"> © 2021 <a href="#"></a>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->


    </div>

    <script>
        function disapprove(id, idpage) {
            let confirm_Final = confirm("Do you really want to DISAPPROVE?");
            if (confirm_Final) {
                window.location.href = "/admin-remarks/" + id + "/" + idpage + "/Update"
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
