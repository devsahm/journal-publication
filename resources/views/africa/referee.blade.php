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
												<a href="/membership/employment-history" >
													<span>Employment History</span>
												
												</a>
											</li>
											<li>
												<a href="/membership/referee" style="color: green;">
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
									
									<div class="tg-heading">
										<h2>Sponsers/Referee</h2>
									</div>
									@include('success')
             						@include('errors')
									

								
								
									<div class="tg-themecollapsecontent">
								

								<div class="row">
									<div class="col-md-10">
								    	  	  <p>Please give the names and  the full address of the TWO Sponsers/Referee. Your Sponser/Referee must be full member of the association. One of your Sponsor/Referee must be from the institution where you graduated/Departmental head or His representative who has knowledge about your training and professional responsibilities and should not be related to you. For student membership</p>

								    	  <p><b>Oversea Trained:</b> Qualified applicant who do not know any member should contact the national president and vice presidents to propose them.</p>
								    	  </div>
								    
								    <button class="col-md-2 btn btn-primary" style="color: white;" onclick="createNew()">Add More</button>

								</div>
								@if($sponsors->count())
								<div class="row">
									<div class="col-md-12 ">
										<div class=" table-responsive">
									<table class="table">
										<div class="table-bordered">
											<tr>
												<th>Name of sponsor/Referee</th>
												<th>Membership Type</th>
												<th>Address</th>
												<th>Position</th>
												<th>Accepted Date</th>
												<th>Membership Number</th>
												<th>Delete</th>
											</tr>
											@foreach($sponsors as $sponsor)
											<tr>
												<td>{{$sponsor->sponser}}</td>
												<td>{{$sponsor->membership}}</td>
												<td>{{$sponsor->address}}</td>
												<td>{{$sponsor->address}}</td>
												<td>{{$sponsor->accepted_date}}</td>
												<td>{{$sponsor->membership_number}}</td>
												<td>
													<form method="post" action="/sponser/{{$sponsor->id}}r">
														@csrf
														@method('DELETE')
														<input type="submit" class="btn btn-danger" value="Delete">
													</form>
												</td>
											</tr>
											@endforeach
										</div>
									</table>
								</div>
								</div>
								</div>
								@endif
								    <div class="row">
								    
								    
								</div>
								    <div style="clear: left;"></div>
									<form method="post" action="/sponser">
										@csrf
									
										<div class="row">
										<div class="col-md-6">
										<div class="form-group">
											<p>Name of Referee/Sponsor</p>
											<input type="text" name="rows[0][sponser]" placeholder="" class="form-control" value="" required>
											
										</div>
										</div>

										<div class="col-md-6">
										<div class="form-group">
											<p>Type of Membership</p>
											<input type="text" name="rows[0][membership]" placeholder="" class="form-control" value="" required>
											
										</div>
										</div>
									   </div>
									   <div class="row">
										<div class="col-md-8">
										<div class="form-group">
											<p>Address(including telephone and Email Address)</p>
											<input type="text" name="rows[0][address]"  class="form-control" value="" required>
										</div>
										</div>

										<div class="col-md-4">
										<div class="form-group">
											<p>Position in the Association</p>
											<input type="text" name="rows[0][position]" placeholder="" class="form-control" value="" required>
										</div>
										</div>
										</div>

										<div class="row">
										<div class="col-md-6">
										<div class="form-group">
											<p>Date Accepted</p>
											<input type="text" name="rows[0][accepted_date]" placeholder="" class="form-control" value="" required>
											
										</div>
										</div>

										<div class="col-md-6">
										<div class="form-group">
											<p>Membership Number</p>
											<input type="text" name="rows[0][membership_number]"  class="form-control" value="" required>
										</div>
										</div>
										</div>
							             <div id="mydiv"></div>
										<button class="tg-btn" type="submit" style="background: #52b554;">Save and Continue</button>
									</form>
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

	<script>
    var i = 2;
    function createNew() {
        $("#mydiv").append('<div class="row">'+
'<hr>'+
        	'<div class="col-md-6">'+'<p>Name of Referee/Sponsor</p>'+'<div class="form-group">'+'<input type="text" name="rows[' + i +'][sponser]" class="form-control" required=""/>'+'</div>'+'</div>'+

        	'<div class="col-md-6">'+'<p>Type of Membership</p>'+'<div class="form-group">'+'<input type="text" name="rows[' + i +'][membership]" class="form-control"  required="" />'+'</div>'+'</div>'+
        	'</div>'+

        	'<div class="row">'+

        	'<div class="col-md-8">'+'<p>Address(including telephone and Email Address)</p>'+'<div class="form-group">'+'<input type="text" name="rows[' + i +'][address]" class="form-control"  required=""/>'+'</div>'+'</div>'+

        	'<div class="col-md-4">'+'<p>Position in the Association</p>'+'<div class="form-group">'+'<input type="text" name="rows[' + i +'][position]" class="form-control"  required=""/>'+'</div>'+'</div>'+
                '</div>'+

                '<div class="row">'+

        	'<div class="col-md-6">'+'<p>Date Accepted</p>'+'<div class="form-group">'+'<input type="text" name="rows[' + i +'][accepted_date]" class="form-control"  required=""/>'+'</div>'+'</div>'+

        	'<div class="col-md-6">'+'<p>Membership Number</p>'+'<div class="form-group">'+'<input type="text" name="rows[' + i +'][membership_number]" class="form-control"  required=""/>'+'</div>'+'</div>'+
                '</div><br/>');
        i++;
    }
</script>
</body>

<!-- Mirrored from mydesignhoard.com/HTML/html/education/jobs.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Sep 2019 10:33:07 GMT -->
</html>