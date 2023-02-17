
<div class="content-body">
 @if($isBtnAddClicked)
		<!--debut ajout d'utilisateur-->
			<div class="container-fluid">
				    
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Ajout Utilisateurs</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                            <li class="breadcrumb-item active"><a href="">Utilisateurs</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Ajout Utilisateurs</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-xl-12 col-xxl-12 col-sm-12">
                        <div class="card"> 
                            <div class="card-header">
								<h5 class="card-title">Formulaire D'ajout Utilisateur</h5>
							</div>
							<div class="card-body">
                                <form  wire:submit.prevent='submit'>
						
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Nom</label>
												<input type="text" wire:model='newUsers.nom' class="form-control"
												 @error('newUsers.nom') is-invalid 
												 	<span class="text-danger">{{$message}}</span> 
												@enderror >
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Prenom</label>
												<input type="text" wire:model='newUsers.prenom' class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Email</label>
												<input type="text" wire:model='newUsers.email' class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Date D'embauche</label>
												<input type="date" name="datepicker" class="datepicker-default form-control" id="datepicker">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Mode de Passe</label>
												<input type="password" wire:model='newUsers.motdepasse' class="form-control">
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Telephone</label>
												<input type="text" wire:model='newUsers.telephone' class="form-control">
											</div>
										</div>

                                        <div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Confirmer Mot de passe</label>
												<input type="password" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Sexe</label>
												<select class="form-control" wire:model='newUsers.sexe'>
													<option value="Gender">Sexe</option>
													<option value="Male">Masculin</option>
													<option value="Female">Feminin</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Ville</label>
												<input type="text" wire:model='newUsers.ville' class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Roles</label>
												<select class="form-control" wire:model='newUsers.roles'>
													<option value="Department">Super Admin</option>
													<option value="html">Admin</option>
													<option value="css">Agent</option>
		
												</select>
											</div>
										</div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Numero piece d'identité</label>
												<input type="text" wire:model='newUsers.numeroPieceIdentite' class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Date de Naissance</label>
												<input type="date" wire:model='newUsers.datenaissance' name="datepicker" class="datepicker-default form-control" id="datepicker1">
											</div>
										</div>

                                        <div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Adresse</label>
												<input type="text" wire:model='newUsers.adresse' class="form-control">
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12">
											<button type="submit" class="btn btn-primary">Ajouter</button>
                                            <a class="btn btn-light" href="{{Route('admin.utilisateur.users.index')}}">Annuler</a>
										</div>
									</div>
								</form>
                            </div>
                        </div>
                    </div>
				</div>
            </div>
					<!--fin d'ajout utilisateur!!!-->
	@else
   <div class="container-fluid">
		
           <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Tout Les Agents</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Agents</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Tout les Agents</a></li>
                        </ol>
                    </div>
                </div>

            <div class="row">
					<div class="col-lg-12">
						<ul class="nav nav-pills mb-3">
							<li class="nav-item"><a href="#list-view" data-toggle="tab" class="nav-link btn-primary mr-1 show active">Affichages de Liste</a></li>
							<li class="nav-item"><a href="#grid-view" data-toggle="tab" class="nav-link btn-primary">Vue Grille</a></li>
						</ul>
					</div>
			
					<div class="col-lg-12">
						<div class="row tab-content">
							<div id="list-view" class="tab-pane fade active show col-lg-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Liste de tous les Agents</h4>
										<a class="btn btn-primary" href='{{url("/AjouterUtilisateurs")}}' >Ajouter nouveau</a>
									</div>
									<div class="card-body">
										<div class="table-responsive table-striped">
										
											<table id="example3" class="display" style="min-width: 845px">
												<thead>
													<tr>
														<th>Nom</th>
														<th>Prenom</th>
														<th>Adresse</th>
														<th>Sexe</th>
														<th>Ville</th>
														<th style="min-width: 250px">Date de Naissance</th>
														<th>Email</th>
														<th>Telephone</th>
                                                        <th>Role</th>
                                                        <th style="min-width: 250px">N° piece d'indentité</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
                                                  @foreach ($Users as $user)
													<tr>
														<td style="min-width: 250px">{{$user->nom}}</td>
														<td style="min-width: 250px">{{$user->prenom}}</td>
														<td style="min-width: 250px">{{$user->adresse}}</td>
														<td style="min-width: 250px">{{$user->sexe}}</td>
														<td style="min-width: 250px">{{$user->ville}}</td>
                                                        <td style="min-width: 250px">{{$user->datenaissance}}</td>
														<td style="min-width: 250px">{{$user->email}}</a></td>
														<td style="min-width: 250px">{{$user->telephone1}}</td>
														
															 <td style="min-width: 250px">
															 	
																@foreach ($user->role as $role)
																		{{$role->detail_roles}}
																@endforeach

                                                      		 </td>
														<td>{{$user->numeroPieceIdentite}}</td>
														<td style="min-width: 100px">
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>												
													</tr>
                                                    
                                                 @endforeach
	
												</tbody>
											</table>
										</div>
									</div>
                                </div>
                            </div>
							<div id="grid-view" class="tab-pane fade col-lg-12">
								<div class="row">
                                 @foreach ($Users as $user )
									<div class="col-lg-4 col-md-6 col-sm-6 col-12">
										<div class="card card-profile">
											<div class="card-header justify-content-end pb-0">
												<div class="dropdown">
													<button class="btn btn-link" type="button" data-toggle="dropdown">
														<span class="dropdown-dots fs--1"></span>
													</button>
													<div class="dropdown-menu dropdown-menu-right border py-0">
														<div class="py-2">
															<a class="dropdown-item" href="javascript:void(0);">Modifier</a>
															<a class="dropdown-item text-danger" href="javascript:void(0);">Suprimer</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-2">
												<div class="text-center">
													<div class="profile-photo">
														<img src="images/profile/small/pic2.jpg" width="100" class="img-fluid rounded-circle" alt="">
													</div>
													<h3 class="mt-4 mb-1">{{$user->nom}}</h3>
													<p class="text-muted">{{$user->prenom}}</p>
													<ul class="list-group mb-3 list-group-flush">
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span>Roll No.</span><strong>02</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">N° Telephone. :</span><strong>{{$user->telephone1}}</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Adresse. :</span><strong>{{$user->adresse}}</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Email:</span><strong>{{$user->email}}</strong></li>
													</ul>
													<a class="btn btn-outline-primary btn-rounded mt-3 px-4" onclick="window.open('https://app.ringover.com/call-logs', '_blank')" 
													 value="{{$user->telephone1}}" href="">{{$user->telephone1}}</a>
												</div>
											</div>
										</div>
									</div>
                                 @endforeach
							   </div>
							</div>
						</div>
					</div>
				</div>
         </div>
	</div>
@endif
  

</div>
 