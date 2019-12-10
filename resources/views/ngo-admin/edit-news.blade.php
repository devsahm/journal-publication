<!doctype html>
<html lang="en">

<!-- Mirrored from jumbo-admin.g-axon.work/editor-summernote.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2019 10:06:03 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!--   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Jumbo - A fully responsive, HTML5 based admin theme">
    <meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, jQuery, web design, CSS3, sass"> -->
    <title>Nigerian Association of Clinical Psychologists | Admin</title>
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

    <!-- Summernote Editor stylesheet -->
    <link href="/adminassets/node_modules/summernote/dist/summernote-bs4.css" rel="stylesheet">
    <!-- /summernote editor stylesheet -->

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
                <div class="animated slideInUpTiny animation-duration-3">
                    <div class="page-heading d-sm-flex justify-content-sm-between align-items-sm-center">
                        <h2 class="title mb-3 mb-sm-0">Update News</h2>
                        <nav class="mb-0 breadcrumb">
                            <a href="/admin" class="breadcrumb-item">Dashboard</a>
                             <a href="/admin/news-list" class="breadcrumb-item">News</a>

                          
                            <span class="active breadcrumb-item">News Update</span>
                        </nav>
                    </div>
                
                 <form method="post" action="/blog/{{$blog->id}}" enctype="multipart/form-data">
                      @method('PATCH')
                      @csrf
                      @include('errors')
                      @include('success')


                  
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Title*" value="{{ $blog->title }}" style="padding: 10px;" >
                    </div>

                   <!--  <div class="form-group">
                        <label>Upload Image(maximum image size of 2mb)</label>
                        <input type="file" class="form-control" id="exampleInputSubject" placeholder="Subject" style="padding: 10px;" name="image">
                    </div> -->
                  <!--   <div class="gx-entry-header"><h3 class="entry-heading">News Details</h3></div> -->
                    <textarea id="summernote" name="details">{{ $blog->details }}</textarea>
                      
                       
                    </div>
                    <button type="submit" class="btn btn-primary">Update News</button>
                </form>

                </div>
            </div>
            <!--/gx-wrapper-->

            <!-- Footer -->
            <footer class="gx-footer">
                <div class="d-flex flex-row justify-content-between">
                    <p>NACP © 2019</p>
                  
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
<!--Summernote Editor JQuery-->
<script src="/adminassets/node_modules/summernote/dist/summernote-bs4.js"></script>
<!--Custom JQuery-->
<script src="/adminassets/js/functions.js"></script>
<script src="/adminassets/js/custom/editor-summernote.js"></script>

</body>

<!-- Mirrored from jumbo-admin.g-axon.work/editor-summernote.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2019 10:06:05 GMT -->
</html>

