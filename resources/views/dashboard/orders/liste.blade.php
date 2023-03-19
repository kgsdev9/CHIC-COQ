@extends('dashboard.master.master')
@section('master')


   <div id="layoutSidenav_content">
            <main>
               <div class="container-fluid">
                  <h1 class="mt-4"> </h1>

                  <div class="row">
                     <div class="col-xl-12">
                        <div class="card mb-4">
                           <div class="card-header">
                              <i class="fas fa-table mr-1"></i>
                             Liste de mes commandes
                           </div>
                           <div class="card-body">
                              <div class="table-responsive">
                                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                       <tr class="text-uppercase">
                                          <th>Code de commande </th>
                                          <th>Nom du client </th>
                                          <th>Numero </th>
                                          <th>Quantite </th>
                                          <th>Commune </th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <!----><!---->

                                       @foreach ($orders as $ressource )
                                       <tr>
                                          <td>
                                            {{$ressource->code}}

                                        </td>
                                          <td>   {{$ressource->fullname}}	</td>
                                          <td>{{$ressource->phone}}</td>

                                          <td>{{$ressource->quantity}}</td>

                                          <td>{{$ressource->commune}}</td>

                                          <td><a href="{{route('orders.details', $ressource->id)}}" class="btn btn-primary btn-sm">Consulter </a></td>
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
            </main>

@endsection
