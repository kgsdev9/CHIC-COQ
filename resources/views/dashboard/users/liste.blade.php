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
                             Liste des utilisateurs
                           </div>
                           <div class="card-body">
                              <div class="table-responsive">
                                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                       <tr class="text-uppercase">
                                          <th> Nom d'utilisateur </th>
                                          <th> Email </th>

                                          <th>date de creation </th>
                                          <th>role </th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <!----><!---->

                                       @foreach ($ressourcesUsers as $ressource )
                                       <tr>
                                          <td>
                                            {{$ressource->name}}

                                        </td>
                                          <td>   {{$ressource->email}}	</td>
                                          <td>{{$ressource->created_at}}</td>
                                          <td>{{$ressource->role->name}}</td>

                                          <td>
                                            <a href="{{route('users.edit', $ressource->id)}}" class="btn btn-primary btn-sm">Edition  </a>
                                            <a href="{{route('users.destroy', $ressource->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('Voulez vous vraiment effectuer cette action ? ')">Supression  </a>
                                        </td>
                                       </tr>
                                        @endforeach
                                    </tbody>
                                 </table>

                                 {{$ressourcesUsers->links()}}
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </main>

@endsection
