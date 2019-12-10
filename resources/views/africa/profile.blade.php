<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang="zxx"> <!--<![endif]-->

<!-- Mirrored from mydesignhoard.com/HTML/html/education/coursedetail.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Sep 2019 10:31:29 GMT -->
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
							<li><a href="/writer/submit-article">Submit Article</a></li>
							<li class="tg-active">Profile</li>
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
								<div class="tg-detailpage tg-coursedetailpage">
									<article class="tg-themepost tg-course">
										<div class="tg-themepostcontent">
											<ul class="tg-themeposttags">
												
											</ul>
											<div class="tg-themeposttitle">
												<h1>Author's Profile Page</h1>
											</div>
											<ul class="tg-themepostinfo">
												<li>
													 @if(Auth::guard('writer')->user()->image == 'demo')
													<figure><a href="javascript:void(0);"><img src="/assets/images/demo.jpg" alt="image description"></a></figure>
													 @else
													 <figure><a href="javascript:void(0);"><img src="/profileimage/{{Auth::guard('writer')->user()->image }}" alt="image description" style="width: 50px; height: 50px;"></a></figure>
													 @endif


													<div class="tg-infodata">
														<span>Author:</span>
														<strong><a href="javascript:void(0);"> {{ Auth::guard('writer')->user()->name }}</a></strong>
													</div>
												</li>
												<li>
													<div class="tg-infodata">
														<span>Submitted Articles</span>
														<strong><a href="javascript:void(0);">{{ $articles->count() }}</a></strong>
													</div>
												</li>
												
											</ul>
											<span class="tg-pricebox">
											
												<h5>Date Joined</h5>
												<a class="tg-btn" href="javascript:void(0);">

													<?php $date=Auth::guard('writer')->user()->created_at ?>
													{{ date('d M, Y', strtotime($date)) }}</a>
											</span>
										</div>
									<!-- 	<div class="tg-coursegallery">
											<div id="tg-coursegalleryslider" class="tg-coursegalleryslider owl-carousel">
												<figure class="item"><img src="/assets/images/courses/img-21.jpg" alt="image description"></figure>
												<figure class="item"><img src="/assets/images/courses/img-21.jpg" alt="image description"></figure>
												<figure class="item"><img src="/assets/images/courses/img-21.jpg" alt="image description"></figure>
												<figure class="item"><img src="/assets/images/courses/img-21.jpg" alt="image description"></figure>
												<figure class="item"><img src="/assets/images/courses/img-21.jpg" alt="image description"></figure>
												<figure class="item"><img src="/assets/images/courses/img-21.jpg" alt="image description"></figure>
												<figure class="item"><img src="/assets/images/courses/img-21.jpg" alt="image description"></figure>
												<figure class="item"><img src="/assets/images/courses/img-21.jpg" alt="image description"></figure>
												<figure class="item"><img src="/assets/images/courses/img-21.jpg" alt="image description"></figure>
											</div>
											<div id="tg-coursegallerynav" class="tg-coursegallerynav owl-carousel">
												<figure class="item"><img src="/assets/images/courses/img-22.jpg" alt="image description"></figure>
												<figure class="item"><img src="/assets/images/courses/img-23.jpg" alt="image description"></figure>
												<figure class="item"><img src="/assets/images/courses/img-24.jpg" alt="image description"></figure>
												<figure class="item"><img src="/assets/images/courses/img-25.jpg" alt="image description"></figure>
												<figure class="item"><img src="/assets/images/courses/img-26.jpg" alt="image description"></figure>
												<figure class="item"><img src="/assets/images/courses/img-27.jpg" alt="image description"></figure>
												<figure class="item"><img src="/assets/images/courses/img-28.jpg" alt="image description"></figure>
												<figure class="item"><img src="/assets/images/courses/img-29.jpg" alt="image description"></figure>
												<figure class="item"><img src="/assets/images/courses/img-30.jpg" alt="image description"></figure>
											</div>
										</div> -->
										<div class="tg-themetabs tg-coursestabs">
											<ul class="tg-themetabnav" role="tablist">
												<li role="presentation" class="active">
													<a href="#description" role="tab" data-toggle="tab">Profile Details</a>
												</li>
												<li role="presentation">
													<a href="#curriculum" role="tab" data-toggle="tab">Submited Articles</a>
												</li>
												<li role="presentation">
													<a href="#tutors" role="tab" data-toggle="tab">Settings</a>
												</li>
												<li role="presentation">
													<a href="#relateddocuments" role="tab" data-toggle="tab">Security</a>
												</li>
											</ul>
											 
											<div class="tab-content tg-themetabcontent">
												 @include('customerror')
									          @include('successnew')
									          @include('success')
									          @include('errors')
												<div role="tabpanel" class="tab-pane active" id="description">
													<div class="tg-courseinfo">
														<div class="tg-schedule">
															<span class="tg-scheduleicon"><i class="icon-profile"></i></span>
															<h4 datetime="2016-02-02" style="color: white;">profile Summary</span></h4>
														</div>
														<ul class="tg-coursecompunent">
															<li>
																<span>
																	<i class="icon-select"></i>
																	<i>All Articles Submitted:</i>
																</span>
																<span>{{ $articles->count() }}</span>
															</li>
															<li>
																<span>
																	<i class="icon-book"></i>
																	<i>Accepted Article:</i>
																</span>
																<span>{{ $articlePublished->count() }}</span>
															</li>
														
															
														</ul>
														<!-- <div class="tg-btnsbox">
															<a class="tg-btn" href="javascript:void(0);">Join Now</a>
														</div> -->
													</div>
													<h3>Name</h3>
													<p>{{ Auth::guard('writer')->user()->name }}</p>
													<h3>Email</h3>
													<p>{{ Auth::guard('writer')->user()->email}}</p>
													<h3>Phone Number</h3>

													@if(Auth::guard('writer')->user()->phone == 0)
													<p class="alert alert-info" style="width: 350px;">No Phone Number Yet. Click <a  href="#tutors"  data-toggle="tab">HERE</a> to edit profile</p>
													@else
													<p>{{ Auth::guard('writer')->user()->phone }}</p>
													@endif
												
												</div>
												<div role="tabpanel" class="tab-pane" id="curriculum">
													<h3>Articles Lists</h3>
													<p>Uploaded articles and status</p>
													<?php $counter=1; ?>
													<ul class="tg-courseoutline">
														@if($articles->count())
														@foreach($articles as $article)
														<li>
															
															<span>
																<i><?php echo $counter; ?> </i>
															</span>
															<span style="color: blue;">{{ $article->confirmed? 'Accepted' : 'Pending....' }}</span>
															<div class="tg-description">
																<p>{{$article->title}}</p>
															</div>
															<?php $counter++; ?>
														</li>
														@endforeach
														@else

														<div class="alert alert-info">
															<p>No Article Record was found</p>
														</div>
														@endif
								
													</ul>
													<ul>
														 {{ $articles->links() }}
													</ul>
												</div>
												<div role="tabpanel" class="tab-pane" id="tutors">
		                                           <form method="post" action="/writer/profileupdate/{{ Auth::guard('writer')->id() }}" enctype="multipart/form-data" >
							                        @csrf
							                        @method('PATCH')
							                     <div>
							                       <p>
							                         Profile Picture Upload(JPG or PNG, Max:500kb)
							                       </p>
							                       <a href=""></a>
							                       <button >
							                         <input type='file' name='photo' onchange="readURL(this);" style="background-color: none;" required/>
							                      <img class="coo" id="blah" src="/assets/images/placeholder-1.jpg" alt="your image" required>    
							                       </button>
							                     </div>
				            
							                    <div class="form-group">
							                    	<label>Name</label>
							                      <input type="text" class="form-control" name="name" value="{{ Auth::guard('writer')->user()->name }}">
							                    </div>
	                  							<div class="form-group">
							                    <label>Email</label>
							                     <input type="email" class="form-control" name="email" value="{{ Auth::guard('writer')->user()->email}}" disabled>
							                    </div>
							                  
							                  
							                 <div class="form-group">
							                    <label>Phone</label>
							                    
							                      <input type="text" name="phone" class="form-control" value="{{ Auth::guard('writer')->user()->phone}}" placeholder="Phone Number" required> 
							                    </div>

							                   <button class="btn btn-primary" type="submit">Update Profile</button>    
							               
							                 </form>             

													


												</div>
												<div role="tabpanel" class="tab-pane" id="relateddocuments">
											<form method="post" action="/writer/passwordupdate/{{ Auth::guard('writer')->id() }}">
										          @csrf
                        						  @method('PATCH')

										<div class="form-group" >
											<input type="password" name="oldpassword" placeholder="Current Password" class="form-control" value="{{ old('oldpassword') }}" required>
										</div>

										<div class="form-group">
											<input type="password" name="password" placeholder="New Password" class="form-control" value="{{ old('oldpassword') }}" required>
										</div>

										 <div class="form-group">
											<input type="password" name="passwordconfirm" placeholder="Confirm Password" class="form-control" value="{{ old('passwordconfirm') }}" required>
										 </div>
									
										<button class="tg-btn" type="submit" >Submit</button>
										
									</form>
												</div>
											</div>
										</div>
									</article>
									
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 pull-left">
							<aside id="tg-sidebar" class="tg-sidebar">
								<div class="tg-widget tg-widgetsearchcourse">
									<div class="tg-widgettitle">
										<h3>Search volume</h3>
									</div>
									<div class="tg-widgetcontent">
										<form class="tg-formtheme tg-formsearchcourse" action="/home-search" method="get">
											<fieldset>
												<div class="tg-inputwithicon">
													<i class="icon-book"></i>
													<input type="text" name="volume" class="form-control" placeholder="Volume">
												</div>
												<div class="tg-inputwithicon">
													<i class="icon-layers"></i>
													<input type="text" name="issue" class="form-control" placeholder="No.">
												</div>
												<button type="submit" class="tg-btn">search now</button>
												
											</fieldset>
										</form>
									</div>
								</div>
								<div class="tg-widget tg-widgetcoursecategories">
									<div class="tg-widgettitle">
										<h3>Publication Summary</h3>
									</div>
									<div class="tg-widgetcontent">
										<ul>
											<li>
												<a href="javascript:void(0);">
													<span>Volume</span>
													<span>({{$volumes->count()}})</span>
												</a>
											</li>
											<li>
												<a href="javascript:void(0);">
													<span>Published Article</span>
													<span>({{ $Published-> count() }})</span>
												</a>
											</li>
		
										</ul>
									</div>
								</div>
								<!-- <div class="tg-widget tg-widgetlatestcourses">
									<div class="tg-widgettitle">
										<h3>Latest Courses</h3>
									</div>
									<div class="tg-widgetcontent">
										<article class="tg-campus tg-campusleftthumb">
											<figure class="tg-featuredimg">
												<a href="javascript:void(0);">
													<img src="/assets/images/courses/img-01.jpg" alt="image description">
												</a>
											</figure>
											<div class="tg-campuscontent">
												<div class="tg-campustitle">
													<h3><a href="javascript:void(0);">International Conference on Material Science 2017</a></h3>
												</div>
												<span class="tg-price">$36/pm</span>
											</div>
										</article>
										<article class="tg-campus tg-campusleftthumb">
											<figure class="tg-featuredimg">
												<a href="javascript:void(0);">
													<img src="/assets/images/courses/img-02.jpg" alt="image description">
												</a>
											</figure>
											<div class="tg-campuscontent">
												<div class="tg-campustitle">
													<h3><a href="javascript:void(0);">Biggest Reality Virtual University Convocatio Biggest Reality Virtual University</a></h3>
												</div>
												<span class="tg-price">$36/pm</span>
											</div>
										</article>
										<article class="tg-campus tg-campusleftthumb">
											<figure class="tg-featuredimg">
												<a href="javascript:void(0);">
													<img src="/assets/images/courses/img-03.jpg" alt="image description">
												</a>
											</figure>
											<div class="tg-campuscontent">
												<div class="tg-campustitle">
													<h3><a href="javascript:void(0);">Launching Best Concept Motorbike for Abnormal Best Concept Motorbike</a></h3>
												</div>
												<span class="tg-price">$36/pm</span>
											</div>
										</article>
									</div>
								</div> -->
								<div class="tg-widget tg-widgetadmissionform">
									<div class="tg-widgetcontent">
										<h3>Nigeria Association of Psychological Consstructs</h3>
										<div class="tg-description">
											<p>Get lastest news releases on the NACP News page.</p>
										</div>
										<a class="tg-btn tg-btnicon" href="/news-list">
										
											<span>Read News</span>
										</a>
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
            function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
     </script>
</body>

<!-- Mirrored from mydesignhoard.com/HTML/html/education/coursedetail.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Sep 2019 10:31:34 GMT -->
</html>