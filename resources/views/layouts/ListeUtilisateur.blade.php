@extends('master')

@section('content')
<div class="content-body">
 <div class="container-fluid">
  <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <p class="mb-0">Your business dashboard template</p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Bootstrap</a></li>
                        </ol>
                    </div>
                </div>
<div class="col-lg-12">

            <div class="card">
							<div class="card-header">
                                <h4 class="card-title">Liste Des Agents</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive table-striped">
										
											<div id="example3_wrapper" class="dataTables_wrapper no-footer">
                                            <div class="dataTables_length" id="example3_length"><label>Afficher<div class="dropdown bootstrap-select">
                                                <select name="example3_length" aria-controls="example3" class="" tabindex="-98">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select>
                                            <button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="button" title="10">
                                                <div class="filter-option">
                                                    <div class="filter-option-inner">
                                                        <div class="filter-option-inner-inner">10</div>
                                                    </div> 
                                                </div>
                                            </button>
                                            <div class="dropdown-menu " role="combobox">
                                                <div class="inner show" role="listbox" aria-expanded="false" tabindex="-1">
                                                      <ul class="dropdown-menu inner show"></ul></div></div></div>entries</label></div>
                                                         <div id="example3_filter" class="dataTables_filter">
                                                            <label>Rechercher :<input type="search" class="" placeholder="" aria-controls="example3"></label></div>
                                                                            <table  class="display dataTable no-footer" style="min-width: 845px" role="grid" aria-describedby="example3_info">
                                                                                <thead>
                                                                                    <tr role="row">
                                                                                        <th style="width: 250px;">Nom</th>
                                                                                        <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Prenom: activate to sort column ascending" style="width: 250px;">Prenom</th>
                                                                                        <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Adresse: activate to sort column ascending" style="width: 250px;">Adresse</th>
                                                                                        <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Sexe: activate to sort column ascending" style="width: 250px;">Sexe</th>
                                                                                        <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Ville: activate to sort column ascending" style="width: 250px;">Ville</th>
                                                                                        <th style="min-width: 250px; width: 250px;" class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Date de Naissance: activate to sort column ascending">Date de Naissance</th>
                                                                                        <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 250px;">Email</th>
                                                                                        <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Telephone: activate to sort column ascending" style="width: 250px;">Telephone</th>
                                                                                        <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 250px;">Role</th>
                                                                                        <th style="min-width: 250px; width: 250px;" class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="N° piece d'indentité: activate to sort column ascending">N° piece d'indentité</th>
                                                                                        <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 100px;">Action</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                        
                                                                                <tr role="row" class="odd">
                                                                                        <td style="min-width: 250px" class="sorting_1">Baumbach</td>
                                                                                        <td style="min-width: 250px">Prof. Max Legros</td>
                                                                                        <td style="min-width: 250px">266 Gislason Street Suite 703 Port Alfredo, IN 89611-1187</td>
                                                                                        <td style="min-width: 250px">masculin</td>
                                                                                        <td style="min-width: 250px">Sit veniam soluta mollitia magni quo. Numquam laborum est magnam. Rerum nemo quia consequatur aut.</td>
                                                                                        <td style="min-width: 250px">1974-10-09</td>
                                                                                        <td style="min-width: 250px">susanna79@example.com</td>
                                                                                        <td style="min-width: 250px"><ringover-84e06f14122c><ringoverc2c-84e06f14122c title="Appeler avec Ringover" class="a_ringover_c2c" style="cursor: pointer;" data-c2c-format-number="+16817014840"><ringoverc2c-logo-container-84e06f14122c><ringoverc2c-logo-84e06f14122c style="background-image: url(&quot;chrome-extension://ghhapdfndmlhligpkofeppifkgddkonj/../assets/img/logo-ringover-white.svg&quot;);"></ringoverc2c-logo-84e06f14122c></ringoverc2c-logo-container-84e06f14122c><ringoverc2c-number-84e06f14122c class="ringoverc2c-number-84e06f14122c" styles="">+1-681-701-4840</ringoverc2c-number-84e06f14122c></ringoverc2c-84e06f14122c></ringover-84e06f14122c></td>
                                                                                        
                                                                                        <td style="min-width: 250px"></td>
                                                                                        <td>FLXMBNN71N7</td>
                                                                                        <td style="min-width: 100px">
                                                                                            <a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                                                                            <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
                                                                                        </td>												
                                                                                    </tr> 

                                                                                     <tr role="row" class="odd">
                                                                                        <td style="min-width: 250px" class="sorting_1">Baumbach</td>
                                                                                        <td style="min-width: 250px">Prof. Max Legros</td>
                                                                                        <td style="min-width: 250px">266 Gislason Street Suite 703 Port Alfredo, IN 89611-1187</td>
                                                                                        <td style="min-width: 250px">masculin</td>
                                                                                        <td style="min-width: 250px">Sit veniam soluta mollitia magni quo. Numquam laborum est magnam. Rerum nemo quia consequatur aut.</td>
                                                                                        <td style="min-width: 250px">1985-01-03</td>
                                                                                        <td style="min-width: 250px">susanna79@example.com</td>
                                                                                        <td style="min-width: 250px"><ringover-84e06f14122c><ringoverc2c-84e06f14122c title="Appeler avec Ringover" class="a_ringover_c2c" style="cursor: pointer;" data-c2c-format-number="+16817014840"><ringoverc2c-logo-container-84e06f14122c><ringoverc2c-logo-84e06f14122c style="background-image: url(&quot;chrome-extension://ghhapdfndmlhligpkofeppifkgddkonj/../assets/img/logo-ringover-white.svg&quot;);"></ringoverc2c-logo-84e06f14122c></ringoverc2c-logo-container-84e06f14122c><ringoverc2c-number-84e06f14122c class="ringoverc2c-number-84e06f14122c" styles="">+1-681-701-4840</ringoverc2c-number-84e06f14122c></ringoverc2c-84e06f14122c></ringover-84e06f14122c></td>
                                                                                        
                                                                                        <td style="min-width: 250px"></td>
                                                                                        <td>FLXMBNN71N7</td>
                                                                                        <td style="min-width: 100px">
                                                                                            <a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                                                                            <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
                                                                                        </td>												
                                                                                    </tr> 
                                                                            </tbody>
                                                                            </table><div class="dataTables_info" id="example3_info" role="status" aria-live="polite">Affichage de 1 à 10 sur 10 entrées</div><div class="dataTables_paginate paging_simple_numbers" id="example3_paginate"><a class="paginate_button previous disabled" aria-controls="example3" data-dt-idx="0" tabindex="0" id="example3_previous">Previous</a><span><a class="paginate_button current" aria-controls="example3" data-dt-idx="1" tabindex="0">1</a></span><a class="paginate_button next disabled" aria-controls="example3" data-dt-idx="2" tabindex="0" id="example3_next">Next</a></div></div>
										</div>
                            </div>
                        </div>
                    </div>
                </div>
      <!-- /.modal-dialog --> 
@endsection