@extends('layouts.master', ['title' => 'welcome', 'subtitle' => ''])

@section('content')
    <div style="margin-top: 110px;"  id="carouselExampleIndicators" class="carousel slide" data-pause="false" data-interval='4000' data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style="height: 100vh;">
            @foreach ($landingImage as $key => $image)
                @if ($key == 0)
                    <div class="carousel-item active" style="height: 100%;">
                @else
                    <div class="carousel-item" style="height: 100%;">
                @endif
                <div id="header" style="position: relative;height: 100%;background-size: cover !important;background: url(landing_images/{{ $image->image }}) center center no-repeat;"
                    class="header">
                    <div style="position: absolute; top: -150px;left: 50px;" class="header-content">
                        <div class="fade-in-text" style="background: rgb(69 113 69 / 60%);
                        padding: 20px;
                        border-radius: 20px;">
                            <h2 style="color: white;
                            font-size: xxx-large;">{{$image->title}}</h2>
                            <h4 style="color: white;
                            font-size: x-large;">{{$image->subtitle}}</h4>
                        </div>
                        
                    </div>

                    <div style="position: absolute; top: -220px;right: 50px;" class="header-content">
                    
                        <img style="width: 200px;" src="/landing_images/logo_asuncion.gif" alt="">

                            {{-- <h2 style="color: white;
                            font-size: xxx-large;">image here</h2> --}}
                        
                        
                    </div>
                </div>
        </div>
        @endforeach
      


    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div style="margin: 50px; padding-bottom: 0px !important; margin-bottom: 0px" class="filter">
                    <div class="card" style="background: #e8f9e9;padding: 5px; margin-bottom:30px;border-radius: 20px;">
                        <div style="cursor: pointer; margin: 10px; padding:10px;padding-bottom: 20px;" class="container-fluid m-10">
                            <div class="row">
                                <div class="col-lg-12">
                                    <a style="text-decoration: none" href="/vision" target="_blank" rel="noopener noreferrer">
                                    <h3 style="text-align: center">VISION</h3>
                                    <!-- style="text-transform: uppercase" -->
                                    <p >We envision Asuncion as a peaceful Municipality where the people are God-fearing, Prosperous, Highly educated, live long and healthy lives, resilent to natural...</p>
                                    <span style="color:blue">Read More</span>
                                </a>
                                </div> 
                            </div>
                        </div>
                        <div style="cursor: pointer; margin: 10px;padding:10px;padding-top: 0px;" class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    
                                    <a href="/mission" style="text-decoration: none" target="_blank" rel="noopener noreferrer"><h3 style="text-align: center">MISSION</h3>
                                    <h5>MISSION I</h5>
                                        <p>To increase individual income by 20% per year <b>ECONOMIC</b></p>
                                        <ul>
                                            <li>Amuna sa mag-uuma</li>
                                            <li>Asikaso sa negosyo ug trabaho</li>
                                            <li>kalinaw ug kahapsay sa katilingban</li>
                                            <li>Desenting pabahay</li>
                                            <li>Imprastruktura sa kalambuan</li>
                                        </ul>
                                         <span style="color:blue">Read More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            
        </div>
        <div class="col-md-6">
            <div class="container p-3 m-4">
                
                <div style="margin: 50px; padding-bottom: 0px !important; margin-bottom: 0px" class="filter">
                    <div class="card" style="background: #e8f9e9;padding: 40px; margin-bottom:30px;border-radius: 20px;">
                        <div style="cursor: pointer;" >
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3 style="text-align: center">EMERGENCY HOTLINE</h3>
                                    <ul style="list-style-type:none; padding: 0;">
                                        @foreach ($emergencyHotlines as $emergencyHotline)
                                            <li class="table-style">
                                                <div style="display: flex;justify-content: space-evenly;align-items: center;">
                                                    <div style="width: 100px">{{ $emergencyHotline->name }}</div>
                                                    <div style="width: 300px"><b> - {{ $emergencyHotline->number }} ({{ $emergencyHotline->network }})</b></div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div style="margin: 50px; padding-bottom: 0px !important; margin-bottom: 0px" class="filter">
        <div class="card" style="background: #e8f9e9;padding: 40px; margin-bottom:30px;border-radius: 20px;">
        <div style="cursor: pointer;" >
            <div class="row">
                <div class="col-lg-6">
                   
                        <h3 style="text-align: center">HISTORICAL BACKGROUND</h3>
                    <div style="text-align: center;display: flex;
                                                                justify-items: center;
                                                                align-items: center;
                                                                align-content: center;">
                       <div style="display: inline-block;">
                            <a style="text-decoration: none" href="/historical" target="_blank" rel="noopener noreferrer">
                               <div style="text-align: left;" class="ex-basic-2">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-container">
                                                     <p style="color:black">The Municipality of Asuncion became a regular
                                                            municipal district on February 23, 1921 by virtue of Executuve
                                                            Order No. 8, signed by Governor General Francis Burton F.
                                                            Harrison, duly
                                                            endorsed by the Provincial Board of Davao under Resolution
                                                            Numbers 297 and 393. Two (2) districts were created: The
                                                            District of Camansa and the District of Saug.
                                                            Each District consists of five (5) barrios:</p>
                                                  

                                                    <span style="color:blue">Read More</span>
                                                    
                                                </div>
                                            </div> <!-- end of text-container-->



                                        </div> <!-- end of col-->
                                    </div> <!-- end of row -->
                                </div> <!-- end of container -->
                            </a>
                        </div>
                       
                    </div>
                   
                    

                </div>
                <div class="col-lg-6">
                    <div style="cursor: pointer;margin: 30px;" class="container">
                        <div class="row">
                            <div class="col-lg-12">
                            <!-- href="/pdf/LCE AGENDA 2019-2025.pdf" target="_blank" rel="noopener noreferrer" -->
                                <a style="text-decoration: none" href="/pdf/LCE AGENDA 2019-2025.pdf" target="_blank" rel="noopener noreferrer">
                                    <h3 style="text-align: center">EXECUTIVE AGENDA</h3>
                                    <div style="text-align: center;
                                                                                justify-items: center;
                                                                                align-items: center;
                                                                                align-content: center;">
                                        <div style="display: inline-block;">
                                            <p style="text-align: center">View Executive Agenda...
                                            </p>
                                            <span style="color:blue">Read More</span>
                                        </div>
                
                                    </div>
                                </a>
                            </div> 
                        </div>
                    </div>
                    <!-- <div style="cursor: pointer; margin: 30px;" class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <a style="text-decoration: none" href="/agendas/{{$legislative_agendas? $legislative_agendas['file']: ''}}" target="_blank"
                                    rel="noopener noreferrer">
                                    <h3 style="text-align: center">LEGISLATIVE AGENDA</h3>
                                    <div style="text-align: center;
                                                                                justify-items: center;
                                                                                align-items: center;
                                                                                align-content: center;">
                                        <div style="display: inline-block;">
                                        <p style="text-align: center">View Legislative Agenda...
                                        </p>
                                         <span style="color:blue">Read More</span>
                                        </div>
                
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div> <!-- end of col -->
        </div>
         </div>
    </div>
    </div>
    <div class="filter" style="margin-top: 20%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" >
                    {{-- <h1 style="text-align: center">WOW Asuncion</h1> --}}
                    <section>
                        <div class="content" style="margin-left: 30vw;">
                            <h2 style="color: #d7d550;font-family: &quot;Poppins&quot;, sans-serif !important;font-weight: 900!important;font: 699 10.75rem/8.125rem &quot;Montserrat&quot;, sans-serif;">WOW</h2>
                            <h2 style="font-family: &quot;Poppins&quot;, sans-serif !important;font-weight: 900!important;font: 699 10.75rem/8.125rem &quot;Montserrat&quot;, sans-serif;">WOW</h2>
                        
                            </div>
                    </section>
                    <section>
                        <div class="content" style="margin-left: 55vw;margin-top: 50px;">
                            <h2 style="color: #d7d550;font-family: &quot;Poppins&quot;, sans-serif !important;font-weight: 900!important;font: 699 10.75rem/8.125rem &quot;Montserrat&quot;, sans-serif;">ASUNCION</h2>
                            <h2 style="font-family: &quot;Poppins&quot;, sans-serif !important;font-weight: 900!important;font: 699 10.75rem/8.125rem &quot;Montserrat&quot;, sans-serif;">ASUNCION</h2>
                        </div>
                    </section>
                    <video style="width: 100%" controls>
                        <source src="video/Day6 Asuncion final njud ni sure na ha.mp4" type="video/mp4">
                        <source src="video/Day6 Asuncion final njud ni sure na ha.mp4">
                        Your browser does not support HTML video.
                    </video>
                </div> <!-- end of col -->
            </div>
        </div>
    </div>

    <!-- Details 1 -->
    <div class="filter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">UPDATES</div>
                    <h2>SEE OUR LATEST UPDATE</h2>
                </div> <!-- end of col -->
            </div>
        </div>
    </div>
    <div style="display: flex;" id="details" class="accordion">

        @foreach ($latestUpdate as $key => $latest)

            @if ($key == 0)

                {{-- background: url('/images/{{$latest->image}}') center center no-repeat !important; --}}
                <div style="
                                                    
                                                    background-size: cover;" class="area-1">
                    <img style="width: 100%;" src="/updates/{{ $latest->image }}" alt="">
                </div><!-- end of area-1 on same line and no space between comments to eliminate margin white space -->
                <div class="area-2">

                    <!-- Accordion -->
                    <div class="accordion-container" id="accordionOne">
                        <h2>{{ $latest->title }}</h2>
                        <div class="item">
                            <p>{{ $latest->description }}</p>
                            <p><i>{{ $latest->description_local }}</i></p>
                            {{-- <div id="headingOne">
                            <span data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" role="button">
                                <span class="circle-numbering">1</span><span class="accordion-title">{{$latest->description}}</span>
                            </span>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionOne">
                            <div class="accordion-body">
                                {{$latest->description_local}}
                            </div>
                        </div> --}}
                        </div> <!-- end of item -->

                    </div> <!-- end of accordion-container -->
                    <!-- end of accordion -->
            @endif
        @endforeach
    </div> <!-- end of area-2 -->
    </div> <!-- end of accordion -->
    <!-- Details 2 -->
    @foreach ($latestUpdate as $key => $latest)

        @if ($key == 1)
            <div style="display: flex;" class="tabs">
                <div class="area-1">
                    <div class="tabs-container">

                        <div class="tab-content" id="ariaTabsContent">

                            <!-- Tab -->
                            <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                                <h4>{{ $latest->title }}</h4>
                                <p>{{ $latest->description }}</p>
                                <p><i>{{ $latest->description_local }}</i></p>


                            </div> <!-- end of tab-pane -->
                            <!-- end of tab -->

                            <!-- Tab -->
                            <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
                                <ul class="list-unstyled li-space-lg first">
                                    <li class="media">
                                        <div class="media-bullet">1</div>
                                        <div class="media-body"><strong>High quality</strong> is on top of our list when
                                            it comes to the way we deliver the services</div>
                                    </li>
                                    <li class="media">
                                        <div class="media-bullet">2</div>
                                        <div class="media-body"><strong>Maximum impact</strong> is what we look for in
                                            our actions</div>
                                    </li>
                                    <li class="media">
                                        <div class="media-bullet">3</div>
                                        <div class="media-body"><strong>Quality standards</strong> are important but
                                            meant to be exceeded</div>
                                    </li>
                                </ul>
                                <ul class="list-unstyled li-space-lg last">
                                    <li class="media">
                                        <div class="media-bullet">4</div>
                                        <div class="media-body"><strong>We're always looking</strong> for industry
                                            leaders to help them win their market position</div>
                                    </li>
                                    <li class="media">
                                        <div class="media-bullet">5</div>
                                        <div class="media-body"><strong>Evaluation</strong> is a key aspect of this
                                            business and important</div>
                                    </li>
                                    <li class="media">
                                        <div class="media-bullet">6</div>
                                        <div class="media-body"><strong>Ethic</strong> procedures ar alwasy at the base
                                            of everything we do</div>
                                    </li>
                                </ul>
                            </div> <!-- end of tab-pane -->
                            <!-- end of tab -->

                            <!-- Tab -->
                            <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
                                <p><strong>We strive to achieve</strong> 100% customer satisfaction for both types of
                                    customers: hiring companies and job seekers. Types of customers: <a
                                        class="green" href="#your-link">with huge potential</a></p>
                                <p><strong>Our goal is to help</strong> your company achieve its full potential and
                                    establish long term stability for <a class="green" href="#your-link">the
                                        stakeholders</a></p>
                                <ul class="list-unstyled li-space-lg">
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">It's easy to get a quotation, just call our office
                                            anytime</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">We'll get back to you with an initial estimate soon
                                        </div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">Get ready to see results even after only 30 days</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">Ask for a quote and start improving your business</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">Just fill out the form and we'll call you right away
                                        </div>
                                    </li>
                                </ul>
                            </div> <!-- end of tab-pane -->
                            <!-- end of tab -->

                        </div> <!-- end of tab-content -->
                        <!-- end of tabs content -->

                    </div> <!-- end of tabs-container -->
                </div><!-- end of area-1 on same line and no space between comments to eliminate margin white space -->
                <div style="height: 27rem;
                                                    
                                                    background-size: cover;" class="area-2">
                    <img style="width: 100%;" src="/updates/{{ $latest->image }}" alt="">
                </div> <!-- end of area-2 -->
            </div> <!-- end of tabs -->
            <!-- end of details 2 -->
        @endif
    @endforeach
    <!-- end of details 1 -->
    <!-- Projects -->
    <br>
    <br>
    <br>
    <div id="projects" class="filter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">PROJECTS</div>
                    <h2>Projects That We're Proud Of</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Filter -->
                    <div class="button-group filters-button-group">
                        <a class="button is-checked" data-filter="*"><span>SHOW ALL</span></a>
                        @foreach ($updates as $update)
                            <a class="button"
                                data-filter=".{{ $update->id }}"><span>{{ $update->title }}</span></a>
                        @endforeach

                        {{-- <a class="button" data-filter=".asuncion_action"><span>ASUNCION ACTION</span></a>
                            
                            <a class="button" data-filter=".blessingandturnover"><span>BLESSING AND TURNOVER</span></a>
                            <a class="button" data-filter=".vaccination"><span>VACCINATION @ BUCLAD GYM</span></a> --}}
                    </div>


                    <div class="grid">
                        @foreach ($updates as $update)
                            <div class="element-item {{ $update->id }}">
                                <a class="popup-with-move-anim" href="#{{ $update->id }}">
                                    <div class="element-item-overlay"><span>{{ $update->title }}</span></div><img
                                        src="/updates/{{ $update->image }}" alt="alternative">
                                </a>
                            </div>

                        @endforeach
                    </div>

                    @foreach ($updates as $update)
                        <div id="{{ $update->id }}" class="lightbox-basic zoom-anim-dialog mfp-hide">
                            <div class="row">
                                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                                <div class="col-lg-8">
                                    <img class="img-fluid" src="/updates/{{ $update->image }}" alt="alternative">
                                </div> <!-- end of col -->
                                <div class="col-lg-4">
                                    <h3>{{ $update->title }}</h3>
                                    <hr style="width: auto" class="line-heading">
                                    <h6>{{ $update->description }}</h6>
                                    <h6>{{ $update->description_local }}</h6>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                 
                                    <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a
                                        class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a>
                                </div> <!-- end of col -->
                            </div> <!-- end of row -->
                        </div>
                    @endforeach
                    <!-- end of filter -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of filter -->
    <!-- end of projects -->

    <!-- Testimonials -->

    <div class="slider">
        <div class="row">
            <div class="col-lg-12">
                <h2>OUR OFFICIALS OF ASUNCION</h2>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">

                <!-- Card Slider -->

                <div class="slider-container">
                    <div class="swiper-container card-slider">
                        <div class="swiper-wrapper">
                            @foreach ($officials as $key => $official)
                                <div class="swiper-slide">
                                    <div class="card-test">
                                        <a style="margin-left: 50px; text-decoration: none;
                                                                                    margin-right: 50px;"
                                            class="popup-with-move-anim" href="#officials{{ $key }}">
                                            <img class="card-image" src="/officials/{{ $official->image }}"
                                                alt="alternative">
                                            <div class="card-body">
                                                {{-- <div class="testimonial-text">My goals for using Aria's services seemed high when I first set them but they've met them with no problems.</div> --}}
                                                <div class="testimonial-author">
                                                    <h3 style="text-transform: uppercase;">{{ $official->first_name }}
                                                        {{ $official->last_name }}</h3>

                                                    <h3>{{ $official->position }}</h3>
                                                </div>
                                            </div>
                                        </a>
                                        <div id="officials{{ $key }}"
                                            class="lightbox-basic zoom-anim-dialog mfp-hide">
                                            <div class="row">
                                                <button title="Close (Esc)" type="button"
                                                    class="mfp-close x-button">×</button>
                                                <div class="col-lg-5">
                                                    <img class="img-fluid" src="/officials/{{ $official->image }}"
                                                        alt="alternative">
                                                </div> <!-- end of col -->
                                                <div class="col-lg-7">
                                                    <h2>{{ $official->first_name }} {{ $official->last_name }}</h2>
                                                    <hr class="line-heading">
                                                    <h6>{{ $official->position }}</p>
                                                        <div class="container"
                                                            style="display: inline-block; margin-bottom:140px;">
                                                            <h3>PERSONAL PROFILE</h3>

                                                            <table>
                                                                <tr>
                                                                    <td>Address:</td>
                                                                    <td style="font-style: italic;">
                                                                        {{ $official->address }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Birthdate:</td>
                                                                    <td style="font-style: italic;">
                                                                        {{ $official->birthdate }}</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Term-of-office <br>
                                                                    <td style="font-style: italic;">
                                                                        {{ $official->term_of_service }} <br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><br></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Elective title experience:</td>
                                                                    <td style="font-style: italic;">
                                                                        {{ html_entity_decode($official->elective_title_experience) }}
                                                                        <br>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><br></td>
                                                                    <td></td>
                                                                </tr>
                                                               
                                                                <tr>
                                                                    <td>QUOTATION:</td>
                                                                    <td style="font-style: italic;">
                                                                        {{ $official->quotation }}</td>
                                                                </tr>
                                                            
                                                            </table>
                                                        </div>
                                                      
                                                        <a class="btn-solid-reg" href="/officials-view">SEE ALL
                                                            OFFICIALS</a> <a class="btn-outline-reg mfp-close as-button"
                                                            href="#projects">BACK</a>
                                                </div> <!-- end of col -->
                                            </div> <!-- end of row -->
                                        </div>
                                    </div>
                                </div>
                            @endforeach






                            {{-- </a> --}}

                        </div> <!-- end of swiper-wrapper -->

                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <!-- end of add arrows -->

                    </div> <!-- end of swiper-container -->
                </div> <!-- end of sliedr-container -->
                <!-- end of card slider -->

            </div> <!-- end of col -->
        </div>
    </div> <!-- end of slider -->
    <!-- end of testimonials -->
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h2>BARANGAYS OF ASUNCION</h2>
                        </div>

                    </div> <!-- end of col -->
                </div>
            </div>
            <br>
            <div style="padding: 90px;" class="text-center">
                {{-- <div style="display: flex"> --}}
                @foreach ($barangays as $barangay)
                    <div style="display: inline-block;;
                                                                width: 200px;">
                        <img style="width:200px" src="barangay/{{ $barangay->image }}" alt="...">
                        <label for="">{{ $barangay->name }}</label>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <!-- Testimonials -->
    <div class="slider">
        <div>
            <div class="row">
                <div class="col-lg-12">
                    <h2>OUR PUNONG BARANGAYS</h2>
                    <!-- <p class="p-heading">SEE OUR LATEST PUNONG BARANGAY</p> -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                @foreach ($barangay_officials as $key => $barangay_official)


                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <div class="card-test">
                                            <a style="margin-left: 50px; text-decoration: none;
                                                                                    margin-right: 50px;"
                                                class="popup-with-move-anim" href="#barangaysOfficial{{ $key }}">
                                                <img class="card-image"
                                                    src="/barangay_officials/{{ $barangay_official->image }}"
                                                    alt="alternative">
                                                <div class="card-body">
                                                    {{-- <div class="testimonial-text">The guys from Aria helped with getting my business off the ground and turning into a profitable company.</div> --}}
                                                    <div style="text-transform: uppercase;" class="testimonial-author">
                                                        {{ $barangay_official->first_name }}
                                                        {{ $barangay_official->last_name }}</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div> <!-- end of swiper-slide -->
                                    <div id="barangaysOfficial{{ $key }}"
                                        class="lightbox-basic zoom-anim-dialog mfp-hide">
                                        <div class="row">
                                            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                                            <div class="col-lg-5">
                                                <img class="img-fluid"
                                                    src="/barangay_officials/{{ $barangay_official->image }}"
                                                    alt="alternative">
                                            </div> <!-- end of col -->
                                            <div class="col-lg-7">
                                                <h3>{{ $barangay_official->first_name }}
                                                    {{ $barangay_official->last_name }}</h3>
                                                <hr class="line-heading">
                                                <h6>{{ $barangay_official->position }}</p>
                                                    <div class="container"
                                                        style="display: inline-block;margin-bottom: 140px;">
                                                        <h2>PERSONAL PROFILE</h2>

                                                        <table>
                                                            <tr>
                                                                <td>Address:</td>
                                                                <td>{{ $barangay_official->address }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Birthdate:</td>
                                                                <td>{{ $barangay_official->birthdate }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td><br></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Term-of-office <br>
                                                                <td>{{ $barangay_official->term_of_service }} <br></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Elective title experience:</td>
                                                                <td>{{ $barangay_official->elective_title_experience }}
                                                                    <br>
                                                                </td>
                                                            </tr>
                                                       
                                                            <tr>
                                                                <td>QUOTATION:</td>
                                                                <td>{{ $barangay_official->quotation }}</td>
                                                            </tr>
                                                         
                                                        </table>
                                                    </div>
                                                 
                                                    <a class="btn-solid-reg" href="/officials-view">SEE ALL OFFICIALS</a>
                                                    <a class="btn-outline-reg mfp-close as-button"
                                                        href="#projects">BACK</a>
                                            </div> <!-- end of col -->
                                        </div> <!-- end of row -->
                                    </div>
                                    <!-- end of slide -->
                                @endforeach

                            </div> <!-- end of swiper-wrapper -->

                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of sliedr-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider -->
    <!-- end of testimonials -->
    <br>
    <br>
    <br>

    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <div class="section-title">CONTACT</div>
                        <h2>Get In Touch Using The Form</h2>
                        <p>You can stop by our office for a cup of coffee and just use the contact form below for any
                            questions and inquiries</p>
                        
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
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
                    <!-- Contact Form -->
                    <!-- id="contactForm" -->
                    <!-- data-toggle="validator"  -->
                    <!-- data-focus="false" -->
                    <form method="POST" action="messages-submit" >
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control-input" id="cname" required>
                            <label class="label-control" for="cname">Name</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email"   name="email" class="form-control-input" id="cemail" required>
                            <label class="label-control" for="cemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea  name="message" class="form-control-textarea" id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage">Your message</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <!-- <div class="form-group checkbox">
                            <input type="checkbox" id="cterms" value="Agreed-to-Terms" required>I agree with Aria's stated
                            <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms-conditions.html">Terms
                                Conditions</a>
                            <div class="help-block with-errors"></div>
                        </div> -->
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">SUBMIT MESSAGE</button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
    <style>
        .table-style {
            font-size: 25px;
            font-weight: bolder;
        }

    </style>
    <!-- end of form-2 -->
    <!-- end of contact -->
@stop
