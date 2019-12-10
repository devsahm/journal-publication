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
                                    NGO ADMIN
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
                   
                    <li><a href="/ngo"><i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i>Dashboard</a></li>

                <!--     <li class="menu">
                        <a href="javascript:void(0)">
                            <i class="zmdi zmdi-account zmdi-hc-fw"></i>
                            <span class="nav-text">Admin Profile</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href=""><span class="nav-text">Account Settings</span></a></li>
       
                        </ul>
                    </li> -->

                      
              

                     <li class="menu">
                        <a href="javascript:void(0)">
                            <i class="zmdi zmdi-pages zmdi-hc-fw"></i>
                            <span class="nav-text">Home Page Slider</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="/ngo/sliderngo/create"><span class="nav-text">upload/Update</span></a></li>
                          
       
                        </ul>
                      </li>

                       <li class="menu">
                        <a href="javascript:void(0)">
                            <i class="zmdi zmdi-pages zmdi-hc-fw"></i>
                            <span class="nav-text">About </span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="/ngo/aboutngo/create"><span class="nav-text">upload Content</span></a></li>
                              <li><a href="/ngo/aboutngo"><span class="nav-text">View/Delete</span></a></li>
       
                        </ul>
                      </li>


                         

                        <li class="menu">
                        <a href="javascript:void(0)">
                            <i class="zmdi zmdi-swap-alt zmdi-hc-fw zmdi-hc-rotate-90"></i>
                            <span class="nav-text">Event</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="/ngo/eventngo/create"><span class="nav-text">Add Events</span></a></li>
                              <li><a href="/ngo/eventngo"><span class="nav-text">update Events</span></a></li>
       
                        </ul>
                    </li>



                        <li class="menu">
                        <a href="javascript:void(0)">
                            <i class="zmdi zmdi-account-box zmdi-hc-fw"></i>
                            <span class="nav-text">Photo Gallery</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="/ngo/galleryngo/create"><span class="nav-text">Add Image</span></a></li>
                              <li><a href="/ngo/galleryngo"><span class="nav-text">View/Delete Images</span></a></li>
       
                        </ul>
                    </li>

                     <li class="menu">
                        <a href="javascript:void(0)">
                            <i class="zmdi zmdi-code-setting zmdi-hc-fw"></i>
                            <span class="nav-text">News Blog</span>
                        </a>

                             <ul class="sub-menu">
                             <li><a href="/ngo/newsngo/create"><span class="nav-text">Add News</span></a></li>
                              <li><a href="/ngo/newsngo"><span class="nav-text">View/Delete Images</span></a></li>
       
                        </ul>
                    </li>

                      <li class="menu">
                        <a href="javascript:void(0)">
                            <i class="zmdi zmdi-pages zmdi-hc-fw"></i>
                            <span class="nav-text">Header and Footer Info</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="/ngo/infongo/create"><span class="nav-text">Create/Update</span></a></li>
                            
                        </ul>
                    </li>


                  <!--   <li><a href="/admin/contact-mail"><i class="zmdi zmdi-email zmdi-hc-fw"></i>Contacts</a></li> -->

 

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