<!doctype html>
<html lang="en">

<!-- Mirrored from jumbo-admin.g-axon.work/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2019 10:03:14 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Jumbo - A fully responsive, HTML5 based admin theme">
    <meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, jQuery, web design, CSS3, sass">
    <title>Nigerian Association of Clinical Psychologists | Admin</title>
    <!-- Site favicon -->
    <link rel='shortcut icon' type='image/x-icon' href='/adminassets/images/favicon.ico' />
    <!-- /site favicon -->

    <!-- Font Material stylesheet -->
    <link rel="stylesheet" href="/adminassets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <!-- /font material stylesheet -->

    <!--Weather stylesheet -->
    <link rel="stylesheet" href="/adminassets/fonts/weather-icons-master/css/weather-icons.min.css">
    <!--/Weather stylesheet -->

    <!-- Bootstrap stylesheet -->
    <link href="/adminassets/css/jumbo-bootstrap.css" rel="stylesheet">
    <!-- /bootstrap stylesheet -->

    <!-- Perfect Scrollbar stylesheet -->
    <link href="/adminassets/node_modules/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <!-- /perfect scrollbar stylesheet -->

    <!-- c3 Chart's css file -->
    <link href="/adminassets/node_modules/c3/c3.min.css" rel="stylesheet">
    <!-- /c3 chart stylesheet -->

    <!-- Chartists Chart's css file -->
    <link href="/adminassets/node_modules/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- /chartists chart stylesheet -->

    <!-- Jumbo-core stylesheet -->
    <link href="/adminassets/css/jumbo-core.min.css" rel="stylesheet">
    <!-- /jumbo-core stylesheet -->

    <!-- Color-Theme stylesheet -->
    <link id="override-css-id" href="/adminassets/css/theme-dark-indigo.css" rel="stylesheet">
    <!-- Color-Theme stylesheet -->

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
    @include('membersidebar')
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
                <div class="dashboard animated slideInUpTiny animation-duration-3">
                    <div class="page-heading d-sm-flex justify-content-sm-between align-items-sm-center"><h2
                            class="title mb-3 mb-sm-0">WELCOME TO THE MEMBERSHIP ADMIN DASHBOARD</h2>
                        <nav class="mb-0 breadcrumb">
                           
                           <!--  <a href="/home" class="breadcrumb-item">Dashboard</a> -->
                            
                        </nav>
                    </div>
                    <div class="row">
                     
                        <div class="col-xl-7 col-12">
                            <div class="row">
                                <div class="col-xl-7 col-lg-6 col-sm-7 col-12">
                                    <div class="row">
                                        <div class="col-sm-6 col-12">
                                            <div class="gx-card net-chart bg-secondary">
                                                <div class="gx-card-thumb">
                                                    <img class="img-fluid" src="/adminassets/images/dashboard/light.jpg" alt="light">
                                                </div>
                                                <div class="gx-card-body text-white br-break">
                                                    <h4 class="mb-0"><strong>23</strong></h4>
                                                    <p class="mb-0">iDeas</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <div class="gx-card net-chart bg-cyan darken-2">
                                                <div class="gx-card-thumb">
                                                    <img class="img-fluid" src="/adminassets/images/dashboard/gallery.jpg" alt="gallery">
                                                </div>
                                                <div class="gx-card-body text-white br-break">
                                                    <h4 class="mb-0"><strong>387</strong></h4>
                                                    <p class="mb-0">Docs</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                               
                        
                            </div>
                        </div>
                    </div>

                
                  

                

            
                </div>
            </div>
            <!--/gx-wrapper-->

            <!-- Footer -->
            <footer class="gx-footer">
                <div class="d-flex flex-row justify-content-between">
                    <p> NACP © 2019</p>
                    
                </div>
            </footer>
            <!-- /footer -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /main container -->



</div>
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
<!--chart-->
<script src="/adminassets/node_modules/d3/d3.min.js"></script>
<script src="/adminassets/node_modules/c3/c3.min.js"></script>
<script src="/adminassets/node_modules/chartist/dist/chartist.min.js"></script>

<!--Custom JQuery-->
<script src="/adminassets/js/functions.js"></script>
<script src="/adminassets/js/custom/chart/dashboard-chart.js"></script>

</body>

<!-- Mirrored from jumbo-admin.g-axon.work/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2019 10:04:31 GMT -->
</html>

