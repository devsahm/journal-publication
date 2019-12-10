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
												<a href="/membership/general-information">
													<span>General Information</span>
													
												</a>
											</li>
										
											<li>
												<a href="/membership/academic-qualification">
													<span>Academic Qualification</span>
													
												</a>
											</li>

												<li>
												<a href="/membership/professional-qualification" >
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
												<a href="/membership/registration-summary" style="color: green;">
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
									
									<div class="tg-heading">
										<h2>Registration Summary</h2>
									</div>
									@include('success')
             						@include('errors')
									

								
								
									<div class="tg-themecollapsecontent">
										
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
								   		<table class="bordered-table">
								   			<h5 style="text-align: center;">GENERAL INFORMATION</h5>
								   			@foreach($memberinfo as $info)
								   			
								   			<tr>
								   					<th>Title</th>
								   					<td>{{$info->title}}</td>
								   				</tr>
								   				<tr>
								   					<th>Full Name</th>
								   					<td>{{$info->surname}} {{$info->firstname}} {{$info->othername}}</td>
								   				</tr>
								   				<tr>
								   					<th>Employer/ Institution or Firm</th>
								   					<td>{{$info->employer}}</td>
								   				</tr>

								   				<tr>
								   					<th>Address for Correspondence</th>
								   					<td>{{$info->correspondence}}</td>
								   				</tr>
								   				
								   				<tr>
								   					<th>Permanent Home Address</th>
								   					<td>{{$info->home_address}}</td>
								   				</tr>

								   				<tr>
								   					<th>Date of Birth</th>
								   					<td>{{$info->dob}}</td>
								   				</tr>

								   				<tr>
								   					<th>Nationality</th>
								   					<td>{{$info->nationality}}</td>
								   				</tr>
								   				<tr>
								   					<th>State</th>
								   					<td>{{$info->state}}</td>
								   				</tr>

								   				<tr>
								   					<th>Job Title</th>
								   					<td>{{$info->job_title}}</td>
								   				</tr>
								   				
								   				<tr>
								   					<th>Telephone Number</th>
								   					<td>{{$info->telephone}}</td>
								   				</tr>

								   				<tr>
								   					<th>Job Title</th>
								   					<td>{{$info->job_title}}</td>
								   				</tr>

								   				<tr>
								   					<th>Nature of Business</th>
								   					<td>{{$info->business_nature}}</td>
								   				</tr>

								   				<tr>
								   					<th>Nature of Work</th>
								   					<td>{{$info->work_nature}}</td>
								   				</tr>

								   				<tr>
								   					<th>Field of Psychology</th>
								   					<td>{{$info->psychology_field}}</td>
								   				</tr>
								   		
								   			@endforeach

								   			
								   		</table>								  

								   	</div>
								   </div>
								   <br>
								   <div class="row">
								   	<div class="col-md-12">
								   		<div class="table-responsive">
								   			 		<table class="bordered-table">
								   			<h5 style="text-align: center; text-transform: uppercase;">Academic Qualification</h5>
								   			
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
								   						<?php 
								     						$string=$academic->attachment;
								     						$toremove=substr($string, 0, 11);
								     						$picture=str_replace($toremove, '', $string);
								     						echo $picture;

								     						 ?>
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
								   			 		<table class="bordered-table">
								   			<h5 style="text-align: center; text-transform: uppercase;">Professional Training Attended</h5>
								   			
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
								   						<?php 
								     						$string=$academic->attachment;
								     						$toremove=substr($string, 0, 11);
								     						$picture=str_replace($toremove, '', $string);
								     						echo $picture;

								     						 ?>
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
								   			 		<table class="bordered-table">
								   			<h5 style="text-align: center; text-transform: uppercase;">Employment History</h5>
								   			
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
								   			 		<table class="bordered-table">
								   			<h5 style="text-align: center; text-transform: uppercase;">Sponsors and Referees</h5>
								   			
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
								   			 		<table class="bordered-table">
								   			<h5 style="text-align: center; text-transform: uppercase;">Payment Evidence</h5>
								   			
								   			<tr>
								   				@foreach($payments as $payment)
								   					<th>Uploaded payment Evidence</th>
								   				<td>
								   					<?php 
								     						$string=$payment->paymentpicture;
								     						$toremove=substr($string, 0, 11);
								     						$picture=str_replace($toremove, '', $string);
								     						echo $picture;

								     						 ?>
								     						</td>
								   					
								   				</tr>
								   				
								   				@endforeach
								   			</table>
								   		</div>
								   	</div>
								   </div>

								   <form action="/summary" method="post">
								   	@csrf
								   <label>Have you been convicted for criminal offence?</label>
								   <input type="radio" name="question" value="Yes" class="form-group">YES
								   <input type="radio" name="question" value="No">NO<br>
								   <label>Have you ever been dismissed from any organisation?</label>
								    <input type="radio" name="dismiss" value="Yes">YES
								   <input type="radio" name="dismiss" value="No">NO<br><br>
								   	<p>I declare that the information given herrein‭ is correct to the best of my knowledge, I agree to be bound by the rules and regulations of the Nigerian Association of Clinical Psychologists as they now exist, and as they may hereafter be amended</p>
								   	<input type="checkbox" name="finish" value="1"> I AGREE<br><br>
								 
								   	<input type="submit" class="btn btn-primary" value="Complete Registration" onclick="return confirm('Are you sure you want to submit this application. No correction will be made after the submission')">
								   </form>
								
								

										<!-- <button class="tg-btn" type="submit" style="background: #52b554;">Save and Continue</button> -->
									
									</div>
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