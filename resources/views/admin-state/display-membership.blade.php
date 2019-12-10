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
                        <h2 class="title mb-3 mb-sm-0">Membership Application Details</h2>
                        <nav class="breadcrumb">
                            <a href="/admin" class="breadcrumb-item">Dashboard</a>
                        
                            <span class="active breadcrumb-item">Membership Application Details</span>
                        </nav>
                    </div>

                  

                   


                    <div class="row mb-md-12">
                        <div class="col-md-12 col-12">
                            <div class="shadow border-0 card">
                                <div class="card-header">
                                  
                                </div>
                                <div class="card-body">
                                 
                          
                                   <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        @foreach($passports as $passport)
                                        <img src="/memberpassport/{{$passport->passport}}" style="width: 200px; height: auto; text-align: center;">
                                        @endforeach
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>
                                   <div class="row">
                                    <div class="col-md-12">
                                        <table class="table bordered-table">
                                            <h4 style="text-align: center;">GENERAL INFORMATION</h4>
                                            @foreach($members as $member)
                                            
                                            <tr>
                                                    <th>Title</th>
                                                    <td>{{$member->title}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Full Name</th>
                                                    <td>{{$member->surname}} {{$member->firstname}} {{$member->othername}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Employer/ Institution or Firm</th>
                                                    <td>{{$member->employer}}</td>
                                                </tr>

                                                <tr>
                                                    <th>Address for Correspondence</th>
                                                    <td>{{$member->correspondence}}</td>
                                                </tr>
                                                
                                                <tr>
                                                    <th>Permanent Home Address</th>
                                                    <td>{{$member->home_address}}</td>
                                                </tr>

                                                <tr>
                                                    <th>Date of Birth</th>
                                                    <td>{{$member->dob}}</td>
                                                </tr>

                                                <tr>
                                                    <th>Nationality</th>
                                                    <td>{{$member->nationality}}</td>
                                                </tr>
                                                <tr>
                                                    <th>State</th>
                                                    <td>{{$member->state}}</td>
                                                </tr>

                                                <tr>
                                                    <th>Job Title</th>
                                                    <td>{{$member->job_title}}</td>
                                                </tr>
                                                
                                                <tr>
                                                    <th>Telephone Number</th>
                                                    <td>{{$member->telephone}}</td>
                                                </tr>

                                                <tr>
                                                    <th>Job Title</th>
                                                    <td>{{$member->job_title}}</td>
                                                </tr>

                                                <tr>
                                                    <th>Nature of Business</th>
                                                    <td>{{$member->business_nature}}</td>
                                                </tr>

                                                <tr>
                                                    <th>Nature of Work</th>
                                                    <td>{{$member->work_nature}}</td>
                                                </tr>

                                                <tr>
                                                    <th>Field of Psychology</th>
                                                    <td>{{$member->psychology_field}}</td>
                                                </tr>
                                        
                                            @endforeach

                                            
                                        </table>                                  

                                    </div>
                                   </div>
                                   <br>
                                   <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                                    <table class=" table bordered-table">
                                            <h4 style="text-align: center; text-transform: uppercase;">Academic Qualification</h4>
                                            
                                            <tr>
                                                    <th>Name of Institution</th>
                                                    <th>Certificate</th>
                                                    <th>year</th>
                                                    <th>Attachment</th>
                                                    
                                                </tr>
                                                @foreach($qualifications as $academic)
                                                <tr>
                                                    <td>{{$academic->institution}}</td>
                                                    <td>{{$academic->certificate}}</td>
                                                    <td>{{$academic->year}}</td>
                                                    <td>
                                                <a href="/Qualificationdoc/{{$academic->attachment}}" class="btn btn-info" download>Download Attachment</a>
                                                            
                                                          
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                   </div>
                                    <br>
                                    <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                                    <table class="table bordered-table">
                                            <h4 style="text-align: center; text-transform: uppercase;">Professional Training Attended</h4>
                                            
                                            <tr>
                                                    <th>Name of Organisers</th>
                                                    <th>Certificate</th>
                                                    <th>year</th>
                                                    <th>Attachment</th>
                                                    
                                                </tr>
                                                @foreach($trainings as $training)
                                                <tr>
                                                    <td>{{$training->organisers}}</td>
                                                    <td>{{$training->certificate}}</td>
                                                    <td>{{$training->year}}</td>
                                                    <td>
                                                         <a href="/trainingdoc/{{$training->attachment}}" class="btn btn-info" download>Download Attachment</a>
                                                     
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                   </div>
                                    <br>
                                        <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                                    <table class="table bordered-table">
                                            <h4 style="text-align: center; text-transform: uppercase;">Employment History</h4>
                                            
                                            <tr>
                                                    <th>Name of Organisation</th>
                                                    <th>Position</th>
                                                    <th>Date</th>
                                                    <th>Responsibility</th>
                                                    
                                                </tr>
                                                @foreach($employments as $employment)
                                                <tr>
                                                    <td>{{$employment->organisation}}</td>
                                                    <td>{{$employment->position}}</td>
                                                    <td>{{$employment->date}}</td>
                                                    <td>{{$employment->responsibility}}</td>
                                                
                                                </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                   </div>
                                    <br>
                                            <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                                    <table class="table bordered-table">
                                            <h4 style="text-align: center; text-transform: uppercase;">Sponsors and Referees</h4>
                                            
                                            <tr>
                                                    <th>Name of Referee/Sponsors</th>
                                                    <th>Membership Type</th>
                                                    <th>Address</th>
                                                    <th>Position</th>
                                                    <th>Accepted Date</th>
                                                    <th>Membership Number</th>
                                                    
                                                </tr>
                                                @foreach($sponsors as $sponsor)
                                                <tr>
                                                    <td>{{$sponsor->sponser}}</td>
                                                    <td>{{$sponsor->membership}}</td>
                                                    <td>{{$sponsor->address}}</td>
                                                    <td>{{$sponsor->position}}</td>
                                                    <td>{{$sponsor->accepted_date}}</td>
                                                    <td>{{$sponsor->membership_number}}</td>
                                                
                                                </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                   </div>
                                    <br>
                                            <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                                    <table class="table bordered-table">
                                            <h4 style="text-align: center; text-transform: uppercase;">Payment Evidence</h4>
                                            
                                            <tr>
                                                @foreach($payments as $payment)
                                                    <th>Uploaded payment Evidence</th>
                                                <td>
                                                     <a href="/payimage/{{$payment->paymentpicture}}" class="btn btn-info" download>Download Payment Evidence</a>
                                                  
                                                            </td>
                                                    
                                                </tr>
                                                
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                   </div>

                                 


                                     @foreach($members as $member)
                                                 <a href="/generate/downloadpdf/{{ $member->id}}" class="btn btn-warning">Generate PDF</a>
                                                 @endforeach
                                 
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

