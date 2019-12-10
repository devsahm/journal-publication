<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->

<!-- Mirrored from mydesignhoard.com/HTML/html/education/newsgridsidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Sep 2019 10:33:03 GMT -->
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
							<li class="tg-active">Publication</li>
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
						<div class="col-xs-12 col-sm-8 col-md-12 col-lg-9 pull-right">
							<div id="tg-content" class="tg-content">
								<div class="tg-titleborder">
									<h2>Journal Publication</h2>
								</div>
								<h5>Journal: Nigeria Association of Clinical Psychologist</h5>
								<p>Historically, scholarly information has flowed from North to South and from West to East. It has also been difficult for African researchers to access the work of other African academics. Nigerian Association of Clinical Psychologists has gathered hundreds of journals so that African-origin research output is available to Africans and to the rest of the world.</p>
						<!-- 		<div style="background: #52b554; padding: 20px; color: white;">
									<ul style="list-style-type: none;">
										<li>The site has {{$issues->count()}} Issues containing {{$ArticleCount->count() }} published Article.</li>
										<li>There are {{$submittedarticles->count() }} that are submitted manuscript for review</li>
									</ul>
								</div> -->
								<h4>Publication List</h4>
								<br>
								
	
								<div class="tg-newsandarticle tg-grid">
									<div class="row">
										@if($issues->count())
										@foreach($issues as $issue)
										<div class="col-md-6">
											<div class="row">
												<div class="col-md-4">
													<figure class="tg-featuredimg">
														<img src="/coverimage/{{$issue->cover }}" alt="cover" style="height: 150px;">
													</figure>
												</div>
												<div class="col-md-8">
													
												<article class="tg-themepost tg-newspost">
												
												<div class="tg-themepostcontent">
													<span>Volume {{ $issue->volume_id }} No. {{ $issue->issue}}</span>
													<div class="tg-themeposttitle">
														<h3>{{ $issue->journal }}</h3>
													</div>
													<div class="tg-description">
														<p><a href="/publication/issue/article-list/{{$issue->id }}">Issue Table of Contents</a></p>
													</div>
												</div>
											</article>

												</div>
											</div>
											
										</div>
									@endforeach
									@else
									<div>
										<p class="alert alert-info"> No Publication yet</p>
									</div>

									@endif
									</div>
								</div>
							
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 pull-left">
							<aside id="tg-sidebar" class="tg-sidebar">
								<div class="tg-widget tg-widgetsearchcourse">
									<div class="tg-widgettitle">
										<h3>Search</h3>
									</div>
								<div class="tg-widgetcontent">
										<form class="tg-formtheme tg-formsearchcourse" method="get" action="/search">
											<fieldset>
												<div class="tg-inputwithicon">
													<i class="icon-book"></i>
													<input type="search" name="search" class="form-control" placeholder="seach by author, title or keywords" required>
												</div>
												<button type="submit" class="tg-btn">search now</button>
											</fieldset>
										</form>
									</div>
								</div>
								<div class="tg-widget tg-widgetcoursecategories">
									<div class="tg-widgettitle">
										<h3>Categories</h3>
									</div>
									<div class="tg-widgetcontent">
										<ul>
											<li>
												<a href="javascript:void(0);">
													<span>Volumes</span>
													<span>({{$volumes->count() }})</span>
												</a>
											</li>
											<li>
												<a href="javascript:void(0);">
													<span>Issues</span>
													<span>({{$issues->count() }})</span>
												</a>
											</li>
											<li>
												<a href="javascript:void(0);">
													<span>Published Article</span>
													<span>({{$ArticleCount->count() }})</span>
												</a>
											</li>
											
										</ul>
									</div>
								</div>
							<!-- 	<div class="tg-widget tg-widgetlatestcourses">
									<div class="tg-widgettitle">
										<h3>Latest news</h3>
									</div>
									<div class="tg-widgetcontent">
										
										<article class="tg-campus tg-campusleftthumb">
											<figure class="tg-featuredimg">
												<a href="javascript:void(0);">
													<img src="/assets/images/courses/img-03.jpg" alt="image description">
												</a>
											</figure>
											<div class="tg-campuscontent">
												<div class="tg-datetime">
													<i class="fa fa-calendar"></i>
													<span>Friday, Mar 06, 2017</span>
												</div>
												<div class="tg-campustitle">
													<h3><a href="javascript:void(0);">Launching Best Concept Motorbike for Abnormal Best Concept Motorbike</a></h3>
												</div>
											</div>
										</article>
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

<!-- Mirrored from mydesignhoard.com/HTML/html/education/newsgridsidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Sep 2019 10:33:04 GMT -->
</html>