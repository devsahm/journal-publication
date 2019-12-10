	@include('successmessage')
	<header id="tg-header" class="tg-header tg-haslayout">
			<div class="tg-topbar">
				<div class="tg-leftbox">
					<span id="tg-datebox" class="tg-datebox"></span>
					<span class="tg-rtltextbox"> Nigerian Association of Clinical Psychologists</span>
					 @if(Auth::guard('writer')->check())
					 <span  class="tg-rtltextbox">Hi, {{ Auth::guard('writer')->user()->name }}</span>
					 @endif

					  @if(Auth::guard('member')->check())
					 <span  class="tg-rtltextbox">Hi, {{ Auth::guard('member')->user()->name }}</span>
					 @endif
				</div>
				<div class="tg-rightbox">
					<span class="tg-tollfree">Call: 08079226338</span>
					
					<!-- <div class="tg-themedropdown tg-languagesdropdown">
						<a href="javascript:void(0);" id="tg-languages" class="tg-btndropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span><img src="/assets/images/flags/img-01.jpg" alt="image description"></span>
							<span>Eng</span>
						</a>
						<div class="tg-themedropdownbox" aria-labelledby="tg-languages">
							<ul class="tg-languageslist">
								<li>
									<span><img src="/assets/images/flags/img-02.jpg" alt="image description"></span>
									<span>Eng</span>
								</li>
							
								
							</ul>
						</div>
					</div> -->
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="tg-logoandnoticeboard">
							<strong class="tg-logo"><a href="/"><img src="/assets/images/logo.png" alt="logo"></a></strong>
						
							<div class="tg-noticeboard">
									 @if(Auth::guard('writer')->check())
									<!-- <span><a href="/login/writer">Login</span> -->
										 
								

								  <span> <a style="margin-left: 5px" href="{{ route('logout') }}"                              
               							 onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><b>{{ __('Logout') }} </b>
                                     
                                       </a>
          							</span>
          							 <span><a href="/writer/profile" style="margin-left: 5px"><b>Profile</b></a></span>	
          							<figure><img src="/assets/images/img-01.jpg" alt="image description"></figure>

          							@elseif(auth()->user())
									<!-- <span><a href="/login/writer">Login</span> -->
										 
								

								  <span> <a style="margin-left: 5px" href="{{ route('logout') }}"                              
               							 onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><b>{{ __('Logout') }} </b>
                                     
                                       </a>
          							</span>
          							<!--  <span><a href="/writer/profile" style="margin-left: 5px"><b>Profile</b></a></span>	 -->
          							<figure><img src="/assets/images/img-01.jpg" alt="image description"></figure>

          							@else
          								<figure><img src="/assets/images/img-01.jpg" alt="image description"></figure>
          							   @endif
          							    
          							    <!-- <span><a href="/login/writer" style="margin-left: 5px"><b>LOGIN</b></a></span>
									<span><a href="/register/writer" style="margin-left: 5px"><b>SIGN UP</b></a></span>
									
									
							</div> -->
					


						</div>
						<div class="tg-navigationarea">
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

										@if(Route::currentRouteName() == "home")
										<li class="current-menu-item">
											<a href="/">Home</a>
										</li>
										@else
											<li class="current-menu">
											<a href="/">Home</a>
										</li>
										@endif
									<!-- 	<li class="current-menu">
											<a href="/">Courses</a>
											<div class="mega-menu">
												<ul class="mega-menu-row">
													<li class="mega-menu-col">
														<a href="javascript:void(0);">Course Categories</a>
														<ul>
															<li><a href="courseslist.html">Course List</a></li>
															<li><a href="coursesgrid.html">Course gird</a></li>
															<li><a href="coursedetail.html">Course Detail</a></li>
														</ul>
													</li>
													<li class="mega-menu-col">
														<a href="javascript:void(0);">Faculties</a>
														<ul>
															<li><a href="faculties.html">faculties</a></li>
															<li><a href="facultydetail.html">faculty detail</a></li>
														</ul>
													</li>
												</ul>
												<ul class="mega-menu-row">
													<li class="mega-menu-col">
														<figure><img src="/assets/images/img-02.jpg" alt="image description"></figure>
														<div class="tg-textbox">
															<strong>excellent service &amp; support</strong>
															<div class="tg-description">
																<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam quistance nostrud exercitation ullamco laboris nisi ut aliquip commodo.</p>
															</div>
															<a class="tg-btn tg-bgn-sm" href="javascript:void(0);">contact now</a>
														</div>
													</li>
												</ul>
											</div>
										</li> -->
									 @if(Route::currentRouteName() == "about")
										<li class="current-menu-item">
											<a href="/about">About</a>
										</li>
										@else
										<li class="current-menu">
											<a href="/about">About</a>
										</li>
										@endif

										@if(Route::currentRouteName() == "executive")
										<li class="current-menu-item">
											<a href="/executives">Executives</a>
										</li>
										@else
										<li class="current-menu">
											<a href="/executives">Executives</a>
										</li>
										@endif

									<!-- 	<li class="current-menu">
											<a href="/event">News and Event</a>
										</li> -->
											@if(Route::currentRouteName() == "member")
										<li class="current-menu-item">
											<a href="/members">Member Types</a>
										</li>
										@else
											<li class="current-menu">
											<a href="/members">Member Types</a>
										</li>
										@endif

										@if(Route::currentRouteName() == "publication")

										<li class="menu-item-has-children current-menu-item">
											<a href="javascript:void(0);">Publication</a>
											<ul class="sub-menu">
												<li><a href="/writer/submit-article">Submit Articles</a></li>
												<li><a href="/journal/publications">Journal Publication</a></li>
											</ul>
										</li>
									<!-- 	<li class="current-menu-item"><a data-new="new" href="/publications">Publications</a></li> -->
										@else
											<li class="menu-item-has-children">
											<a href="javascript:void(0);">Publication</a>
											<ul class="sub-menu">
												<li><a href="/writer/submit-article">Submit Articles</a></li>
												<li><a href="/journal/publications">Journals</a></li>
											</ul>
										</li>
										@endif

										@if(Route::currentRouteName() == "membership")
										<li class="menu-item-has-children current-menu-item">
											<a href="javascript:void(0);">Memberships</a>
											<ul class="sub-menu">
												<li><a href="/membership/general-information">Membership Registration</a></li>
												<li><a href="/practicing-license-application">Practicing License Application</a></li>
											</ul>
										</li>
										@else
											<li class="menu-item-has-children">
											<a href="javascript:void(0);">Membership</a>
											<ul class="sub-menu">
													<li><a href="/membership/general-information">Membership Registration</a></li>
												<li><a href="/practicing-license-application">Practicing License Application</a></li>
											</ul>
										</li>
										@endif


								
										<!-- <li class="menu-item-has-children current-menu-item">
											<a href="javascript:void(0);">Conference 2019</a>
											<ul class="sub-menu">
												<li><a href="/conference2019">Submit Abstract/Poster Summary</a></li>
										
											</ul>
										</li> -->
									
										
										@if(Route::currentRouteName() == "event")
									<li class="menu-item-has-children current-menu-item">
											<a href="javascript:void(0);">News and Events</a>
											<ul class="sub-menu">
												<li><a href="/event-list">News</a></li>
												<li><a href="/news-list">Events</a></li>
											</ul>
										</li>
										@else
			
									<li class="menu-item-has-children">
											<a href="javascript:void(0);">News and Events</a>
											<ul class="sub-menu">
												<li><a href="/news-list">News Blog</a></li>
												<li><a href="/event-list">Events</a></li>
											</ul>
										</li>

										@endif

											
										@if(Route::currentRouteName() == "gallery")
										<li class="current-menu-item">
											<a href="/gallery">Gallery</a>
										</li>
										@else
										<li class="current-menu">
											<a href="/gallery">Gallery</a>
										</li>
										@endif

					
									<li class="menu-item-has-children ">
											<a href="javascript:void(0);">State Chapters</a>
											<ul class="sub-menu">
												@foreach($states as $state)
												<li><a href="/{{$state->state}}-state">{{$state->state}} state</a></li>
												@endforeach
											</ul>
										</li>
							
									
									</ul>
								</div>
							</nav>
							<div class="tg-searchbox">
								<a id="tg-btnsearch" class="tg-btnsearch" href="javascript:void(0);"><i class="icon-magnifier"></i></a>
								<form class="tg-formtheme tg-formsearch">
									<fieldset><input type="search" name="search" class="form-control" placeholder="Start Your Search Here"></fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>


		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>