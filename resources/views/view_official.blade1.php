
@extends('layouts.master', ['title' => 'officials', 'subtitle' => ''])

@section('content')
        <!-- Header -->
        
        <header style="background-image: url('/landing_images/1631172177.jpg');    background-attachment: fixed;
        background-position: bottom;" id="header" class="ex-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        {{-- <h1>LEGISLATIVE BRANCH</h1> --}}
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
                        <a href="index.html">Home</a><i class="fa fa-angle-double-right"></i><span>LEGISLATIVE BRANCH</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->

        
   <div class="row">
       <div class="col-md-12 col-xs-12"> 
           <br>
                
                <div class="container">
                    <div style="text-align: center;display: flex;
                       justify-items: center;
                       align-items: center;
                       align-content: center;">
                        <img style="display: inline; width:40%" src="/officials/{{$official->image}}" alt="..." class="img-thumbnail">
                        <div style="display: inline-block;">
                            <h1 style="font-size: 28px;" >{{$official->first_name}} {{$official->last_name}}</h1>
                            <h3>{{$official->position}}</h3>
                            {{-- <p >position    </p> --}}
                            <p class="font-red">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolorem ad magnam atque ea, sint iusto alias maiores nostrum, rem aliquid tenetur quae, reprehenderit sit vitae architecto totam consectetur fugiat?</p>
                            
                        </div>
                        
                   </div>
                   <br>
                   <br>
                   <div class="container" style="display: inline-block;">
                    <h2>PERSONAL PROFILE</h2>

                    <table>
                        <tr>
                            <td>Address:</td>
                            <td>{{$official->address}}</td>
                        </tr>
                        <tr>
                            <td>Birthdate:</td>
                            <td>{{$official->birthdate}}</td>
                        </tr>
                        <tr>
                            <td><br></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Term-of-office <br>Elective title experience:</td>
                            <td>{{$official->elective_title_experience}}</td>
                        </tr>
                        <tr>
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
                        </tr>
                        <tr>
                            <td>QUOTATION:</td>
                            <td>{{$official->quotation}}</td>
                        </tr>
                        <tr>
                            <td>Other significant information:</td>
                            <td>{{$official->others}}</td>
                        </tr>
                    </table>
                </div>
                  
                   </div>
                {{-- </a> --}}
                   <br>
         
           {{-- <div class="container">
            <div style="text-align: center;display: flex;
               justify-items: center;
               align-items: center;
               align-content: center;">
                <img style="display: inline; width:40%" src="images/officials/IMG_0634.JPG" alt="..." class="img-thumbnail">
                <div style="display: inline-block;">
                    <h1 style="font-size: 28px;" >Hon. ANGELITO G. LARIDE</h1>
                
                    <h3>Municipal Councilor</h3>
                    <p class="font-red">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolorem ad magnam atque ea, sint iusto alias maiores nostrum, rem aliquid tenetur quae, reprehenderit sit vitae architecto totam consectetur fugiat?</p>
    
                </div>
              
               </div>
          </div>
           
           <br> --}}
           {{-- <div class="container">
            <div style="text-align: center;display: flex;
            justify-items: center;
            align-items: center;
            align-content: center;">
                  <img style="display: inline; width:40%" src="images/officials/IMG_0614.JPG" alt="..." class="img-thumbnail">
                  <div style="display: inline-block;">
                      <h1 style="font-size: 28px;" >Hon. REYNALDO D. PANISAL, JR.</h1>
                  
                      <h3>Municipal Councilor</h3>
                      <p class="font-red">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolorem ad magnam atque ea, sint iusto alias maiores nostrum, rem aliquid tenetur quae, reprehenderit sit vitae architecto totam consectetur fugiat?</p>
      
                  </div>
                
                 </div>
             
           </div>
           <br>
            <br> --}}
           {{-- <div class="container">
            <div style="text-align: center;display: flex;
               justify-items: center;
               align-items: center;
               align-content: center;">
                <img style="display: inline; width:40%" src="images/officials/IMG_0641.JPG" alt="..." class="img-thumbnail">
                <div style="display: inline-block;">
                    <h1 style="font-size: 28px;" >Hon. ALVIN S. ALMEDA</h1>
                
                    <h3>Municipal Councilor</h3>
                    <p class="font-red">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolorem ad magnam atque ea, sint iusto alias maiores nostrum, rem aliquid tenetur quae, reprehenderit sit vitae architecto totam consectetur fugiat?</p>
    
                </div>
              
               </div>
           </div>
           <br> --}}
         {{-- <div class="container">
            <div style="text-align: center;display: flex;
               justify-items: center;
               align-items: center;
               align-content: center;">
                <img style="display: inline; width:40%" src="images/officials/IMG_0626.JPG" alt="..." class="img-thumbnail">
                <div style="display: inline-block;">
                    <h1 style="font-size: 28px;" >Hon. SILVINO P. MATOBATO, JR., PTRP</h1>
                
                    <h3>Municipal Councilor/PCL President Davao del Norte</h3>
                    <p class="font-red">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolorem ad magnam atque ea, sint iusto alias maiores nostrum, rem aliquid tenetur quae, reprehenderit sit vitae architecto totam consectetur fugiat?</p>
    
                </div>
              
               </div>
           
         </div>
         <br> --}}
           
         {{-- <div class="container">
            <div style="text-align: center;display: flex;
               justify-items: center;
               align-items: center;
               align-content: center;">
                <img style="display: inline; width:40%" src="images/officials/IMG_0622.JPG" alt="..." class="img-thumbnail">
                <div style="display: inline-block;">
                    <h1 style="font-size: 28px;" >Hon. ALAN Q. MONTEROSO</h1>
                
                    <h3>Municipal Councilor</h3>
                    <p class="font-red">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolorem ad magnam atque ea, sint iusto alias maiores nostrum, rem aliquid tenetur quae, reprehenderit sit vitae architecto totam consectetur fugiat?</p>
    
                </div>
              
               </div>
           
         </div>
         <br> --}}
         {{-- <div class="container">
            <div style="text-align: center;display: flex;
               justify-items: center;
               align-items: center;
               align-content: center;">
                <img style="display: inline; width:40%" src="images/officials/IMG_0632.JPG" alt="..." class="img-thumbnail">
                <div style="display: inline-block;">
                    <h1 style="font-size: 28px;" >Hon. ROCKY JAY A. BINASBAS, DMD</h1>
                
                    <h3>Municipal Councilor</h3>
                    <p class="font-red">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolorem ad magnam atque ea, sint iusto alias maiores nostrum, rem aliquid tenetur quae, reprehenderit sit vitae architecto totam consectetur fugiat?</p>
    
                </div>
              
               </div>
           
         </div>
          <br> --}}
           {{-- <div class="container">
            <div style="text-align: center;display: flex;
               justify-items: center;
               align-items: center;
               align-content: center;">
                <img style="display: inline; width:40%" src="images/officials/IMG_0642.JPG" alt="..." class="img-thumbnail">
                <div style="display: inline-block;">
                    <h1 style="font-size: 28px;" >Hon. ROGELIO E. BUAL</h1>
                
                    <h3>Municipal Councilor</h3>
                    <p class="font-red">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolorem ad magnam atque ea, sint iusto alias maiores nostrum, rem aliquid tenetur quae, reprehenderit sit vitae architecto totam consectetur fugiat?</p>

                </div>
              
               </div>
           </div>
          
           <br>
           <br> --}}
           {{-- <div class="container">
            <div style="text-align: center;display: flex;
            justify-items: center;
            align-items: center;
            align-content: center;">
                  <img style="display: inline; width:40%" src="images/officials/IMG_0610.JPG" alt="..." class="img-thumbnail">
                  <div style="display: inline-block;">
                      <h1 style="font-size: 28px;" >Hon. TEOFILO C. DAWA</h1>
                  
                      <h3>Municipal Councilor</h3>
                      <p class="font-red">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolorem ad magnam atque ea, sint iusto alias maiores nostrum, rem aliquid tenetur quae, reprehenderit sit vitae architecto totam consectetur fugiat?</p>
      
                  </div>
                
                 </div>
             
           </div>
           <br> --}}
          {{-- <div class="container">
            <div style="text-align: center;display: flex;
            justify-items: center;
            align-items: center;
            align-content: center;">
                <img style="display: inline; width:40%" src="images/officials/IMG_0653.JPG" alt="..." class="img-thumbnail">
                <div style="display: inline-block;">
                    <h1 style="font-size: 28px;">Hon. CECILIO B. CINCO</h1>
                
                    <h3>Municipal Councilor/ABC President</h3>
                    <p class="font-red">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolorem ad magnam atque ea, sint iusto alias maiores nostrum, rem aliquid tenetur quae, reprehenderit sit vitae architecto totam consectetur fugiat?</p>
    
                </div>
              
               </div>
          </div>
          <br> --}}
          {{-- <div class="container">
            <div style="text-align: center;display: flex;
               justify-items: center;
               align-items: center;
               align-content: center;">
                <img style="display: inline; width:40%" src="images/officials/IMG_0654.JPG" alt="..." class="img-thumbnail">
                <div style="display: inline-block;">
                    <h1 style="font-size: 28px;">Hon. MADELO M. AMONCIO</h1>
                
                    <h3>Municipal Councilor/SKMF President</h3>
                    <p class="font-red">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolorem ad magnam atque ea, sint iusto alias maiores nostrum, rem aliquid tenetur quae, reprehenderit sit vitae architecto totam consectetur fugiat?</p>
    
                </div>
              
               </div>
           </div> 
          <br> --}}
          {{-- <div class="container">
            <div style="text-align: center;display: flex;
               justify-items: center;
               align-items: center;
               align-content: center;">
                <img style="display: inline; width:40%" src="images/officials/IMG_0647.JPG" alt="..." class="img-thumbnail">
                <div style="display: inline-block;">
                    <h1 style="font-size: 28px;">Hon. NESTOR L. WARAG</h1>
                
                    <h3>Municipal Councilor/IPMR</h3>
                    <p class="font-red">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolorem ad magnam atque ea, sint iusto alias maiores nostrum, rem aliquid tenetur quae, reprehenderit sit vitae architecto totam consectetur fugiat?</p>
                </div>
              
               </div>
          </div>
         
          
          
         <br> --}}
       </div>
   </div>
    @stop