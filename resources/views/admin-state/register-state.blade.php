<!doctype html>
<html lang="en">

<!-- Mirrored from jumbo-admin.g-axon.work/login1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2019 10:06:38 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--   <meta name="description" content="Jumbo - A fully responsive, HTML5 based admin theme">
    <meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, jQuery, web design, CSS3, sass"> -->
    <title>Nigerian Association of Clinical Psychologists | Admin</title>
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
                <div class="login-container d-flex justify-content-center align-items-center animated slideInUpTiny animation-duration-3">
                    <div class="login-content">
                        <div class="login-header">

                            <h4 style="text-align: center;">CREATE STATE CHAPTER</h4>
                            <!-- <a class="site-logo" href="javascript:void(0)" title="Jambo">
                                <img src="images/logo-color.png" alt="jambo" title="jambo">
                            </a> -->
                        </div>
                        <div class="login-form">
                         @isset($url)
                           <form method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}">
                            @endisset
                            @csrf
                            @include('customerror')
                            @include('success')
                                <fieldset>
                                    <div class="form-group">

              <select name="state" id="state" class="form-control form-control-lg" style="font-size: 15px;" required>
              <option value="" selected="selected">- Select -</option>
              <option value="abuja">Abuja FCT</option>
              <option value="abia">Abia</option>
              <option value="adamawa">Adamawa</option>
              <option value="ibom">Akwa Ibom</option>
              <option value="anambra">Anambra</option>
              <option value="bauchi">Bauchi</option>
              <option value="bayelsa">Bayelsa</option>
              <option value="benue">Benue</option>
              <option value="borno">Borno</option>
              <option value="cross">Cross River</option>
              <option value="celta">Delta</option>
              <option value="ebonyi">Ebonyi</option>
              <option value="edo">Edo</option>
              <option value="ekiti">Ekiti</option>
              <option value="enugu">Enugu</option>
              <option value="gombe">Gombe</option>
              <option value="imo">Imo</option>
              <option value="jigawa">Jigawa</option>
              <option value="kaduna">Kaduna</option>
              <option value="kano">Kano</option>
              <option value="katsina">Katsina</option>
              <option value="kebbi">Kebbi</option>
              <option value="kogi">Kogi</option>
              <option value="kwara">Kwara</option>
              <option value="lagos">Lagos</option>
              <option value="nassarawa">Nassarawa</option>
              <option value="niger">Niger</option>
              <option value="ogun">Ogun</option>
              <option value="ondo">Ondo</option>
              <option value="osun">Osun</option>
              <option value="oyo">Oyo</option>
              <option value="plateau">Plateau</option>
              <option value="rivers">Rivers</option>
              <option value="sokoto">Sokoto</option>
              <option value="taraba">Taraba</option>
              <option value="yobe">Yobe</option>
              <option value="zamfara">Zamfara</option>
            </select>
                                         <!--  <input id="name" type="text" class="form-control form-control-lg{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="Name" value="{{ old('name') }}" required autofocus> -->

                           <!--      @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif -->
                                    </div>

                                    <div class="form-group">
                                    <input id="email" type="text" class="form-control form-control-lg{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" Placeholder="username" value="{{ old('username') }}" required>
                                    <span style="font-size: 10px">e.g NACPOYO</span>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                                    </div>


                                    <div class="form-group">

                                 <input id="password" type="password" class="form-control form-control-lg{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                        
                                    </div>

                                    <div class="form-group">
                                        
                                <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" placeholder="Confirm Password" required>
                        
                                    </div>
                                  <input type="submit" class="gx-btn gx-btn-rounded gx-btn-primary" value="Create" style="margin-left: 120px;">
                                <!--     <a href="s" class="gx-btn gx-btn-rounded gx-btn-primary">Create</a> -->
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--/gx-wrapper-->

            <!-- Footer -->
            <footer class="gx-footer">
                <div class="d-flex flex-row justify-content-between">
                    <p> NACP © {{ now()->year }}</p>
                   
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
<!--Custom JQuery-->
<script src="/adminassets/js/functions.js"></script>

</body>

<!-- Mirrored from jumbo-admin.g-axon.work/login1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2019 10:06:39 GMT -->
</html>

