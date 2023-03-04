  <div>
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
					<div class="col-xl-12 col-xxl-12 col-sm-12">
                        <div class="card"> 
                            <div class="card-header">
								<h5 class="card-title">Liste des Utilisateurs</h5>
							</div>
							<div class="card-body">
                                <div class="col-lg-12">
							<div class="row tab-content">
								<div id="list-view" class="tab-pane fade active show col-lg-12">
									<div class="card">
										<div class="card-header">
											
			
										</div>
										<div class="card-body">
											<div class="table-responsive table-striped">
												
												<table id="example3" class="display" style="min-width: 845px">
													<thead>
														<tr>
															<th>Nom</th>
															<th>Prenom</th>
															<th>Email</th>
															<th>Role</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>
													@foreach ($Users as $user)
														<tr>
															<td style="min-width: 250px">{{$user->nom}}</td>
															<td style="min-width: 250px">{{$user->prenom}}</td>
															<td style="min-width: 250px">{{$user->email}}</a></td>
																<td style="min-width: 250px">
																    @foreach($user->role as $role)
																			{{$role->detail_roles}}
																	@endforeach
																</td>			
															<td style="min-width: 100px">
																<div class="dropdown">
														<button class="btn btn-link" type="button" data-toggle="dropdown">
															<span class="dropdown-dots fs--1"></span>
														</button>
														<div class="dropdown-menu dropdown-menu-right border py-0">
															<div class="py-2">
															
																<a class="dropdown-item text-warning" href="javascript:void(0);" wire:click.prevent='showCreateModal()'>Reinitialiser mot de Passe</a>
																<a class="dropdown-item text-important" href="javascript:void(0);" wire:Click="confimDelete('{{$user->prenom}}{{$user->nom}}',{{$user->id}})">Role Et Permission</a>
																
														</div>
													</div>
															</td>												
														</tr>
			
													@endforeach
		
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
								
                            </div>
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
