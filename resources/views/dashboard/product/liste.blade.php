@extends('dashboard.master.master')

@section('master')


<div id="layoutSidenav_content">
    <main>
       <div class="container-fluid">
          <h1 class="mt-4">MES MENUS </h1>
          <ol class="breadcrumb mb-4">
             <li class="breadcrumb-item"><a >Mes produits</a></li>
             <li class="breadcrumb-item active">Liste </li>
          </ol>
          <div class="row">
            @foreach ($productliste as $ressource )
             <div class="col-md-4 col-sm-6 mb-4 pb-2">
                <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                   <div class="list-card-image">
                      <div class="member-plan position-absolute"><span class="badge badge-dark">{{$ressource->statut}}</span></div>
                      <a >
                      <img src="{{asset('cover/'.$ressource->img_one)}}" class="img-fluid item-img">
                      </a>
                   </div>
                   <div class="p-3 position-relative">
                      <div class="list-card-body">
                         <h6 class="mb-1"><a class="text-black">
                            {{$ressource->name}}
                            </a>
                         </h6>
                         <p class="text-gray mb-3">catégorie {{$ressource->category->name}}</p>
                            </p>
                            <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2">
                                Prix : {{$ressource->price}} FCFA

                            </span> <span class="float-right text-black-50"> Quantite {{$ressource->quantity}}  </span></p>
                      </div>
                        <a href="{{route('product.dashboard.edit', $ressource->id)}}" class="btn btn-warning">Editer le produit </a>
                        <a href="{{route('product.dashboard.remove', $ressource->id)}}" class="btn btn-danger" onclick="return confirm('Voulez vous vraiment supprimer ?')">Supprimer  le produit </a>
                   </div>
                </div>
             </div>
             @endforeach

             <div class="col-md-12 text-center load-more">

                    {{$productliste->links()}}
                </button>
             </div>
          </div>
       </div>
    </main>

 </div>





@endsection
