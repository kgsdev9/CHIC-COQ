@extends('dashboard.master.master')
@section('master')
<div id="layoutSidenav_content">
    <main>
       <div class="container-fluid">
          <h1 class="mt-4">Edition du  produit </h1>
          <div class="row">
             <div class="col-xl-12">
                <div class="card mb-4">
                    <form method="POST" action="{{route('update.product', $edit->id)}}"   enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                   <div class="card-body">
                      <div class="row">
                         <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Nom produit
                                    @error('name')
                                    <small style="color: red" >{{$message}}</small>
                                    @enderror
                                  </label>
                                  <input type="text" class="form-control" name="name" placeholder="Entrer le  nom  du produit" value="{{$edit->name}}">
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Prix du produit
                                    @error('price')
                                    <small style="color: red" >{{$message}}</small>
                                    @enderror
                                  </label>
                                  <input type="number" name="price" class="form-control" placeholder="valeur en Euro" value="{{$edit->price}}">
                               <div>

                               </div>
                            </div>
                         </div>
                      </div>

                      <div class="row">
                       <div class="col-md-6">
                           <div class="form-group">
                            <label class="form-label">Statut
                                @error('category_id')
                                <small style="color: red" >{{$message}}</small>
                                @enderror
                              </label>
                              <select name="statut" id="" class="form-control">
                                <option value="disponible">disponible</option>
                                <option value="stock vide">Indponible</option>

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

                                <select name="category_id" id="" class="form-control">
                                    <option value="{{$edit->category->id }}">{{ $edit->category->name }}</option>
                                    @foreach ($category as $c)
                                    @if (strcmp($edit->category->name, $c->name)!=0)
                                    <option value="{{ $c->id}}">{{ $c->name }}</option>
                                    @endif
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
                                  <input type="number"  name="quantity" class="form-control"  value="{{$edit->quantity}}">
                            </div>
                         </div>

                         <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Image du produit
                                    @error('quantity')
                                    <small style="color: red" >{{$message}}</small>
                                    @enderror
                                  </label>
                                  <input type="file" name="img_one" class="form-control"   value="{{$edit->img_one}}">
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
                              <input type="file" name="img_two"    class="form-control" value="{{$edit->img_two}}">
                           </div>
                        </div>

                        <div class="col-md-6">
                           <div class="form-group">
                            <label class="form-label">Image 3
                                @error('tag')
                                <small style="color: red" >{{$message}}</small>
                                @enderror
                              </label>
                              <input type="file" name="img_three"   class="form-control"  value="{{$edit->img_three}}">
                           </div>
                        </div>

                     </div>


                      <!-- /row-->
                      <div class="row">
                         <div class="col-md-12">
                              <textarea class="form-control" id="basic-form-textarea" rows="5" placeholder="Description" name="description" > {{$edit->descritpion}}</textarea>

                         </div>
                      </div>
                      <!-- /row-->
                      <br>
                      <button type="submit" class="btn btn-primary">Enregistrer les modifications </button>

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
