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
                                <form  wire:submit.prevent='submit'>
						
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Nom</label>
												<input type="text" wire:model='newUsers.nom' class="form-control
												 @error("newUsers.nom")  is-invalid  @enderror">

												 @error("newUsers.nom") 
												 	<span class="text-danger">{{$message}}</span> 
												@enderror
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
        </div>
      <!-- /.modal-dialog --> 
@endsection