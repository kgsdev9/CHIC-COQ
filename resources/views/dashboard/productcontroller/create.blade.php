@extends('dashboard.master.master')
@section('master')
<div id="layoutSidenav_content">
    <main>
       <div class="container-fluid">
          <h1 class="mt-4">Nouveau produit </h1>
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
                   <form method="POST" action="{{route('create_product')}}"   enctype="multipart/form-data">
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
                               <input type="text" class="form-control" name="name" placeholder="Entrer le  nom  du produit" value="{{old('name')}}">
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Prix du produit
                                    @error('price')
                                    <small style="color: red" >{{$message}}</small>
                                    @enderror
                                  </label>
                                  <input type="number" name="price" class="form-control" placeholder="valeur en FCFA"  value="{{old('price')}}">
                               <div>

                               </div>
                            </div>
                         </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                            <label class="form-label">Statut
                                @error('statut')
                                <small style="color: red" >{{$message}}</small>
                                @enderror
                              </label>
                              <select name="statut" id="" class="form-control">
                                <option value="">-------------------</option>

                                <option value="disponible">disponible</option>
                                <option value="stock vide">indisponible</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                            <label class="form-label">Catégorie
                                @error('category_id')
                                <small style="color: red" >{{$message}}</small>
                                @enderror
                              </label>
                              <div>

                                <select class="form-control custom-select" name="category_id">
                                    <option value="">Sélectionner la catégorie</option>
                                          @foreach ($category as  $category)
                                          <option value="{{$category->id}}">{{$category->name}}</option>
                                          @endforeach
                                  </select>
                              </div>
                           </div>
                        </div>
                     </div>
                      <!-- /row-->
                      <div class="row">
                         <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Quantite Du Produit
                                    @error('quantity')
                                    <small style="color: red" >{{$message}}</small>
                                    @enderror
                                  </label>
                                  <input type="number"  name="quantity" class="form-control" placeholder="Entrer La Quantite Du Produit">
                            </div>
                         </div>

                         <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Image du produit
                                    @error('quantity')
                                    <small style="color: red" >{{$message}}</small>
                                    @enderror
                                  </label>
                                  <input type="file" name="img_one" class="form-control"   value="{{old('img_one')}}">
                            </div>
                         </div>

                      </div>


                      <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                            <label class="form-label">Image 2
                                @error('images')
                                <small style="color: red" >{{$message}}</small>
                                @enderror
                              </label>
                              <input type="file" name="img_two"    class="form-control"  value="{{old('img_two')}}">
                           </div>
                        </div>

                        <div class="col-md-6">
                           <div class="form-group">
                            <label class="form-label">Image 3
                                @error('tag')
                                <small style="color: red" >{{$message}}</small>
                                @enderror
                              </label>
                              <input type="file" name="img_three"  class="form-control" value="{{old('img_three')}}">
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
                      <button type="submit" class="btn btn-primary">Ajouter le produit </button>

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
