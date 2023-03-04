
  <!--  Sidebar de l'administrateur --> 
  @can("Administrateur")
    <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Menu principal</li>

                    <li><a class="has-arrow" href="{{url('/')}}" aria-expanded="false">
							<i class="la la-home"></i>
							<span class="nav-text">ACCUEIL</span>
						</a>
                       
                    </li>
         
					<li><a class="has-arrow" href="{{Route('admin.utilisateur.Users.utilisateur')}}" aria-expanded="false">
							<i class="la la-users"></i>
							<span class="nav-text">Gestion utilisateurs</span>
						</a>
                    <ul aria-expanded="false">      
                                <li><a class="has-arrow" href="{{Route('admin.utilisateur.Users.utilisateur')}}"><i class="la la-users"></i>Liste des utilisateurs</a></li>
                    </ul>
                      <ul aria-expanded="false">
                                <a class="has-arrow" href="{{Route('admin.utilisateur.Users.Role')}}"><i class="la la-users"></i>Role Et Permission</a></li>
                    </ul>
                    <ul aria-expanded="false">
                        <li><a class="has-arrow" href="{{'/'}}" aria-expanded="false">
							<i class="la la-users"></i>
							<span class="nav-text">Agents</span>
						    </a>

                            <ul aria-expanded="false">
                                <li><a href="{{Route('admin.utilisateur.Users.utilisateur')}}">Liste Agents</a></li>
                                <li><a href="{{Route('admin.utilisateur.Users.create') }}">Ajouter Agents</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="{{('/')}}" aria-expanded="false">
							<i class="la la-users"></i>
							<span class="nav-text">Administrateurs</span>
						    </a>                    
                            <ul aria-expanded="false">
                                <li><a href="{{Route('admin.utilisateur.Users.utilisateur')}}">Liste Administrateurs</a></li>
                                <li><a href="{{ url('/Create') }}">Ajouter Administrateurs</a></li>
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
					<li><a class="has-arrow" href="{{url('//template/javascript:void()')}}" aria-expanded="false">
							<i class="la la-book"></i>
							<span class="nav-text">Fichiers</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('//template/all-library.html')}}">Consulter Fichiers</a></li>
                            <li><a href="{{url('//template/add-library.html')}}">Ajouter des Fichiers</a></li>
                            <li><a href="{{url('//template/edit-library.html')}}">Edit Fichiers</a></li>
                        </ul>
                    </li>
				  </li>
				</ul>
            </div>
         </div>
    
      @endcan
     <!--  Sidebar de l'agent --> 
      @can("Agent")
      <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Menu Principal</li>

                    <li><a class="has-arrow" href="{{url('/')}}" aria-expanded="false">
							<i class="la la-home"></i>
							<span class="nav-text">ACCUEIL</span>
						</a>
                    </li>
                    <!--
                    <li><a class="has-arrow" href="{{url('//template/javascript:void()')}}" aria-expanded="false">
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
                        -->
				    <li><a class="has-arrow" href="{{url('//template/javascript:void()')}}" aria-expanded="false">
							<i class="la la-calendar"></i>
							<span class="nav-text">Rendez-Vous</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('//template/all-library.html')}}">Mes Rendez-Vous</a></li>
                            <li><a href="{{url('//template/add-library.html')}}">Ajouter Rendez-Vous</a></li>
                            <li><a href="{{url('//template/edit-library.html')}}">Editer Rendez-Vous</a></li>
                        </ul>
                    </li>

                       <li><a class="has-arrow" href="{{url('//template/javascript:void()')}}" aria-expanded="false">
							<i class="la la-calendar"></i>
							<span class="nav-text">Fichiers</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('//template/all-library.html')}}">Consulter Fichiers</a></li>
                            <li><a href="{{url('//template/add-library.html')}}">Ajouter des Fichiers</a></li>
                            <li><a href="{{url('//template/edit-library.html')}}">Editer Fichiers</a></li>
                        </ul>
                    </li>
				</ul>
            </div>
        </div>
       @endcan