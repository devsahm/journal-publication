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
							<li class="tg-active">submit Article</li>
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
										<h3>Publication Summary</h3>
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
												<a href="javascript:void(0);">
													<span>Volumes</span>
													<span>({{ $volumes->count() }})</span>
												</a>
											</li>
										
											<li>
												<a href="javascript:void(0);">
													<span>Issues</span>
													<span>({{ $issues->count() }})</span>
												</a>
											</li>
											<li>
												<a href="javascript:void(0);">
													<span>Published Articles</span>
													<span>({{ $ArticleCount->count() }})</span>
												</a>
											</li>
											<li>
												<a href="javascript:void(0);">
													<span>NACP Executives</span>
													<span>(15)</span>
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
									<p>Carefully Read NACP<a href="/publication/author-guidelines"> Author Guidelines</a> before submiting your article</p>
									<div class="tg-heading">
										<h2>Submit Article</h2>
									</div>
										@include('success')
             						@include('errors')
									<div class="tg-themecollapsecontent">
								
									<form method="post" action="/article" enctype="multipart/form-data">
										@csrf

										<div class="form-group">
											<input type="text" name="title" placeholder="title" class="form-control" value="{{ old('title') }}">
										</div>

										<div class="form-group">
											<input type="text" name="author" placeholder="author(s)" class="form-control" value="{{ old('author') }}">
											<p><i>List of authors should be separated by comma</i></p>
										</div>

										<div class="form-group">
											<input type="text" name="university" placeholder="University Affiliation" class="form-control" value="{{ old('university') }}">
										</div>

										

										<div class="form-group">
											<textarea class="form-control" name="abstract" placeholder="abstract" style="height:200px;" required>{{ old('abstract') }}</textarea>
										</div>
										<div class="form-group">
											<input type=" text" class="form-control" name="keywords" placeholder="Keywords" value="{{ old('keywords') }}" required>
											<p>Each keywords should be separated by comma</p>
										</div>

										<div class="form-group">
											<span> Attach manuscript (pdf, doc & docx)</span>
										<input type="file" name="uploadone" class="form-control">
										</div>
										<button class="tg-btn" type="submit" >Submit</button>
										
									</form>
									</div>
								<!-- 	<nav class="tg-pagination">
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