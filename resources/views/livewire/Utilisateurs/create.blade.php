
<div class="content-body">
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
                           
								 <form  wire:submit.prevent="addUser()">
    								@csrf	
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Nom</label>
												<input type="text" wire:model="newUsers.nom" class="form-control"
												 @error('newUsers.nom') is-invalid @enderror value="{{ old('newUsers.nom') }}" required>

												 @error("newUsers.nom") 
												 	<span class="text-danger">{{$message}}</span> 
												@enderror

											
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Prenom</label>
												<input type="text" wire:model="newUsers.prenom" class="form-control"
												
												 @error('newUsers.prenom') is-invalid @enderror value="{{ old('newUsers.prenom') }}" required>

												 @error("newUsers.prenom") 
												 	<span class="text-danger">{{$message}}</span> 
												@enderror
												
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Email</label>
												<input type="text" wire:model="newUsers.email" class="form-control"
												 @error('newUsers.email') is-invalid @enderror value="{{ old('newUsers.email') }}" required>

												 @error("newUsers.email") 
												 	<span class="text-danger">{{$message}}</span> 
												@enderror
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
												<input type="password" wire:model="newUsers.password" class="form-control"
												 @error('newUsers.password') is-invalid @enderror value="{{ old('newUsers.password') }}" required>

												 @error("newUsers.password") 
												 	<span class="text-danger">{{$message}}</span> 
												@enderror
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Telephone</label>
												<input type="text" wire:model="newUsers.telephone1" class="form-control"
												 @error('newUsers.telephone1') is-invalid @enderror value="{{ old('newUsers.telephone1') }}" required>

												 @error("newUsers.telephone1") 
												 	<span class="text-danger">{{$message}}</span> 
												@enderror
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
												<select class="form-control" wire:model="newUsers.sexe">
													<option value="Sexe">Sexe</option>
													<option value="Masculin">Masculin</option>
													<option value="Feminin">Feminin</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Ville</label>
												<input type="text" wire:model="newUsers.ville" class="form-control"
												 @error('newUsers.ville') is-invalid @enderror value="{{ old('newUsers.ville') }}" required>

												 @error("newUsers.ville") 
												 	<span class="text-danger">{{$message}}</span> 
												@enderror
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Roles</label>	
												<select class="form-control" wire:model="newUsers.roles">
													@foreach ($Users as $user)
														@foreach ($user->role as $role)
															<option>{{$role->detail_roles}}</option>
														@endforeach
													@endforeach
												</select>
											</div>
										</div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Numero piece d'identité</label>
												<input type="text" wire:model="newUsers.numeroPieceIdentite" class="form-control"
												 @error('newUsers.numeroPieceIdentite') is-invalid @enderror value="{{ old('newUsers.numeroPieceIdentite') }}" required>

												 @error("newUsers.numeroPieceIdentite") 
												 	<span class="text-danger">{{$message}}</span> 
												@enderror
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Date de Naissance</label>
												<input type="date" wire:model="newUsers.datenaissance" name="datepicker" class="datepicker-default form-control" id="datepicker1"
												 @error('newUsers.datenaissance') is-invalid @enderror value="{{ old('newUsers.datenaissance') }}" required>

												 @error("newUsers.datenaissance") 
												 	<span class="text-danger">{{$message}}</span> 
												@enderror
											</div>
										</div>

                                        <div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Adresse</label>
												<input type="text" wire:model="newUsers.adresse" class="form-control"
												 @error('newUsers.adresse') is-invalid @enderror value="{{ old('newUsers.adresse') }}" required>

												 @error("newUsers.adresse") 
												 	<span class="text-danger">{{$message}}</span> 
												@enderror
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12">
											<button type="submit" class="btn btn-primary">Ajouter</button>
                                            <a class="btn btn-light" wire:click.prevent="goToListeUsers">Retour à la Liste des Utilisateurs</a>
										</div>
									</div>
								</form>
                            </div>
                        </div>
                    </div>
				</div>
        </div>
</div>

<script>
    window.addEventListener("showsuccessMessage", event=>{
        Swal.fire({
            position:'top-end',
            icon: 'success',
            toast: true,
            title: event.detail.message || "Opération effectué avec succée!",
            showConfirmButton: false,
            timer:7000
            })
                //alert('Utilisateur Ajouter Avec Succee')
        })
            
</script>