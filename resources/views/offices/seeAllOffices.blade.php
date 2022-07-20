@extends('layouts.master', ['title' => 'offices', 'subtitle' => ''])

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
                            <img style="display: inline; width:40%" src="{{$department->image? '/departments/'.$department->image:'/images/Municipal Logo.png'}}" alt="..."
                                class="img-thumbnail">
                            <div style="display: inline-block;margin-left: 40px;">
                                <h1>{{$department->name}}</h1>
                                <p>Head office and staff</p>


                            </div>

                        </div>



                    </div>
                </a>
            @endforeach


            {{-- <a style="text-decoration: none" href="/see-all-offices/mayorsOffices/2">
                <div class="container" style="cursor: pointer">
                    <div style="text-align: center;display: flex;
                                        justify-items: center;
                                        align-items: center;
                                        align-content: center;">
                        <img style="display: inline; width:40%" src="images/officials/group/IMG_1215.JPG" alt="..."
                            class="img-thumbnail">
                        <div style="display: inline-block;margin-left: 40px;">
                            <h1>Municipal Mayor's Office</h1>
                            <p>head office and staff</p>

                        </div>

                    </div>


                </div>
            </a>
            <br>
            <a style="text-decoration: none" href="/see-all-offices/mado/3">
                <div class="container" style="cursor: pointer">
                    <div style="text-align: center;display: flex;
                                        justify-items: center;
                                        align-items: center;
                                        align-content: center;">
                        <img style="display: inline; width:40%" src="images/officials/group/admin/admin2.JPG" alt="..."
                            class="img-thumbnail">
                        <div style="display: inline-block;margin-left: 40px;">
                            <h1>Municipal Administrator Department Office</h1>
                            <p>head office and staff</p>
                        </div>

                    </div>



                </div>
            </a>
            <br>
            <a style="text-decoration: none" href="/see-all-offices/mhrmo/4">
                <div class="container" style="cursor: pointer">
                    <div style="text-align: center;display: flex;
                                        justify-items: center;
                                        align-items: center;
                                        align-content: center;">
                        <img style="display: inline; width:40%" src="images/officials/group/IMG_1215.JPG" alt="..."
                            class="img-thumbnail">
                        <div style="display: inline-block;margin-left: 40px;">
                            <h1>Municipal Human Resource and Management Office</h1>
                            <p>head office and staff</p>
                        </div>

                    </div>



                </div>
            </a>
            <br>
            <a style="text-decoration: none" href="/see-all-offices/pmdc/5">
                <div class="container" style="cursor: pointer">
                    <div style="text-align: center;display: flex;
                                        justify-items: center;
                                        align-items: center;
                                        align-content: center;">
                        <img style="display: inline; width:40%" src="images/officials/group/IMG_1215.JPG" alt="..."
                            class="img-thumbnail">
                        <div style="display: inline-block;margin-left: 40px;">
                            <h1>Municipal Planning and Development Office</h1>
                            <p>head office and staff</p>
                        </div>

                    </div>



                </div>
            </a>
            <br>
            <a style="text-decoration: none" href="/see-all-offices/ldrrmo/6">
                <div class="container" style="cursor: pointer">
                    <div style="text-align: center;display: flex;
                                        justify-items: center;
                                        align-items: center;
                                        align-content: center;">
                        <img style="display: inline; width:40%" src="images/officials/group/ldrrmo/IMG_0819.JPG" alt="..."
                            class="img-thumbnail">
                        <div style="display: inline-block;margin-left: 40px;">
                            <h1>Municipal Environment and Natural Resources Office</h1>
                            <p>head office and staff</p>

                        </div>

                    </div>



                </div>
            </a>
            <br>
            <a style="text-decoration: none" href="/see-all-offices/mgso/7">
                <div class="container" style="cursor: pointer">
                    <div style="text-align: center;display: flex;
                                        justify-items: center;
                                        align-items: center;
                                        align-content: center;">
                        <img style="display: inline; width:40%" src="images/officials/group/mgso/IMG_1253.JPG" alt="..."
                            class="img-thumbnail">
                        <div style="display: inline-block;margin-left: 40px;">
                            <h1>Municipal General Services Office</h1>
                            <p>head office and staff</p>

                        </div>

                    </div>



                </div>
            </a>
            <br>
            <a style="text-decoration: none" href="/see-all-offices/mbo/8">
                <div class="container" style="cursor: pointer">
                    <div style="text-align: center;display: flex;
                                        justify-items: center;
                                        align-items: center;
                                        align-content: center;">
                        <img style="display: inline; width:40%" src="images/officials/group/IMG_1215.JPG" alt="..."
                            class="img-thumbnail">
                        <div style="display: inline-block;margin-left: 40px;">
                            <h1>Municipal Budget Office</h1>
                            <p>head office and staff</p>
                        </div>

                    </div>


                </div>
            </a>
            <br>
            <a style="text-decoration: none" href="/see-all-offices/macco/9">
                <div class="container" style="cursor: pointer">
                    <div style="text-align: center;display: flex;
                                        justify-items: center;
                                        align-items: center;
                                        align-content: center;">
                        <img style="display: inline; width:40%" src="images/officials/group/macco/IMG_1309.JPG" alt="..."
                            class="img-thumbnail">
                        <div style="display: inline-block;margin-left: 40px;">
                            <h1>Municipal Accountant's Office</h1>
                            <p>head office and staff</p>
                        </div>

                    </div>



                </div>
            </a>
            <br>
            <a style="text-decoration: none" href="/see-all-offices/mtof/10">
                <div class="container" style="cursor: pointer">
                    <div style="text-align: center;display: flex;
                                        justify-items: center;
                                        align-items: center;
                                        align-content: center;">
                        <img style="display: inline; width:40%" src="images/officials/group/IMG_1215.JPG" alt="..."
                            class="img-thumbnail">
                        <div style="display: inline-block;margin-left: 40px;">
                            <h1>Municipal Treasurer's Office</h1>
                            <p>head office and staff</p>
                        </div>

                    </div>



                </div>
            </a>
            <br>
            <a style="text-decoration: none" href="/see-all-offices/mswdo/11">
                <div class="container" style="cursor: pointer">
                    <div style="text-align: center;display: flex;
                                        justify-items: center;
                                        align-items: center;
                                        align-content: center;">
                        <img style="display: inline; width:40%" src="images/officials/group/mswdo/mswdo.JPG" alt="..."
                            class="img-thumbnail">
                        <div style="display: inline-block;margin-left: 40px;">
                            <h1>Municipal Social Welfare and Development Office</h1>
                            <p>head office and staff</p>

                        </div>

                    </div>


                </div>
            </a>
            <br>
            <a style="text-decoration: none" href="/see-all-offices/meo/13">
                <div class="container" style="cursor: pointer">
                    <div style="text-align: center;display: flex;
                                    justify-items: center;
                                    align-items: center;
                                    align-content: center;">
                        <img style="display: inline; width:40%" src="images/officials/group/meo/municipal engr office.JPG"
                            alt="..." class="img-thumbnail">
                        <div style="display: inline-block;margin-left: 40px;">
                            <h1>Municipal Engineer's Office</h1>
                            <p>head office and staff</p>
                        </div>

                    </div>



                </div>
            </a>
            <br>
            <a style="text-decoration: none" href="/see-all-offices/mcr/14">
                <div class="container" style="cursor: pointer">
                    <div style="text-align: center;display: flex;
                                    justify-items: center;
                                    align-items: center;
                                    align-content: center;">
                        <img style="display: inline; width:40%" src="images/officials/group/mcr/mcr.JPG" alt="..."
                            class="img-thumbnail">
                        <div style="display: inline-block;margin-left: 40px;">
                            <h1>Municipal Civil Registrar's Office</h1>
                            <p>head office and staff</p>

                        </div>

                    </div>


                </div>
            </a>
            <br>
            <a style="text-decoration: none" href="/see-all-offices/masso/15">
                <div class="container" style="cursor: pointer">
                    <div style="text-align: center;display: flex;
                                    justify-items: center;
                                    align-items: center;
                                    align-content: center;">
                        <img style="display: inline; width:40%" src="images/officials/group/masso/maso.JPG" alt="..."
                            class="img-thumbnail">
                        <div style="display: inline-block;margin-left: 40px;">
                            <h1>Municipal Assessor's Office</h1>
                            <p>head office and staff</p>

                        </div>

                    </div>



                </div>
            </a>
            <br>
            <a style="text-decoration: none" href="/see-all-offices/healthOffice/16">
                <div class="container" style="cursor: pointer">
                    <div style="text-align: center;display: flex;
                                    justify-items: center;
                                    align-items: center;
                                    align-content: center;">
                        <img style="display: inline; width:40%" src="images/officials/group/mho/IMG_1293.JPG" alt="..."
                            class="img-thumbnail">
                        <div style="display: inline-block;margin-left: 40px;">
                            <h1>Municipal Health Office</h1>
                            <p>head office and staff</p>
                        </div>

                    </div>



                </div>
            </a>
            <br>
            <a style="text-decoration: none" href="/see-all-offices/meedmo/17">
                <div class="container" style="cursor: pointer">
                    <div style="text-align: center;display: flex;
                                    justify-items: center;
                                    align-items: center;
                                    align-content: center;">
                        <img style="display: inline; width:40%" src="images/officials/group/meedmo/IMG_1190.JPG" alt="..."
                            class="img-thumbnail">
                        <div style="display: inline-block;margin-left: 40px;">
                            <h1>Municipal Economic Enterprise Development and Management Office</h1>
                            <p>head office and staff</p>
                        </div>

                    </div>



                </div>
            </a>
            <br>
            <a style="text-decoration: none" href="/see-all-offices/peso/18">
                <div class="container" style="cursor: pointer">
                    <div style="text-align: center;display: flex;
                                    justify-items: center;
                                    align-items: center;
                                    align-content: center;">
                        <img style="display: inline; width:40%" src="images/officials/group/peso/final02.JPG" alt="..."
                            class="img-thumbnail">
                        <div style="display: inline-block;margin-left: 40px;">
                            <h1>Public Employment and Services Office</h1>
                            <p>head office and staff</p>
                        </div>

                    </div>


                </div>
            </a>
            <br>
            <a style="text-decoration: none" href="/see-all-offices/abe_fap/19">
                <div class="container" style="cursor: pointer">
                    <div style="text-align: center;display: flex;
                                    justify-items: center;
                                    align-items: center;
                                    align-content: center;">
                        <img style="display: inline; width:40%" src="images/officials/group/abe-fap/abe fap.JPG" alt="..."
                            class="img-thumbnail">
                        <div style="display: inline-block;margin-left: 40px;">
                            <h1>Agri-Business Enterprise Farmers Assistance Program</h1>
                            <p>head office and staff</p>
                        </div>

                    </div>



                </div>
            </a>
            <br>
            <a style="text-decoration: none" href="/see-all-offices/mnao/20">
                <div class="container" style="cursor: pointer">
                    <div style="text-align: center;display: flex;
                                    justify-items: center;
                                    align-items: center;
                                    align-content: center;">
                        <img style="display: inline; width:40%" src="images/officials/group/IMG_1215.JPG" alt="..."
                            class="img-thumbnail">
                        <div style="display: inline-block;margin-left: 40px;">
                            <h1>Municipal Nutrition Action Office</h1>
                            <p>head office and staff</p>
                        </div>

                    </div>


                </div>
            </a>
            <br>
            <a style="text-decoration: none" href="/see-all-offices/amuntrico/21">
                <div class="container" style="cursor: pointer">
                    <div style="text-align: center;display: flex;
                                    justify-items: center;
                                    align-items: center;
                                    align-content: center;">
                        <img style="display: inline; width:40%" src="images/officials/group/IMG_1215.JPG" alt="..."
                            class="img-thumbnail">
                        <div style="display: inline-block;margin-left: 40px;">
                            <h1>Asuncion Municipal Tribal Council</h1>
                            <p>head office and staff</p>
                        </div>

                    </div>



                </div>
            </a>
            <br>
            <a style="text-decoration: none" href="/see-all-offices/meppio/22">
                <div class="container" style="cursor: pointer">
                    <div style="text-align: center;display: flex;
                                    justify-items: center;
                                    align-items: center;
                                    align-content: center;">
                        <img style="display: inline; width:40%" src="images/officials/group/meppio/meppio.JPG" alt="..."
                            class="img-thumbnail">
                        <div style="display: inline-block;margin-left: 40px;">
                            <h1>Municipal Events Protocol and Public Information Office</h1>
                            <p>head office and staff</p>
                        </div>

                    </div>



                </div>
            </a>
            <br>
            <a style="text-decoration: none" href="/see-all-offices/tourism/23">
                <div class="container" style="cursor: pointer">
                    <div style="text-align: center;display: flex;
                                    justify-items: center;
                                    align-items: center;
                                    align-content: center;">
                        <img style="display: inline; width:40%" src="images/officials/group/tourism/tourism.JPG" alt="..."
                            class="img-thumbnail">
                        <div style="display: inline-block;margin-left: 40px;">
                            <h1>TOURISM / HOUSING</h1>
                            <p>head office and staff</p>
                        </div>

                    </div>



                </div>
            </a>
            <br>
            <a style="text-decoration: none" href="/see-all-offices/pcic/24">
                <div class="container" style="cursor: pointer">
                    <div style="text-align: center;display: flex;
                                    justify-items: center;
                                    align-items: center;
                                    align-content: center;">
                        <img style="display: inline; width:40%" src="images/officials/group/IMG_1215.JPG" alt="..."
                            class="img-thumbnail">
                        <div style="display: inline-block;margin-left: 40px;">
                            <h1>Philippine Crop Insurance Corportion Section</h1>
                            <p>head office and staff</p>

                        </div>

                    </div>



                </div>
            </a>
            <br> --}}



            {{-- dont iclude below --}}
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
