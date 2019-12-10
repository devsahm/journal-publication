<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang="zxx"> <!--<![endif]-->

<!-- Mirrored from mydesignhoard.com/HTML/html/education/jobs.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Sep 2019 10:33:07 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Nigerian Association of Clinical Psychologists</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/normalize.css">
	<link rel="stylesheet" href="/assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="/assets/css/icomoon.css">
	<link rel="stylesheet" href="/assets/css/animate.css">
	<link rel="stylesheet" href="/assets/css/prettyPhoto.css">
	<link rel="stylesheet" href="/assets/css/owl.carousel.css">
	<link rel="stylesheet" href="/assets/css/owl.theme.default.css">
	<link rel="stylesheet" href="/assets/css/transitions.css">
	<link rel="stylesheet" href="/assets/css/main.css">
	<link rel="stylesheet" href="/assets/css/color.css">
	<link rel="stylesheet" href="/assets/css/responsive.css">
	<script src="/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!--************************************
			Wrapper Start
	*************************************-->
	<div id="tg-wrapper" class="tg-wrapper">
		<!--************************************
				Header Start
		*************************************-->
		@include('header')
		<!--************************************
				Header End
		*************************************-->
		
		<!--************************************
				Inner Banner Start
		*************************************-->
		<div class="tg-innerbanner">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<ol class="tg-breadcrumb">
							<li><a href="javascript:void(0);">Home</a></li>
							<li class="tg-active">Membership Application</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<!--************************************
				Inner Banner End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<div class="container">
				<div class="row">
					<div id="tg-twocolumns" class="tg-twocolumns">
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
							<aside id="tg-sidebar" class="tg-sidebar">
								<div class="tg-widget tg-widgetcoursecategories">
									<div class="tg-widgettitle">
										<h3>Registration Steps</h3>
									</div>
									<div class="tg-widgetcontent">
										<ul>
											<!-- <li>
												<a href="javascript:void(0);">
													<span>Journals</span>
													<span>(0)</span>
												</a>
											</li> -->
											<li>
												<a href="/membership/general-information" style="color: green;">
													<span>General Information</span>
													
												</a>
											</li>
										
											<li>
												<a href="/membership/academic-qualification">
													<span>Academic Qualification</span>
													
												</a>
											</li>

												<li>
												<a href="/membership/professional-qualification">
													<span>Professional Training Attended</span>
													
												</a>
											</li>

											<li>
												<a href="/membership/employment-history">
													<span>Employment History</span>
												
												</a>
											</li>
											<li>
												<a href="/membership/referee">
													<span>Sponsers and Referee</span>
													
												</a>
											</li>

											<li>
												<a href="/membership/payment">
													<span>Payment</span>	
												</a>
											</li>
											<li>
												<a href="/membership/passport-photograph">
													<span>Upload Passport </span>
													
												</a>
											</li>

											 <li>
												<a href="/membership/registration-summary">
													<span>Summary</span>	
												</a>
											</li>

										</ul>
									</div>
								</div>
							</aside>
						</div>
						<div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
							<div id="tg-content" class="tg-content">
								<div class="tg-jobs">
									<p>Fill in the the form correctly</p>
									<div class="tg-heading">
										<h2>General Information</h2>
									</div>
									@include('success')
             						@include('errors')
									<div class="tg-themecollapsecontent">
										@if($mregisters->count())
										@foreach($mregisters as $mregister)
								
									    <form method="post" action="/mregister/{{ $mregister->id }}" enctype="multipart/form-data">
										@csrf
										@method('PATCH')

										
										<div class="form-group">
										<input type="text" name="email" class="form-control" value="{{$mregister->email }}" readonly>
										</div>
										<div class="row">
										<div class="col-md-4">
										<div class="form-group">
											<input type="text" name="surname" placeholder="Surname" class="form-control" value="{{ $mregister->surname }}" required>
											
										</div>
										</div>

										<div class="col-md-4">
										<div class="form-group">
											<input type="text" name="firstname" placeholder="Firstname" class="form-control" value="{{ $mregister->firstname }}" required>
										</div>
										</div>

										<div class="col-md-4">
										<div class="form-group">
											<input type="text" name="othername" placeholder="Othername" class="form-control" value=" {{ $mregister->othername }}" required>
										</div>
										</div>
										</div>

										<div class="form-group">
											<input type="text" name="employer" placeholder="Employer, Institution or Firm Name/Address" class="form-control" value="{{ $mregister->employer }}" required>
											
										</div>

											<div class="row">
										<div class="col-md-6">
										<div class="form-group">
											<input type="text" name="correspondence" placeholder="Address for Correspondence" class="form-control" value="{{ $mregister->correspondence}}" required>
										</div>
										</div>

										<div class="col-md-6">
										<div class="form-group">
											<input type="text" name="home_address" placeholder="Permanent Home Address" class="form-control" value="{{ $mregister->home_address }}" required>
										</div>
										</div>
										</div>



											<div class="row">
										<div class="col-md-3">
										<div class="form-group">
											<input type="text" name="title" placeholder="Title(Mr., Mrs., Dr., Prof.)" class="form-control" value="{{ $mregister->title }}" required>
											
										</div>
										</div>

										<div class="col-md-3">
										<div class="form-group">
											<input type="text" name="dob" placeholder="Date of Birth(dd/mm/yyyy)" class="form-control" value="{{ $mregister->dob }}" required>
										</div>
										</div>

										<div class="col-md-3">
										<div class="form-group">
											<input type="text" name="nationality" placeholder="Nationality" class="form-control" value="{{ $mregister->nationality }}" required>
										</div>
										</div>

										<div class="col-md-3">
										<div class="form-group">
											<input type="text" name="state" placeholder="State(If Nigeria)" class="form-control" value="{{ $mregister->state }}" required>
										</div>
										</div>
										</div>


										<div class="row">
										<div class="col-md-3">
										<div class="form-group">
											<input type="text" name="job_title" placeholder="Job Title" class="form-control" value="{{ $mregister->job_title }}" required>
											
										</div>
										</div>

										<div class="col-md-3">
										<div class="form-group">
											<input type="text" name="telephone" placeholder="telephone Number" class="form-control" value=" {{ $mregister->telephone }}" required>
										</div>
										</div>

										<div class="col-md-3">
										<div class="form-group">
											<input type="text" name="business_nature" placeholder="Nature of Business" class="form-control" value="{{ $mregister->business_nature }}" required>
										</div>
										</div>

										<div class="col-md-3">
										<div class="form-group">
											<input type="text" name="work_nature" placeholder="Nature of work" class="form-control" value="{{ $mregister->work_nature }}" required>
										</div>
										</div>
										</div>

										<div class="form-group">
											<input type="text" name="psychology_field" placeholder="Field of Psychology(Clinical, Industrial, Developmental, etc)" class="form-control" value="{{ $mregister->psychology_field }}" required>
										</div>
										<button class="tg-btn" type="submit" style="background: #52b554;">Update</button>
									</form>
									@endforeach
									@else

									 <form method="post" action="/mregister" >
										@csrf
									
										<div class="form-group">
										<input type="text" name="email" class="form-control" value="{{$member->email }}" readonly>
										</div>
										<div class="row">
										<div class="col-md-4">
										<div class="form-group">
											<input type="text" name="surname" placeholder="Surname" class="form-control"  required>
											
										</div>
										</div>

										<div class="col-md-4">
										<div class="form-group">
											<input type="text" name="firstname" placeholder="Firstname" class="form-control" required>
										</div>
										</div>

										<div class="col-md-4">
										<div class="form-group">
											<input type="text" name="othername" placeholder="Othername" class="form-control"  required>
										</div>
										</div>
										</div>

										<div class="form-group">
											<input type="text" name="employer" placeholder="Employer, Institution or Firm Name/Address" class="form-control" required>
											
										</div>

											<div class="row">
										<div class="col-md-6">
										<div class="form-group">
											<input type="text" name="correspondence" placeholder="Address for Correspondence" class="form-control"  required>
										</div>
										</div>

										<div class="col-md-6">
										<div class="form-group">
											<input type="text" name="home_address" placeholder="Permanent Home Address" class="form-control"  required>
										</div>
										</div>
										</div>



											<div class="row">
										<div class="col-md-3">
										<div class="form-group">
											<input type="text" name="title" placeholder="Title(Mr., Mrs., Dr., Prof.)" class="form-control" required>
											
										</div>
										</div>

										<div class="col-md-3">
										<div class="form-group">
											<input type="text" name="dob" placeholder="Date of Birth(dd/mm/yyyy)" class="form-control" required>
										</div>
										</div>

										<div class="col-md-3">
										<div class="form-group">
											<input type="text" name="nationality" placeholder="Nationality" class="form-control"  required>
										</div>
										</div>

										<div class="col-md-3">
										<div class="form-group">
											<input type="text" name="state" placeholder="State(If Nigeria)" class="form-control"  required>
										</div>
										</div>
										</div>


										<div class="row">
										<div class="col-md-3">
										<div class="form-group">
											<input type="text" name="job_title" placeholder="Job Title" class="form-control"  required>
											
										</div>
										</div>

										<div class="col-md-3">
										<div class="form-group">
											<input type="text" name="telephone" placeholder="telephone Number" class="form-control"  required>
										</div>
										</div>

										<div class="col-md-3">
										<div class="form-group">
											<input type="text" name="business_nature" placeholder="Nature of Business" class="form-control" required>
										</div>
										</div>

										<div class="col-md-3">
										<div class="form-group">
											<input type="text" name="work_nature" placeholder="Nature of work" class="form-control"  required>
										</div>
										</div>
										</div>

										<div class="form-group">
											<input type="text" name="psychology_field" placeholder="Field of Psychology(Clinical, Industrial, Developmental, etc)" class="form-control"  required>
										</div>
										<button class="tg-btn" type="submit" style="background: #52b554;">Update</button>
									</form>


									@endif
									</div>
								<!-- <nav class="tg-pagination">
										<ul>
											<li class="tg-prevpage"><a href="#"><i class="fa fa-angle-left"></i></a></li>
											<li><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li class="tg-active"><a href="#">5</a></li>
											<li>...</li>
											<li><a href="#">10</a></li>
											<li class="tg-nextpage"><a href="#"><i class="fa fa-angle-right"></i></a></li>
										</ul>
									</nav> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!--************************************
				Main End
		*************************************-->
		<!--************************************
				Footer Start
		*************************************-->
		@include('footer')
		<!--************************************
				Footer End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	<script src="/assets/js/vendor/jquery-library.js"></script>
	<script src="/assets/js/vendor/bootstrap.min.js"></script>
	<script src="/assets/js/mapclustering/data.json"></script>
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
	<script src="/assets/js/mapclustering/markerclusterer.min.js"></script>
	<script src="/assets/js/mapclustering/infobox.js"></script>
	<script src="/assets/js/mapclustering/map.js"></script>
	<script src="/assets/js/owl.carousel.min.js"></script>
	<script src="/assets/js/isotope.pkgd.js"></script>
	<script src="/assets/js/prettyPhoto.js"></script>
	<script src="/assets/js/countdown.js"></script>
	<script src="/assets/js/collapse.js"></script>
	<script src="/assets/js/moment.js"></script>
	<script src="/assets/js/gmap3.js"></script>
	<script src="/assets/js/main.js"></script>
</body>

<!-- Mirrored from mydesignhoard.com/HTML/html/education/jobs.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Sep 2019 10:33:07 GMT -->
</html>