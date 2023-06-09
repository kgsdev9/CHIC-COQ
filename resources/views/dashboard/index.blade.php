@extends('dashboard.master.master')

@section('master')

<div id="layoutSidenav_content">
    <main>
       <div class="container-fluid">
          <h1 class="mt-4">ADMINISTRATION CHIC COQ </h1>
          <ol class="breadcrumb mb-4">
             <li class="breadcrumb-item active">Bienvenue </li>
          </ol>
          <div class="row">
             <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                   <div class="card-body">TOTAL PRODUIT {{count( $products)}}</div>
                   <div class="card-footer d-flex align-items-center justify-content-between">
                      <a class="small text-white stretched-link" href="{{route('product.liste')}}">Consulter</a>
                      <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                   </div>
                </div>
             </div>
             <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                   <div class="card-body">TOTAL COMMANDE  {{count( $orders)}}</div>
                   <div class="card-footer d-flex align-items-center justify-content-between">
                      <a class="small text-white stretched-link" href="{{route('oders.liste')}}">Consulter</a>
                      <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                   </div>
                </div>
             </div>
             <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                   <div class="card-body">TOTAL UTILISATEUR {{count($users)}}</div>
                   <div class="card-footer d-flex align-items-center justify-content-between">
                      <a class="small text-white stretched-link" href="{{route('users.liste')}}">Consulter</a>
                      <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                   </div>
                </div>
             </div>
             <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                   <div class="card-body">TOTAL CATEGORIES {{count($category)}} !</div>
                   <div class="card-footer d-flex align-items-center justify-content-between">
                      <a class="small text-white stretched-link" href="{{route('category.liste')}}">Consulter </a>
                      <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                   </div>
                </div>
             </div>
          </div>

       </div>
    </main>
    
 </div>


@endsection
