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
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Website Title -->
        <title>Municipality of Asuncion </title>
        
        <!-- Styles -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet"> -->
        <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
        <link href="{{asset('css/fontawesome-all.css')}}" rel="stylesheet">
        <link href="{{asset('css/swiper.css')}}" rel="stylesheet">
        <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">
        <link href="{{asset('css/styles.css')}}" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
        
        <style>
            @import url("https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900");
            .test{
                background-image: url("/images/MunicipalLogo2.png") !important;
                background-size: cover;
            }
            body{
                font-family: 'Roboto' !important;
                background: #f2f7f2 !important;
            }
             h1, h2, h3, h4, h5, h6, p{
                font-family: 'Roboto' !important;
            }
            .card {
            /* Add shadows to create the "card" effect */
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            }

            /* On mouse-over, add a deeper shadow */
            .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            }

            /* Add some padding inside the card container */
            .container {
            padding: 2px 16px;
            }
            .content {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                    font-family: "Poppins", sans-serif !important;
                    font-weight: 900 !important;
                    display: flex;
                    background: #fff;
                    min-height: 10vh;
                    align-items: center;
                    justify-content: center;
                    position: relative;
            }

            .content h2 {
            color: #fff;
            font-size: 8em;
            position: absolute;
            transform: translate(-50%, -50%);
            }

            .content h2:nth-child(1) {
            color: transparent;
            -webkit-text-stroke: 2px #006400;
            }

            .content h2:nth-child(2) {
            color: #006400;
            animation: animate 4s ease-in-out infinite;
            }

            @keyframes animate {
            0%,
            100% {
                clip-path: polygon(
                0% 45%,
                16% 44%,
                33% 50%,
                54% 60%,
                70% 61%,
                84% 59%,
                100% 52%,
                100% 100%,
                0% 100%
                );
            }

            50% {
                clip-path: polygon(
                0% 60%,
                15% 65%,
                34% 66%,
                51% 62%,
                67% 50%,
                84% 45%,
                100% 46%,
                100% 100%,
                0% 100%
                );
            }
            }
            .fade-in-text {
                animation: fadeIn 5s;
                -webkit-animation: fadeIn 5s;
                -moz-animation: fadeIn 5s;
                -o-animation: fadeIn 5s;
                -ms-animation: fadeIn 5s;
                }
            
                @keyframes fadeIn {
                0% { opacity: -1; }
                100% { opacity: 1; }
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
                            <a class="dropdown-item" href="#header"><span class="item-text">LEGISLATIVE DIGEST</span></a>
                            @else 
                            <a class="dropdown-item" href="/archive/"><span class="item-text">LEGISLATIVE DIGEST</span></a>
                            @endif

                           
                         

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
                        <a class="nav-link dropdown-toggle page-scroll" href="#header" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">PROGRAMS AND SERVICES <span class="sr-only">(current)</span></a>
                        @else 
                        <a class="nav-link dropdown-toggle page-scroll" href="/see-all-projects" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">PROGRAMS AND SERVICES </a>
                        @endif
                       
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @if($subtitle=='help' && $title=='projects')
                                <a class="dropdown-item" href="#header"><span class="item-text">H-HEALTH</span></a>
                            @else 
                                <a class="dropdown-item" href="/see-all-projects/help"><span class="item-text">H-HEALTH</span></a>
                            @endif

                            @if($subtitle=='education' && $title=='projects')
                                <a class="dropdown-item" href="#header"><span class="item-text">E-EDUCATION</span></a>
                            @else 
                                <a class="dropdown-item" href="/see-all-projects/education"><span class="item-text">E-EDUCATION</span></a>
                            @endif

                            @if($subtitle=='livelyhood' && $title=='projects')
                                <a class="dropdown-item" href="#header"><span class="item-text">L-LIVELIHOOD</span></a>
                            @else 
                                <a class="dropdown-item" href="/see-all-projects/livelihood"><span class="item-text">L-LIVELIHOOD</span></a>
                            @endif

                            @if($subtitle=='projects' && $title=='projects')
                                <a class="dropdown-item" href="#header"><span class="item-text">P-PROJECTS</span></a>
                            @else 
                                <a class="dropdown-item" href="/see-all-projects/projects"><span class="item-text">P-PROJECTS</span></a>
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

                    {{-- <li class="nav-item dropdown">
                        @if($title=='projects')
                        <a class="nav-link page-scroll" href="#header">PROGRAMS AND SERVICES<span class="sr-only">(current)</span></a>
                        @else 
                        <a class="nav-link page-scroll" href="/see-all-projects">PROGRAMS AND SERVICES</a>
                        @endif
                        
                    </li> --}}
                    
                   
    
                    <!-- Dropdown Menu -->          
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">ABOUT LGU</a>
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
