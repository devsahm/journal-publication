<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang="zxx"> <!--<![endif]-->

<!-- Mirrored from mydesignhoard.com/HTML/html/education/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Sep 2019 10:30:41 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>NACP {{strtoupper($state->state)}} STATE CHAPTER</title>
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
<body class="tg-home tg-homefour">
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
		<header id="tg-header" class="tg-header tg-headervtwo tg-headervthree tg-haslayout">
			<div class="tg-topbar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<ul class="tg-addressinfo">
								<li>
									<i class="icon-map-marker"></i>
									
									<address>{{ $stateinfo->location }}</address>
								<li>
									<i class="icon-phone-handset"></i>
									<span>{{ $stateinfo->phone_number }}</span>
								</li>
							</ul>
							<div class="tg-themedropdown tg-languagesdropdown">
								<a href="/" id="tg-languages" class="tg-btndropdown">
									
									<span>National Home Page</span>
								</a>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="tg-navigationarea">
							<strong class="tg-logo"><a href="/{{$state->state}}-state"><img src="/assets/images/logo.png" alt="University of Education and knowledge"></a></strong>
							<div class="tg-navigationandsearch">
								<nav id="tg-nav" class="tg-nav">
									<div class="navbar-header">
										<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>
									<div id="tg-navigation" class="collapse navbar-collapse tg-navigation">

										<ul>
										<li><a href="/{{$state->state}}-state">Home</a></li>
										<li><a href="/{{$state->state}}-state/executives">Executives</a></li>
										<li><a href="/{{$state->state}}-state/events">Events/Conferences</a></li>
										<li><a href="/{{$state->state}}-state/gallery">Gallery</a></li>
									
										
									
									</ul>
									</div>
								</nav>
							
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Home Slider Start
		*************************************-->
		<div id="tg-homeslider" class="tg-homeslider tg-homeslidervthree tg-homeslidervfour owl-carousel tg-btnround tg-haslayout">@if($sliders->count())
				@foreach($sliders as $slider)

			<div class="item">
				
				<figure>
					<img src="/stategallery/{{$slider->image}}" alt="image description" style="width:100%; height:576px">
					<figcaption class="tg-slidercontent">
						<div class="tg-slidercontentbox">
							<div class="container">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<h1>NACP {{ strtoupper($state->state)}} STATE<span style="text-transform: uppercase;">
											
										  CHAPTER
										
									</span></h1>
										<!-- <a class="tg-btn" href="javascript:void(0);">read more</a> -->
									</div>
								</div>
							</div>
						</div>
					</figcaption>
				</figure>
			
					

			</div>
			@endforeach
			@else
			<div class="item">
				<figure>
					<img src="/assets/images/slider/img-07.jpg" alt="image description">
					<figcaption class="tg-slidercontent">
						<div class="tg-slidercontentbox">
							<div class="container">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<h1>NACP {{ strtoupper($state->state)}} STATE<span style="text-transform: uppercase;">
											
										  CHAPTER
										
									</span></h1>
										<a class="tg-btn" href="javascript:void(0);">read more</a>
									</div>
								</div>
							</div>
						</div>
					</figcaption>
				</figure>
				@endif

			</div>
		
			
		</div>
	
		<!--************************************
				Home Slider End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<div class="container">
				<div class="row">
					<div id="tg-twocolumns" class="tg-twocolumns">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<section class="tg-sectionspace tg-haslayout">
								<div class="tg-shortcode tg-welcomeandgreeting tg-welcomeandgreeting-v2">
									<figure><img src="/assets/images/img-110.jpg" alt="image description" width="164px;"></figure>
									<div class="tg-shortcodetextbox">
										<h2><span style="text-transform: uppercase;">Welcome to NACP {{$state->state}} State Chapter</span></h2>
										<div class="tg-description">
											<p>In Nigerian Association of Clinical Psychologists, our mission is to expand the frontier of knowledge, research & practice of clinical psychology through the creation, communication and application of clinical psychology science to benefit society and improve people’s lives.</p>
										</div>
								<!-- 		<span class="tg-name">Prof. Donovan Bradburn</span>
										<span class="tg-designation">Vice Chancellor</span> -->
										<div class="tg-btnpluslogo">
											<!-- <a class="tg-btn" href="javascript:void(0);">read more</a> -->
											<strong class="tg-universitylogo"><a href="javascript:void(0);"><img src="/assets/images/logo.png" alt="image description"></a></strong>
										</div>
									</div>
								</div>
							</section>
						</div>
						<div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
							<div id="tg-content" class="tg-content">
								<section class="tg-sectionspace tg-haslayout">
									<div class="tg-borderheading">
										<h2>Latest Events</h2>
									</div>
									<div class="tg-events">
										<div class="row">
											
												@if($events->count())
												@foreach($events as $event)
											<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
												<article class="tg-themepost tg-eventpost">
													<figure class="tg-featuredimg">
														<a href="javascript:void(0);">
															<img src="/stategallery/{{$event->image}}" alt="image description">
														</a>
													</figure>
													<div class="tg-themepostcontent">
														<ul class="tg-matadata">
															<li>
																<a href="javascript:void(0);">
																	<i class="fa fa-calendar"></i>
																	<span>{{$event->date}}</span>
																</a>
															</li>
														</ul>
														<div class="tg-themeposttitle">
															<h3><a href="/{{$state->state}}-state/events/event-details/{{ $event->id}}">{{$event->title}}</a></h3>
														</div>
														<div class="tg-description">
															<p>{!! \Illuminate\Support\Str::words($event->event_details, 19,'....')  !!} <a href="/{{$state->state}}-state/events/event-details/{{ $event->id}}">Read More</a></p>
														</div>
													</div>
												</article>
											</div>
											@endforeach

												@else
												<p class="alert alert-warning">No event record was found</p>
												@endif
										</div>
									</div>
								</section>
								<section class="tg-sectionspace tg-haslayout">
									<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
											<div class="tg-glanceatuoeandk">
												<div class="tg-borderheading">
													<h2>Glance at our Gallery</h2>
												</div>
												<ul class="tg-gallery">
												@if($gallerys->count())
												@foreach($gallerys as $gallery)
													<li>
														<figure>
															<a class="tg-btnview" href="/stategallery/{{$gallery->image}}" data-rel="prettyPhoto[glance]"><i class="icon-magnifier"></i></a>
															<img src="/stategallery/{{$gallery->image}}" alt="image description">
														</figure>
													</li>
													@endforeach
													@else
													<p class="alert alert-warning">No image record was found</p>
													@endif
													
													
												</ul>
											</div>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
											<div class="tg-widget tg-widgetquicklinks">
												<div class="tg-borderheading">
													<h2>NACP National Quick Links</h2>
												</div>
												<div class="tg-widgetcontent">
													<ul>
														<li><a href="/membership/general-information" target="_blank">Membership Registration</a></li>
														<li><a href="/practicing-license-application" target="_blank">Practicing License Application</a></li>
														<li><a href="/journal/publications" target="_blank">Journals</a></li>
														<li><a href="/members" target="_blank">Membership Types</a></li>
														<li><a href="/writer/submit-article" target="_blank">Submit Article</a></li>
														<li><a href="/about" target="_blank">About NACP</a></li>
														<li><a href="/executives" target="_blank">NACP National Executives </a></li>
														
													</ul>
												</div>
											</div>
										</div>
									</div>
								</section>
								
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
							<aside id="tg-sidebar" class="tg-sidebar">
								
							
								<div class="tg-widget tg-widgetadmissionform" >
									<div class="tg-widgetcontent" style="background-color: #52b554">
										<h3>Executive</h3>
										<div class="tg-description">
											<p>Learn more and connect with our executives via our executiv page</p>
										</div>
										<a class="tg-btn tg-btnicon" href="/{{$state->state}}-state/executives">
											
											<span>Show Executives</span>
										</a>
									</div>
								</div>
							
								<div class="tg-widget tg-widgetdownload">
									<div class="tg-widgettitle">
										<h3>Downloads</h3>
									</div>
									<div class="tg-widgetcontent">
										<ul>
											<li>
												<a href="/documents/postera.jpg" download> 
													<i class="fa fa-paperclip"></i>
													<span>Download Conference 2019 Poster 1</span>
												</a>
											</li>
											<li>
												<a href="/documents/posterb.jpg" download>
													<i class="fa fa-paperclip"></i>
													<span>Download Conference 2019 Poster 1</span>
												</a>
											</li>

											<li>
												<a href="/documents/ruby.jpg" download>
													<i class="fa fa-paperclip"></i>
													<span>Download Jubilee Inauguration Poster</span>
												</a>
											</li>
										
										</ul>
									</div>
								</div>
								
							</aside>
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
		<footer id="tg-footer" class="tg-footer tg-haslayout">
			<div class="tg-signupbox">
				<div class="container">
					<div class="tg-signuptextbox">
						<h3>NACP <span style="text-transform: uppercase;"></span>{{$state->state}} STATE CHAPTER</h3>
						<div class="tg-description"><p>Get to know more about us by visiting our events/conference page</p></div>
					</div>
					<form class="tg-formtheme tg-formsignupfree" method="get" action="/{{$state->state}}-state/eventsearch">
						<fieldset>
							<div class="form-group"><input type="text" name="keyword" class="form-control" placeholder="Search Event by event title" required></div>
							<div class="form-group"><button type="submit" class="tg-btn">Search</button></div>
						
					</form>
				</div>
			</div>
			<div class="tg-footermiddlebar">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="tg-widget tg-widgetcompanyinfo">
								<div class="tg-widgetcontent">
									<strong class="tg-logo"><a href="/{{$state->state}}-state"><img src="/assets/images/logo.png" alt="image description"></a></strong>
									
									<ul class="tg-infolist">
										<li>
											<i class="icon-location"></i>
											<address>{{ $stateinfo->location }}</address>
										</li>
										<li>
											<i class="icon-phone-handset"></i>
											<span>{{ $stateinfo->phone_number }}</span>
										</li>
										
										<li>
											<a href="mailto:info@nacp.org.ng">
												<i class="icon-envelope"></i>
												<span>{{ $stateinfo->email }}</span>
											</a>
										</li>
									</ul>
									<ul class="tg-socialicons">
										<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
										<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
								
								
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-4 ">
							<div class="tg-widget tg-widget">
								<div class="tg-widgettitle">
									<h3>Latest Events</h3>
								</div>
								<div class="tg-widgetcontent">
									<ul style="list-style-type: circle;">
										<li>
											@if($events->count())
											@foreach($events as $event)
											<p class=""><a href="/{{$state->state}}-state/events/event-details/{{ $event->id}}">{{$event->title}}</a></p>
										    @endforeach
										    @else
										    <p class="alert alert-warning">No event record was found</p>
										    @endif
											<!-- <time datetime="2017-01-01">2 hours ago</tim -->
										</li>
									
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="tg-widget tg-widgetcoursecategories">
								<div class="tg-widgettitle">
									<h3>Quick Links</h3>
								</div>
								<div class="tg-widgetcontent">
									<ul>
									
										<li><a href="/{{$state->state}}-state/executives">Executives</a></li>
										<li><a href="/{{$state->state}}-state/events">Events/Conferences</a></li>
										<li><a href="/{{$state->state}}-state/gallery">Gallery</a></li>
									
									</ul>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="tg-footerbar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<span class="tg-copyright">Copyright &copy; {{now()->year }} All Rights Reserved</span>
							<nav class="tg-addnav">
								<ul>
									<li><a href="https://damisa.tech">Designed By Damisa Gurus Limited</a></li>
								
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</footer>
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

<!-- Mirrored from mydesignhoard.com/HTML/html/education/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Sep 2019 10:30:41 GMT -->
</html>