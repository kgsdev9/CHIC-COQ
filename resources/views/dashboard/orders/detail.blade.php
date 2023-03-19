@extends('dashboard.master.master')

@section('master')
<div id="layoutSidenav_content">
    <main>
       <div class="container-fluid">
          <h1 class="mt-4">Detail de la commande </h1>

          <div class="row">
             <div class="col-xl-12">
                <div class="card mb-4">
                   <div class="card-body">
                      <div class="card mb-4 order-list">
                         <div class="gold-members p-4">
                            <a href="#">
                            </a>
                            <div class="media">
                               <a href="#">
                               <img class="mr-4" src="{{asset('logo.jpg')}}" alt="Generic placeholder image">
                               </a>
                               <div class="media-body">
                                  <a href="#">
                                  <span class="float-right text-success">Commande Validée <i class="feather-check-circle text-success"></i></span>
                                  </a>
                                  <h6 class="mb-3"><a href="#">
                                     </a><a class="text-dark"> Lieu de livraison : {{$orders->adresse_delivry	}}
                                     </a>
                                  </h6>
                                  </p>
                                  <p class="text-black-50 mb-3"><i class="feather-list"></i> Date de la commande <i class="feather-clock ml-2"></i> {{$orders->created_at	}}</p>
                                  <p class="text-dark">Télephone {{$orders->phone	}}
                                  </p>
                                  <hr>

                                  <p class="mb-0 text-dark text-dark pt-2"><span class="text-dark font-weight-bold"> Quantité de comanade:</span>  {{$orders->quantity}}
                                  </p>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="table-responsive">
                         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                               <tr>
                                  <th>Image</th>
                                  <th>Produit </th>
                                  <th>Prix </th>
                                  <th>Quantité  </th>
                                  <th>Sous-total</th>

                               </tr>
                            </thead>
                            <tbody>

                                @foreach($orders->products as $s)
                               <tr>
                                  <td> <img src="{{asset('cover/'.$s->img_one)}}" style="height:60px;" alt=""> </td>
                                  <td>{{Str::limit($s->name, 30)}}</td>
                                  <td>{{$s->price}}  FCFA</td>
                                  <td>{{$s->pivot->quantity}}</td>
                                  <td class="text-end">{{$s->price *  $s->pivot->quantity }}FCFA</td>

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

 </div>

@endsection
