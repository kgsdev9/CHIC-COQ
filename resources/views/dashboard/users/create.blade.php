@extends('dashboard.master.master')
@section('master')
<div id="layoutSidenav_content">
    <main>
       <div class="container-fluid">
          <h1 class="mt-4">Nouvelle catégories </h1>
          <ol class="breadcrumb mb-4">
             <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
             <li class="breadcrumb-item active">Add listing</li>
          </ol>
          <div class="row">
             <div class="col-xl-12">
                <div class="card mb-4">
                   <div class="card-header">
                      Information sur le produit
                   </div>
                   <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                   <div class="card-body">
                      <div class="row">
                         <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Nom produit
                                    @error('name')
                                    <small style="color: red" >{{$message}}</small>
                                    @enderror
                                  </label>
                                  <input type="text" class="form-control" id="cleave-ccard" placeholder="Electronique" name="name">
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="cleave-phone" class="form-label">Image  @error('image')
                                    <small class="text-danger">{{$message}}</small>

                                @enderror</label>
                                <input type="file" class="form-control" id="cleave-phone"  name="image">
                               <div>

                               </div>
                            </div>
                         </div>
                      </div>

                      <!-- /row-->
                      <div class="row">
                         <div class="col-md-12">
                              <textarea class="form-control" id="basic-form-textarea" rows="5" placeholder="Description" name="description" value="{{old('description')}}"></textarea>

                         </div>
                      </div>
                      <!-- /row-->
                      <br>
                      <button type="submit" class="btn btn-primary">Ajouter la catégorie  </button>

                      <!-- /row-->

                      <!-- /row-->

                      <!-- /row-->
                   </div>
                </form>
                </div>
             </div>



          </div>

       </div>
    </main>
 </div>


@endsection
