@extends('layouts.master', ['title' => 'offices', 'subtitle' => ''])

@section('content')
    <!-- Header -->

    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>THE LEGISLATIVE OFFICES</h1>
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
            <a style="text-decoration: none" href="/see-all-offices/mayorsOffices/25">
                <div class="container" style="cursor: pointer">
                    <div style="text-align: center;display: flex;
                    justify-items: center;
                    align-items: center;
                    align-content: center;">
                        <img style="display: inline; width:40%" src="images/officials/group/IMG_1215.JPG" alt="..."
                            class="img-thumbnail">
                        <div style="width:100%;display: inline-block;margin-left: 40px;">
                            <h1>Vice Mayor Office</h1>
                            <p>head office and staff</p>

                            {{-- <h2>Municipal Mayor's Office</h2> --}}
                            {{-- <p class="font-red">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolorem ad magnam atque ea, sint iusto alias maiores nostrum, rem aliquid tenetur quae, reprehenderit sit vitae architecto totam consectetur fugiat?</p> --}}

                        </div>

                    </div>



                    {{-- <img class="card-image" src="images/officials/IMG_0614.JPG" alt="alternative"> --}}
                </div>
            </a>
            <br>
            <a style="text-decoration: none" href="/see-all-offices/mayorsOffices/26">
                <div class="container" style="cursor: pointer">
                    <div style="text-align: center;display: flex;
                    justify-items: center;
                    align-items: center;
                    align-content: center;">
                        <img style="display: inline; width:40%" src="images/officials/group/IMG_1215.JPG" alt="..."
                            class="img-thumbnail">
                        <div style="width:100%;display: inline-block;margin-left: 40px;">
                            <h1>Sangguniang Bayan Members</h1>
                            <p>head office and staff</p>

                            {{-- <h2>Municipal Mayor's Office</h2> --}}
                            {{-- <p class="font-red">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolorem ad magnam atque ea, sint iusto alias maiores nostrum, rem aliquid tenetur quae, reprehenderit sit vitae architecto totam consectetur fugiat?</p> --}}

                        </div>

                    </div>



                    {{-- <img class="card-image" src="images/officials/IMG_0614.JPG" alt="alternative"> --}}
                </div>
            </a>
            <br>
            <a style="text-decoration: none" href="/see-all-offices/mayorsOffices/27">
                <div class="container" style="cursor: pointer">
                    <div style="text-align: center;display: flex;
                    justify-items: center;
                    align-items: center;
                    align-content: center;">
                        <img style="display: inline; width:40%" src="images/officials/group/IMG_1215.JPG" alt="..."
                            class="img-thumbnail">
                        <div style="width:100%;display: inline-block;margin-left: 40px;">
                            <h1>Secretary to the sanggunian</h1>
                            <p>head office and staff</p>

                            {{-- <h2>Municipal Mayor's Office</h2> --}}
                            {{-- <p class="font-red">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolorem ad magnam atque ea, sint iusto alias maiores nostrum, rem aliquid tenetur quae, reprehenderit sit vitae architecto totam consectetur fugiat?</p> --}}

                        </div>

                    </div>



                    {{-- <img class="card-image" src="images/officials/IMG_0614.JPG" alt="alternative"> --}}
                </div>
            </a>
            <br>

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
