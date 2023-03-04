  <div class="content-body">
  <div class="container-fluid">
				    
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Modification Utilisateurs</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                            <li class="breadcrumb-item active"><a href="">Utilisateurs</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Utilisateurs</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-xl-12 col-xxl-12 col-sm-12">
                        <div class="card"> 
                            <div class="card-header">
								<h5 class="card-title">Formulaire D'édition Utilisateur</h5>
							</div>
							<div class="card-body">
                           
								 <form wire:submit.prevent="updateUser()">
    								@csrf	
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Nom</label>
												<input type="text" wire:model="editUsers.nom" class="form-control"
												 @error('editUsers.nom') is-invalid @enderror value="{{ old('editUsers.nom') }}" required>

												 @error("editUsers.nom") 
												 	<span class="text-danger">{{$message}}</span> 
												@enderror

											
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Prenom</label>
												<input type="text" wire:model="editUsers.prenom" class="form-control"
												
												 @error('editUsers.prenom') is-invalid @enderror value="{{ old('editUsers.prenom') }}" required>

												 @error("editUsers.prenom") 
												 	<span class="text-danger">{{$message}}</span> 
												@enderror
												
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Email</label>
												<input type="text" wire:model="editUsers.email" class="form-control"
												 @error('editUsers.email') is-invalid @enderror value="{{ old('editUsers.email') }}" required>

												 @error("editUsers.email") 
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
												<input type="password" wire:model="editUsers.password" class="form-control"
												 @error('editUsers.password') is-invalid @enderror value="{{ old('editUsers.password') }}" required>

												 @error("editUsers.password") 
												 	<span class="text-danger">{{$message}}</span> 
												@enderror
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Telephone</label>
												<input type="text" wire:model="editUsers.telephone1" class="form-control"
												 @error('editUsers.telephone1') is-invalid @enderror value="{{ old('editUsers.telephone1') }}" required>

												 @error("editUsers.telephone1") 
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
												<select class="form-control" wire:model="editUsers.sexe">
													<option value="Sexe">Sexe</option>
													<option value="Masculin">Masculin</option>
													<option value="Feminin">Feminin</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Ville</label>
												<input type="text" wire:model="editUsers.ville" class="form-control"
												 @error('editUsers.ville') is-invalid @enderror value="{{ old('editUsers.ville') }}" required>

												 @error("editUsers.ville") 
												 	<span class="text-danger">{{$message}}</span> 
												@enderror
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Roles</label>
												<select class="form-control" wire:model="editUsers.roles">
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
												<input type="text" wire:model="editUsers.numeroPieceIdentite" class="form-control"
												 @error('editUsers.numeroPieceIdentite') is-invalid @enderror value="{{ old('editUsers.numeroPieceIdentite') }}" required>

												 @error("editUsers.numeroPieceIdentite") 
												 	<span class="text-danger">{{$message}}</span> 
												@enderror
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Date de Naissance</label>
												<input type="date" wire:model="editUsers.datenaissance" name="datepicker" class="datepicker-default form-control" id="datepicker1"
												 @error('editUsers.datenaissance') is-invalid @enderror value="{{ old('editUsers.datenaissance') }}" required>

												 @error("editUsers.datenaissance") 
												 	<span class="text-danger">{{$message}}</span> 
												@enderror
											</div>
										</div>

                                        <div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Adresse</label>
												<input type="text" wire:model="editUsers.adresse" class="form-control"
												 @error('editUsers.adresse') is-invalid @enderror value="{{ old('editUsers.adresse') }}" required>

												 @error("editUsers.adresse") 
												 	<span class="text-danger">{{$message}}</span> 
												@enderror
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12">
											<button type="submit" class="btn btn-primary">Appliquer les modifications</button>
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