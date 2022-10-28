
@extends('layouts.master', ['title' => 'officials', 'subtitle' => 'archive'])

@section('content')
        <!-- Header -->
        
        <header id="header" class="ex-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>LEGISLATIVE DIGEST</h1>
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
                        <a href="index.html">Home</a><i class="fa fa-angle-double-right"></i><span>ARCHIVES</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->
    <form style="margin-left: 100px;" method="POST" action="/archive-submit" enctype="multipart/form-data" class="row">
        @csrf
    <div class="row">
        <div class="col-md-12 col-xs-6">
            <div class="form-group">
                <label class="col-md-12 mb-0">Seach Archive</label>
                <div class="col-md-12">
                    <div class="input-group input-group-sm mb-3">
                        
                            @csrf
                        <input type="text" name="search" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
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
       
        <a style="text-decoration: none" href="/see-all-offices/mayorsOffices">
            <div class="container card" style="cursor: pointer;background: #e8f9e9;padding: 40px; margin-bottom:30px;border-radius: 20px;">
                <div style="text-align: center;display: flex;
                justify-items: center;
                
                align-items: center;
                align-content: center;">
                @foreach ($archives as $archive)
                <div >
                    <img src="/images/fileupload.png"
                                            width="150" />
                
                <div style="display: inline-block;margin-left: 40px;">
                <a href="/archives/{{$archive->file}}" target="_blank" rel="noopener noreferrer">{{$archive->file}}</a>
                        <h4>{{$archive->title}}</h4>
                        <p>{{$archive->description}}</p>
                    </div>
                </div>
            
                @endforeach
                
            
                </div>
            </div>
        </a>
            <br>
  
    <br>
       </div>
   </div>
    @stop