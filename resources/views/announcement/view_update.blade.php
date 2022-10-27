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

             <div >
                <a  class="popup-with-move-anim"  style="text-decoration: none" href="#{{ $update->id }}">
                    <div class="container card" style="cursor: pointer; padding: 40px; margin-bottom:30px;border-radius: 20px;">
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
                            </div>
                        </div>
                    </div>
                </a>
             </div>
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
           
            <br>
        </div>
    </div>
@stop
