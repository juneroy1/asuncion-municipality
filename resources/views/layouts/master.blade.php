<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- SEO Meta Tags -->
        <meta name="description" content="Welcome to the official website of LGU ASUNCION">
        <meta name="author" content="Juneroy D. Quinimon">
    
        <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
        <meta property="og:site_name" content="" /> <!-- website name -->
        <meta property="og:site" content="" /> <!-- website link -->
        <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
        <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
        <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
        <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
        <meta property="og:type" content="article" />
    
        <!-- Website Title -->
        <title>Municipality of Asuncion </title>
        
        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
        <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
        <link href="{{asset('css/fontawesome-all.css')}}" rel="stylesheet">
        <link href="{{asset('css/swiper.css')}}" rel="stylesheet">
        <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">
        <link href="{{asset('css/styles.css')}}" rel="stylesheet">
        <style>
            .test{
                background-image: url("/images/MunicipalLogo2.png") !important;
                background-size: cover;
            }
        </style>
        <!-- Favicon  -->
        <link rel="icon" href="images/LGU LOGO_NOBG.png">
    </head>
    <body data-spy="scroll" data-target=".fixed-top">
    
        <!-- Preloader -->
        <div class="spinner-wrapper">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
        <!-- end of preloader -->
        
    
        <!-- Navbar -->
        
        <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Aria</a> -->
    
            <!-- Image Logo -->
                <a style="display:contents" class="navbar-brand logo-image" href="/">
                    {{--  --}}
                    {{-- <img style="display: inline" src="/images/logo/cambanogoy.JPG" width="100" height="500" alt="alternative"> --}}
                    <div style='width: 100px; height: 100px;' class="test"></div>
                    {{-- <img class="avatar" style="display: inline" src="/images/Municipal Logo.png" width="100" height="500" alt="alternative"> --}}
                    <div style="color: white; display: inline-grid;margin-left: 20px;">
                        <h4 style="margin: 0; color:white">Municipality of Asuncion</h4>
                        <p style="margin: 0; color:white">National Highway, Asuncion Davao del Norte</p>
                    </div>
                   
                </a>
            
            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->
    
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        @if($title=='welcome')
                        <a class="nav-link page-scroll" href="#header">HOME <span class="sr-only">(current)</span></a>
                        @else 
                        <a class="nav-link page-scroll" href="/">HOME </a>
                        @endif
                       
                    </li>
                    <li class="nav-item dropdown">
                        @if($title=='officials')
                        <a class="nav-link dropdown-toggle page-scroll" href="#header" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">OFFICIALS<span class="sr-only">(current)</span></a>
                        @else 
                        <a class="nav-link dropdown-toggle page-scroll" href="#" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">OFFICIALS</a>
                        @endif
                       
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @if($subtitle=='municipal_officials')
                            <a class="dropdown-item" href="#header"><span class="item-text">MUNICIPAL OFFICIALS</span></a>
                            @else 
                            <a class="dropdown-item" href="/officials-view"><span class="item-text">MUNICIPAL OFFICIALS</span></a>
                            @endif
                            
                            <div class="dropdown-items-divide-hr"></div>
                            @if($subtitle=='legislative_branch')
                            <a class="dropdown-item" href="#header"><span class="item-text">LEGISLATIVE BRANCH</span></a>
                            @else 
                            <a class="dropdown-item" href="/legislative"><span class="item-text">LEGISLATIVE BRANCH</span></a>
                            @endif

                            <div class="dropdown-items-divide-hr"></div>
                            @if($subtitle=='archive')
                            <a class="dropdown-item" href="#header"><span class="item-text">ARCHIVE</span></a>
                            @else 
                            <a class="dropdown-item" href="/archive/"><span class="item-text">ARCHIVE</span></a>
                            @endif

                            {{-- <div class="dropdown-items-divide-hr"></div>
                            @if($subtitle=='archive')
                            <a class="dropdown-item" href="#header"><span class="item-text">ARCHIVE</span></a>
                            @else 
                            <a class="dropdown-item" href="/archive/"><span class="item-text">ARCHIVE</span></a>
                            @endif --}}
                         

                        </div>
                    </li>
                    {{-- <li class="nav-item">
                        @if($title=='officials')
                        <a class="nav-link page-scroll" href="#header">MUNICIPAL OFFICIALS<span class="sr-only">(current)</span></a>
                        @else 
                        <a class="nav-link page-scroll" href="/officials">MUNICIPAL OFFICIALS</a>
                        @endif
                        
                    </li>
                    <li class="nav-item">
                        @if($title=='legislative')
                        <a class="nav-link page-scroll" href="#header">LEGISLATIVE BRANCH<span class="sr-only">(current)</span></a>
                        @else 
                        <a class="nav-link page-scroll" href="/officials">LEGISLATIVE BRANCH</a>
                        @endif
                        
                    </li> --}}
                    {{-- <li class="nav-item dropdown">
                        @if($title=='national_office')
                        <a class="nav-link page-scroll" href="#header">NATIONAL OFFICE <span class="sr-only">(current)</span></a>
                        @else 
                        <a class="nav-link page-scroll" href="/national_office">NATIONAL OFFICE </a>
                        @endif --}}
                        {{-- @if($title=='departments')
                        <a class="nav-link dropdown-toggle page-scroll" href="#header" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">DEPARTMENTS<span class="sr-only">(current)</span></a>
                        @else 
                        <a class="nav-link dropdown-toggle page-scroll" href="#" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">DEPARTMENTS</a>
                        @endif
                       
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @if($subtitle=='mayorsIffice')
                            <a class="dropdown-item" href="#header"><span class="item-text">MAYOR'S OFFICE</span></a>
                            @else 
                            <a class="dropdown-item" href="/mayorsOffice"><span class="item-text">MAYOR'S OFFICE</span></a>
                            @endif
                            
                            <div class="dropdown-items-divide-hr"></div>
                           @if($subtitle=='mado')
                           <a class="dropdown-item" href="#header"><span class="item-text">MADO</span></a>
                            @else 
                            <a class="dropdown-item" href="/mado"><span class="item-text">MADO</span></a>
                            @endif

                            <div class="dropdown-items-divide-hr"></div>
                           @if($subtitle=='MHRMO')
                           <a class="dropdown-item" href="#header"><span class="item-text">MHRMO</span></a>
                            @else 
                            <a class="dropdown-item" href="/MHRMO"><span class="item-text">MHRMO</span></a>
                            @endif


                            <div class="dropdown-items-divide-hr"></div>
                           @if($subtitle=='OIC-MPDC')
                           <a class="dropdown-item" href="#header"><span class="item-text">OIC-MPDC</span></a>
                            @else 
                            <a class="dropdown-item" href="/OIC-MPDC"><span class="item-text">OIC-MPDC</span></a>
                            @endif

                           <div class="dropdown-items-divide-hr"></div>
                           @if($subtitle=='OIC-MENRO')
                           <a class="dropdown-item" href="#header"><span class="item-text">LDRRMO & OIC-MENRO</span></a>
                            @else 
                            <a class="dropdown-item" href="/LDRRMO"><span class="item-text">LDRRMO & OIC-MENRO</span></a>
                            @endif
                           <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="/see-all-offices"><span class="item-text">SEE ALL</span></a>

                        </div> --}}
                    {{-- </li> --}}
                    <li class="nav-item dropdown">
                        @if($title=='offices')
                        <a class="nav-link dropdown-toggle page-scroll" href="#header" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">DEPARTMENTS<span class="sr-only">(current)</span></a>
                        @else 
                        <a class="nav-link dropdown-toggle page-scroll" href="/see-all-offices" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">DEPARTMENTS</a>
                        @endif
                       
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @if($subtitle=='executive' && $title=='offices')
                            <a class="dropdown-item" href="#header"><span class="item-text">EXECUTIVE BRANCH</span></a>
                            @else 
                            <a class="dropdown-item" href="/see-all-offices"><span class="item-text">EXECUTIVE BRANCH</span></a>
                            @endif
                            
                            <div class="dropdown-items-divide-hr"></div>
                            @if($subtitle=='legislative_branch' && $title=='offices')
                            <a class="dropdown-item" href="#header"><span class="item-text">LEGISLATIVE BRANCH</span></a>
                            @else 
                            <a class="dropdown-item" href="/see-all-offices-legislative"><span class="item-text">LEGISLATIVE BRANCH</span></a>
                            @endif

                            
                         

                        </div>
                        {{-- @if($title=='offices')
                        <a class="nav-link page-scroll" href="#header">DEPARTMENTS <span class="sr-only">(current)</span></a>
                        @else 
                        <a class="nav-link page-scroll" href="/see-all-offices">DEPARTMENTS </a>
                        @endif --}}

                        {{--  --}}

                        {{-- @if($title=='departments')
                        <a class="nav-link dropdown-toggle page-scroll" href="#header" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">DEPARTMENTS<span class="sr-only">(current)</span></a>
                        @else 
                        <a class="nav-link dropdown-toggle page-scroll" href="#" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">DEPARTMENTS</a>
                        @endif
                       
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @if($subtitle=='mayorsIffice')
                            <a class="dropdown-item" href="#header"><span class="item-text">MAYOR'S OFFICE</span></a>
                            @else 
                            <a class="dropdown-item" href="/mayorsOffice"><span class="item-text">MAYOR'S OFFICE</span></a>
                            @endif
                            
                            <div class="dropdown-items-divide-hr"></div>
                           @if($subtitle=='mado')
                           <a class="dropdown-item" href="#header"><span class="item-text">MADO</span></a>
                            @else 
                            <a class="dropdown-item" href="/mado"><span class="item-text">MADO</span></a>
                            @endif

                            <div class="dropdown-items-divide-hr"></div>
                           @if($subtitle=='MHRMO')
                           <a class="dropdown-item" href="#header"><span class="item-text">MHRMO</span></a>
                            @else 
                            <a class="dropdown-item" href="/MHRMO"><span class="item-text">MHRMO</span></a>
                            @endif


                            <div class="dropdown-items-divide-hr"></div>
                           @if($subtitle=='OIC-MPDC')
                           <a class="dropdown-item" href="#header"><span class="item-text">OIC-MPDC</span></a>
                            @else 
                            <a class="dropdown-item" href="/OIC-MPDC"><span class="item-text">OIC-MPDC</span></a>
                            @endif

                           <div class="dropdown-items-divide-hr"></div>
                           @if($subtitle=='OIC-MENRO')
                           <a class="dropdown-item" href="#header"><span class="item-text">LDRRMO & OIC-MENRO</span></a>
                            @else 
                            <a class="dropdown-item" href="/LDRRMO"><span class="item-text">LDRRMO & OIC-MENRO</span></a>
                            @endif
                           <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="/see-all-offices"><span class="item-text">SEE ALL</span></a>

                        </div> --}}
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link page-scroll" href="#intro">INTRO</a>
                    </li> --}}
                    
                    {{-- <li class="nav-item">
                        <a class="nav-link page-scroll" href="#callMe">CALL ME</a>
                    </li> --}}
                    <li class="nav-item dropdown">
                        @if($title=='projects')
                        <a class="nav-link page-scroll" href="#header">UPDATES AND PROJECTS <span class="sr-only">(current)</span></a>
                        @else 
                        <a class="nav-link page-scroll" href="/see-all-projects">UPDATES AND PROJECTS </a>
                        @endif
                        {{-- <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">UPDATES AND PROJECTS</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#"><span class="item-text">1ST WEDDING</span></a>
                           <div class="dropdown-items-divide-hr"></div>
                            
                            <a class="dropdown-item" href="#"><span class="item-text">BLOOD LETTING</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="#"><span class="item-text">VACCINATION</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="#"><span class="item-text">ASUNCION ACTION</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="/see-all-projects"><span class="item-text">SEE ALL</span></a>

                        </div> --}}
                    </li>
                    
                   
    
                    <!-- Dropdown Menu -->          
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">ABOUT</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/vision"><span class="item-text">VISION</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="/mission"><span class="item-text">MISSION</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item"  href="/pdf/LCE AGENDA 2019-2025.pdf" target="_blank" rel="noopener noreferrer"><span class="item-text">EXECUTIVE AGENDA</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="/historical"><span class="item-text">HISTORICAL BACKGROUND</span></a>
                        </div>
                    </li>
                    <!-- end of dropdown menu -->
{{--     
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#contact">CONTACT</a>
                    </li> --}}
                </ul>
                {{-- <span class="nav-item social-icons">
                    <span class="fa-stack">
                        <a href="#your-link">
                            <span class="hexagon"></span>
                            <i class="fab fa-facebook-f fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <span class="hexagon"></span>
                            <i class="fab fa-twitter fa-stack-1x"></i>
                        </a>
                    </span>
                </span> --}}
            </div>
        </nav> <!-- end of navbar -->
        <!-- end of navbar -->
    
    
        <!-- Header -->
        
    

          

        
    
        @yield('content')
    
    
       
    
       
    
        <!-- Footer -->
        <!-- <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="text-container about">
                            <h4>PARTNERS</h4>
                            <p class="white" href="#your-link">
                                REPUBLIC OF THE PHILIPPINES
                                All content is in the public domain unless otherwise stated.</p>
                        </div> 
                    </div> 
                    <div class="col-md-2">
                        <div class="text-container">
                            <h4>ABOUT GOVPH</h4>
                            <ul class="list-unstyled li-space-lg white">
                                <li>
                                    <p class="white" href="#your-link">
                                        Learn more about the Philippine government, its structure, how government works and the people behind it.

                                            GOV.PH
                                            Open Data Portal
                                            Official Gazette</p>
                                </li>
                             
                            </ul>
                        </div> 
                    </div> 
                    <div class="col-md-2">
                        <div class="text-container">
                            <h4>GOVERNMENT LINKS</h4>
                            <ul class="list-unstyled li-space-lg">
                                <li>
                                   
                                <p class="white" href="#your-link">
                                    Office of the President
                                    Office of the Vice President
                                    Senate of the Philippines
                                    House of Representatives
                                    Supreme Court
                                    Court of Appeals
                                    Sandiganbayan</p>
                                </li>
                                
                            </ul>
                        </div> 
                    </div> 
                    <div class="col-md-2">
                        <div class="text-container">
                            <h4>Partners</h4>
                            <ul class="list-unstyled li-space-lg">
                                <li>
                                    <p class="white" href="#your-link">
                                        REPUBLIC OF THE PHILIPPINES
                                        All content is in the public domain unless otherwise stated.</p>
                                </li>
                               
                            </ul>
                        </div> 
                    </div>
                </div> 
            </div> 
        </div> -->
       
    
    
        <!-- Copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="p-small">© The Official Website of Municipality Government of Asuncion. All Right Reserved 2022</a></p>
                    </div> <!-- end of col -->
                </div> <!-- enf of row -->
            </div> <!-- end of container -->
        </div> <!-- end of copyright --> 
        <!-- end of copyright -->
        
            
        <!-- Scripts -->
        <script src="{{asset('js/jquery.min.js')}}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
        <script src="{{asset('js/popper.min.js')}}"></script> <!-- Popper tooltip library for Bootstrap -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
        <script src="{{asset('js/jquery.easing.min.js')}}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
        <script src="{{asset('js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
        <script src="{{asset('js/jquery.magnific-popup.js')}}"></script> <!-- Magnific Popup for lightboxes -->
        <script src="{{asset('js/morphext.min.js')}}"></script> <!-- Morphtext rotating text in the header -->
        <script src="{{asset('js/isotope.pkgd.min.js')}}"></script> <!-- Isotope for filter -->
        <script src="{{asset('js/validator.min.js')}}"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
        <script src="{{asset('js/scripts.js')}}"></script> <!-- Custom scripts -->
    </body>
</html>
