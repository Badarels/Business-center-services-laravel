<div>
    {{-- Because she competes with no one, no one can compete with her. --}}

    <div class="content-body">
  <div class="container-fluid">
				    
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Roles Utilisateurs</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                            <li class="breadcrumb-item active"><a href="">Utilisateurs</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Role Utilisateurs</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
                    
                    <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
                        <div class="card">
                            <div class="card-header" style="background-color: #20c997;">
                                <h5 class="card-title text-white">
                                <i class="fa fa-key" aria-hidden="true"></i> Reinitialisation Mot de passe</h5>
                            </div>
                            <div class="card-body">
                        
                                <div class="col-lg-8 col-md-8 col-sm-12" >
								    <div class="form-group">
                                        <label class="form-label">Nouveau mot de passe</label>
                                        <input type="password" wire:model="editUsers.password" 
                                            class="form-control" style="border-bottom: solid; border-bottom-color: #20c997;"
                                        @error('editUsers.password') is-invalid @enderror value="{{old('editUsers.password')}}" required>

                                        @error("editUsers.password") 
                                            <span class="text-danger">{{$message}}</span> 
                                        @enderror
								    </div>
							    </div>
                                 <div class="col-lg-8 col-md-8 col-sm-12">
								    <div class="form-group">
                                        <label class="form-label">Confirmer Nouveau mot de Passe</label>
                                        <input type="password" wire:model="editUsers.password2" 
                                         class="form-control" style="border-bottom: solid; border-bottom-color: #20c997;"
                                        @error('editUsers.password2') is-invalid @enderror value="{{ old('editUsers.password2') }}" required>

                                        @error("editUsers.password2") 
                                            <span class="text-danger">{{$message}}</span> 
                                        @enderror
								    </div>
							    </div>
                           
                            </div>
                            <div class="card-footer">
                                <a type="submit" wire:click.prevent="updatePassword" class="btn  btn-info float-right">Reinitialiser</a>
                            </div>
                    
                        </div>
                    </div>
                     <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6"style="height: 200px;">
                        <div class="card">
                            <div class="card-header" style="background-color: #20c997;">
                                <h5 class="card-title text-white">
                                <i class="la la-users"></i> Selectionner L'utilisateur</h5>
                            </div>
                            <div class="card-body">
                               <div class="form-group">
									<select class="form-control" wire:model="selectedUser">
                                        <option>Nom de L'utilisateur</option>
										@foreach ($Users as $user)
											<option>{{$user->prenom}} {{$user->nom}}</option>
										@endforeach
									</select>
								</div>
                                 <div class="form-group">
									<select class="form-control" wire:model="selectedEmail">
                                         <option>Email</option>
										@foreach ($Users as $user)
											<option>{{$user->email}}</option>
										@endforeach
									</select>
								</div>
                            </div>
                          
                        </div>
                    </div>
                    <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6 ">
                        <div class="card">
                            <div class="card-header" style="background-color: #20c997;">
                                <h5 class="card-title text-white">
                                    <i class='fas fa-fingerprint'></i>Role Et permission</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text and below as a natural lead-in to the additional content. This content is a little <br> bit longer. Some quick example text to build the bulk</p>
                            </div>
                            <div class="card-footer d-sm-flex justify-content-between">
                                <div class="card-footer-link mb-4 mb-sm-0">
                                    <p class="card-text text-dark d-inline">Dernier Mise a jour</p>
                                </div>

                                <a href="javascript:void()" class="btn  btn-info">Enregistrer</a>
                            </div>
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