@extends('layouts.master', ['title' => 'projects', 'subtitle' => ''])

@section('content')
    <!-- Header -->

    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ $update->title }}</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->


    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="index.html">Home</a><i class="fa fa-angle-double-right"></i><span>{{ $update->title }}
                            PROJECTS</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->


    <div class="row">
        <div class="col-md-12 col-xs-12">


            <a  class="popup-with-move-anim"  style="text-decoration: none" href="#{{ $update->id }}">
                <div class="container" style="cursor: pointer">
                    <div style="text-align: center;display: flex;
                                                    justify-items: center;
                                                    align-items: center;
                                                    align-content: center;">
                        <img style="display: inline; width:40%" src="/updates/{{ $update->image }}" alt="..."
                            class="img-thumbnail">
                        <div style="display: inline-block;margin-left: 40px;">
                            <h3>{{ $update->title }}</h3>
                            <p>{{ $update->description }}</p>
                            <p ><i>{{ $update->description_local }}</i></p>

                            {{-- <h2>Municipal Mayor's Office</h2> --}}
                            {{-- <p class="font-red">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolorem ad magnam atque ea, sint iusto alias maiores nostrum, rem aliquid tenetur quae, reprehenderit sit vitae architecto totam consectetur fugiat?</p> --}}

                        </div>

                    </div>


                </div>
            </a>
            <br>

            <div id="{{ $update->id }}" class="lightbox-basic zoom-anim-dialog mfp-hide">
                            <div class="row">
                                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                                <div class="col-lg-8">
                                    <img class="img-fluid" src="/updates/{{ $update->image }}" alt="alternative">
                                </div> <!-- end of col -->
                                <div class="col-lg-4">
                                    <h3>{{ $update->title }}</h3>
                                    <hr style="width: inherit;" class="line-heading">
                                    <h6>{{ $update->description }}</h6>
                                    <h6> <i>{{ $update->description_local }}</i> </h6>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    
                                  <a
                                        class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a>
                                </div> <!-- end of col -->
                            </div> <!-- end of row -->
                        </div>
            {{-- @endforeach --}}
            {{-- <a style="text-decoration: none" href="#">
                <div class="container" style="cursor: pointer">
                    <div style="text-align: center;display: flex;
                    justify-items: center;
                    align-items: center;
                    align-content: center;">
                    <img style="display: inline; width:40%" src="images/BLOOD LETTING/IMG_6132.JPG" alt="..." class="img-thumbnail">
                    <div style="display: inline-block;margin-left: 40px;">
                        <h3 >BLOOD LETTING</h3>
                        <p>description here</p>
                    
                    </div>
                
                    </div>
                    
                
                </div>
            </a>
                <br> --}}
            {{-- <a style="text-decoration: none" href="#">
                    <div class="container" style="cursor: pointer">
                        <div style="text-align: center;display: flex;
                        justify-items: center;
                        align-items: center;
                        align-content: center;">
                        <img style="display: inline; width:40%" src="images/vaccination/vaccination.JPG" alt="..." class="img-thumbnail">
                        <div style="display: inline-block;margin-left: 40px;">
                            <h3 >VACCINATION</h3>
                            <p>description here</p>
                        
                              
                        </div>
                    
                        </div>
                        
                    </div>
                </a>
                    <br> --}}
            {{-- <a style="text-decoration: none" href="#">
                        <div class="container" style="cursor: pointer">
                            <div style="text-align: center;display: flex;
                            justify-items: center;
                            align-items: center;
                            align-content: center;">
                            <img style="display: inline; width:40%" src="images/asuncion_action/asuncion_action.JPG" alt="..." class="img-thumbnail">
                            <div style="display: inline-block;margin-left: 40px;">
                                <h3 >ASUNCION ACTION</h3>
                                <p>description here</p>
                            
                                
                            </div>
                        
                            </div>
                            
                        
                        </div>
                    </a>
                        <br> --}}
            {{-- <a style="text-decoration: none" href="#">
                            <div class="container" style="cursor: pointer">
                                <div style="text-align: center;display: flex;
                                justify-items: center;
                                align-items: center;
                                align-content: center;">
                                <img style="display: inline; width:40%" src="images/blessings_turnover/blessings_turnover.JPG" alt="..." class="img-thumbnail">
                                <div style="display: inline-block;margin-left: 40px;">
                                    <h3 >BLESSINGS AND TURN OVER</h3>
                                    <p>description here</p>
                                
                                     
                                </div>
                            
                                </div>
                                
                            
                            
                            </div>
                        </a>
                            <br> --}}
            {{-- <a style="text-decoration: none" href="/pcic">
                                <div class="container" style="cursor: pointer">
                                    <div style="text-align: center;display: flex;
                                    justify-items: center;
                                    align-items: center;
                                    align-content: center;">
                                    <img style="display: inline; width:40%" src="images/officials/group/IMG_1215.JPG" alt="..." class="img-thumbnail">
                                    <div style="display: inline-block;margin-left: 40px;">
                                        <h1 >FIRST WEDDING</h1>
                                        <p>description here</p>
                                    
                                     </div>
                                
                                    </div>
                                    
                                
                                
                                </div>
                            </a>
                                <br> --}}

            {{-- <div class="container">
            <div style="text-align: center;">
                <img style="display: inline; width:25%" src="images/officials/IMG_0614.JPG" alt="..." class="img-thumbnail">
                <div style="display: inline-block;">
                    <h1 >name</h1>
                
                    <p >position    </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolorem ad magnam atque ea, sint iusto alias maiores nostrum, rem aliquid tenetur quae, reprehenderit sit vitae architecto totam consectetur fugiat?</p>
    
                </div>
              
               </div>
           
         </div> --}}
            <br>
        </div>
    </div>
@stop
