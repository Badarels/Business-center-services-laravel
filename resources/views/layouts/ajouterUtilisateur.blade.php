@extends('master')

@section('content')
        <div class="content-body">
            <!-- row -->
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
                           
									<form action="" method="POST">
    									@csrf
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Nom</label>
												<input type="text" wire:model='newUser.nom' class="form-control"
												 @error('newUser.nom') is-invalid @enderror" value="{{ old('newUser.nom') }}" required>

												 @error("newUser.nom") 
												 	<span class="text-danger">{{$message}}</span> 
												@enderror

											
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Prenom</label>
												<input type="text" wire:model='newUser.prenom' class="form-control"
												
												 @error('newUser.prenom') is-invalid @enderror" value="{{ old('newUser.prenom') }}" required>

												 @error("newUser.prenom") 
												 	<span class="text-danger">{{$message}}</span> 
												@enderror
												
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Email</label>
												<input type="text" wire:model='newUser.email' class="form-control"
												 @error('newUser.email') is-invalid @enderror" value="{{ old('newUser.email') }}" required>

												 @error("newUser.email") 
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
												<input type="password" wire:model='newUser.password' class="form-control"
												 @error('newUser.password') is-invalid @enderror" value="{{ old('newUser.password') }}" required>

												 @error("newUser.password") 
												 	<span class="text-danger">{{$message}}</span> 
												@enderror
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Telephone</label>
												<input type="text" wire:model='newUser.telephone' class="form-control"
												 @error('newUser.telephone1') is-invalid @enderror" value="{{ old('newUser.telephone1') }}" required>

												 @error("newUser.telephone1") 
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
												<select class="form-control" wire:model='newUser.sexe'>
													<option value="Gender">Sexe</option>
													<option value="Male">Masculin</option>
													<option value="Female">Feminin</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Ville</label>
												<input type="text" wire:model='newUser.ville' class="form-control"
												 @error('newUser.ville') is-invalid @enderror" value="{{ old('newUser.ville') }}" required>

												 @error("newUser.ville") 
												 	<span class="text-danger">{{$message}}</span> 
												@enderror
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Roles</label>
												<select class="form-control" wire:model='newUser.roles'>
													<option value="Department">Super Admin</option>
													<option value="html">Admin</option>
													<option value="css">Agent</option>
		
												</select>
											</div>
										</div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Numero piece d'identité</label>
												<input type="text" wire:model='newUser.numeroPieceIdentite' class="form-control"
												 @error('newUser.numeroPieceidentite') is-invalid @enderror" value="{{ old('newUser.numeroPieceIdentite') }}" required>

												 @error("newUser.numeroPieceidentite") 
												 	<span class="text-danger">{{$message}}</span> 
												@enderror
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Date de Naissance</label>
												<input type="date" wire:model='newUser.datenaissance' name="datepicker" class="datepicker-default form-control" id="datepicker1"
												 @error('newUser.datenaissance') is-invalid @enderror" value="{{ old('newUser.datenaissance') }}" required>

												 @error("newUser.datenaissance") 
												 	<span class="text-danger">{{$message}}</span> 
												@enderror
											</div>
										</div>

                                        <div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Adresse</label>
												<input type="text" wire:model='newUser.adresse' class="form-control"
												 @error('newUser.adresse') is-invalid @enderror" value="{{ old('newUser.adresse') }}" required>

												 @error("newUser.adresse") 
												 	<span class="text-danger">{{$message}}</span> 
												@enderror
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
        </div>
      <!-- /.modal-dialog --> 
@endsection