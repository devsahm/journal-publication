<!doctype html>
<html lang="en">

<!-- Mirrored from jumbo-admin.g-axon.work/cards.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2019 10:05:32 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!--    <meta name="description" content="Jumbo - A fully responsive, HTML5 based admin theme">
    <meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, jQuery, web design, CSS3, sass"> -->
    <title>NACP | Admin</title>
    <!-- Site favicon -->
    <link rel='shortcut icon' type='image/x-icon' href='/adminassets/images/favicon.ico' />
    <!-- /site favicon -->

    <!-- Font Material stylesheet -->
    <link rel="stylesheet" href="/adminassets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <!-- /font material stylesheet -->

    <!-- Bootstrap stylesheet -->
    <link href="/adminassets/css/jumbo-bootstrap.css" rel="stylesheet">
    <!-- /bootstrap stylesheet -->

    <!-- Perfect Scrollbar stylesheet -->
    <link href="/adminassets/node_modules/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <!-- /perfect scrollbar stylesheet -->

    <!-- Jumbo-core stylesheet -->
    <link href="/adminassets/css/jumbo-core.min.css" rel="stylesheet">
    <!-- /jumbo-core stylesheet -->

    <!-- Color-Theme stylesheet -->
    <link id="override-css-id" href="/adminassets/css/theme-dark-indigo.css" rel="stylesheet">
    <!-- Color-Theme stylesheet -->
<style type="text/css">
    .moveaway{
        
        float: left;
    }
    .marginelement{
        margin-left: 40px;
    }
    .clear{
        clear: left;
    }

    ul,li{
        list-style-type: none;
        margin-right:0;
        padding: 0;
    }
</style>
</head>

<body id="body" data-theme="dark-indigo">

<!-- Loader Backdrop -->
<div class="loader-backdrop">
    <!-- Loader -->
    <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
        </svg>
    </div>
    <!-- /loader-->
</div>
<!-- loader backdrop -->

