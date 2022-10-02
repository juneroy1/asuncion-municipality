@extends('layouts.master_admin', [
    'title' => 'landingImage',
     'subtitle' => '',
     'updateTotal' => $updateTotal?$updateTotal:0,
     'archiveTotal' => $archiveTotal?$archiveTotal:0,
     'announcementTotal' => $announcementTotal?$announcementTotal:0,
     'memberTotal' => $memberTotal?$memberTotal:0,
     'personnelTotal' => $personnelTotal?$personnelTotal:0,
     'departmentFunctionalityTotal' => $departmentFunctionalityTotal?$departmentFunctionalityTotal:0,
     'landingImageTotal' => $landingImageTotal?$landingImageTotal:0,
     'emergencyHotlineTotal' => $emergencyHotlineTotal?$emergencyHotlineTotal:0,
     'archiveDepartmentTotal' => $archiveDepartmentTotal?$archiveDepartmentTotal:0,
     'barangayOfficialModelTotal' => $barangayOfficialModelTotal?$barangayOfficialModelTotal:0,
     'barangayModelTotal' => $barangayModelTotal?$barangayModelTotal:0,
     'contactNumberOfficeTotal' => $contactNumberOfficeTotal?$contactNumberOfficeTotal:0,
     'organizationalChartTotal' => $organizationalChartTotal?$organizationalChartTotal:0,
     ])

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
                        <h3 class="page-title mb-0 p-0">List of Department with notifications</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">List of Department with notifications</li>
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
               
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">List of Department</h4>
                            <!-- <h6 class="card-subtitle">Add class <code>.table</code></h6> -->
                            <div class="table-responsive">
                                <table class="table user-table">
                                    <thead>
                                        <tr>
                                            {{-- <th class="border-top-0">#</th> --}}
                                            {{-- <th class="border-top-0">Image</th> --}}
                                            <th class="border-top-0">Title</th>
                                            {{-- <th class="border-top-0">Description</th> --}}
                                            <th class="border-top-0">Number of request</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        @foreach ($listRequests as $listRequest)
                                        <tr class="pointer">
                                           
                                            {{-- <td>1</td> --}}
                                            {{-- <td> --}}
                                                {{-- <img width="200"  src='departments/{{$Department->image}}'> --}}
                                            {{-- </td> --}}
                                            <td> <a href="/{{$pagePrefix}}/{{$listRequest->id}}">{{$listRequest->name}}</a></td>
                                          
                                                
                                           
                                            <td>
                                                {{-- <td>{{$Department->number}}</td> --}}
                                                @if ($pageName == 'Announcement')
                                                    <a href="/{{$pagePrefix}}/{{$listRequest->id}}">
                                                        <div class="{{$listRequest->announcement_count > 0? 'notif-container':''}}">
                                                        {{$listRequest->announcement_count}}
                                                    </div></a>
                                                @endif
                                                @if ($pageName == 'Update')
                                                    <a href="/{{$pagePrefix}}/{{$listRequest->id}}">
                                                        <div class="{{$listRequest->updates_count > 0? 'notif-container':''}}">
                                                        {{$listRequest->updates_count}}
                                                    </div></a>   
                                                @endif
                                                {{-- @if ($pageName == 'Update')
                                                    <a href="/admin-index/{{$listRequest->id}}">
                                                        <div class="{{$listRequest->updates_count > 0? 'notif-container':''}}">
                                                        {{$listRequest->updates_count}}
                                                    </div></a>   
                                                @endif --}}
                                                @if ($pageName == 'Member')
                                                    <a href="/{{$pagePrefix}}/{{$listRequest->id}}">
                                                        <div class="{{$listRequest->member_count > 0? 'notif-container':''}}">
                                                        {{$listRequest->member_count}}
                                                    </div></a>   
                                                @endif

                                                @if ($pageName == 'Office Mandate')
                                                    <a href="{{$pagePrefix}}/{{$listRequest->id}}">
                                                        <div class="{{$listRequest->office_mandate_count > 0? 'notif-container':''}}">
                                                        {{$listRequest->office_mandate_count}}
                                                    </div></a>   
                                                @endif


                                                @if ($pageName == 'Landing Image')
                                                    <a href="/{{$pagePrefix}}/{{$listRequest->id}}">
                                                        <div class="{{$listRequest->landing_image_count > 0? 'notif-container':''}}">
                                                        {{$listRequest->landing_image_count}}
                                                    </div></a>   
                                                @endif
                                            
                                                @if ($pageName == 'Emergency Hotlines')
                                                    <a href="/{{$pagePrefix}}/{{$listRequest->id}}">
                                                        <div class="{{$listRequest->emergency_hotlines_count > 0? 'notif-container':''}}">
                                                        {{$listRequest->emergency_hotlines_count}}
                                                    </div></a>   
                                                @endif

                                                @if ($pageName == 'Archive Department')
                                                    <a href="/{{$pagePrefix}}/{{$listRequest->id}}">
                                                        <div class="{{$listRequest->archive_departments_count > 0? 'notif-container':''}}">
                                                        {{$listRequest->archive_departments_count}}
                                                    </div></a>   
                                                @endif

                                                @if ($pageName == 'Executive Branch')
                                                <a href="/{{$pagePrefix}}/{{$listRequest->id}}">
                                                    <div class="{{$listRequest->agendas_count > 0? 'notif-container':''}}">
                                                    {{$listRequest->agendas_count}}
                                                </div></a>   
                                                @endif

                                                @if ($pageName == 'Legislative Department')
                                                <a href="/{{$pagePrefix}}/{{$listRequest->id}}">
                                                    <div class="{{$listRequest->agendas_legislative_count > 0? 'notif-container':''}}">
                                                    {{$listRequest->agendas_legislative_count}}
                                                </div></a>   
                                                @endif

                                                @if ($pageName == 'Archive Official')
                                                    <a href="/{{$pagePrefix}}/{{$listRequest->id}}">
                                                        <div class="{{$listRequest->archives_count > 0? 'notif-container':''}}">
                                                        {{$listRequest->archives_count}}
                                                    </div></a>   
                                                @endif

                                                @if ($pageName == 'Barangay Officials')
                                                    <a href="{{$pagePrefix}}/{{$listRequest->id}}">
                                                        <div class="{{$listRequest->barangay_officials_count > 0? 'notif-container':''}}">
                                                        {{$listRequest->barangay_officials_count}}
                                                    </div></a>   
                                                @endif

                                                @if ($pageName == 'Barangay')
                                                    <a href="/{{$pagePrefix}}/{{$listRequest->id}}">
                                                        <div class="{{$listRequest->barangays_count > 0? 'notif-container':''}}">
                                                        {{$listRequest->barangays_count}}
                                                    </div></a>   
                                                @endif

                                                @if ($pageName == 'Contact Number Office')
                                                    <a href="/{{$pagePrefix}}/{{$listRequest->id}}">
                                                        <div class="{{$listRequest->contact_number_office_count > 0? 'notif-container':''}}">
                                                        {{$listRequest->contact_number_office_count}}
                                                    </div></a>   
                                                @endif

                                                

                                                @if ($pageName == 'Organizational Chart')
                                                    <a href="/{{$pagePrefix}}/{{$listRequest->id}}">
                                                        <div class="{{$listRequest->organizational_chart_count > 0? 'notif-container':''}}">
                                                        {{$listRequest->organizational_chart_count}}
                                                    </div></a>   
                                                @endif
                                            
                                                
                                            </td>
                                        {{-- </a> --}}
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

        <style>
            .pointer{
                cursor: pointer;
            }
            .notif-container{
                font-weight: bolder;
                background: red;
                text-align: center;
                border-radius: 50%;
                width: 40px;
                height: 40px;
                border: red solid;
                color: white;
                display: flex;
                justify-content: center;
                justify-items: center;
                font-size: 30px;
 
            }
        </style>
  @stop