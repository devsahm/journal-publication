<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->

<!-- Mirrored from mydesignhoard.com/HTML/html/education/eventsgrid.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Sep 2019 10:31:51 GMT -->
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
						
							<li class="tg-active"> Events</li>
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
									<span class="tg-searchresult">Event List</span>
									<ul class="tg-poststyleswitcher">
										<li class="tg-active"><a href="/event-grid"><i class="fa fa-th"></i></a></li>
										<li><a href="/event-list"><i class="fa fa-th-list"></i></a></li>
									</ul>
								</div>
								<div class="tg-events tg-grid">
									<div class="row">
										
										
										@if($events->count())
									
											
										<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
											@foreach($events as $event)
											<article class="tg-themepost tg-eventpost">
												<figure class="tg-featuredimg">
													<a href="javascript:void(0);">
														<img src="/eventimages/{{ $event->image }}" alt="image description">
													</a>
												</figure>
												<div class="tg-themepostcontent">
													<!-- <ul class="tg-themeposttags">
														<li><a href="javascript:void(0);">Management</a></li>
														<li><a href="javascript:void(0);">Science</a></li>
													</ul> -->
													<div class="tg-themeposttitle">
														<h3><a href="javascript:void(0);">{{ $event->title }}</a></h3>
													</div>
													<ul class="tg-matadata">
														<li>
															<a href="javascript:void(0);">
																<i class="fa fa-calendar"></i>
																<span>{{ date('d M, Y', strtotime($event->created_at)) }}</span>
															</a>
														</li>
													
														<li>
															<a href="javascript:void(0);">
																<i class="fa fa-location-arrow"></i>
																<span>{{ $event->address }}</span>
															</a>
														</li>
													</ul>
													<div class="tg-btnsbox">
														<a class="tg-btn" href="/event-details/{{ $event->id }}">read more</a>
													</div>
												</div>
											</article>
											@endforeach
										</div>
										@else
										<div class="alert alert-warning alert-block">

                                                <button type="button" class="close" data-dismiss="alert">×</button> 
                                                <p style="margin:auto;">No event record was found</p>

                                                </div>

										@endif
									</div>
								</div>
								<nav class="tg-pagination">
									<ul>
										{{ $events->links() }}
									</ul>
								</nav>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 pull-left">
							<aside id="tg-sidebar" class="tg-sidebar">
								<div class="tg-widget tg-widgetsearchcourse">
									<div class="tg-widgettitle">
										<h3>Search Event</h3>
									</div>
									<div class="tg-widgetcontent">
										<form class="tg-formtheme tg-formsearchcourse">
											<fieldset>
												<div class="tg-inputwithicon">
													<i class="icon-book"></i>
													<input type="search" name="keyword" class="form-control" placeholder="Keyword">
												</div>
												<button type="submit" class="tg-btn">search now</button>
												<a href="javascript:void(0);">View All Events</a>
											</fieldset>
										</form>
									</div>
								</div>
							<!-- 	<div class="tg-widget tg-widgetcoursecategories">
									<div class="tg-widgettitle">
										<h3>Event Categories</h3>
									</div>
									<div class="tg-widgetcontent">
										<ul>
											<li>
												<a href="javascript:void(0);">
													<span>All</span>
													<span>(212345)</span>
												</a>
											</li>
											<li>
												<a href="javascript:void(0);">
													<span>Science</span>
													<span>(3248)</span>
												</a>
											</li>
											<li>
												<a href="javascript:void(0);">
													<span>Management</span>
													<span>(2148)</span>
												</a>
											</li>
											<li>
												<a href="javascript:void(0);">
													<span>Medical</span>
													<span>(2143)</span>
												</a>
											</li>
											<li>
												<a href="javascript:void(0);">
													<span>Arts</span>
													<span>(21561)</span>
												</a>
											</li>
										</ul>
									</div>
								</div> -->
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
													<img src="/eventimages/{{ $sideevent->image }}" alt="image description" style="width: 70px; height: 70px;">
												</a>
											</figure>
											<div class="tg-campuscontent">
												<div class="tg-datetime">
													<i class="fa fa-calendar"></i>
													<span>{{ date('d M, Y', strtotime($sideevent->created_at)) }}</span>
												</div>
												<div class="tg-campustitle">
													<h3><a href="/event-details/{{ $sideevent->id }}">{{ $sideevent->title }}</a></h3>
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

<!-- Mirrored from mydesignhoard.com/HTML/html/education/eventsgrid.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Sep 2019 10:31:54 GMT -->
</html>