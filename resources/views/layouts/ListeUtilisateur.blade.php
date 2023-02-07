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
                                <div class="table-responsive">
                                    <table class="table table-sm mb-0 table-striped">
                                        <thead>
                                            <tr>
												<th class="px-5 py-3">Nom</th>
                                                <th class="py-3">Prenom</th>
                                                <th class="py-3">Adresse</th>
                                                <th class="py-3">Sexe</th>
                                                <th class="py-3">Date de Naissance</th>
                                                <th class="py-3">Email</th>
                                                <th class="py-3">Ville</th>
                                                <th class="py-3">Telephone</th>
                                                <th class="py-3">Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody id="customers">
                                          <tr class="btn-reveal-trigger">
                                                <td class="p-3">
                                                    <a href="{{url('template/javascript:void(0);')}}">
                                                        <div class="media d-flex align-items-center">
                                                            <div class="avatar avatar-xl mr-2">
                                                                <img class="rounded-circle img-fluid"  src="{{asset('template/images/avatar/5.png')}} " width="30" alt="">
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="mb-0 fs--1">Ricky Antony</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="py-2">Herman Beck</td>
                                                <td class="py-2">Herman Beck</td>
                                                <td class="py-2">Herman Beck</td>
                                                 <td class="py-2">30/03/2018</td>
                                                <td class="py-2">Herman Beck</td>
                                                <td class="py-2">Herman Beck</td>
                                                <td class="py-2">221771709280</td>
                                                <td class="py-2">Mechanical</td>
                                                <td><span class="badge badge-rounded badge-primary">DONE</span></td>
                                                <td>
                                                    <a href="{{url('template/edit-student.html')}}" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                                    <a href="{{url('template/javascript:void(0);')}}" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
                                                </td>
                                            </tr>
                      
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
      <!-- /.modal-dialog --> 
@endsection