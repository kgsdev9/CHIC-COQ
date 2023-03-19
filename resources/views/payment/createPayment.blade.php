@extends('layout.app')

@section('content')

@if(session('cart') > 0)
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
                            <a class="btn-hover" href="#" onclick="checkout()">Payer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra-js')
<script>
    function checkout() {
        CinetPay.setConfig({
            apikey: '385835965629a9f28b4bb59.80201951',
            site_id: '987464',
            notify_url: 'http://mondomaine.com/notify/',
            mode: 'PRODUCTION'
        });
        CinetPay.getCheckout({
            transaction_id: Math.floor(Math.random() * 100000000).toString(), // YOUR TRANSACTION ID
            amount: {{$totalpanier}},
            currency: 'XOF',
            channels: 'ALL',
            description: 'POULET',
             //Fournir ces variables pour le paiements par carte bancaire
            customer_name:"{{Auth::user()->name}}",//Le nom du client
            customer_email: "{{Auth::user()->email}}",//l'email du client

        });
        CinetPay.waitResponse(function(data) {
            if (data.status == "REFUSED") {
                if (alert("Votre paiement a échoué")) {
                    window.location.reload();
                }
            } else if (data.status == "ACCEPTED") {
                if (alert("Votre paiement a été effectué avec succès")) {
                    window.location.reload();
                }
            }
        });
        CinetPay.onError(function(data) {
            console.log(data);
        });
    }
</script>


@else

<span>AJOUTE DES PRODUITS A VOTRE COMMANDE </span>
@endif

@endsection
