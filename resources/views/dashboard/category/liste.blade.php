@extends('dashboard.master.master')

@section('master')


<div id="layoutSidenav_content">
    <main>

       <div class="container-fluid">

          <h1 class="mt-4">Liste des categories </h1>

          <div class="row">
             <div class="col-xl-12">
                @foreach ($category as $ressource )
                <div class="card mb-4 order-list">
                   <div class="gold-members p-4">
                      <a href="#">
                      </a>
                      <div class="media">
                         <a href="#">
                         <img class="mr-4" src="{{asset('categorie/images/'.$ressource->image)}}" alt="Generic placeholder image">
                         </a>
                         <div class="media-body">
                            <h6 class="mb-1">{{$ressource->name}}</h6>

                            <p class="text-black-50">
                                {{$ressource->description }}
                            </p>
                            <hr>
                            <div class="float-right">
                                <a href="{{route('category.edit', $ressource->id)}}" class="btn btn-sm btn-success"><i class="feather-trash"></i> Modififer</a>
                               <a href="{{route('category.destroy', $ressource->id)}}" class="btn btn-sm btn-danger"><i class="feather-trash"></i> Supprimer </a>
                            </div>
                            </p>
                         </div>
                      </div>
                   </div>
                </div>
                @endforeach

                <nav aria-label="Page navigation example">
                   <ul class="pagination pagination-sm mb-4 justify-content-center">
                        {{$category->links()}}
                   </ul>
                </nav>
             </div>
          </div>
       </div>
    </main>

 </div>





@endsection
