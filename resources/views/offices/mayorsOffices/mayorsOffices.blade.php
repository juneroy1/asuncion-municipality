@extends('layouts.master', ['title' => 'departments', 'subtitle' => 'mayorsIffice'])

@section('content')

    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="color:white">{{ $department->name }}</h2>
                                        <h5 style="color:white">
                                            {{ $department->department ? $department->department->name . ' Section' : '' }}
                                        </h5>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    {{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div id="header" class="headerMayorOffice" style="background-image: url({{ $department->image? '/departments/' . $department->image: '/landing_images/1631172177.jpg' }}) !important" >
                    <div class="header-content">
                        <div style="margin-top: 590px;" class="container">
                            <div class="row">
                                <div class="col-lg-12">

                                    <div style="background-color: #113448;
                                                                    
                                                                            border: solid;
                                                                            border-radius: 10px;
                                                                            border-color: rgb(39 81 105);"
                                        class="text-container">
                                         <br>
                                        <h2 style="color:white">{{ $department->name }}</h2>
                                        <h5 style="color:white">
                                            {{ $department->department ? $department->department->name . ' Section' : '' }}
                                        </h5>
                                        <br>
                                    </div>
                                </div> <!-- end of col -->
                            </div> <!-- end of row -->
                        </div> <!-- end of container -->
                    </div> <!-- end of header-content -->
                </div>
            </div>
            <div class="carousel-item">
               <div id="header" class="headerMayorOffice2" style="background-image: url({{ $department->image? '/departments/' . $department->image: '/landing_images/1631172177.jpg' }}) !important">
                    <div class="header-content">
                        <div style="margin-top: 590px;" class="container">
                            <div class="row">
                                <div class="col-lg-12">

                                    <div style="background-color: #113448;
                                                                        border: solid;
                                                                        border-radius: 10px;
                                                                        border-color: rgb(39 81 105);"
                                        class="text-container">
                                        <br>
                                        <h2 style="color:white">{{ $department->name }}</h2>
                                        <h5 style="color:white">
                                            {{ $department->department ? $department->department->name . ' Section' : '' }}
                                        </h5>
                                        <br>
                                      </div>
                                </div> <!-- end of col -->
                            </div> <!-- end of row -->
                        </div> <!-- end of container -->
                    </div> <!-- end of header-content -->
                </div>
              
            </div>
           
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



    <br>
    <br>
    <br>
 

    <br> --}}
    <div style=" margin-top: 20px; background-color: #eef5f9;
                                    padding: 80px;
                                    border: 1px solid #d7dfe3;
                                    border-radius: 4px;
                                    -webkit-box-shadow: 0px 5px 20px rgb(0 0 0 / 5%);
                                    box-shadow: 0px 5px 20px rgb(0 0 0 / 5%);
                                    color: #455a64;
                                    background: #e8f9e9;
                                    text-align: center;
                                    align-items: center;
                                    justify-content: space-around;
                                    align-content: center;
                                    flex-direction: row;
                                    margin-bottom: 30px;
                                    border-radius: 20px;
                                    box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%);
                                    transition: 0.3s;
                                    " class="container">
        {{-- <h2 style="text-align: center">OFFICE PERSONNEL</h2> --}}
        <div style="text-align: center;
                                        justify-items: center;
                                        align-items: center;
                                        align-content: center;">
            @foreach ($members as $member)
                <div style=" display: flex;
                                        justify-content: center;
                                        align-items: center;">
                    <img style="object-fit: cover;display: inline;
                                        width: 20%;
                                        border-radius: 50%;
                                        border-color: black;
                                        height: 200px;"
                        src="{{ $member->image ? '/images/' . $member->image : '/images/img_avatar2.png' }}" alt="..."
                        class="img-thumbnail">
                    {{-- <img style="width: 70%;" src="/images/img_avatar2.png" alt=""> --}}
                    <div style="display: block;margin-left: 10px;">
                        <h3><a href="/view-head-office/{{ $member->id }}"
                                style="color: black; text-decoration: none;">{{ $member->first_name }}
                                {{ $member->last_name }}</a></h3>
                        <p>{{ $member->position }}</p>
                        {{-- <h2></h2> --}}
                        {{-- <p class="font-red">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolorem ad magnam atque ea, sint iusto alias maiores nostrum, rem aliquid tenetur quae, reprehenderit sit vitae architecto totam consectetur fugiat?</p> --}}

                    </div>
                </div>
            @endforeach
            <br>
        </div>



        {{-- <img class="card-image" src="images/officials/IMG_0614.JPG" alt="alternative"> --}}
        
    </div>
    <br>

    <div class="container">
        <div class="card" style="background: #e8f9e9;
        text-align: center;
        display: flex;
        justify-items: center;
        align-items: center;
        justify-content: space-around;
        align-content: center;
        flex-direction: row;
        padding: 40px;
        margin-bottom: 30px;
        border-radius: 20px;">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    {{-- style="background-color: #eef5f9;
                                                                            padding: 80px;
                                                                            border: 1px solid #d7dfe3;
                                                                            border-radius: 4px;
                                                                            -webkit-box-shadow: 0px 5px 20px rgb(0 0 0 / 5%);
                                                                            box-shadow: 0px 5px 20px rgb(0 0 0 / 5%);
                                                                            color: #455a64;" class="container" --}}
                    <div >
                        <h2 style="text-align: center">OFFICE MANDATE</h2>
                        <div style="text-align: center;display: flex;
                                                                                justify-items: center;
                                                                                align-items: center;
                                                                                align-content: center;">
                            <div style="display: inline-block;">
    
    
                                @if ($functionality != null)
                                    <p>{{ $functionality->description }}</p>
                                @else
                                    <p> </p>
                                @endif
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div  class="container">
                                                    <div class="card" style="background: #e8f9e9;
                                                    text-align: center;
                                                    display: flex;
                                                    justify-items: center;
                                                    align-items: center;
                                                    justify-content: space-around;
                                                    align-content: center;
                                                    flex-direction: column;
                                                    padding: 40px;
                                                    margin-bottom: 30px;
                                                    border-radius: 20px;">
                                                   
                <h2 style="text-align: center">OFFICE PERSONNEL</h2>
                <div style="text-align: center;
                                                        justify-items: center;
                                                        align-items: center;
                                                        align-content: center;">



                    <div style=" display: flex;
                                                        justify-content: center;
                                                        align-items: center;">


                        <div style=" display: flex;     flex-direction: column;
                                justify-content: center;
                                align-items: center;">
                            @foreach ($personnel as $p)
                                {{-- @if ($department->id == 2)
                                <img style="width: 100%;" src="/images/IMG_1215.jpg"
                                alt=""> 
                                @endif --}}
                                <img style="width: 100%;" src="/personnel/{{ $p ? $p->image : '' }}" alt="">
                                {{-- <img style="width: 70%;" src="/organizational_charts/{{ $organizationalChart->image }}"

                                {{-- <img style="display: inline;
                                width: 20%;

                                border-color: black;
                                height: 200px;" src="../images/{{$member->image}}" alt="..." class="img-thumbnail"> --}}
                                {{-- <div style="display: block;margin-left: 10px;">
                                <h3 >{{$member->first_name}} {{ $member->last_name}}</h3>
                                <p>{{$member->position}}</p>
                                </div> --}}
                            @endforeach
                        </div>

                        <br>
                    </div>
                </div>


                    {{-- <img class="card-image" src="images/officials/IMG_0614.JPG" alt="alternative"> --}}
                </div>
            </div>
        </div>
    </div>
                <br>
                <br>
                <div style="background-color: #eef5f9;
                                                    padding: 80px;
                                                    border: 1px solid #d7dfe3;
                                                    border-radius: 4px;
                                                    -webkit-box-shadow: 0px 5px 20px rgb(0 0 0 / 5%);
                                                    box-shadow: 0px 5px 20px rgb(0 0 0 / 5%);
                                                    color: #455a64;" class="container">
                    <h2 style="text-align: center">ORGANIZATIONAL CHART</h2>
                    <div style="text-align: center;
                                                        justify-items: center;
                                                        align-items: center;
                                                        align-content: center;">



                        <div style=" display: flex;
                                                    flex-direction: column;
                                                        justify-content: center;
                                                        align-items: center;">
                            @foreach ($organizationalChart as $org)
                                @if ($org != null)
                                    <img style="width: auto;" src="/organizational_charts/{{ $org ? $org->image : '' }}"
                                        alt="">
                                @else
                                @endif
                            @endforeach
                            {{-- <img style="display: inline;
                width: 20%;

                border-color: black;
                height: 200px;" src="../images/{{$member->image}}" alt="..." class="img-thumbnail"> --}}
                            {{-- <div style="display: block;margin-left: 10px;">
                <h3 >{{$member->first_name}} {{ $member->last_name}}</h3>
                <p>{{$member->position}}</p>
                </div> --}}
                        </div>

                        <br>
                    </div>



                    {{-- <img class="card-image" src="images/officials/IMG_0614.JPG" alt="alternative"> --}}
                </div>
                <br>
                <br>
                <br>
                <div  class="container">
                    <div class="card" style="background: #e8f9e9;
                    text-align: center;
                    display: flex;
                    justify-items: center;
                    align-items: center;
                    justify-content: space-around;
                    align-content: center;
                    flex-direction: column;
                    padding: 40px;
                    margin-bottom: 30px;
                    border-radius: 20px;">
                    <h2 style="text-align: center">PROGRAMS AND SERVICES</h2>
                    @foreach ($updates as $update)
                    <a style="text-decoration: none"  href="/update-view/{{$update->id}}">
                        <div style="text-align: center;display: flex;
                                                                                justify-items: center;
                                                                                align-items: center;
                                                                                align-content: center;">
                            <img style="display: inline; width:40%" src="/updates/{{ $update->image }}" alt="..."
                                class="img-thumbnail">
                            <div style="display: inline-block; margin-left: 20px">

                                <h3>{{ $update->title }}</h3>

                                <p>{{ $update->description }}</p>
                                <p>{{ $update->description_local }}</p>

                            </div>

                        </div>
                        </a>
                        <br>
                    @endforeach

                    {{-- <img class="card-image" src="images/officials/IMG_0614.JPG" alt="alternative"> --}}
                </div>
                <br>
                <br>
                <br>
                <div  class="container">
                    <div class="card" style="background: #e8f9e9;
                    text-align: center;
                    display: flex;
                    justify-items: center;
                    align-items: center;
                    justify-content: space-around;
                    align-content: center;
                    flex-direction: column;
                    padding: 40px;
                    margin-bottom: 30px;
                    border-radius: 20px;">
                    <h2 style="text-align: center">OUR ARCHIVES</h2>
                    <div style="text-align: center;">
                        {{-- <img style="display: inline; width:40%" src=" images/vaccination/vaccination.JPG" alt="..." class="img-thumbnail"> --}}
                        {{-- <div style="display: inline-block;">

                @if ($functionality != null)
                <p >{{$functionality->description}}</p>
                @else
                <p > </p>
                @endif
                </div> --}}
                        <form style="margin-left: 100px;" method="POST"
                            action="/archive-submit-department/mayorsOffices/{{ $department->id }}"
                            enctype="multipart/form-data" class="row">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 col-xs-6">
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Seach Archive</label>
                                        <div class="col-md-12">
                                            <div class="input-group input-group-sm mb-3">

                                                @csrf
                                                <input type="text" name="search" class="form-control" aria-label="Small"
                                                    aria-describedby="inputGroup-sizing-sm">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-primary" type="submit">Search</button>
                                                    {{-- <span class="input-group-text" id="inputGroup-sizing-sm">Search</span> --}}
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-md-12 col-xs-12">

                                <a style="text-decoration: none" href="#">
                                    <div class="container" style="cursor: pointer">
                                        <div style="flex-direction:column;text-align: center;display: flex;
                                                            justify-items: center;
                                                            align-items: center;
                                                            align-content: center;">
                                            @foreach ($archives as $archive)
                                                <img src="/images/fileupload.png" width="150" />
                                                <a href="/archives/{{ $archive->file }}" target="_blank"
                                                    rel="noopener noreferrer">{{ $archive->file }}</a>
                                                <div style="display: inline-block;margin-left: 40px;">
                                                    <h4>{{ $archive->title }}</h4>
                                                    <p>{{ $archive->description }}</p>
                                                </div>
                                            @endforeach


                                        </div>
                                    </div>
                                </a>
                                <br>

                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div style="background-color: #eef5f9;
                                                padding: 80px;
                                                border: 1px solid #d7dfe3;
                                                border-radius: 4px;
                                                -webkit-box-shadow: 0px 5px 20px rgb(0 0 0 / 5%);
                                                box-shadow: 0px 5px 20px rgb(0 0 0 / 5%);
                                                color: #455a64;" class="container">
                <h2 style="text-align: center">OFFICE MANDATE</h2>
                <div style="text-align: center;display: flex;
                                                    justify-items: center;
                                                    align-items: center;
                                                    align-content: center;">
                     <div style="display: inline-block;">

                       
                        @if ($functionality != null)
                            <p>{{ $functionality->description }}</p>
                        @else
                            <p> </p>
                        @endif
                    </div>

                </div>
            </div> --}}
                <br>
                <br>
                <br>
                <div style="display:flex;flex-direction: column;">
                    
                    <div  class="container">
                        <div class="card" style="background: #e8f9e9;
                        text-align: center;
                        display: flex;
                        justify-items: center;
                        align-items: center;
                        justify-content: space-around;
                        align-content: center;
                        flex-direction: column;
                        padding: 40px;
                        margin-bottom: 30px;
                        border-radius: 20px;">
                        <h2 style="text-align: center">Online Transaction</h2>
                        <div style="text-align: center;display: flex;
                                                                                justify-items: center;
                                                                                align-items: center;
                                                                                align-content: center;">
                            {{-- <img style="display: inline; width:40%" src=" images/vaccination/vaccination.JPG" alt="..." class="img-thumbnail"> --}}
                            <div style="display: inline-block;">

                                {{-- <h3>TITLE</h3> --}}

                                {{-- <h2></h2> --}}
                                {{-- <p class="font-red">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolorem ad magnam atque ea, sint iusto alias maiores nostrum, rem aliquid tenetur quae, reprehenderit sit vitae architecto totam consectetur fugiat?</p> --}}

                                {{-- @if ($functionality != null) --}}
                                <center>
                                    <p style="text-align: center">We dont have online transaction link</p>
                                </center>
                                {{-- <p >{{$functionality->description}}</p> --}}
                                {{-- @else --}}
                                <p> </p>
                                {{-- @endif --}}
                            </div>

                        </div>
                    </div>
                </div>

                <div class="my-4" style="display: flex; flex-direction: column">
                    <div  class="container">
                        <div class="card" style="background: #e8f9e9;
                        text-align: center;
                        display: flex;
                        justify-items: center;
                        align-items: center;
                        justify-content: space-around;
                        align-content: center;
                        flex-direction: column;
                        padding: 40px;
                        margin-bottom: 30px;
                        border-radius: 20px;">
                        <h2 style="text-align: center">CONTACT US</h2>
                        <div style="text-align: center;display: flex;
                                                                                justify-items: center;
                                                                                align-items: center;
                                                                                align-content: center;">
                            {{-- <img style="display: inline; width:40%" src=" images/vaccination/vaccination.JPG" alt="..." class="img-thumbnail"> --}}
                            <div style="display: inline-block;">

                                {{-- <h3>TITLE</h3> --}}

                                {{-- <h2></h2> --}}
                                {{-- <p class="font-red">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolorem ad magnam atque ea, sint iusto alias maiores nostrum, rem aliquid tenetur quae, reprehenderit sit vitae architecto totam consectetur fugiat?</p> --}}
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
                                        @foreach ($contactNumberOffices as $emergencyHotline)
                                            <tr class="table-style">
                                                <th scope="row">#</th>
                                                <td style="color:red">{{ $emergencyHotline->name }}</td>
                                                <td><b>{{ $emergencyHotline->number }}</b></td>
                                                <td>{{ $emergencyHotline->network }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{-- @if ($functionality != null)
                            <p >{{$functionality->description}}</p>
                            @else
                            <p > </p>
                            @endif --}}
                            </div>

                        </div>
                    </div>
                </div>



                <br>
                <br>
                <br>

                <!-- Services -->
                <div id="services" class="cards-2">
                    
                    <div style="background-color: #eef5f9;
                                                                                padding: 80px;
                                                                                border: 1px solid #d7dfe3;
                                                                                border-radius: 4px;
                                                                                -webkit-box-shadow: 0px 5px 20px rgb(0 0 0 / 5%);
                                                                                box-shadow: 0px 5px 20px rgb(0 0 0 / 5%);
                                                                                color: #455a64;" class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                {{-- <div class="section-title">ANNOUNCEMENT</div> --}}
                                <h2>ANNOUNCEMENT</h2>
                            </div> <!-- end of col -->
                        </div> <!-- end of row -->
                        <div class="row">
                            <div class="col-lg-12">

                                <!-- Card -->
                                @foreach ($announcements as $announcement)
                                    <div class="card">
                                        <div class="card-image">
                                            <img class="img-fluid" src="../../images/{{ $announcement->image }}"
                                                alt="alternative">
                                        </div>
                                        <div class="card-body">
                                            <h3 class="card-title">{{ $announcement->title }}</h3>
                                            <p>{{ $announcement->description }}</p>
                                            {{-- <ul class="list-unstyled li-space-lg">
                                                <li class="media">
                                                    <i class="fas fa-square"></i>
                                                    <div class="media-body">Environment and competition</div>
                                                </li>
                                                <li class="media">
                                                    <i class="fas fa-square"></i>
                                                    <div class="media-body">Designing the marketing plan</div>
                                                </li>
                                            </ul> --}}
                                            {{-- <p class="price">Starting at <span>$199</span></p> --}}
                                        </div>
                                        <div class="button-container">
                                            <a class="btn-solid-reg page-scroll" href="#callMe">DETAILS</a>
                                        </div> <!-- end of button-container -->
                                    </div>
                                    <!-- end of card -->
                                @endforeach


                                <!-- end of card -->

                            </div> <!-- end of col -->
                        </div> <!-- end of row -->
                    </div> <!-- end of container -->
                </div> <!-- end of cards-2 -->
                <!-- end of services -->


                <br>
                <br>
                <br>
                <br>
                
                <center><h3><b><a href="#">WHAT WE DO MORE...</a> </b></h3></center>

                <br>
            
    @stop
