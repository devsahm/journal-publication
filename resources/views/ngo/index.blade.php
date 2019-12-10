<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang="zxx"> <!--<![endif]-->

<!-- Mirrored from mydesignhoard.com/HTML/html/education/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Sep 2019 10:30:39 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>NACP | {{$profile->name }}</title>
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
<body class="tg-home tg-homethree">
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
		<header id="tg-header" class="tg-header tg-headervtwo tg-haslayout">
			<div class="tg-topbar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<ul class="tg-addressinfo">
								<li>
									<i class="icon-map-marker"></i>
									<address>{{ $ngoinfo->location }}</address>
								</li>
							
								<li>
									<i class="icon-phone-handset"></i>
									<span>{{ $ngoinfo->phone_number }}</span>
								</li>
							</ul>
								
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="tg-navigationarea">
							<strong class="tg-logo"><a href="/{{$profile->username}}-ngo"><img src="/ngogallery/{{$ngoinfo->logo}}"> <!-- <img src="/assets/images/logow.png" alt="logo"> --></a></strong>
							<div class="tg-navigationandsearch">
								<nav id="tg-nav" class="tg-nav">
									<div class="navbar-header">
										<button type="button" class="navbar-toggle collapsed" data-toggle=" collapse" data-target="#tg-navigation" aria-expanded="false">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>
									<div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
										<ul>
										<li>
											<a href="/{{$profile->username}}-ngo">Home</a>
											
										</li>
										<li><a href="/{{$profile->username}}-ngo/about">About</a></li>
										<li>
											<a href="/{{$profile->username}}-ngo/events">Events</a>
											
										</li>

										<li>

											<a href="/{{$profile->username}}-ngo/news">News</a>
											
										</li>

										<li>
											<a href="/{{$profile->username}}-ngo/gallery">Gallery</a>
										</li>
									
											
										
										
									
										
									</ul>
									</div>
								</nav>
							<!--<div class="tg-searchbox">
									<a id="tg-btnsearch" class="tg-btnsearch" href="javascript:void(0);"><i class="icon-magnifier"></i></a>
									<form class="tg-formtheme tg-formsearch">
										<fieldset><input type="search" name="search" class="form-control" placeholder="Start Your Search Here"></fieldset>
									</form>
								</div> -->
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
		<div id="tg-homeslider" class="tg-homeslider tg-homeslidervthree tg-homeslidervfour owl-carousel tg-btnround tg-haslayout">
			@if($sliders->count())
				@foreach($sliders as $slider)

			<div class="item">
				
				<figure>
					<img src="/ngogallery/{{$slider->image}}" alt="image description" style="width:100%; height:576px">
					<figcaption class="tg-slidercontent">
						<div class="tg-slidercontentbox">
							<div class="container">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<h1>{{ $profile->name}} <span style="text-transform: uppercase;">
											
										 
										
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
										<h1>{{ $profile->name}} <span style="text-transform: uppercase;">
											
								
										
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
		<!-- <div class="tg-tickerbox">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<span>Daily Alerts:</span>
						<div id="tg-ticker" class="tg-ticker owl-carousel">
							<div class="item">
								<div class="tg-description">
									<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et enim ad minim veniam, quis nostrud exercitation.</p>
								</div>
							</div>
							<div class="item">
								<div class="tg-description">
									<p>Consectetur adipisicing elit sed do eiusmod qua enim ad minim veniam, quis nostrud exercitation.</p>
								</div>
							</div>
							<div class="item">
								<div class="tg-description">
									<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->

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
									<!-- <figure><img src="/assets/images/img-03.jpg" alt="image description"></figure> -->
									<div class="tg-shortcodetextbox">
										<h2 style="text-align: center;">ABOUT US</h2>
										@if($abouts->count())
										@foreach($abouts as $about)
										<div class="tg-description">
											<p>{!! \Illuminate\Support\Str::words($about->content, 60,'....')  !!}</p>
										</div>
										@endforeach
										@else
										<p class="alert alert-warning">No Content found</p>
										@endif
										
										<div class="tg-btnpluslogo">
											<a class="tg-btn" href="/{{$profile->username}}-ngo/about">read more</a>
											<strong class="tg-universitylogo"><a href="javascript:void(0);"><!-- <img src="/assets/images/logo2.png" alt="image description"> --></a></strong>
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
															<img src="/ngogallery/{{$event->image}}" alt="image description">
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
															<h3><a href="javascript:void(0);">{{$event->location}}</a></h3>
														</div>
														<div class="tg-description">
														<p>{!!\Illuminate\Support\Str::words($event->event_details, 8,'....')  !!}<a href="{{$profile->username}}-ngo/events/{{$event->slug}}">Read More</a></p>
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
									<!-- 	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
											<div class="tg-glanceatuoeandk tg-glanceatuoeandkvtwo">
												<div class="tg-borderheading">
													<h2>Glance at UOE&amp;K</h2>
												</div>
												<ul class="tg-gallery">
													<li>
														<figure>
															<a class="tg-btnview" href="/assets/images/glance/img-22.jpg" data-rel="prettyPhoto[glance]"><i class="icon-magnifier"></i></a>
															<img src="/assets/images/glance/img-22.jpg" alt="image description">
														</figure>
													</li>
													<li>
														<figure>
															<a class="tg-btnview" href="/assets/images/glance/img-01.jpg" data-rel="prettyPhoto[glance]"><i class="icon-magnifier"></i></a>
															<img src="/assets/images/glance/img-01.jpg" alt="image description">
														</figure>
													</li>
													<li>
														<figure>
															<a class="tg-btnview" href="/assets/images/glance/img-02.jpg" data-rel="prettyPhoto[glance]"><i class="icon-magnifier"></i></a>
															<img src="/assets/images/glance/img-02.jpg" alt="image description">
														</figure>
													</li>
													<li>
														<figure>
															<a class="tg-btnview" href="/assets/images/glance/img-03.jpg" data-rel="prettyPhoto[glance]"><i class="icon-magnifier"></i></a>
															<img src="/assets/images/glance/img-03.jpg" alt="image description">
														</figure>
													</li>
													<li>
														<figure>
															<a class="tg-btnview" href="/assets/images/glance/img-04.jpg" data-rel="prettyPhoto[glance]"><i class="icon-magnifier"></i></a>
															<img src="/assets/images/glance/img-04.jpg" alt="image description">
														</figure>
													</li>
													<li>
														<figure>
															<a class="tg-btnview" href="/assets/images/glance/img-05.jpg" data-rel="prettyPhoto[glance]"><i class="icon-magnifier"></i></a>
															<img src="/assets/images/glance/img-05.jpg" alt="image description">
														</figure>
													</li>
												</ul>
											</div>
										</div> -->
									<!-- 	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
											<div class="tg-widget tg-widgetquicklinks tg-widgetquicklinksvtwo">
												<div class="tg-borderheading">
													<h2>Quick Links</h2>
												</div>
												<div class="tg-widgetcontent">
													<ul>
														<li><a href="javascript:void(0);">Downloads Function Form</a></li>
														<li><a href="javascript:void(0);">Admissions Guidline For New Students</a></li>
														<li><a href="javascript:void(0);">UOE&amp;K Online Library</a></li>
														<li><a href="javascript:void(0);">Multimedia and Entertainment</a></li>
														<li><a href="javascript:void(0);">Annual Holiday Trip to Dubai 2017</a></li>
														<li><a href="javascript:void(0);">Student Advisory June 27,2017</a></li>
														<li><a href="javascript:void(0);">Parents Meeting 2017</a></li>
														<li><a href="javascript:void(0);">Overseas &amp; E-Learning</a></li>
													</ul>
												</div>
											</div>
										</div> -->
									</div>
								</section>
							<section class="tg-sectionspace tg-haslayout">
									<div class="tg-borderheading">
										<h2>Latest News</h2>
									</div>
									<div class="tg-events">
										<div class="row">	
										@if($news->count())
										@foreach($news as $new)
											<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
												<article class="tg-themepost tg-eventpost">
													<figure class="tg-featuredimg">
														<a href="javascript:void(0);">
															<img src="/ngogallery/{{$new->image}}" alt="image description">
														</a>
													</figure>
													 <div class="tg-themepostcontent">
														<div class="tg-description">
														<p>{!!\Illuminate\Support\Str::words($event->event_details, 8,'....')  !!}<a href="{{$profile->username}}-ngo/news/{{$new->slug}}">Read More</a></p>
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
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
							<aside id="tg-sidebar" class="tg-sidebar">
								
									<div class="tg-widget tg-widgetadmissionform">
									<div class="tg-widgetcontent">
										<h3>Events</h3>
										<div class="tg-description">
											<p>Learn more and connect to our community. Visit our event page</p>
										</div>
										 <a class="tg-btn tg-btnicon" href="/{{$profile->username}}-ngo/events">
											<i class="fa fa-file-pdf-o"></i>
											<span>Read More</span>
										</a>
									</div>
								</div>
							
								<!-- <div class="tg-widget tg-widgetdownload">
									<div class="tg-widgettitle">
										<h3>Downloads</h3>
									</div>
								     <div class="tg-widgetcontent">
										<ul>
											<li>
												<a href="javascript:void(0);">
													<i class="fa fa-paperclip"></i>
													<span>Prospectus</span>
												</a>
											</li>
											<li>
												<a href="javascript:void(0);">
													<i class="fa fa-map-signs"></i>
													<span>Admission Guide</span>
												</a>
											</li>
											<li>
												<a href="javascript:void(0);">
													<i class="fa fa-list-ul"></i>
													<span>Merit List 2017</span>
												</a>
											</li>
											<li>
												<a href="javascript:void(0);">
													<i class="fa fa-calendar-check-o "></i>
													<span>Examination Date Sheet</span>
												</a>
											</li>
											<li>
												<a href="javascript:void(0);">
													<i class="fa fa-bookmark-o"></i>
													<span>Examination Guide 2017</span>
												</a>
											</li>
										</ul>
									</div>
								</div> -->
							
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
						<h3>NACP <span style="text-transform: uppercase;"></span>{{$profile->name}}</h3>
						<div class="tg-description"><p>Get to know more about us by visiting our events/conference page</p></div>
					</div>
					<form class="tg-formtheme tg-formsignupfree" method="get" action="/{{$profile->username}}-ngo/eventsearch">
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
									<strong class="tg-logo"><a href="/"><img src="/assets/images/logo.png" alt="image description"></a></strong>
									
									<ul class="tg-infolist">
										<li>
											<i class="icon-location"></i>
											<address>{{$ngoinfo->location}}</address>
										</li>
										<li>
											<i class="icon-phone-handset"></i>
											<span>{{$ngoinfo->phone_number}}</span>
										</li>
										
										<li>
											<a href="mailto:{{$ngoinfo->email}}">
												<i class="icon-envelope"></i>
												<span>{{$ngoinfo->email}}</span>
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
											@if($footerevents->count())
											@foreach($footerevents as $event)
											<p class=""><a href="/">{{$event->title}}</a></p>
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
									
										<li><a href="/{{$profile->username}}-ngo/events">Event</a></li>
										<li><a href="/{{$profile->username}}-ngo/news">News</a></li>
										<li><a href="/{{$profile->username}}-ngo/gallery">Gallery</a></li>
									
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

<!-- Mirrored from mydesignhoard.com/HTML/html/education/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Sep 2019 10:30:41 GMT -->
</html>