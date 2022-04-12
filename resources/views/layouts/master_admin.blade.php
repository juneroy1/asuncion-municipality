<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, materialpro admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, materialpro admin lite design, materialpro admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Material Pro Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Material Pro Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/materialpro-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <!-- chartist CSS -->
    <link href="/foradmin/assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="/foradmin/assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="/foradmin/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css"
        rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="/foradmin/assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/foradmin/html/css/style.min.css" rel="stylesheet">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    {{-- <a class="navbar-brand ms-4" href="index.html">
                        <b class="logo-icon">
                            <img src="/foradmin/assets/images/logo-light-icon.png" alt="homepage" class="dark-logo" />

                        </b>
                        <span class="logo-text">
                            <img src="/foradmin/assets/images/logo-light-text.png" alt="homepage" class="dark-logo" />

                        </span>
                    </a> --}}
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-white d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-lg-none d-md-block ">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white "
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto mt-md-0 ">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                        <li class="nav-item search-box">
                            <a class="nav-link text-muted" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search" style="display: none;">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="/foradmin/assets/images/users/1.jpg" alt="user"
                                    class="profile-pic me-2">{{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="btn btn-success mx-auto mx-md-0 text-white">Logout</button>
                                </form>
                                {{-- <form class="app-search" style="display: none;">
                                    <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                        class="srh-btn"><i class="ti-close"></i></a> </form> --}}
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="index.html" aria-expanded="false"><i class="mdi me-2 mdi-gauge"></i><span
                                    class="hide-menu">Dashboard</span></a></li> -->
                        @if ($department == 'super_admin')
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="/admin-officials" aria-expanded="false"><i
                                        class="mdi me-2 mdi-table"></i><span class="hide-menu">Officials</span></a>
                            </li>
                            
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="/register" aria-expanded="false"><i class="mdi me-2 mdi-table"></i><span
                                        class="hide-menu">Register Admin Department</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/department-list" aria-expanded="false"><i class="mdi me-2 mdi-table"></i><span
                                    class="hide-menu">List Department</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/department-section" aria-expanded="false"><i
                                    class="mdi me-2 mdi-table"></i><span class="hide-menu">List of
                                    MMO; division/section</span></a></li>
                            
                        @endif
                        
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="/admin-officials-archive" aria-expanded="false"><i
                                        class="mdi me-2 mdi-table"></i><span class="hide-menu">Archive for
                                        officials</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/admin" aria-expanded="false">
                                <i class="mdi me-2 mdi-account-check"></i><span class="hide-menu">Upload
                                    Update <span style="border-radius: 50px;
                                    color: white;
                                    background-color: red;
                                    width: 100px;
                                    height: 100px;">{{ $updateTotal > 0 ? $updateTotal : '' }}</span></span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/admin-announcement" aria-expanded="false"><i class="mdi me-2 mdi-table"></i><span
                                    class="hide-menu">Announcement</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/admin-member" aria-expanded="false"><i class="mdi me-2 mdi-table"></i><span
                                    class="hide-menu">Office Head</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/admin-member-personnel" aria-expanded="false"><i
                                    class="mdi me-2 mdi-table"></i><span class="hide-menu">Office
                                    Personnel</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/admin-functionalities" aria-expanded="false"><i
                                    class="mdi me-2 mdi-table"></i><span class="hide-menu">Office
                                    Mandate</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/admin-landingImage" aria-expanded="false"><i class="mdi me-2 mdi-table"></i><span
                                    class="hide-menu">Landing Images</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/emergencyHotlines" aria-expanded="false"><i class="mdi me-2 mdi-table"></i><span
                                    class="hide-menu">Emergency Hotlines</span></a></li>

                        <li class="sidebar-item"> <a
                                class="sidebar-link waves-effect waves-dark sidebar-link {{ $title == 'archive_department' ? 'active' : '' }}"
                                href="/admin-department-archive" aria-expanded="false"><i
                                    class="mdi me-2 mdi-table"></i><span class="hide-menu">Archive for
                                    department</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/admin-barangay-officials" aria-expanded="false"><i
                                    class="mdi me-2 mdi-table"></i><span class="hide-menu">Barangay
                                    Officials</span></a></li>
                        <li class="sidebar-item"> <a
                                class="sidebar-link waves-effect waves-dark sidebar-link {{ $title == 'barangay' ? 'active' : '' }}"
                                href="/admin-barangay" aria-expanded="false"><i class="mdi me-2 mdi-table"></i><span
                                    class="hide-menu">Barangay</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/contact-number-office" aria-expanded="false"><i
                                    class="mdi me-2 mdi-table"></i><span class="hide-menu">Office Contact
                                    Number</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/org-chart-office" aria-expanded="false"><i class="mdi me-2 mdi-table"></i><span
                                    class="hide-menu">Office Organizational Chart</span></a></li>
                        

                        {{-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="/national-list" aria-expanded="false"><i class="mdi me-2 mdi-table"></i><span
                                        class="hide-menu">List of National Offices</span></a></li> --}}

                        <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="icon-material.html" aria-expanded="false"><i
                                    class="mdi me-2 mdi-emoticon"></i><span class="hide-menu">Icon</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="map-google.html" aria-expanded="false"><i class="mdi me-2 mdi-earth"></i><span
                                    class="hide-menu">Google Map</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="pages-blank.html" aria-expanded="false"><i
                                    class="mdi me-2 mdi-book-open-variant"></i><span class="hide-menu">Blank</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="pages-error-404.html" aria-expanded="false"><i class="mdi me-2 mdi-help-circle"></i><span
                                    class="hide-menu">Error 404</span></a>
                        </li>
                        <li class="text-center p-20 upgrade-btn">
                            <a href="https://www.wrappixel.com/templates/materialpro/"
                                class="btn btn-warning text-white mt-4" target="_blank">Upgrade to
                                Pro</a>
                        </li> -->
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <div class="sidebar-footer">
                <div class="row">
                    <div class="col-4 link-wrap">
                        <!-- item-->
                        <a href="" class="link" data-toggle="tooltip" title=""
                            data-original-title="Settings"><i class="ti-settings"></i></a>
                    </div>
                    <div class="col-4 link-wrap">
                        <!-- item-->
                        <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i
                                class="mdi mdi-gmail"></i></a>
                    </div>
                    <div class="col-4 link-wrap">
                        <!-- item-->
                        <a href="" class="link" data-toggle="tooltip" title=""
                            data-original-title="Logout"><i class="mdi mdi-power"></i></a>
                    </div>
                </div>
            </div>
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        @yield('content')
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="/foradmin/assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/foradmin/assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/foradmin/html/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="/foradmin/html/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="/foradmin/html/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="/foradmin/html/js/custom.js"></script>
</body>

</html>
