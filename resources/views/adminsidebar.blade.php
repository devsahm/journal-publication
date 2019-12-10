   <div id="menu" class="side-nav gx-sidebar">
        <div class="navbar-expand-lg">
            <!-- Sidebar header  -->
            <div class="sidebar-header">
                <div class="user-profile">
                    <img class="user-avatar" alt="Domnic" src="/adminassets/images/userAvatar/demo.jpg">

                    <div class="user-detail">
                        <h4 class="user-name">
                            <span class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="userAccount"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    NACP ADMIN
                                </a>

                                <span class="dropdown-menu dropdown-menu-right" aria-labelledby="userAccount">
                                    <a href="{{ route('logout') }}" class="dropdown-item" href="javascript:void(0)"                              
                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> <i class="zmdi zmdi-sign-in zmdi-hc-fw mr-2"></i>
                                        {{ __('Logout') }} 
                                       </a>
                                 
                             
                                </span>
                            </span>
                        </h4>
                    </div>
                </div>
            </div>
            <!-- /sidebar header -->

            <!-- Main navigation -->
            <div id="main-menu" class="main-menu navbar-collapse collapse">
                <ul class="nav-menu">
                   
                    <li><a href="/admin"><i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i>Dashboard</a></li>

                <!--     <li class="menu">
                        <a href="javascript:void(0)">
                            <i class="zmdi zmdi-account zmdi-hc-fw"></i>
                            <span class="nav-text">Admin Profile</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="alerts.html"><span class="nav-text">Account Settings</span></a></li>
       
                        </ul>
                    </li> -->

                          <li class="menu">
                        <a href="javascript:void(0)">
                            <i class="zmdi zmdi-account-box-o zmdi-hc-fw"></i>
                            <span class="nav-text">Registered Authors</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="/admin/registered-users"><span class="nav-text">Authors</span></a></li>
       
                        </ul>
                    </li>

                      

                     <li class="menu">
                        <a href="javascript:void(0)">
                            <i class="zmdi zmdi-widgets zmdi-hc-fw"></i>
                            <span class="nav-text">News and Events</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="/admin/news-upload"><span class="nav-text">Upload News</span></a></li>
                            <li><a href="/admin/news-list"><span class="nav-text">View Uploaded News</span></a></li>
                            <li><a href="/admin/events-upload"><span class="nav-text">Upload Events</span></a></li>
                            <li><a href="/admin/events-list"><span class="nav-text">View Uploaded Event</span></a></li>
                        </ul>
                    </li>

                       <li class="menu">
                        <a href="javascript:void(0)">
                            <i class="zmdi zmdi-account-box-o zmdi-hc-fw"></i>
                            <span class="nav-text">Submitted Articles</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="/admin/submitted-article"><span class="nav-text">View Articles</span></a></li>
       
                        </ul>
                    </li>





                         <li class="menu">
                        <a href="javascript:void(0)">
                           <!--  <i class="zmdi zmdi-trending-up zmdi-hc-fw"></i> -->
                             <i class="zmdi zmdi-widgets zmdi-hc-fw"></i>
                            <span class="nav-text">Journal Publication</span>
                        </a>
                        <ul class="sub-menu">
                       <!--      <li><a href="/admin/submitted-article"><span class="nav-text">Submitted Articles</span></a></li> -->
                            <li><a href="/admin/create-volume"><span class="nav-text">Create Volume</span></a></li>
                            <li><a href="/admin/publication"><span class="nav-text">Create Publication </span></a></li>
                            <li><a href="/admin/publication-view"><span class="nav-text">View Publication </span></a></li>
                       <!--      <li><a href="/admin/article-published"><span class="nav-text">Published Articles </span></a></li> -->
                        </ul>
                    </li>
                <!--     <li><a href="/admin/contact-mail"><i class="zmdi zmdi-email zmdi-hc-fw"></i>Contacts</a></li> -->

 

               <li> <a href="{{ route('logout') }}"                              
                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="zmdi zmdi-key zmdi-hc-fw"></i>
                                        {{ __('Logout') }} 
                                       </a>
               </li>

                </ul>
            </div>
            <!-- /main navigation -->
        </div>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>