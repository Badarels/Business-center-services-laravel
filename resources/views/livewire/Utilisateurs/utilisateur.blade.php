<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
 
	<div class="content-body">	
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
											<a class="btn btn-primary" wire:click.prevent="goToUsers">Ajouter nouveau</a>
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
																<a href="javascript:void(0);" class="btn btn-sm btn-primary" wire:click='goToEditUsers({{$user->id}})'><i class="la la-pencil"></i></a>
																<a href="javascript:void(0);" class="btn btn-sm btn-danger" wire:Click="confimDelete('{{$user->prenom}}{{$user->nom}}' , {{$user->id}})"><i class="la la-trash-o"></i></a>
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
																<a class="dropdown-item" href="javascript:void(0);" wire:click='goToEditUsers( {{$user->id}})'>Modifier</a>
																<a class="dropdown-item text-danger" href="javascript:void(0);" wire:Click="confimDelete('{{$user->prenom}}{{$user->nom}}' , {{$user->id}})">Suprimer</a>
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
            <script>

 window.addEventListener("showConfirmMessage", event=>{
	 	Swal.fire({
			title: event.detail.message.title,
			text: event.detail.message.text,
			icon: event.detail.message.type,
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Oui, supprimez-le!',
			cancelButtonText: 'Annuler',
			}).then((result) => {
			if(result.isConfirmed){
				@this.deleteUsers(event.detail.message.data.users_id);
		}
	})
		//confirm("Êtes-vous sûr de vouloir supprimer l'utilisateur?")
})

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