<!-- Page container -->
<div class="gx-container">

    <!-- Page Sidebar -->
   
      
            <!-- Sidebar header  -->
         @include('membersidebar')
            <!-- /sidebar header -->

           

    <!-- /page sidebar -->

    <!-- Main Container -->
    <div class="gx-main-container">

        <!-- Main Header -->
       @include('adminheader')
        <!-- /main header -->

        <!-- Main Content -->
        <div class="gx-main-content">
            <!--gx-wrapper-->
            <div class="gx-wrapper">

                <div class="animated slideInUpTiny animation-duration-3">

                    <div class="page-heading d-sm-flex justify-content-sm-between align-items-sm-center">
                        <h2 class="title mb-3 mb-sm-0">Licensing Application Details</h2>
                        <nav class="breadcrumb">
                            <a href="/admin" class="breadcrumb-item">Dashboard</a>
                        
                            <span class="active breadcrumb-item">Licensing Application Details</span>
                        </nav>
                    </div>

                  

                   


                    <div class="row mb-md-12">
                        <div class="col-md-12 col-12">
                            <div class="shadow border-0 card">
                                <div class="card-header">
                                  
                                </div>
                                <div class="card-body">
                                    <img src="/passportphoto/{{ $license->passport }}" style="width: 200px; height: auto;" class="moveaway">
                          
                                    <div class="clear"></div>
                                    <h3><b>Name:</b> {{$license->surname}} {{$license->firstname}} {{$license->othername}} </h3> 
                                    <h3><b>Title:</b> {{$license->title}}</h3>
                                    <h3><b>Date of Birth:</b> {{$license->dob}}</h3>
                                    <h3 class="moveaway"><b>Nationality:</b> {{$license->nationality}}</h3>
                                    <h3 class="moveaway marginelement"><b>State:</b> {{$license->state}}</h3>
                                    <div class="clear"></div>
                                    <h3 class="moveaway"><b>Name of Organisation:</b>  {{$license->business_name}}
                                    <h3 class="moveaway marginelement"><b>Address of Organisation:</b> {{$license->business_address}}</h3>
                                    <div class="clear"></div>
                                    <h3 class="moveaway"><b>Telephone:</b> {{$license->telephone}}</h3>
                                      <h3 class="moveaway marginelement"><b>Job Title:</b> {{$license->job_title}}</h3>
                                       <div class="clear"></div>
                                        <h3 class=""><b>NACP Registration No:</b> {{$license->registration}}</h3>
                                         <table class="table table-bordered">
                                            <tr>
                                            <div class="moveaway">
                                                <h3><b>Details or Workshop Attended/Year</b></h3>
                                                <?php
                                                $workshops= $license->workshop;
                                                 $array=explode('*', $workshops);
                                                foreach ($array as $item) {
                                               
                                                 echo"
                                                
                                                 <ul>
                                                    <li>
                                                    $item<br>
                                                    </li>
                                                </ul>
                                                 ";
                                                }

                                                ?>
                                               </div>
                                      
                                              <div class="moveaway" style="margin-left: 100px;">
                                                <h3><b>Certificate</b></h3>
                                                <?php
                                                $certificates= $license->cerficate;
                                                 $array=explode('*', $certificates);
                                                foreach ($array as $item) {
                                               
                                                 echo"
                                                
                                                 <ul>
                                                    <li>
                                                    $item
                                                    </li>
                                                </ul>
                                                 ";
                                                }

                                                ?>
                                               </div>
                                               </tr>
                                              </table>
                                               <div class="clear"></div>
                                   
                <!--                        <h6 class="card-subtitle mb-4"><i>Author(s): {{ $license->author }}</i></h6> -->

                                    <!-- <h6 class="card-subtitle mb-4"><b>Abstracts</b></h6>
                                    <p class="card-text"> {{$license->abstract}} </p>
                                     <h6 class="card-subtitle mb-4"><b>Details</b></h6>
                                    <p class="card-text"> {{$license->content}} </p> -->

                                    <a href="/paymentpicture/{{ $license->payment}}" class="gx-btn gx-btn-sm gx-btn-primary" download>Download Payment Slip</a>

                                       <a href="/evidencedoc/{{ $license->evidence}}" class="btn btn-info" download>Download Conference Evidence</a>

                                                 <a href="/membership/downloadpdf/{{ $license->id}}" class="btn btn-warning">Generate PDF</a>
                                    <!-- <a href="/uploads/{{ $license->uploadtwo}}" class="gx-btn gx-btn-sm gx-flat-btn gx-btn-primary">Download Without Author Name</a> -->
                                </div>
                            </div>
                        </div>
                    
                    </div>

        


              



            
                </div>

            </div>
            <!--/gx-wrapper-->

            <!-- Footer -->
            <footer class="gx-footer">
                <div>NAIOP © 2019</p>
            </footer>
            <!-- /footer -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /main container -->

    <!-- Theme Options Button -->
    
    <!-- /Theme Options Button -->

</div>
<!-- /page container -->

<!-- Right Sidebar-->

<!-- /Right Sidebar-->

<!-- Menu Backdrop -->
<div class="menu-backdrop fade"></div>
<!-- /menu backdrop -->

<!--Load JQuery-->
<script src="/adminassets/node_modules/jquery/dist/jquery.min.js"></script>
<!--Bootstrap JQuery-->
<script src="/adminassets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!--Perfect Scrollbar JQuery-->
<script src="/adminassets/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
<!--Big Slide JQuery-->
<script src="/adminassets/node_modules/bigslide/dist/bigSlide.min.js"></script>
<!--Custom JQuery-->
<script src="/adminassets/js/functions.js"></script>

</body>

<!-- Mirrored from jumbo-admin.g-axon.work/cards.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2019 10:05:33 GMT -->
</html>

