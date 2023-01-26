
  <!--  Sidebar de l'administrateur --> 
  @if(auth()->user()->hasRole("Administrateur"))
<div class="dlabnav">

            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>

                    <li><a class="has-arrow" href="{{url('template/javascript:void()')}}" aria-expanded="false">
							<i class="la la-home"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('template/index.html')}}">Dashboard 1</a></li>
                            <li><a href="{{url('template/index-2.html')}}">Dashboard 2</a></li>
                            <li><a href="{{url('template/index-3.html')}}">Dashboard 3</a></li>
                        </ul>
                    </li>
        
					<li><a class="has-arrow" href="{{url('template/javascript:void()')}}" aria-expanded="false">
							<i class="la la-users"></i>
							<span class="nav-text">Gestion utilisateurs</span>
						</a>
                    <ul aria-expanded="false">
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
                                <li><a href="{{url('template/about-student.html')}}"> A Propos Administrateurs</a></li>
                            </ul>
                        </li>
                    </ul>
                    </li>
               
					<li><a class="has-arrow" href="{{url('//template/javascript:void()')}}" aria-expanded="false">
							<i class="la la-calendar"></i>
							<span class="nav-text">Rendez-Vous</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('template/all-courses.html')}}">Liste Rendez-vous</a></li>
                            <li><a href="{{url('template/add-courses.html')}}">Ajouter Rendez-vous</a></li>
                            <li><a href="{{url('template/edit-courses.html')}}">Editer Rendez-vous </a></li>
                            <li><a href="{{url('template/about-courses.html')}}">A Propos Rendez-vous</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow" href="{{url('template/javascript:void()')}}" aria-expanded="false">
							<i class="la la-book"></i>
							<span class="nav-text">Fichiers</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('template/all-library.html')}}">Consulter Fichiers</a></li>
                            <li><a href="{{url('template/add-library.html')}}">Ajouter des Fichiers</a></li>
                            <li><a href="{{url('template/edit-library.html')}}">Edit Fichiers</a></li>
                        </ul>
                    </li>
				  </li>
				</ul>
            </div>
        </div>
        @endif
     <!--  Sidebar de l'agent --> 
     @if(auth()->user()->hasRole("Agent"))
        <div class="dlabnav">
         <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
               
					<li><a class="has-arrow" href="{{url('template/javascript:void()')}}" aria-expanded="false">
							<i class="la la-calendar"></i>
							<span class="nav-text">Rendez-Vous</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('/')}}">Mes Rendez-vous</a></li>
                            <li><a href="{{url('/')}}">Ajouter Rendez-vous</a></li>
                            <li><a href="{{url('/')}}">Editer Rendez-vous </a></li>
                            <li><a href="{{url('/')}}">A Propos Rendez-vous</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow" href="{{url('template/javascript:void()')}}" aria-expanded="false">
							<i class="la la-book"></i>
							<span class="nav-text">Fichiers</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('/')}}">Consulter Mes Fichiers</a></li>
                            <li><a href="{{url('/')}}">Ajouter des Fichiers</a></li>
                            <li><a href="{{url('/')}}">Edit Fichiers</a></li>
                        </ul>
                    </li>
				  </li>
				</ul>
            </div>
            </div>
            @endcan
        

    

