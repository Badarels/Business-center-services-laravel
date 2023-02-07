      <!--**********************************  
        Nav header start
        ***********************************-->
<div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="img-fluid rounded-circle logo-abbr" src="{{asset('template/images/bcs.png')}}" alt="">
                <img class="logo-compact" src="{{asset('template/images/logo-text-white.png')}}" alt="">
                <img class="brand-title" src="{{asset('template/images/logo-text-white.png2')}}" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
</div>
   <!--**********************************
            Nav header end
        ***********************************--> 
<div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                          
                        </div>
    
                    <ul class="navbar-nav header-right">

                       <!--*******************************************************************-*********************
                        <li class="nav-item dropdown">
                                <a class="has-arrow" href="{{url('template/javascript:void()')}}" aria-expanded="false">
                                    <i class="la la-users"></i>
                                    <span class="nav-text">Gestion utilisateurs</span>
                                </a>
                                 <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="{{url('template/#')}}">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="{{url('template/#')}}">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="{{url('template/#')}}">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="{{url('template/#')}}">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="{{url('template/#')}}">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="{{url('template/#')}}">See all notifications <i class="ti-arrow-right"></i></a>
                                </div>
                                
                    <div class="dropdown-menu dropdown-menu-left">
                        <ul class="metismenu" id="menu">
                    
                        <li><a class="has-arrow" href="{{url('template/javascript:void()')}}" aria-expanded="false">
							<i class="la la-users"></i>
							<span class="nav-text">Agents</span>
						    </a>
                            <ul aria-expanded="false">
                                <li><a href="{{url('template/all-students.html')}}">Liste Agents</a></li>
                                <li><a href="{{url('template/add-student.html')}}">Ajouter Agents</a></li>
                                <li><a href="{{url('template/edit-student.html')}}">Editer Agents</a></li>
                                <li><a href="{{url('template/about-student.html')}}"> A Propos Agents</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="{{url('template/javascript:void()')}}" aria-expanded="false">
							<i class="la la-users"></i>
							<span class="nav-text">Administrateurs</span>
						    </a>

                            <ul aria-expanded="false">
                                <li><a href="{{url('template/all-students.html')}}">Liste Administrateurs</a></li>
                                <li><a href="{{url('template/add-student.html')}}">Ajouter Administrateurs</a></li>
                                <li><a href="{{url('template/edit-student.html')}}">Editer Administrateurs</a></li>
                                <li><a href="{{url('template/about-student.html')}}">A Propos Administrateurs</a></li>
                            </ul>
                        </li>
                    </ul>
                                </div>
                            </li>
                      -***************************************************************************************-->
                      
                     
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell ai-icon" href="{{url('template/#')}} role="button" data-toggle="dropdown">
                                    <svg id="icon-user" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
										<path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
										<path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
									</svg>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="{{url('template/#')}}">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="{{url('template/#')}}">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="{{url('template/#')}}">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="{{url('template/#')}}">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="{{url('template/#')}}">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="{{url('template/#')}}">See all notifications <i class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <!-- Debut Menu D'utilisateur-->
                            
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="{{url('template/#')}}" role="button" data-toggle="dropdown">
                                    <img src="{{asset('template/images/profile/education/pic1.jpg')}}" width="20" alt="">
                                </a>
                                        
                                <div class="dropdown-menu dropdown-menu-right" >
                                    <a href="{{url('template/app-profile.html')}}" class="dropdown-item ai-icon">
                                        <img src="{{asset('template/images/profile/education/pic1.jpg')}}" width="20" alt="">
                                        <span class="ml-2 ellipsis">{{userFullName()}}</span>
                                    </a>
                                    <a href="{{url('template/app-profile.html')}}" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                            {{--<span class="ml-2">{{getROleName()}}</span>  --}} 
                                        @if(auth()->user()->hasRole('Super Administrateur')) 
                                            <span class="ml-2">Super Administrateur</span>
                                        @elseif (auth()->user()->hasRole('Administrateur')) 
                                          <span class="ml-2">Administrateur</span>
                                        @elseif (auth()->user()->hasRole('Agent')) 
                                          <span class="ml-2">Agent</span>
                                        @else
                                        <span class="ml-2">Visiteur</span>
                                        @endif
                                       
                                    </a>
                                      <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>

                                      <span class="ml-2">  {{ __('Se déconnecter') }}</span>
                                    </a>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                  
                                </div>
                            </li>
                            <!-- Fin Menu D'utilisateur-->
                        </ul>
                    </div>
                </nav>
            </div>
        </div>