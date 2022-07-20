@extends('layouts.master', ['title' => 'welcome', 'subtitle' => ''])

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            @foreach ($landingImage as $key => $image)

                @if ($key == 0)
                    <div class="carousel-item active">
                    @else
                        <div class="carousel-item">
                @endif

                <div id="header" style="background: url(landing_images/{{ $image->image }}) center center no-repeat;"
                    class="header">
                    <div class="header-content">
                        <div style="margin-top: 590px;" class="container">
                            <div class="row">
                                <div class="col-lg-12">

                                    <div style="background-color: #113448;
                                                                            border: solid;
                                                                            border-radius: 10px;
                                                                            border-color: rgb(39 81 105);"
                                        class="text-container">
                                        <a style="text-decoration: none" href="/landingImage-view/{{ $image->id }}"
                                            target="_blank">
                                            <h1 style='font: 700 3.5rem/4rem "Poppins";'>{{ $image->title }} </h1>
                                            <p style="color:white">{{ $image->subtitle }}</p>
                                        </a>
                                        {{-- <h1>OFFICIAL WEBSITE</h1>
                                        <p style="color:white">OF</p>
                                        <h1>LGU ASUNCION</h1> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        @endforeach
        {{-- <div class="carousel-item">
                <div id="header" class="header2">
                    <div class="header-content">
                        <div style="margin-top: 280px;" class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    
                                    <div class="text-container">
                                        
                                       
                                        <div>
                                        <h1>TITLE HERE</h1>
                                        <hr>
                                        <p style="color:white"><hr></p>
                                        <h1>ONE OF THE BEAUTIFUL RIVER</h1>
                                        <p style="color:white"></p>
                                        <h1></h1>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
              </div> --}}
        {{-- <div class="carousel-item">
                <div id="header" class="header3">
                    <div class="header-content">
                        <div style="margin-top: 280px;" class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    
                                    <div class="text-container">
                                       
                                        
                                        <h1> </h1>
                                        <p style="color:white"></p>
                                        <h1>TITLE HERE</h1>
                                        <p style="color:white"></p>
                                        <h1></h1>
                                        
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div> 
                </div>
                
              </div> --}}


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
            <div class="container p-3 m-4">
                <h1>EMERGENCY HOTLINE NUMBER</h1>
                <table style="border: solid" class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Number</th>
                            <th scope="col">Network</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($emergencyHotlines as $emergencyHotline)


                            <tr class="table-style">
                                <th scope="row">#</th>
                                <td style="color:red">{{ $emergencyHotline->name }}</td>
                                <td><b>{{ $emergencyHotline->number }}</b></td>
                                <td>{{ $emergencyHotline->network }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-6">
          


       
        <div style="cursor: pointer; margin: 20px; padding:50px;padding-bottom: 20px;" class="container-fluid m-10">
            <div class="row">
                <div class="col-lg-12">
                    {{-- <div class="section-title">UPDATES</div> --}}
                    {{-- <h2>HISTORICAL BACKGROUND</h2> --}}
                    <a style="text-decoration: none" href="/mission" target="_blank" rel="noopener noreferrer">
                    <h3 style="text-align: center">VISION</h3>
                    <p style="color:black; text-transform: lowercase">WE ENVISION ASUNCION AS A PEACEFUL MUNICIPALITY WHERE THE PEOPLE ARE GOD-FEARING, PROSPEROUS, HIGHLY EDUCATED, LIVE LONG AND HEALTHY LIVES, RESILENT TO NATURAL...read more</p>
                    </a>
                </div> <!-- end of col -->
            </div>
        </div>
        <div style="cursor: pointer; margin: 20px;padding:50px;padding-top: 0px;" class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    
                    <a href="/vision" style="text-decoration: none" target="_blank" rel="noopener noreferrer"><h3 style="text-align: center">MISSION</h3>
                    <h5>MISSION I</h5>
                        <p>To increase individual income by 20% per year <b>ECONOMIC</b></p>
                        <ul>
                            <li>Amuna sa mag-uuma</li>
                            <li>Asikaso sa negosyo ug trabaho</li>
                            <li>kalinaw ug kahapsay sa katilingban</li>
                            <li>Desenting pabahay</li>
                            <li>Imprastruktura sa kalambuan</li>
                        </ul>
                    </a>
                </div> <!-- end of col -->
            </div>
        </div>
 
        </div>
    </div>
    <!-- end of header -->
    <!-- end of header -->
    {{-- class="container" --}}
    <div style="margin: 50px; padding-bottom: 0px !important; margin-bottom: 0px" class="filter">
         <div class="card" style="padding: 40px; margin-bottom:30px">
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
                                                     <p style="color:black"><b>The Municipality of Asuncion became a regular
                                                            municipal district of February 23, 1921 by virtue of Executuve
                                                            Order No. 8, signed by Governor General Francis Burton F.
                                                            Harrison, duly
                                                            endorsed by the Provincial Board of Davao under Resolution
                                                            Numbers 297 and 393. Two (2) districts were created: The
                                                            District of Camansa and the District of Saug.
                                                            Each District consists of five (5) barrios:</b></p>
                                                  

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
                                {{-- <div class="section-title">UPDATES</div> --}}
                                {{-- <h2>HISTORICAL BACKGROUND</h2> --}}
                                <a style="text-decoration: none" href="/pdf/LCE AGENDA 2019-2025.pdf" target="_blank"
                                    rel="noopener noreferrer">
                                    <h3 style="text-align: center">EXECUTIVE AGENDA</h3>
                                    <div style="text-align: center;
                                                                                justify-items: center;
                                                                                align-items: center;
                                                                                align-content: center;">
                                        {{-- <img style="display: inline; width:40%" src=" images/vaccination/vaccination.JPG" alt="..." class="img-thumbnail"> --}}
                                        <div style="display: inline-block;">
                
                                            {{-- <h3>TITLE</h3> --}}
                
                                            {{-- <h2></h2> --}}
                
                                            {{-- <p class="font-red">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolorem ad magnam atque ea, sint iusto alias maiores nostrum, rem aliquid tenetur quae, reprehenderit sit vitae architecto totam consectetur fugiat?</p> --}}
                                            <p style="text-align: center">View Executive Agenda...
                                            </p>
                
                                        </div>
                
                                    </div>
                                </a>
                            </div> <!-- end of col -->
                        </div>
                    </div>
                    <div style="cursor: pointer; margin: 30px;" class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <a style="text-decoration: none" href="/pdf/LCE AGENDA 2019-2025.pdf" target="_blank"
                                    rel="noopener noreferrer">
                                    <h3 style="text-align: center">LEGISLATIVE AGENDA</h3>
                                    <div style="text-align: center;
                                                                                justify-items: center;
                                                                                align-items: center;
                                                                                align-content: center;">
                                        <div style="display: inline-block;">
                                        <p style="text-align: center">View Legislative Agenda...
                                            </p>
                
                                        </div>
                
                                    </div>
                                </a>
                            </div> <!-- end of col -->
                        </div>
                    </div>
                </div>
            </div> <!-- end of col -->
        </div>
         </div>
    </div>
    </div>
    <div class="filter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 style="text-align: center">ASUNCION TOURIST DESTINATION</h3>
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

                        {{-- <div class="item">
                        <div id="headingTwo">
                            <span class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" role="button">
                                <span class="circle-numbering">2</span><span class="accordion-title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                            </span>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionOne">
                            <div class="accordion-body">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </div>
                        </div>
                    </div> <!-- end of item --> --}}
                        {{-- <div class="item">
                        <div id="headingThree">
                            <span class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" role="button">
                                <span class="circle-numbering">3</span><span class="accordion-title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                            </span>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionOne">
                            <div class="accordion-body">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </div>
                        </div>
                    </div> <!-- end of item --> --}}
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

                        <!-- Tabs Links -->
                        {{-- <ul class="nav nav-tabs" id="ariaTabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="nav-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true"><i class="fas fa-th"></i> Business</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nav-tab-2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false"><i class="fas fa-th"></i> Expertise</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nav-tab-3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false"><i class="fas fa-th"></i> Quality</a>
                        </li>
                    </ul> --}}
                        <!-- end of tabs links -->

                        <!-- Tabs Content -->
                        <div class="tab-content" id="ariaTabsContent">

                            <!-- Tab -->
                            <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                                <h4>{{ $latest->title }}</h4>
                                <p>{{ $latest->description }}</p>
                                <p><i>{{ $latest->description_local }}</i></p>

                                {{-- <!-- Progress Bars -->
                            <div class="progress-container">
                                <div class="title">Business Development 100%</div>
                                <div class="progress">
                                    <div class="progress-bar first" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="title">Opportunity Spotting 76%</div>
                                <div class="progress">
                                    <div class="progress-bar second" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="title">Online Marketing 90%</div>
                                <div class="progress">
                                    <div class="progress-bar third" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div> <!-- end of progress-container --> --}}
                                <!-- end of progress bars -->

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
                    {{-- background: url('/images/{{$latest->image}}') center center no-repeat !important; --}}
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


                            {{-- <div class="element-item wedding">
                                <a class="popup-with-move-anim" href="#project-1-wedding-2"><div class="element-item-overlay"><span>1ST WEDDING</span></div><img src="images/IMG_1538.JPG" alt="alternative"></a>
                            </div>
                            <div class="element-item asuncion_action">
                                <a class="popup-with-move-anim" href="#project-2-asuncion-action"><div class="element-item-overlay"><span>ASUNCION ACTION</span></div><img src="images/asuncion_action/asuncion_action.JPG" alt="alternative"></a>
                            </div>
                            <div class="element-item asuncion_action">
                                <a class="popup-with-move-anim" href="#project-2-asuncion-action-2"><div class="element-item-overlay"><span>ASUNCION ACTION</span></div><img src="images/asuncion_action/asuncion_action_2.JPG" alt="alternative"></a>
                           </div>
                           <div class="element-item blessingandturnover">
                                <a class="popup-with-move-anim" href="#project-3-blessings_turnover"><div class="element-item-overlay"><span>BLESSINGS AND TURN OVER</span></div><img src="images/blessings_turnover/blessings_turnover_1.JPG" alt="alternative"></a>
                            </div>
                            <div class="element-item blessingandturnover">
                                <a class="popup-with-move-anim" href="#project-3-blessings_turnover-2"><div class="element-item-overlay"><span>BLESSINGS AND TURN OVER</span></div><img src="images/blessings_turnover/blessings_turnover.JPG" alt="alternative"></a>
                            </div>
                            <div class="element-item vaccination">
                                <a class="popup-with-move-anim" href="#project-4-vaccination"><div class="element-item-overlay"><span>VACCINATION</span></div><img src="images/vaccination/vaccination.JPG" alt="alternative"></a>
                            </div>
                            <div class="element-item vaccination">
                                <a class="popup-with-move-anim" href="#project-4-vaccination-2"><div class="element-item-overlay"><span>VACCINATION</span></div><img src="images/vaccination/vaccination_2.JPG" alt="alternative"></a>
                            </div> --}}
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
                                    <hr class="line-heading">
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
                                    {{-- <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                                    <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                                    <div class="testimonial-container">
                                        <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                                        <p class="testimonial-author">General Manager</p>
                                    </div> --}}
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

    {{-- <!-- Intro -->
        <div id="intro" class="basic-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="text-container">
                            <div class="section-title">INTRO</div>
                            <h2>We Offer Some Of The Best Business Growth Services In Town</h2>
                            <p>Launching a new company or developing the market position of an existing one can be quite an overwhelming processs at times.</p>
                            <p class="testimonial-text">"Our mission here at Aira is to get you through those tough moments relying on our team's expertise in starting and growing companies."</p>
                            <div class="testimonial-author">Louise Donovan - CEO</div>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-7">
                        <div class="image-container">
                            <img class="img-fluid" src="images/intro-office.jpg" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of basic-1 -->
        <!-- end of intro --> --}}


    {{-- <!-- Description -->
        <div class="cards-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        
                        <!-- Card -->
                        <div class="card">
                            <span class="fa-stack">
                                <span class="hexagon"></span>
                                <i class="fas fa-binoculars fa-stack-1x"></i>
                            </span>
                            <div class="card-body">
                                <h4 class="card-title">Environment Analysis</h4>
                                <p>The starting point of any success story is knowing your current position in the business environment</p>
                            </div>
                        </div>
                        <!-- end of card -->
    
                        <!-- Card -->
                        <div class="card">
                            <span class="fa-stack">
                                <span class="hexagon"></span>
                                <i class="fas fa-list-alt fa-stack-1x"></i>
                            </span>
                            <div class="card-body">
                                <h4 class="card-title">Development Planning</h4>
                                <p>After completing the environmental analysis the next stage is to design and  plan your development strategy</p>
                            </div>
                        </div>
                        <!-- end of card -->
    
                        <!-- Card -->
                        <div class="card">
                            <span class="fa-stack">
                                <span class="hexagon"></span>
                                <i class="fas fa-chart-pie fa-stack-1x"></i>
                            </span>
                            <div class="card-body">
                                <h4 class="card-title">Execution & Evaluation</h4>
                                <p>In this phase you will focus on executing the actions plan and evaluating the results after each marketing campaign</p>
                            </div>
                        </div>
                        <!-- end of card -->
    
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of cards-1 -->
        <!-- end of description --> --}}


    {{-- juneroy announcemtn --}}

    <!-- Services -->
    {{-- <div id="services" class="cards-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">SERVICES</div>
                        <h2>Choose The Service Package<br> That Suits Your Needs</h2>
                    </div> 
                </div> 
                <div class="row">
                    <div class="col-lg-12">
                        
                        <div class="card">
                            <div class="card-image">
                                <img class="img-fluid" src="images/1ST WEDDING/IMG_1551.JPG" alt="alternative">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">KASALAN NG BAYAN</h3>
                                <p>Getting information</p>
                              
                                
                            </div>
                            <div class="button-container">
                                <a class="btn-solid-reg page-scroll" href="#callMe">DETAILS</a>
                        </div>
                     
                        <div class="card">
                            <div class="card-image">
                                <img class="img-fluid" src="images/BLOOD LETTING/IMG_6193.JPG" alt="alternative">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">BLOOD LETTING</h3>
                                <p>Getting information</p>
                            </div>
                            <div class="button-container">
                                <a class="btn-solid-reg page-scroll" href="#callMe">DETAILS</a>
                            </div> 
                        </div>
                        <div class="card">
                            <div class="card-image">
                                <img class="img-fluid" src="images/INANG BAYAN PROGRAM AND NAPC ORIENTATION/IMG_6955.JPG" alt="alternative">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">INANG BAYAN PROGRAM</h3>
                                <p>Getting information</p>
                                
                            </div>
                            <div class="button-container">
                                <a class="btn-solid-reg page-scroll" href="#callMe">DETAILS</a>
                        </div>
                       
    
                    </div>
                </div> 
            </div> 
        </div> --}}
    <!-- end of cards-2 -->
    <!-- end of services -->


    {{-- <!-- Details 1 -->
        <div id="details" class="accordion">
            <div class="area-1">
            </div><!-- end of area-1 on same line and no space between comments to eliminate margin white space --><div class="area-2">
                
                <!-- Accordion -->
                <div class="accordion-container" id="accordionOne">
                    <h2>Accelerate Business Growth To Improve Revenue Numbers</h2>
                    <div class="item">
                        <div id="headingOne">
                            <span data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" role="button">
                                <span class="circle-numbering">1</span><span class="accordion-title">How Can Aria Help Your Business</span>
                            </span>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionOne">
                            <div class="accordion-body">
                                At Aria solutions, we’ve taken the consultancy concept one step further by offering a full service management organization with expertise.
                            </div>
                        </div>
                    </div> <!-- end of item -->
                
                    <div class="item">
                        <div id="headingTwo">
                            <span class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" role="button">
                                <span class="circle-numbering">2</span><span class="accordion-title">Great Strategic Business Planning</span>
                            </span>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionOne">
                            <div class="accordion-body">
                                Aria partners with businesses to business growth and development ideas including environment analysis, plan execution and evaluation.
                            </div>
                        </div>
                    </div> <!-- end of item -->
                
                    <div class="item">
                        <div id="headingThree">
                            <span class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" role="button">
                                <span class="circle-numbering">3</span><span class="accordion-title">Online Marketing Campaigns</span>
                            </span>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionOne">
                            <div class="accordion-body">
                                An awesome online marketing plan won't save your bad product but paired with a good product, the sky is the limit for what can be achieved.
                            </div>
                        </div>
                    </div> <!-- end of item -->
                </div> <!-- end of accordion-container -->
                <!-- end of accordion -->
    
            </div> <!-- end of area-2 -->
        </div> <!-- end of accordion -->
        <!-- end of details 1 --> --}}


    {{-- <!-- Details 2 -->
        <div class="tabs">
            <div class="area-1">
                <div class="tabs-container">
                    
                    <!-- Tabs Links -->
                    <ul class="nav nav-tabs" id="ariaTabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="nav-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true"><i class="fas fa-th"></i> Business</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nav-tab-2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false"><i class="fas fa-th"></i> Expertise</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nav-tab-3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false"><i class="fas fa-th"></i> Quality</a>
                        </li>
                    </ul>
                    <!-- end of tabs links -->
                    
                    <!-- Tabs Content -->
                    <div class="tab-content" id="ariaTabsContent">
    
                        <!-- Tab -->
                        <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                            <h4>Business Services For Companies</h4>
                            <p>Aria provides the most innovative and customized business services in the industry. Our <a class="green page-scroll" href="#services">Services</a> section shows how flexible we are for all types of budgets.</p>
                            
                            <!-- Progress Bars -->
                            <div class="progress-container">
                                <div class="title">Business Development 100%</div>
                                <div class="progress">
                                    <div class="progress-bar first" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="title">Opportunity Spotting 76%</div>
                                <div class="progress">
                                    <div class="progress-bar second" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="title">Online Marketing 90%</div>
                                <div class="progress">
                                    <div class="progress-bar third" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div> <!-- end of progress-container -->
                            <!-- end of progress bars -->
                            
                        </div> <!-- end of tab-pane --> 
                        <!-- end of tab -->
    
                        <!-- Tab -->
                        <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
                            <ul class="list-unstyled li-space-lg first">
                                <li class="media">
                                    <div class="media-bullet">1</div>
                                    <div class="media-body"><strong>High quality</strong> is on top of our list when it comes to the way we deliver the services</div>
                                </li>
                                <li class="media">
                                    <div class="media-bullet">2</div>
                                    <div class="media-body"><strong>Maximum impact</strong> is what we look for in our actions</div>
                                </li>
                                <li class="media">
                                    <div class="media-bullet">3</div>
                                    <div class="media-body"><strong>Quality standards</strong> are important but meant to be exceeded</div>
                                </li>
                            </ul>
                            <ul class="list-unstyled li-space-lg last">
                                <li class="media">
                                    <div class="media-bullet">4</div>
                                    <div class="media-body"><strong>We're always looking</strong> for industry leaders to help them win their market position</div>
                                </li>
                                <li class="media">
                                    <div class="media-bullet">5</div>
                                    <div class="media-body"><strong>Evaluation</strong> is a key aspect of this business and important</div>
                                </li>
                                <li class="media">
                                    <div class="media-bullet">6</div>
                                    <div class="media-body"><strong>Ethic</strong> procedures ar alwasy at the base of everything we do</div>
                                </li>
                            </ul>
                        </div> <!-- end of tab-pane -->
                        <!-- end of tab -->
    
                        <!-- Tab -->
                        <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
                            <p><strong>We strive to achieve</strong> 100% customer satisfaction for both types of customers: hiring companies and job seekers. Types of customers: <a class="green" href="#your-link">with huge potential</a></p>
                            <p><strong>Our goal is to help</strong> your company achieve its full potential and establish long term stability for <a class="green" href="#your-link">the stakeholders</a></p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">It's easy to get a quotation, just call our office anytime</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">We'll get back to you with an initial estimate soon</div>
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
                                    <div class="media-body">Just fill out the form and we'll call you right away</div>
                                </li>
                            </ul>
                        </div> <!-- end of tab-pane -->
                        <!-- end of tab -->
    
                    </div> <!-- end of tab-content -->
                    <!-- end of tabs content -->
    
                </div> <!-- end of tabs-container -->
            </div><!-- end of area-1 on same line and no space between comments to eliminate margin white space --><div class="area-2"></div> <!-- end of area-2 -->
        </div> <!-- end of tabs -->
        <!-- end of details 2 --> --}}


    <!-- Testimonials -->
    {{-- <div id="officials1" class="lightbox-basic zoom-anim-dialog mfp-hide">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <img class="img-fluid" src="images/officials/IMG_0669.JPG" alt="alternative">
                </div>
                <div class="col-lg-4">
                    <h1 >Hon. ATTY. EUFRACIO P. DAYADAY, JR., MPA</h1>
                
                    
                    <hr class="line-heading">
                    <h2>Municipal Mayor</h2>
                 
                    <a class="btn-solid-reg" href="/officials">SEE ALL OFFICIALS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
                </div> 
            </div> 
        </div> --}}
    {{-- <div id="officials2" class="lightbox-basic zoom-anim-dialog mfp-hide">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <img class="img-fluid" src="images/officials/IMG_0657.JPG" alt="alternative">
                </div> 
                <div class="col-lg-4">
                    <h1 >Hon. JOEL M. CAMELLO, MPA</h1>
                
                    
                    <hr class="line-heading">
                    <h2>Municipal Vice Mayor</h2>
                    
                    <a class="btn-solid-reg" href="/officials">SEE ALL OFFICIALS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
                </div> 
            </div>
        </div> --}}
    {{-- <div id="officials3" class="lightbox-basic zoom-anim-dialog mfp-hide">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <img class="img-fluid" src="images/officials/IMG_0634.JPG" alt="alternative">
                </div> 
                <div class="col-lg-4">
                    <h1 >Hon. ANGELITO G. LARIDE</h1>
                
                    
                    <hr class="line-heading">
                    <h2>Municipal Councilor</h2>
                  
                    <a class="btn-solid-reg" href="/officials">SEE ALL OFFICIALS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
                </div> 
            </div> 
        </div> --}}
    {{-- <div id="officials4" class="lightbox-basic zoom-anim-dialog mfp-hide">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <img class="img-fluid" src="images/officials/IMG_0614.JPG" alt="alternative">
                </div> 
                <div class="col-lg-4">
                    <h1 >Hon. REYNALDO D. PANISAL, JR.</h1>
                
                    
                    <hr class="line-heading">
                    <h2>Municipal Councilor</h2>
                   
                    <a class="btn-solid-reg" href="/officials">SEE ALL OFFICIALS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
                </div> 
            </div> 
        </div> --}}
    {{-- <div id="officials5" class="lightbox-basic zoom-anim-dialog mfp-hide">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <img class="img-fluid" src="images/officials/IMG_0641.JPG" alt="alternative">
                </div> 
                <div class="col-lg-4">
                    <h1 >Hon. ALVIN S. ALMEDA</h1>
                
                    
                    <hr class="line-heading">
                    <h2>Municipal Councilor</h2>
                    
                    <a class="btn-solid-reg" href="/officials">SEE ALL OFFICIALS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
                </div> 
            </div> 
        </div> --}}
    {{-- <div id="officials6" class="lightbox-basic zoom-anim-dialog mfp-hide">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <img class="img-fluid" src="images/officials/IMG_0626.JPG" alt="alternative">
                </div> 
                <div class="col-lg-4">
                    <h1 >Hon. SILVINO P. MATOBATO, JR., PTRP</h1>
                
                    
                    <hr class="line-heading">
                    <h2>Municipal Councilor/PCL President Davao del Norte</h2>
                    
                    <a class="btn-solid-reg" href="/officials">SEE ALL OFFICIALS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
                </div> 
            </div> 
        </div> --}}
    {{-- <div id="officials7" class="lightbox-basic zoom-anim-dialog mfp-hide">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <img class="img-fluid" src="images/officials/IMG_0622.JPG" alt="alternative">
                </div> 
                <div class="col-lg-4">
                    <h1 >Hon. ALAN Q. MONTEROSO</h1>
                
                    
                    <hr class="line-heading">
                    <h2>Municipal Councilor</h2>
                    
                    <a class="btn-solid-reg" href="/officials">SEE ALL OFFICIALS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
                </div> 
            </div> 
        </div> --}}
    {{-- <div id="officials8" class="lightbox-basic zoom-anim-dialog mfp-hide">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <img class="img-fluid" src="images/officials/IMG_0632.JPG" alt="alternative">
                </div> 
                <div class="col-lg-4">
                    <h1 >Hon. ROCKY JAY A. BINASBAS, DMD</h1>
                
                    
                    <hr class="line-heading">
                    <h2>Municipal Councilor</h2>
                  
                    <a class="btn-solid-reg" href="/officials">SEE ALL OFFICIALS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
                </div> 
            </div> 
        </div> --}}
    {{-- <div id="officials10" class="lightbox-basic zoom-anim-dialog mfp-hide">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <img class="img-fluid" src="images/officials/IMG_0642.JPG" alt="alternative">
                </div> 
                <div class="col-lg-4">
                    <h1 >Hon. ROGELIO E. BUAL</h1>
                
                    
                    <hr class="line-heading">
                    <h2>Municipal Councilor</h2>
                   
                    <a class="btn-solid-reg" href="/officials">SEE ALL OFFICIALS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
                </div> 
            </div>
        </div> --}}
    {{-- <div id="officials11" class="lightbox-basic zoom-anim-dialog mfp-hide">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <img class="img-fluid" src="images/officials/IMG_0610.JPG" alt="alternative">
                </div> 
                <div class="col-lg-4">
                    <h3>Hon. TEOFILO C. DAWA</h3>
                    <hr class="line-heading">
                    <h6>Municipal Councilor</p>
                  
                    <a class="btn-solid-reg" href="/officials">SEE ALL OFFICIALS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
                </div>
            </div> 
        </div> --}}
    {{-- <div id="officials12" class="lightbox-basic zoom-anim-dialog mfp-hide">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <img class="img-fluid" src="images/officials/IMG_0653.JPG" alt="alternative">
                </div>
                <div class="col-lg-4">
                    <h3>Hon. CECILIO B. CINCO</h3>
                    <hr class="line-heading">
                    <h6>Municipal Councilor/ABC President</p>
                    
                    <a class="btn-solid-reg" href="/officials">SEE ALL OFFICIALS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
                </div>
            </div>
        </div> --}}
    {{-- <div id="officials13" class="lightbox-basic zoom-anim-dialog mfp-hide">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <img class="img-fluid" src="images/officials/IMG_0654.JPG" alt="alternative">
                </div>
                <div class="col-lg-4">
                    <h3>Hon. MADELO M. AMONCIO</h3>
                    <hr class="line-heading">
                    <h6>Municipal Councilor/SKMF President</p>
                  
                    <a class="btn-solid-reg" href="/officials">SEE ALL OFFICIALS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
                </div>
            </div>
        </div> --}}

    <div class="slider">
        {{-- <div class="container"> --}}
        <div class="row">
            <div class="col-lg-12">
                <h2>THE OFFICIALS</h2>
                <p class="p-heading">THESE ARE THE OFFICIALS OF ASUNCION DAVAO</p>
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
                                    <div class="card">
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
                                                                {{-- <tr>
                                                                <td>Educational background:</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Primary:</td>
                                                                <td>{{$official->eb_primary}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Secondary:</td>
                                                                <td>{{$official->eb_secondary}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>College:</td>
                                                                <td>{{$official->eb_college}}</td>
                                                            </tr>
                                    
                                                            <tr>
                                                                <td>SBMs Committees</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Chairmanship:</td>
                                                                <td>{{$official->chairmanship}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Vice Chairmanship:</td>
                                                                <td>{{$official->vice_chairmanship}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Committee Membership:</td>
                                                                <td>{{$official->committee_membership}}</td>
                                                            </tr> --}}
                                                                <tr>
                                                                    <td>QUOTATION:</td>
                                                                    <td style="font-style: italic;">
                                                                        {{ $official->quotation }}</td>
                                                                </tr>
                                                                {{-- <tr>
                                                                <td>Other significant information:</td>
                                                                <td>{{$official->others}}</td>
                                                            </tr> --}}
                                                            </table>
                                                        </div>
                                                        {{-- <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                                                        <div class="testimonial-container">
                                                            <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                                                            <p class="testimonial-author">General Manager</p>
                                                        </div> --}}
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
        {{-- <div class="row">
                    <div class="col-lg-12">
    
                     
                        <div class="slider-container">
                            <div class="swiper-container card-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <a style="margin-left: 50px;
                                            margin-right: 50px;"  class="popup-with-move-anim" href="#officials9">
                                            <img class="card-image" src="images/officials/IMG_0647.JPG" alt="alternative">
                                            <div class="card-body">
                                                <div class="testimonial-author"><h3 >Hon. NESTOR L. WARAG</h3>
                
                                                    <h3>Municipal Councilor/IPMR</h3></div>
                                            </div>
                                            </a>
                                        </div>        
                                    </div>
                                  <div  class="swiper-slide">
                                            <div class="card">
                                                <a style="margin-left: 50px;
                                    margin-right: 50px;" class="popup-with-move-anim" href="#officials1">
                                                <img class="card-image" src="images/officials/IMG_0669.JPG" alt="alternative">
                                                <div class="card-body">
                                                    <div class="testimonial-author"><h2 >Hon. ATTY. EUFRACIO P. DAYADAY, JR., MPA</h2>
                
                                                        <h3>Municipal Mayor</h3></div>
                                                </div>
                                                </a>
                                            </div>
                                        </div>    
                                   
                                    
                                        <div class="swiper-slide">
                                            <div class="card">
                                                <a style="margin-left: 50px;
                                    margin-right: 50px;"  class="popup-with-move-anim" href="#officials2">
                                                <img class="card-image" src="images/officials/IMG_0657.JPG" alt="alternative">
                                                <div class="card-body">
                                                    <div class="testimonial-author"> <h2 >Hon. JOEL M. CAMELLO, MPA</h2>
                                                        <h3>Municipal Vice Mayor</h3></div>
                                                </div>
                                                </a>
                                            </div>   
                                                 
                                        </div> 
                                
                                    
                                        <div class="swiper-slide">
                                            <div class="card">
                                                <a style="margin-left: 50px;
                                    margin-right: 50px;"  class="popup-with-move-anim" href="#officials3">
                                                <img class="card-image" src="images/officials/IMG_0634.JPG" alt="alternative">
                                                <div class="card-body">
                                                    <div class="testimonial-author"><h2 >Hon. ANGELITO G. LARIDE</h2>
                
                                                        <h3>Municipal Councilor</h3></div>
                                                </div>
                                                </a>
                                            </div>        
                                        </div> 
                                 
                                   
                                        <div class="swiper-slide">
                                            <div class="card">
                                                <a style="margin-left: 50px;
                                                margin-right: 50px;"  class="popup-with-move-anim" href="#officials4">
                                                <img class="card-image" src="images/officials/IMG_0614.JPG" alt="alternative">
                                                <div class="card-body">
                                                    <div class="testimonial-author"> <h2 >Hon. REYNALDO D. PANISAL, JR.</h2>
                  
                                                        <h3>Municipal Councilor</h3></div>
                                                </div>
                                                </a>
                                            </div>
                                        </div> 
                                    
                                    
                                        <div class="swiper-slide">
                                            <div class="card">
                                                <a style="margin-left: 50px;
                                    margin-right: 50px;"  class="popup-with-move-anim" href="#officials5">
                                                <img class="card-image" src="images/officials/IMG_0641.JPG" alt="alternative">
                                                <div class="card-body">
                                                    <div class="testimonial-author"> <h2 >Hon. ALVIN S. ALMEDA</h2>
                
                                                        <h3>Municipal Councilor</h3></div>
                                                </div>
                                                </a>
                                            </div>        
                                        </div> 
                                    
                                   
                                        <div class="swiper-slide">
                                            <div class="card">
                                                <a style="margin-left: 50px;
                                                margin-right: 50px;"  class="popup-with-move-anim" href="#officials6">
                                                <img class="card-image" src="images/officials/IMG_0626.JPG" alt="alternative">
                                                <div class="card-body">
                                                     <div class="testimonial-author"> <h2 >Hon. SILVINO P. MATOBATO, JR., PTRP</h2>
                
                                                        <h3>Municipal Councilor/PCL President Davao del Norte</h3></div>
                                                </div>
                                                </a>
                                            </div>        
                                        </div> 
                                   
                                        <div class="swiper-slide">
                                            <div class="card">
                                                <a style="margin-left: 50px;
                                                margin-right: 50px;"  class="popup-with-move-anim" href="#officials7">
                                                <img class="card-image" src="images/officials/IMG_0622.JPG" alt="alternative">
                                                <div class="card-body">
                                                    <div class="testimonial-author"><h2 >Hon. ALAN Q. MONTEROSO</h2>
                
                                                        <h3>Municipal Councilor</h3></div>
                                                </div>
                                                </a>
                                            </div>        
                                        </div>
                                  
                                   
                                    
                                        <div class="swiper-slide">
                                            <div class="card">
                                                <a style="margin-left: 50px;
                                    margin-right: 50px;"  class="popup-with-move-anim" href="#officials8">
                                                <img class="card-image" src="images/officials/IMG_0632.JPG" alt="alternative">
                                                <div class="card-body">
                                                    <div class="testimonial-author"> <h2 >Hon. ROCKY JAY A. BINASBAS, DMD</h2>
                
                                                        <h3>Municipal Councilor</h3></div>
                                                </div>
                                                </a>
                                            </div>        
                                        </div>
                                
                                   
                                   
                                        <div class="swiper-slide">
                                            <div class="card">
                                                <a style="margin-left: 50px;
                                                margin-right: 50px;"  class="popup-with-move-anim" href="#officials10">
                                                <img class="card-image" src="images/officials/IMG_0642.JPG" alt="alternative">
                                                <div class="card-body">
                                                    <div class="testimonial-author"> <h2 >Hon. ROGELIO E. BUAL</h2>
                
                                                        <h3>Municipal Councilor</h3></div>
                                                </div>
                                                </a>
                                            </div>        
                                        </div>
                                    
                                  
                                   
                                        <div class="swiper-slide">
                                            <div class="card">
                                                <a style="margin-left: 50px;
                                                margin-right: 50px;"  class="popup-with-move-anim" href="#officials11">
                                                <img class="card-image" src="images/officials/IMG_0610.JPG" alt="alternative">
                                                <div class="card-body">
                                                    <div class="testimonial-author"> <h2 >Hon. TEOFILO C. DAWA</h2>
                  
                                                        <h3>Municipal Councilor</h3></div>
                                                </div>
                                                </a>
                                            </div>        
                                        </div>
                                
                                   
                                   
                                        <div class="swiper-slide">
                                            
                                            <div class="card">
                                                <a style="margin-left: 50px;
                                                margin-right: 50px;"  class="popup-with-move-anim" href="#officials12">
                                                <img class="card-image" src="images/officials/IMG_0653.JPG" alt="alternative">
                                                <div class="card-body">
                                                    <div class="testimonial-author"> <h2 >Hon. CECILIO B. CINCO</h2>
                
                                                        <h3>Municipal Councilor/ABC President</h3></div>
                                                </div>
                                                </a>
                                            </div>        
                                        </div>
                                   
                                 


                                   
                                        <div class="swiper-slide">
                                            <div class="card">
                                                <a style="margin-left: 50px;
                                                margin-right: 50px;"  class="popup-with-move-anim" href="#officials13">
                                                <img class="card-image" src="images/officials/IMG_0654.JPG" alt="alternative">
                                                <div class="card-body">
                                                    <div class="testimonial-author"> <h2 >Hon. MADELO M. AMONCIO</h2>
                
                                                        <h3>Municipal Councilor/SKMF President</h3></div>
                                                </div>
                                                </a>
                                            </div>        
                                        </div>
                                    
                                   
                                </div> 
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                
            
                            </div> 
                        </div> 
                        
    
                    </div> 
                </div> --}}
        {{-- </div> <!-- end of container --> --}}
    </div> <!-- end of slider -->
    <!-- end of testimonials -->

    <!-- Testimonials -->
    <div class="slider">
        <div>
            <div class="row">
                <div class="col-lg-12">
                    <h2>THE PUNONG BARANGAY</h2>
                    <p class="p-heading">SEE OUR LATEST PUNONG BARANGAY</p>
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
                                        <div class="card">
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
                                                            {{-- <tr>
                                                        <td>Educational background:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Primary:</td>
                                                        <td>{{$barangay_official->eb_primary}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Secondary:</td>
                                                        <td>{{$barangay_official->eb_secondary}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>College:</td>
                                                        <td>{{$barangay_official->eb_college}}</td>
                                                    </tr>
                            
                                                    <tr>
                                                        <td>SBMs Committees</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Chairmanship:</td>
                                                        <td>{{$barangay_official->chairmanship}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Vice Chairmanship:</td>
                                                        <td>{{$barangay_official->vice_chairmanship}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Committee Membership:</td>
                                                        <td>{{$barangay_official->committee_membership}}</td>
                                                    </tr> --}}
                                                            <tr>
                                                                <td>QUOTATION:</td>
                                                                <td>{{ $barangay_official->quotation }}</td>
                                                            </tr>
                                                            {{-- <tr>
                                                        <td>Other significant information:</td>
                                                        <td>{{$barangay_official->others}}</td>
                                                    </tr> --}}
                                                        </table>
                                                    </div>
                                                    {{-- <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                                                <div class="testimonial-container">
                                                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                                                    <p class="testimonial-author">General Manager</p>
                                                </div> --}}
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

                {{-- <br>
                        <label for="">sdaasdasdadsadas</label> --}}
                {{-- <p>Barangay Binancian</p> --}}
                {{-- </div> --}}


            </div>
        </div>
    </div>
    {{-- <!-- Call Me -->
        <div id="callMe" class="form-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <div class="section-title">CALL ME</div>
                            <h2 class="white">Have Us Contact You By Filling And Submitting The Form</h2>
                            <p class="white">You are just a few steps away from a personalized offer. Just fill in the form and send it to us and we'll get right back with a call to help you decide what service package works.</p>
                            <ul class="list-unstyled li-space-lg white">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">It's very easy just fill in the form so we can call</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">During the call we'll require some info about the company</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Don't hesitate to email us for any questions or inquiries</div>
                                </li>
                            </ul>
                        </div>
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                       
                        <!-- Call Me Form -->
                        <form id="callMeForm" data-toggle="validator" data-focus="false">
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="lname" name="lname" required>
                                <label class="label-control" for="lname">Name</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="lphone" name="lphone" required>
                                <label class="label-control" for="lphone">Phone</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control-input" id="lemail" name="lemail" required>
                                <label class="label-control" for="lemail">Email</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <select class="form-control-select" id="lselect" required>
                                    <option class="select-option" value="" disabled selected>Interested in...</option>
                                    <option class="select-option" value="Off The Ground">Off The Ground</option>
                                    <option class="select-option" value="Accelerated Growth">Accelerated Growth</option>
                                    <option class="select-option" value="Market Domination">Market Domination</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group checkbox white">
                                <input type="checkbox" id="lterms" value="Agreed-to-Terms" name="lterms" required>I agree with Aria's stated <a class="white" href="privacy-policy.html">Privacy Policy</a> and <a class="white" href="terms-conditions.html">Terms & Conditions</a>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control-submit-button">CALL ME</button>
                            </div>
                            <div class="form-message">
                                <div id="lmsgSubmit" class="h3 text-center hidden"></div>
                            </div>
                        </form>
                        <!-- end of call me form -->
                        
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of form-1 -->
        <!-- end of call me --> --}}





    <!-- Project Lightboxes -->
    <!-- Lightbox -->
    <div id="project-1-wedding" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/IMG_1578.JPG" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>FIRST WEDDING</h3>
                <hr class="line-heading">
                <h6>Getting information</h6>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                {{-- <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                    <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                    <div class="testimonial-container">
                        <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                        <p class="testimonial-author">General Manager</p>
                    </div> --}}
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button"
                    href="#projects">BACK</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <div id="project-1-wedding-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/IMG_1538.JPG" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>FIRST WEDDING</h3>
                <hr class="line-heading">
                <h6>Getting information</h6>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button"
                    href="#projects">BACK</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div>
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-2-asuncion-action" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/asuncion_action/asuncion_action.JPG" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>ASUNCION ACTION</h3>
                <hr class="line-heading">
                <h6>Getting information</h6>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button"
                    href="#projects">BACK</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-2-asuncion-action-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/asuncion_action/asuncion_action_2.JPG" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>ASUNCION ACTION</h3>
                <hr class="line-heading">
                <h6>Getting information</h6>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button"
                    href="#projects">BACK</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-3-blessings_turnover" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/blessings_turnover/blessings_turnover_1.JPG" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>BLESSINGS AND TURN OVER</h3>
                <hr class="line-heading">
                <h6>Getting information</h6>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button"
                    href="#projects">BACK</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->
    <!-- Lightbox -->
    <div id="project-3-blessings_turnover-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/blessings_turnover/blessings_turnover.JPG" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>BLESSINGS AND TURN OVER</h3>
                <hr class="line-heading">
                <h6>Getting information</h6>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button"
                    href="#projects">BACK</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-4-vaccination" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/vaccination/vaccination.JPG" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>VACCINATION</h3>
                <hr class="line-heading">
                <h6>Getting information</h6>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button"
                    href="#projects">BACK</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->
    <!-- Lightbox -->
    <div id="project-4-vaccination-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/vaccination/vaccination_2.JPG" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>VACCINATION</h3>
                <hr class="line-heading">
                <h6>Getting information</h6>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button"
                    href="#projects">BACK</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-5" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/project-5.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Joy Moments</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your
                    current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in
                    touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you
                        manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button"
                    href="#projects">BACK</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-6" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/project-6.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Spark Events</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your
                    current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in
                    touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you
                        manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button"
                    href="#projects">BACK</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-7" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/project-7.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Casual Wear</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your
                    current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in
                    touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you
                        manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button"
                    href="#projects">BACK</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-8" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/project-8.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Zazoo Apps</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your
                    current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in
                    touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you
                        manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button"
                    href="#projects">BACK</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->
    <!-- end of project lightboxes -->


    {{-- <!-- Team -->
        <div class="basic-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Our Team Of Consultants</h2>
                        <p class="p-heading">We're only as strong and as knowledgeable as our team. So here are the men and women which help customers meet goals and grow companies</p>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
                <div class="row">
                    <div class="col-lg-12">
    
                        <!-- Team Member -->
                        <div class="team-member">
                            <div class="image-wrapper">
                                <img class="img-fluid" src="images/team-1.png" alt="alternative">
                            </div> <!-- end of image-wrapper -->
                            <p class="p-large">John Whitelong</p>
                            <p class="job-title">General Manager</p>
                            <span class="social-icons">
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
                            </span>
                        </div> <!-- end of team-member -->
                        <!-- end of team member -->
    
                        <!-- Team Member -->
                        <div class="team-member">
                            <div class="image-wrapper">
                                <img class="img-fluid" src="images/team-2.png" alt="alternative">
                            </div> <!-- end of image wrapper -->
                            <p class="p-large">Veronique Smith</p>
                            <p class="job-title">Business Developer</p>
                            <span class="social-icons">
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
                            </span>
                        </div> <!-- end of team-member -->
                        <!-- end of team member -->
    
                        <!-- Team Member -->
                        <div class="team-member">
                            <div class="image-wrapper">
                                <img class="img-fluid" src="images/team-3.png" alt="alternative">
                            </div> <!-- end of image wrapper -->
                            <p class="p-large">Chris Zimerman</p>
                            <p class="job-title">Online Marketer</p>
                            <span class="social-icons">
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
                            </span>
                        </div> <!-- end of team-member -->
                        <!-- end of team member -->
    
                        <!-- Team Member -->
                        <div class="team-member">
                            <div class="image-wrapper">
                                <img class="img-fluid" src="images/team-4.png" alt="alternative">
                            </div> <!-- end of image wrapper -->
                            <p class="p-large">Mary Villalonga</p>
                            <p class="job-title">Community Manager</p>
                            <span class="social-icons">
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
                            </span>
                        </div> <!-- end of team-member -->
                        <!-- end of team member -->
    
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of basic-2 -->
        <!-- end of team --> --}}


    {{-- <!-- About -->
        <div id="about" class="counter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-xl-6">
                        <div class="image-container">
                            <img class="img-fluid" src="images/about.jpg" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-7 col-xl-6">
                        <div class="text-container">
                            <div class="section-title">ABOUT</div>
                            <h2>We're Passionate About Delivering Growth Services</h2>
                            <p>Our goal is to provide the right business growth services at the appropriate time so companies can benefit from the created momentum and thrive for a long period of time</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Everything we recommend has direct positive impact</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">You will become an important partner of our company</div>
                                </li>
                            </ul>
    
                            <!-- Counter -->
                            <div id="counter">
                                <div class="cell">
                                    <div class="counter-value number-count" data-count="231">1</div>
                                    <div class="counter-info">Happy<br>Users</div>
                                </div>
                                <div class="cell">
                                    <div class="counter-value number-count" data-count="121">1</div>
                                    <div class="counter-info">Issues<br>Solved</div>
                                </div>
                                <div class="cell">
                                    <div class="counter-value number-count" data-count="159">1</div>
                                    <div class="counter-info">Good<br>Reviews</div>
                                </div>
                            </div>
                            <!-- end of counter -->
    
                        </div> <!-- end of text-container -->      
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of counter -->
        <!-- end of about --> --}}


    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <div class="section-title">CONTACT</div>
                        <h2>Get In Touch Using The Form</h2>
                        <p>You can stop by our office for a cup of coffee and just use the contact form below for any
                            questions and inquiries</p>
                        {{-- <ul class="list-unstyled li-space-lg">
                                <li class="address"><i class="fas fa-map-marker-alt"></i>22nd Innovative Street, San Francisco, CA 94043, US</li>
                                <li><i class="fas fa-phone"></i><a href="tel:003024630820">+81 720 22 126</a></li>
                                <li><i class="fas fa-phone"></i><a href="tel:003024630820">+81 720 22 128</a></li>
                                <li><i class="fas fa-envelope"></i><a href="mailto:office@aria.com">office@aria.com</a></li>
                            </ul> --}}
                        {{-- <h3>Follow Aria On Social Media</h3>
    
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
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-pinterest fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-instagram fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-linkedin-in fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-behance fa-stack-1x"></i>
                                </a>
                            </span> --}}
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
