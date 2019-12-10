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
                   
                    <li><a href="/member"><i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i>Dashboard</a></li>

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
                           <!--  <i class="zmdi zmdi-trending-up zmdi-hc-fw"></i> -->
                             <i class="zmdi zmdi-widgets zmdi-hc-fw"></i>
                            <span class="nav-text">Registrations</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="/membership/admin/membership-registration"><span class="nav-text">Membership Registration</span></a></li>
                            <li><a href="/membership/admin/licensing-registration"><span class="nav-text">Licensing Registration</span></a></li>
                           
                        </ul>
                    </li>

                        <li class="menu">
                        <a href="javascript:void(0)">
                            <i class="zmdi zmdi-account-box-o zmdi-hc-fw"></i>
                            <span class="nav-text">Subscribed Mail</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="/membership/subscription"><span class="nav-text">Email List</span></a></li>
       
                        </ul>
                    </li>



                        <li class="menu">
                        <a href="javascript:void(0)">
                            <i class="zmdi zmdi-google-maps zmdi-hc-fw"></i>
                            <span class="nav-text">State Chapters</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="/register/state"><span class="nav-text">Add State Chapter</span></a></li>
                          <!--     <li><a href="javascript:void(0);"><span class="nav-text">Delete States</span></a></li> -->
       
                        </ul>
                    </li>

                     <li class="menu">
                        <a href="javascript:void(0)">
                            <i class="zmdi zmdi-collection-bookmark zmdi-hc-fw zmdi-hc-rotate-90"></i>
                            <span class="nav-text">NGO</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="/register/ngo"><span class="nav-text">Create NGO</span></a></li>
                          <!--     <li><a href="javascript:void(0);"><span class="nav-text">Delete States</span></a></li> -->
       
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