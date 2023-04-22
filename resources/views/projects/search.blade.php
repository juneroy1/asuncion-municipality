@extends('layouts.master', ['title' => 'projects', 'subtitle' => ''])

@section('content')
<!-- Header -->

<header id="header" class="ex-header" style="height: 10px;padding-top:1px !important">
    <!-- end of container -->
</header> <!-- end of ex-header -->


<!-- Breadcrumbs -->
<div class="ex-basic-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs">
                    <a href="index.html">Home</a><i class="fa fa-angle-double-right"></i><span>SEARCH</span>
                </div> <!-- end of breadcrumbs -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of ex-basic-1 -->
<!-- end of breadcrumbs -->


<div class="row">
    <div class="col-md-12 col-xs-12 p-5">
        <div class="form-group">
            <input type="text" name="name" class="form-control-input" id="cname" required>
            <label class="label-control" for="cname">Search</label>
            <div class="help-block with-errors"></div>
        </div>
        <a style="text-decoration: none" href="/new">
            <div class="card"
                style="background: #e8f9e9;cursor: pointer; padding: 40px; margin-bottom:30px;border-radius: 20px;">
                <div style="text-align: center;display: flex;
                justify-items: center;
                align-items: center;
                align-content: center;">
                    {{-- <img style="display: inline; width:40%" src="/updates/1629695968.jpg" alt="..."
                        class="img-thumbnail"> --}}
                    <div style="display: inline-block;margin-left: 40px;">
                        <h3>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, deleniti!</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut iste maxime sit, dolores rerum,
                            incidunt inventore natus eius velit reprehenderit aut at unde earum ducimus laborum odio
                            accusamus! Quia, exercitationem?</p>


                    </div>

                </div>

            </div>
        </a>
        <br>
        <a style="text-decoration: none" href="/new">
            <div class=" card"
                style="background: #e8f9e9;cursor: pointer; padding: 40px; margin-bottom:30px;border-radius: 20px;">
                <div style="text-align: center;display: flex;
                justify-items: center;
                align-items: center;
                align-content: center;">
                    {{-- <img style="display: inline; width:40%" src="/updates/1632720607.jpg" alt="..."
                        class="img-thumbnail"> --}}
                    <div style="display: inline-block;margin-left: 40px;">
                        <h3>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, deleniti!</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut iste maxime sit, dolores rerum,
                            incidunt inventore natus eius velit reprehenderit aut at unde earum ducimus laborum odio
                            accusamus! Quia, exercitationem?</p>


                    </div>

                </div>

            </div>
        </a>
        <br>
        <a style="text-decoration: none" href="/new">
            <div class=" card"
                style="background: #e8f9e9;cursor: pointer; padding: 40px; margin-bottom:30px;border-radius: 20px;">
                <div style="text-align: center;display: flex;
                justify-items: center;
                align-items: center;
                align-content: center;">
                    {{-- <img style="display: inline; width:40%" src="/updates/1629696725.jpg" alt="..."
                        class="img-thumbnail"> --}}
                    <div style="display: inline-block;margin-left: 40px;">
                        <h3>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, deleniti!</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut iste maxime sit, dolores rerum,
                            incidunt inventore natus eius velit reprehenderit aut at unde earum ducimus laborum odio
                            accusamus! Quia, exercitationem?</p>


                    </div>

                </div>

            </div>
        </a>
        <br>
        

        <br>
    </div>
</div>
@stop