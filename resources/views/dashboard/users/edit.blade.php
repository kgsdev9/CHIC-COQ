@extends('dashboard.master.master')
@section('master')
<div id="layoutSidenav_content">
    <main>
       <div class="container-fluid">
          <h1 class="mt-4">Edition de  l'utilisateur   </h1>
          <div class="row">
             <div class="col-xl-12">
                <div class="card mb-4">
                   <div class="card-header">
                      Information sur le produit
                   </div>

                   <form action="{{route('users.update', $ressource->id)}}" method="POST">
                    @csrf
                    @method('PATCH')
                   <div class="card-body">
                      <div class="row">
                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="cleave-ccard" class="form-label">Nom d'utiliateur  @error('name')
                                    <small class="text-danger">{{$message}}</small>

                                @enderror</label>
                                <input type="text" class="form-control" id="cleave-ccard" placeholder="Electronique" name="name" value="{{$ressource->name}}">
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="cleave-phone" class="form-label">email  @error('email')
                                    <small class="text-danger">{{$message}}</small>

                                @enderror</label>
                                <input type="email" class="form-control" id="cleave-phone" placeholder="dcmarket@gmail.com" name="email" value="{{$ressource->email}}">
                               <div>

                               </div>
                            </div>
                         </div>
                      </div>

                      <!-- /row-->


                      <div class="row">
                        <div class="col-md-12">
                           <div class="form-group">
                               <label for="cleave-ccard" class="form-label">Role   @error('name')
                                   <small class="text-danger">{{$message}}</small>

                               @enderror</label>
                               <select name="role_id" id="" class="form-control">

                                @foreach ($roles as $value )
                                <option value="{{$value->id}}">{{$value->name}}</option>
                                @endforeach

                            </select>
                           </div>
                        </div>

                     </div>




                     <div class="row">
                        <div class="col-xl-6">
                            <div class="mb-3 mb-xl-0">
                                <label for="cleave-phone" class="form-label">Mot de passe  @error('password')
                                        <span class="text-danger">{{$message}}</span>
                                @enderror</label>
                                <input type="password" class="form-control" id="cleave-phone" placeholder="Entrer le mot de passe" name="password" value="{{$ressource->password}}">
                            </div>
                        </div><!-- end col -->

                        <div class="col-xl-6">
                            <div class="mb-0">
                                <label for="cleave-numeral" class="form-label">Confirmer le mot de passe</label>
                                <input type="password" class="form-control" placeholder="Confirmer le mot de passe" id="cleave-numeral" name="password_confirmation" value="{{$ressource->password}}">
                            </div>
                        </div><!-- end col -->
                    </div><!-- e

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
