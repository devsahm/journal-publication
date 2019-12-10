<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->

<!-- Mirrored from mydesignhoard.com/HTML/html/education/eventsgrid.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Sep 2019 10:31:51 GMT -->
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
									
									<address>{{$ngoinfo->location}}</address>
								<li>
									<i class="icon-phone-handset"></i>
									<span>{{$ngoinfo->phone_number}}</span>
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
							<strong class="tg-logo"><a href="/{{$profile->username}}-ngo"><img src="/assets/images/logo.png" alt="University of Education and knowledge"></a></strong>
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
							    <li><a href="/{{$profile->username}}-ngo">Home</a></li>
							    <li><a href="/{{$profile->username}}-ngo/about">About</a></li>
							 	<li><a href="/{{$profile->username}}-ngo/events">Events</a></li>
								<li><a href="/{{$profile->username}}-ngo/news">News</a></li>
								<li><a href="/{{$profile->username}}-ngo/gallery">Gallery</a></li>
									
										
									
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
				Inner Banner Start
		*************************************-->
		<div class="tg-innerbanner">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<ol class="tg-breadcrumb">
							<li><a href="/{{ $profile->username }}-ngo">Home</a></li>
						
							<li class="tg-active">News</li>
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
						<div class="col-xs-12 col-sm-8 col-md-9 col-lg-9 pull-right">
							<div id="tg-content" class="tg-content">
								<div class="tg-resultandstyle">
									<span class="tg-searchresult">News List</span>
									<ul class="tg-poststyleswitcher">
									<!-- <li class="tg-active"><a href="/event-grid"><i class="fa fa-th"></i></a></li>
										<li><a href="/event-list"><i class="fa fa-th-list"></i></a></li> -->
									</ul>
								</div>
								<div class="tg-events tg-grid">
									<div class="row">
										
										
										@if($news->count())
									
										@foreach($news as $new)	
										<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
										
											<article class="tg-themepost tg-eventpost">
												<figure class="tg-featuredimg">
													<a href="javascript:void(0);">
														<img src="/ngogallery/{{ $new->image }}" alt="image description">
													</a>
												</figure>
												<div class="tg-themepostcontent">
													<!-- <ul class="tg-themeposttags">
														<li><a href="javascript:void(0);">Management</a></li>
														<li><a href="javascript:void(0);">Science</a></li>
													</ul> -->
													<div class="tg-themeposttitle">
														<h3><a href="/{{$profile->username}}-ngo/news/{{$new->slug}}">{{ $new->title }}</a></h3>
													</div>

													<ul class="tg-matadata">
														<li>
														<a href="javascript:void(0);">
														<i class="fa fa-calendar"></i>
														<span>{{ date('d M, Y', strtotime($new->created_at)) }}</span>
															</a>
														</li>
													
														
													</ul>
													<div class="tg-btnsbox">
														<a class="tg-btn" href="/{{$profile->username}}-ngo/news/{{$new->slug}}">read more</a>
													</div>
												</div>
											</article>
											
										</div>
										@endforeach
										@else
										<div class="alert alert-warning alert-block">

                                                <button type="button" class="close" data-dismiss="alert">×</button> 
                                                <p style="margin:auto;">No News record was found</p>

                                                </div>

										@endif
									</div>
								</div>
								<nav class="tg-pagination">
									<ul>
										{{ $news->links() }}
									</ul>
								</nav>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 pull-left">
							<aside id="tg-sidebar" class="tg-sidebar">
								<div class="tg-widget tg-widgetsearchcourse">
									<div class="tg-widgettitle">
										<h3>News Search</h3>
									</div>
									<div class="tg-widgetcontent">
										<form class="tg-formtheme tg-formsearchcourse" action="/{{$profile->username}}-ngo/newsearch">
											<fieldset>
												<div class="tg-inputwithicon">
													<i class="icon-book"></i>
													<input type="search" name="keyword" class="form-control" placeholder="Keyword" required>
												</div>
												<button type="submit" class="tg-btn">search now</button>
										
											</fieldset>
										</form>
									</div>
								</div>
						
								<div class="tg-widget tg-widgetlatestcourses">
									<div class="tg-widgettitle">
										<h3>Latest Events</h3>
									</div>
									<div class="tg-widgetcontent">
										
										@if($sideevents->count())
										@foreach($sideevents as $sideevent )
										<article class="tg-campus tg-campusleftthumb">
											<figure class="tg-featuredimg">
												<a href="javascript:void(0);">
													<img src="/ngogallery/{{ $sideevent->image }}" alt="image description" style="width: 70px; height: 70px;">
												</a>
											</figure>
											<div class="tg-campuscontent">
												<div class="tg-datetime">
													<i class="fa fa-calendar"></i>
													<span>{{ date('d M, Y', strtotime($sideevent->created_at)) }}</span>
												</div>
												<div class="tg-campustitle">
													<h3><a href="{{$profile->username}}-ngo/events/event-details/{{ $sideevent->id}}">{{ $sideevent->title }}</a></h3>
												</div>
											</div>
										</article>
										@endforeach
										@endif
									</div>
								</div>
							<!-- 	<div class="tg-widget tg-widgetadmissionform">
									<div class="tg-widgetcontent">
										<h3>Admission Form 2017</h3>
										<div class="tg-description">
											<p>Quistane nostrud exertation ulamco laboris nisi ut aliquip ex ea comodo consequat aute irure dolor.</p>
										</div>
										<a class="tg-btn tg-btnicon" href="javascript:void(0);">
											<i class="fa fa-file-pdf-o"></i>
											<span>Download PDF</span>
										</a>
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
											<p class=""><a href="/{{$profile->username}}-ngo/news/{{$new->slug}}">{{$event->title}}</a></p>
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

<!-- Mirrored from mydesignhoard.com/HTML/html/education/eventsgrid.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Sep 2019 10:31:54 GMT -->
</html>