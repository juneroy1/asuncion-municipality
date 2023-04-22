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
                    <a href="index.html">Home</a><i class="fa fa-angle-double-right"></i><span>LATEST NEWS</span>
                </div> <!-- end of breadcrumbs -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of ex-basic-1 -->
<!-- end of breadcrumbs -->


<div class="row">
    <div class="col-md-12 col-xs-12">
        <div id="contact" class="form-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <div class="section-title">STUDENT INQUIRIES</div>
                            <h2>Hi Student! We are here to help</h2>
                            <p></p>

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
                        <form method="POST" action="messages-submit">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control-input" id="cname" required>
                                <label class="label-control" for="cname">Name</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="numner" name="name" class="form-control-input" id="cname" required>
                                <label class="label-control" for="cname">Contact Number</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control-input" id="cemail" required>
                                <label class="label-control" for="cemail">Email</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="numner" name="name" class="form-control-input" id="cname" required>
                                <label class="label-control" for="cname">School Name</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="file" name="name" class="form-control-input" id="cname" required>
                                {{-- <label class="label-control" for="cname">Attach a file</label> --}}
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control-textarea" id="cmessage"
                                    required></textarea>
                                <label class="label-control" for="cmessage">Purpose</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <!-- <div class="form-group checkbox">
                                <input type="checkbox" id="cterms" value="Agreed-to-Terms" required>I agree with Aria's stated
                                <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms-conditions.html">Terms
                                    Conditions</a>
                                <div class="help-block with-errors"></div>
                            </div> -->
                            <div class="form-group">
                                <button type="submit" class="form-control-submit-button">SEND</button>
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
        <br>



        <br>
    </div>
</div>
@stop