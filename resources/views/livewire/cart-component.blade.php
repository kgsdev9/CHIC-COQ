<div>
    <main>

        <!-- =======================
        Main START -->
        <section class="pt-3 pt-lg-5">
            <div class="container">
                <div class="row g-4 g-lg-5">

                    <!-- Left side START -->
                    <div class="col-lg-8">
                        <div class="vstack gap-3">

                            <!-- Your Order START -->
                            <div class="card bg-transparent">
                                <!-- Card header -->
                                <div class="card-header px-0 pb-3">
                                    <h4 class="card-title mb-0">Votre commande</h4>
                                </div>

                                <!-- Card body -->
                                <div class="card-body p-0">
                                    <!-- Product item START -->
                                    @foreach( (array)session('cart') as $id => $details)
                                    <div class="bg-light px-4 py-2 rounded-2 mb-3">
                                        <div class="row align-items-center">
                                            <!-- Product detail -->
                                            <div class="col-md-9">
                                                <div class="d-sm-flex align-items-center">
                                                    <div class="d-flex align-items-center mb-2 mb-sm-0">
                                                        <img src="{{asset('cover/'.$details['img_one'])}}" class="w-90" alt="">
                                                    </div>
                                                    <!-- Title and list -->
                                                    <div>
                                                        <h5 class="mb-1"><a href="#">{{ Str::limit($details['name'], 30)}}</a></h5>
                                                        <ul class="nav nav-divider small align-items-center">
                                                            <li class="nav-item">{{$details['price']}} FCFA </li>
                                                            <li class="nav-item">  <input type="button"  wire:click="increment({{$details['product_id']}})"  value="+" class="form-control " data-field="quantity"></li>
                                                            <li class="nav-item">     <input type="button"  wire:click="decrement({{$details['product_id']}})"    value="-" class="form-control"></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Button -->
                                            <div class="col-md-3 text-end">

                                                <span>Quantité {{$details['quantity']}}</span>
                                                <a href="#" class="btn btn-link mb-0">Total {{ $details['price'] * $details['quantity'] }} FCFA</a>
                                                <a wire:click="delete({{$details['product_id']}})" style="cur
                                                pointer;"><i class="fa fa-times"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach
                                </div>
                            </div>

                            <div class="card bg-transparent">
                                <!-- Card header -->
                                <div class="card-header px-0 pb-3">
                                    <h4 class="card-title mb-0">Option de livraison </h4>
                                </div>

                                <!-- Card body -->
                                <div class="card-body p-0">
                                    <div class="row g-3 g-sm-4">
                                        <!-- Delivery option -->
                                        <div class="col-sm-6">
                                            <div class="bg-light rounded-2 p-3">
                                                <div class="form-check form-check-inline mb-0">

                                                    <label class="form-check-label h5 mb-0" for="delivery1">Livraison via Whattssap</label>
                                                   <a href="https://wa.me/+2250768365866?text={{$mycart}}">Continuer vers whattssap</a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Delivery option -->
                                        <div class="col-sm-6">
                                            <div class="bg-light rounded-2 p-3">
                                                <div class="form-check form-check-inline mb-0">
                                                    <input class="form-check-input" type="radio" name="discountOptions" id="delivery2" value="option2">
                                                    <label class="form-check-label h5 mb-0" for="delivery2">Livraison à domicile</label>
                                                    <p class="mb-1 small">Continuer en reseinant vos informations</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Delivery Options END -->

                            <hr> <!-- Divider -->



                        </div>
                    </div>
                    <!-- Left side END -->

                    <!-- Right Side START -->
                    <div class="col-lg-4">
                        <!-- Coupon code START -->
                        <div class="mb-4">
                            <h5 class="mb-2">Entrer un  Coupon Code</h5>
                            <!-- Input group -->
                            <div class="input-group">
                                <input class="form-control form-control" placeholder="Coupon code">
                                <button type="button" class="btn btn-dark">Appliquer</button>
                            </div>
                            <small>20% sur le total du panier</small>
                        </div>
                        <!-- Coupon code END -->

                        <!-- Order summary START -->
                        <div class="card bg-light border border-secondary border-opacity-25 rounded-2 p-4">
                            <!-- card header -->
                            <div class="card-header bg-light p-0 pb-3">
                                <h5 class="card-title mb-0">Votre commande</h5>
                            </div>

                            <!-- Card body -->
                            <div class="card-body p-0 pb-3">
                                <ul class="list-group list-group-borderless">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>Taxe </span>
                                        <span class="h6 mb-0">0 FCFA </span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Card footer -->
                            <div class="card-footer bg-light border-top p-0 pt-3">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span>Total </span>
                                    <span class="h5 mb-0">1333 FCFA </span>
                                </div>

                                <!-- Button -->
                                <div class="d-grid"><a href="#" class="btn btn-primary mb-0">Payer Directement </a></div>
                            </div>
                        </div>
                        <!-- Order summary END -->
                        <p class="small mb-0 text-center mt-2">Notre paiement est securisé vous ne prenez aucun risque en payant  <a href="#">Terme et condition </a></p>
                    </div>
                    <!-- Right Side END -->

                </div>
            </div>
        </section>
        <!-- =======================
        Main END -->

        </main>
</div>
