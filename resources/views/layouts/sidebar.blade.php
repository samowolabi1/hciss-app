 
 <aside class="left-sidebar">
            <div class="d-flex no-block nav-text-box align-items-center">
                <span><img src="/images/hciss-logo-1.png" style="height:40px;width:auto" alt="elegant admin template" class="dark-logo"></span>
                <a class="waves-effect waves-dark ml-auto hidden-sm-down" href="javascript:void(0)"><i
                        class="ti-menu"></i></a>
                <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i
                        class="ti-menu ti-close"></i></a>
            </div>
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="{{ Request::is('home') ? 'active' : '' }}"> 
                            
                            <a class="waves-effect waves-dark" href="{{url('/home')}}" aria-expanded="false"><i class="fa fa-tachometer"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                           
                        </li>

                                              <li class="{{ Request::is('blogs') ? 'active' : '' }}"> 
                            @canany(['isSuperAdmin','isAdmin'])
                            <a class="waves-effect waves-dark" href="{{url('/blog')}}" aria-expanded="false"><i
                            class="fa fa-thumb-tack"></i><span class="hide-menu">Posts</span></a>

                            @endcan
                        </li>


                        <li class="{{ Request::is('contact') ? 'active' : '' }}"> 
                        @canany(['isUser'])
                        <a class="waves-effect waves-dark" href="{{route('contact')}}" aria-expanded="false"><i
                        class="fa fa-envelope"></i><span class="hide-menu">Contact Admin</span></a>

                        @endcan
                        </li>

                        <li>
                         @can('isSuperAdmin')
                        <a href="{{url('/users')}}" class="waves-effect waves-dark" aria-expanded="false"><i
                                    class="fa fa-users"></i><span class="hide-menu">Users</span>
                                </a>
                        @endcan
                            </li>
                        <li>
                            @canany(['isSuperAdmin','isAdmin'])
                         <a class="waves-effect waves-dark" href="{{route('letters')}}" aria-expanded="false"><i
                                    class="fa fa-envelope"></i><span class="hide-menu">Newsletter Signups</span></a>
                            @endcan
                                </li>
                        <li>
                        @canany(['isSuperAdmin','isAdmin'])
                         <a class="waves-effect waves-dark" href="{{route('demo.list')}}" aria-expanded="false"><i
                                    class="fa fa-check-circle"></i><span class="hide-menu"></span>Demo Requests</a>
                        @endcan
                                </li>
                        <li> 
                        @canany(['isSuperAdmin','isAdmin'])
                            <a class="waves-effect waves-dark" href="{{route('contacts')}}" aria-expanded="false"><i
                                    class="fa fa-comments"></i><span class="hide-menu"></span>Messages</a>
                        @endcan
                                </li>
                        <li>
                        @canany(['isSuperAdmin','isAdmin'])
                         <a class="waves-effect waves-dark" href="{{route('settings')}}" aria-expanded="false"><i
                                    class="fa fa-cogs"></i><span class="hide-menu"></span>Settings</a>
                        @endcan
                                </li>
                        <li>
                        @canany(['isSuperAdmin','isAdmin'])
                         <a class="waves-effect waves-dark" href="{{route('privacies')}}" aria-expanded="false"><i
                                    class="fa fa-bookmark-o"></i><span class="hide-menu"></span>Privacy Policy</a>
                        @endcan
                                </li>
                        <li> <a class="waves-effect waves-dark" href="{{route('edit_info')}}" aria-expanded="false"><i
                                    class="fa fa-user"></i><span class="hide-menu"></span>Profile</a></li>
                        <li> <a class="waves-effect waves-dark" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();" aria-expanded="false"><i
                                    class="fa fa-sign-out"></i><span class="hide-menu"></span>Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                </li>
                        <div class="text-center m-t-30">

<!--  DEMO BUTTON-->     @canany(['isUser'])
                            <a href="{{route('demo')}}" class="btn waves-effect waves-light btn-success hidden-md-down"> Request A Demo</a>
                         @endcan
                        </div>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

<!--        <div id="sidebar" class="sidebar">
          
            <div data-scrollbar="true" data-height="100%">
               
                <ul class="nav">
                    <li class="nav-profile">
                        <div class="image">
                            <a href=""><img src="/img/user-1.jpg" alt="Company Logo" /></a>
                        </div>
                        <div class="info">
                             {{ucfirst($user->name)}}
                            
                        </div>
                    </li>
                </ul>
             
                <ul class="nav">
                    
                    <li class="{{ Request::is('home') ? 'active' : '' }}">
                        <a href="{{url('/home')}}">
                            <i class="fa fa-laptop"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="{{ Request::is('users*') ? 'active' : '' }}">
                        @can('isSuperAdmin')
                        <a href="{{url('/users')}}">
                            <i class="fa fa-user"></i> 
                            <span>Users</span>
                        </a>
                        @endcan
                       
                    </li>


                     <li class="{{ Request::is('blogs') ? 'active' : '' }}">
                        @canany(['isSuperAdmin','isAdmin'])
                        <a href="{{url('/blog')}}">
                            <i class="fa fa-exclamation"></i> 
                            <span>Blog</span>
                        </a>
                        @endcanany
                       
                    </li>


                    <li class="has-sub">
                        @canany(['isSuperAdmin','isAdmin'])
                        <a href="#">
                          <i class="fa fa-bar-chart"></i>   
                            <span>Reports</span>
                        </a>
                       @endcanany
                    </li>
                    
                    <li class="has-sub">
                        @can('isSuperAdmin')
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <i class="fa fa-cogs"></i>
                            <span>Settings</span> 
                        </a>
                        @endcan
                        <ul class="sub-menu">
                            <li><a href="form_elements.html">SYSTEM</a></li>
                            <li><a href="form_slider_switcher.html">COMPANY</a></li>
                        </ul>
                    </li>
               
                    <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
                
                </ul>
              
            </div>
         
        </div> -->