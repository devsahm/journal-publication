<!doctype html>
<html lang="en">

<!-- Mirrored from jumbo-admin.g-axon.work/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2019 10:07:03 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--   <meta name="description" content="Jumbo - A fully responsive, HTML5 based admin theme">
    <meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, jQuery, web design, CSS3, sass"> -->
    <title>Nigerian Association of Clinical Psychologists| Admin</title>
    <!-- Site favicon -->
    <link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
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

    <!-- Form stylesheet -->
    <link href="/adminassets/css/jumbo-forms.css" rel="stylesheet">
    <!-- /form stylesheet -->

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
   @include('adminsidebar')
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
                <div class="page-heading d-sm-flex justify-content-sm-between align-items-sm-center">
                    <h2 class="title mb-3 mb-sm-0">Event Details</h2>
                    <nav class="mb-0 breadcrumb">
                        <a href="/admin" class="breadcrumb-item">Dashboard</a>
                     
                        <span class="active breadcrumb-item">Event</span>
                    </nav>
                </div>

                <div class="row">
                    <div class="col-xl-8 col-md-7 col-sm-6 col-12">
                        <div class="card shadow border-0 text-muted">
                            <img class="card-img-top" src="/eventimages/{{ $event->image}}" alt="post">
                            
                            <div class="card-body">
                                <h3>{{$event->title}} </h3>
                                <div class="meta-wrapper">
                                    <span class="meta-date"><i class="zmdi zmdi-calendar-note zmdi-hc-lg"></i>{{ $event->date }}</span>
                                    <span class="meta-comment"><i class="zmdi zmdi-comment-text zmdi-hc-lg"></i>{{ $event->address }}</span>
                                </div>
                                <p class="card-text">{!! $event->details !!}</p>
                                <a class="btn btn-primary" href="/event/{{ $event->id }}/edit">Edit</a>
                            </div>
                        </div>
                     
                    
                       
                    </div>
                    <div class="col-xl-4 col-md-5 col-sm-6 col-12">
                        <div class="sidebar">
                            <div class="profile-intro card shadow  border-0 text-center">
                                <div class="card-image layer">
                                    <img class="avatar-circle" src="/adminassets/images/userAvatar/demo.jpg" alt="Team Member">
                                </div>
                                <div class="pi-content">
                                    <h4>Admin</h4>
                                   
                                    <p class="card-text">On this page, Admin(s) will be able to view event uploaded and edit them</p>
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
<!--wizard JQuery-->
<script src="/adminassets/node_modules/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script src="/adminassets/js/jquery.validate.min.js"></script>
<!--Custom JQuery-->
<script src="/adminassets/js/functions.js"></script>

</body>

<!-- Mirrored from jumbo-admin.g-axon.work/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2019 10:07:09 GMT -->
</html>

