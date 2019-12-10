<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->

<!-- Mirrored from mydesignhoard.com/HTML/html/education/facultydetail.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Sep 2019 10:31:42 GMT -->
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
							<li><a href="/">Home</a></li>
							<li class="tg-active"> Vice President</li>
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
							
										@if($natures->count())
										@foreach($natures as $nature )
										<article class="tg-campus tg-campusleftthumb">
											<figure class="tg-featuredimg">
												<a href="javascript:void(0);">
													<img src="/eventimages/{{ $nature->image }}" alt="image description" style="width: 70px; height: 70px;">
												</a>
											</figure>
											<div class="tg-campuscontent">
												<div class="tg-datetime">
													<i class="fa fa-calendar"></i>
													<span>{{ date('d M, Y', strtotime($nature->created_at)) }}</span>
												</div>
												<div class="tg-campustitle">
													<h3><a href="/event-details/{{ $nature->id }}">{{ $nature->title }}</a></h3>
												</div>
											</div>
										</article>
										@endforeach
										@endif
						</div>
						<div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
							<div id="tg-content" class="tg-content">
								<div class="tg-faculy tg-facultydetail">
									<figure><img src="/assets/images/speakers/img-11.jpg" alt="image description"></figure>
									<div class="tg-facultycontent">
										<!-- <div class="tg-departmentname">
											<h2>Department of Faculty of Allied Health Sciences</h2>
										</div> -->
										<div class="tg-facultyname">
											<h3>Dr. Chia Perpetua</h3>
										</div>
										<span class="tg-facultydesignation">VICE PRESIDENT</span>
										<div class="tg-description">
											<p>Dr Ngosoo Perpetua Chia is a Practicing Clinical Psychologist of 22years working in Federal Medical Centre Makurdi, Benue State. She is currently a Deputy Director Clinical Psychology and Head of the Department of Clinical Psychology of the Centre. She obtained her academic qualifications from University of Jos BSc Psychology, University of Ibadan MSc Clinical Psychology and Benue State University, Makurdi PhD Clinical Psychology. Research interests are in Psychology of Substance Use, Psycho Trauma, Psycho Oncology and General Mental Health and Psychological well being. Dr Chia has teaching experience in the university and teaching practical clinical psychology to clinical psychology interns. She is a trained Mental Health trainer, Psychosocial  intervention for Substance use Disorder trainer and NACP workshop trainer. She has attended local and international conferences with several publications in local and international journals. She is a member of Nigerian Psychological Association (NPA), Psycho Oncology Society of Nigeria (POSON) and the Nigerian Association of Clinical Psychologists (NACP) and one of the current VIce Presidents.</p>
										</div>
										<ul class="tg-contactinfo">
											<li>
												<i class="icon-phone-handset"></i>
												<span>08065338087</span>
											</li>
											
										<!-- 	<li>
												<a href="mailto:helenosinowo@yahoo.com">
													<i class="icon-envelope"></i>
													<span></span>
												</a>
											</li> -->
										</ul>
									
									</div>
								</div>
								<!-- <div class="tg-relatedfaculty">
									<h2>Other Faculty</h2>
									<div id="tg-otherfacultyslider" class="tg-otherfacultyslider owl-carousel tg-otherfaculty">
										<div class="item">
											<div class="tg-faculty">
												<figure><a href="javascript:void(0);"><img src="/assets/images/speakers/img-01.jpg" alt="image description"></a></figure>
												<div class="tg-facultyname">
													<h3><a href="javascript:void(0);">Maragaret Ellinger</a></h3>
												</div>
												<span class="tg-facultydesignation">Professor</span>
											</div>
										</div>
										<div class="item">
											<div class="tg-faculty">
												<figure><a href="javascript:void(0);"><img src="/assets/images/speakers/img-02.jpg" alt="image description"></a></figure>
												<div class="tg-facultyname">
													<h3><a href="javascript:void(0);">Alphonse Travis</a></h3>
												</div>
												<span class="tg-facultydesignation">Assistant Professor</span>
											</div>
										</div>
										<div class="item">
											<div class="tg-faculty">
												<figure><a href="javascript:void(0);"><img src="/assets/images/speakers/img-03.jpg" alt="image description"></a></figure>
												<div class="tg-facultyname">
													<h3><a href="javascript:void(0);">Bernardina Verde</a></h3>
												</div>
												<span class="tg-facultydesignation">Lecturer</span>
											</div>
										</div>
										<div class="item">
											<div class="tg-faculty">
												<figure><a href="javascript:void(0);"><img src="/assets/images/speakers/img-04.jpg" alt="image description"></a></figure>
												<div class="tg-facultyname">
													<h3><a href="javascript:void(0);">Deandre Magallan</a></h3>
												</div>
												<span class="tg-facultydesignation">Professor</span>
											</div>
										</div>
										<div class="item">
											<div class="tg-faculty">
												<figure><a href="javascript:void(0);"><img src="/assets/images/speakers/img-05.jpg" alt="image description"></a></figure>
												<div class="tg-facultyname">
													<h3><a href="javascript:void(0);">Maragaret Ellinger</a></h3>
												</div>
												<span class="tg-facultydesignation">Professor</span>
											</div>
										</div>
										<div class="item">
											<div class="tg-faculty">
												<figure><a href="javascript:void(0);"><img src="/assets/images/speakers/img-06.jpg" alt="image description"></a></figure>
												<div class="tg-facultyname">
													<h3><a href="javascript:void(0);">Alphonse Travis</a></h3>
												</div>
												<span class="tg-facultydesignation">Assistant Professor</span>
											</div>
										</div>
										<div class="item">
											<div class="tg-faculty">
												<figure><a href="javascript:void(0);"><img src="/assets/images/speakers/img-07.jpg" alt="image description"></a></figure>
												<div class="tg-facultyname">
													<h3><a href="javascript:void(0);">Bernardina Verde</a></h3>
												</div>
												<span class="tg-facultydesignation">Lecturer</span>
											</div>
										</div>
									</div>
								</div> -->
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

<!-- Mirrored from mydesignhoard.com/HTML/html/education/facultydetail.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Sep 2019 10:31:46 GMT -->
</html>