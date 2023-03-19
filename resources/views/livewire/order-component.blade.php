<div>

    <div class="login-register-area mb-60px mt-53px">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 mx-auto">
                    <div class="col-lg-12   ">
                        <div class="your-order-area">
                            <h3>VOTRE COMMANDE </h3>
                            <div class="your-order-wrap gray-bg-4">
                                <div class="your-order-product-info">
                                    <div class="your-order-top">
                                        <ul>
                                            <li>Produit</li>
                                            <li>TOTAL</li>
                                        </ul>
                                    </div>
                                    <div class="your-order-middle">
                                        <ul>
                                            @foreach( (array)session('cart') as $id => $details)
                                            @php $total = 0 @endphp
                                            @php $total += $details['price'] * $details['quantity'] @endphp
                                            <li><span class="order-middle-left">{{ Str::limit($details['name'], 30) }} X {{ $details['quantity']  }}</span>
                                                <span class="order-price"> {{ $details['price'] *  $details['quantity']}} FCFA </span>

                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="your-order-bottom">
                                        <ul>
                                            <li class="your-order-shipping">Livraison </li>
                                            <li>Gratuite </li>
                                        </ul>
                                    </div>
                                    <div class="your-order-total">
                                        <ul>
                                            <li class="order-total">Total</li>
                                            <li>                              {{$totalpanier}} FCFA </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="payment-method">
                                    <div class="payment-accordion element-mrg">
                                        <div class="panel-group" id="accordion">
                                            <div class="panel payment-accordion">
                                                <div class="panel-heading" id="method-three">
                                                    <h4 class="panel-title">
                                                        <a class="" data-bs-toggle="collapse" data-parent="#accordion" href="#method3" aria-expanded="true">
                                                            PAYER VIA ORANGE MONEY , MOOV MONEY MTN MONEY
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="method3" class="panel-collapse collapse show" style="">
                                                    <div class="panel-body">
                                                        <p>Pour Confirmer le paiemet veuillez Interroger le bouton ci-dessous pour finaliser votre Commande en toute securité </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Place-order mt-25">
                                <a class="btn-hover" href="#">Payer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>




