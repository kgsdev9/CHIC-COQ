@extends('dashboard.master.master')
@section('master')
<div id="layoutSidenav_content">
    <main>
       <div class="container-fluid">
          <h1 class="mt-4">Edition de la catégorie   </h1>
          <div class="row">
             <div class="col-xl-12">
                <div class="card mb-4">
                   <div class="card-header">
                      Information sur le produit
                   </div>

                   <form action="{{route('category.update', $edit->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                   <div class="card-body">
                      <div class="row">
                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="cleave-ccard" class="form-label">Nom d'utiliateur  @error('name')
                                    <small class="text-danger">{{$message}}</small>

                                @enderror</label>
                                <input type="text" class="form-control" id="cleave-ccard" placeholder="Electronique" name="name" value="{{$edit->name}}">
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="cleave-phone" class="form-label">Image  @error('image')
                                    <small class="text-danger">{{$message}}</small>

                                @enderror</label>
                                <input type="file" class="form-control" id="cleave-phone" placeholder="dcmarket@gmail.com" name="image" value="{{$edit->image}}">
                               <div>

                               </div>
                            </div>
                         </div>
                      </div>

                      <!-- /row-->
                      <div class="row">
                         <div class="col-md-12">
                            <textarea name="description" id="" cols="30" rows="10" class="form-control">  {{$edit->description}}</textarea>

                         </div>
                      </div>
                      <!-- /row-->
                      <br>
                      <button type="submit" class="btn btn-primary">Enregistrer les modifications   </button>

                      <!-- /row-->

                      <!-- /row-->

                      <!-- /row-->
                   </div>
                </form>
                </div>
             </div>


    </main>
 </div>


@endsection
