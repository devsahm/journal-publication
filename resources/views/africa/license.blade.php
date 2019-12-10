<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->

<!-- Mirrored from mydesignhoard.com/HTML/html/education/contactusvone.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Sep 2019 10:32:19 GMT -->
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
							<li><a href="/">home</a></li>
							<li class="tg-active">Practicing License Application</li>
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
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="tg-contactus tg-contactusvone">
							<div class="tg-titleborder">
								<h2>Practicing License Application</h2>
							</div>
								<div class="row">
								<!-- <div class="col-xs-12 col-sm-6 col-md-7 col-lg-8">
									<div id="tg-officelocation" class="tg-officelocation"></div>
								</div> -->
							       
								<div class="col-md-9">
									<p>Read this <a href="/practicing-license-information">INFORMATION</a> carefully before applying</p>
									@include('errors')
									@include('success')
									
									<form method="POST" action='/license' class="tg-formtheme tg-formcontactus" enctype="multipart/form-data"> 
			                    
			                        @csrf
			                       
										<fieldset>
											<div class="row">
												<div class="col-md-4"><div class="form-group">
												<input  type="text" class="form-control" name="surname" placeholder="Surname*" value="{{ old('surname') }}">
											</div>
										</div>
												<div class="col-md-4"><div class="form-group">
												<input  type="text" class="form-control" placeholder="firstname*" value="{{ old('firstname') }}" name="firstname">
											</div>
										</div>
												<div class="col-md-4"><div class="form-group">
												<input name="othername" type="text" class="form-control" placeholder="othername" value="{{ old('othername') }}">
											</div>
										</div>
											
											</div>


												<div class="row">
												<div class="col-md-4"><div class="form-group">
												<input type="text" class="form-control" placeholder="Title(Mr., Mrs.,Miss., Ms.,  Dr., Prof.)*" name="title" value="{{ old('title') }}">
											</div>
										</div>

										<div class="col-md-8">
												<div class="row">
													<div class="col-md-3">Date of Birth</div>
													<div class="col-md-9">
													<div class="form-group">
											<input type="date" name="dob" class="form-control" placeholder="dd/mm/year" value="{{ old('dob') }}">
											</div>
											</div>
										</div>
										</div>
										
											</div>

													<div class="row">
													<div class="col-md-6">
													<div class="form-group">
												<input  type="text" class="form-control" placeholder="Nationality*" name="nationality" value="{{ old('nationality') }}">
											</div>
										</div>

										<div class="col-md-6">
													<div class="form-group">
												<input type="text" class="form-control" placeholder="State of Origin if Nigeria" name="state" value="{{ old('state') }}">
											</div>
										</div>
											</div>





								    <div class="row">
										<div class="col-md-6">
													<div class="form-group">
												<input  type="text" class="form-control" placeholder="Name of Organisation/ Business*" name="business_name" value="{{ old('business_name') }}">
											</div>
										</div>
												<div class="col-md-6"><div class="form-group">
												<input type="text" class="form-control" placeholder="Address of Organisation/ Business" name="business_address" value="{{ old('business_address') }}">
											</div>
										</div>
										
											
											</div>


											 <div class="row">
										<div class="col-md-6">
													<div class="form-group">
												<input id="name" type="text" class="form-control" placeholder="Telephone number(s)*" name="telephone" value="{{ old('telephone') }}">
											</div>
										</div>
												<div class="col-md-6">
													<div class="form-group">
												<input id="name" type="email" class="form-control" placeholder="email*" name="email" value="{{ old('email') }}">
											</div>
										</div>
											</div>


											 <div class="row">
										<div class="col-md-6">
													<div class="form-group">
												<input  type="text" class="form-control" placeholder="Job Title" name="job_title" value="{{ old('job_title') }}">
											</div>
										</div>
												<div class="col-md-6">
													<div class="form-group">
												<input id="name" type="text" class="form-control" placeholder="NACP Registration Number" name="registration" value="{{ old('registration') }}">
											</div>
										</div>
											</div>
												<section id="newlink">
											<div class="row">
											<div class="col-md-6">
												<p>Details of Workshop Attended/Year</p>
											<div  class="form-group">
											<input type="text" name="workshop[]" class="form-control" value="">
											 </div>
											   </div>

											   	<div class="col-md-4">
											   		<p>Certificate</p>
											<div  class="form-group">
											<input type="text" name="cerficate[]" class="form-control" value="">
											 </div>

											   </div>

											    <div class="col-md-2">
											    	<div class="btn btn-primary" id="addnew"><a href="javascript:add_feed()" style="color: white;">Add More</a></div>
											    </div>
												</div>
											    </section>

								    <div class="row">
										<div class="col-md-6">
											<div class="row">
												<div class="col-md-4">Conference Evidence (pdf/doc)</div>
												<div class="col-md-8">
												<div class="form-group">
												<input name="evidence" type="file"  class="form-control" > 
													</div>
													</div>
												</div>
										</div>

											<div class="col-md-6">
											<div class="row">
												<div class="col-md-4">Proof of Payment (jpg/pdf/doc)</div>
												<div class="col-md-8">
												<div class="form-group">
												<input name="payment" type="file" class="form-control">
													</div>
													</div>
												</div>
										</div>

									
											<div class="row">
												<div class="col-md-6">
												<div class="col-md-4">Passport Photograph (200kb)</div>
												<div class="col-md-8">
										<div class="form-group">
											<input name="passport" type="file" class="form-control">
										</div>
										</div>
										</div>
										</div>	
											
											</div>
											  
											<button class="tg-btn" type="submit">Submit Application Form</button>
										</fieldset>
									</form>

									<section id="newlinktpl" style="display:none">
										<div class="row">
											
											<div class="col-md-6">
											<div  class="form-group">
											<input type="text" name="workshop[]" class="form-control" value="">
											 </div>
											   </div>

											   	<div class="col-md-4">
											<div  class="form-group">
											<input type="text" name="cerficate[]" class="form-control" value="">
											 </div>
											   </div>
										</div>
									</section>
								</div>
									
							<div class="col-md-3">
							<div class="tg-widget tg-widgetadmissionform">
								<div class="tg-widgetcontent" style="background-color: #52b554;">
									<h3>NACP Journal Portal</h3>
									<div class="tg-description">
										<p>Nigeria Association of Clinical Psychologists(NACP) journal portal allows submission of articles..</p>
									</div>
									<a class="tg-btn tg-btnicon" href="/publications">
									<!-- 	<i class="fa fa-file-pdf-o"></i> -->
										<span>Read More</span>
									</a>
								</div>
							</div>
							
						</div>
							
									<!-- <div class="col-md-3"></div> -->
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
	<script type="text/javascript">

function add_feed()
{
	var div1 = document.createElement('section');
	// Get template data
	div1.innerHTML = document.getElementById('newlinktpl').innerHTML;
	// append to our form, so that template data
	//become part of form
	document.getElementById('newlink').appendChild(div1);
}
	</script>
</body>

<!-- Mirrored from mydesignhoard.com/HTML/html/education/contactusvone.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Sep 2019 10:32:24 GMT -->
</html>