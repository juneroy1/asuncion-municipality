@extends('layouts.master', ['title' => 'offices', 'subtitle' => ''])
<style scoped>
    h1{
        text-transform: lowercase;
    }
    h1::first-letter{
        text-transform: capitalize;
    }
</style>
@section('content')
    <!-- Header -->

    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{$title}}</h1>
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
                        <a href="index.html">Home</a><i class="fa fa-angle-double-right"></i><span>SEE ALL MUNICIPALITY
                            OFFICES</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->


    <div class="row">
        <div class="col-md-12 col-xs-12">
            @foreach ($departments as $department)
                <a style="text-decoration: none" href="/see-all-offices/mayorsOffices/{{ $department->id }}">
                    <div class="container" style="cursor: pointer">
                        <div style="text-align: center;display: flex;
                                            justify-items: center;
                                            align-items: center;
                                            align-content: center;">
                                            {{-- '/departments/'.$department->image --}}
                                            {{-- landing_images/1631172177.jpg --}}
                                            {{-- /images/Municipal Logo.png --}}
                            {{-- <img style="display: inline; width:40%" src="{{$department->image? '/departments/'.$department->image:'/images/Municipal Logo.png'}}" alt="..."
                                class="img-thumbnail"> --}}
                            
                        
                                            <div class="card" style="background: #e8f9e9;padding: 40px; margin-bottom:30px;border-radius: 20px;">
                                                <div style="cursor: pointer;" >
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div style="display: inline-block;margin-left: 10px;">
                                                                <h1>{{$department->name}}</h1>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>
                                   

                        </div>



                    </div>
                </a>
            @endforeach


            <br>
        </div>
    </div>
@stop
