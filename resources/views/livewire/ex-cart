<div>
@if(session()->get('cart') >0 )


    <!-- section-->
    <div class="cart-main-area mtb-60px">
        <div class="container">
            <h3 class="cart-page-title">Votre Panier </h3>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <form action="#">
                        <div class="table-content table-responsive cart-table-content">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Prix </th>
                                        <th>Qty</th>
                                        <th>Subtotal</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( (array)session('cart') as $id => $details)
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="#"><img src="{{asset('cover/'.$details['img_one'])}}" alt="" height="60px;"></a>
                                        </td>
                                        <td class="product-name"><a href="#">{{ Str::limit($details['name'], 30)}}</a></td>
                                        <td class="product-price-cart"><span class="amount">{{$details['price']}} FCFA</span></td>


                      <td >

                        <div>
                            <input type="button"  wire:click="decrement({{$details['product_id']}})"    value="-" class="form-control">
                            <input type="number"  value="{{ $details['quantity']}}" class="quantity-field form-control-sm form-input   ">
                            <input type="button"  wire:click="increment({{$details['product_id']}})"  value="+" class="form-control " data-field="quantity">
                          </div>

                      </td>

                                        <td class="product-subtotal">{{ $details['price'] * $details['quantity'] }} FCFA</td>
                                        <td class="product-remove">

                                            <a wire:click="delete({{$details['product_id']}})" style="cur
                                            pointer;"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                        @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cart-shiping-update-wrapper">
                                    <div class="cart-shiping-update">
                                        <a href="{{route('payment')}}">Payer à la livraison </a>
                                    </div>
                                    <div class="cart-clear">

                                        <a href="https://wa.me/+2250708375478?text={{$mycart }}">Commander Via WhatsApp </a>
                                        <a href="{{route('check.paie')}}">Payer directement </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>



</div>



@else

<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-content">
                    <h1 class="breadcrumb-hrading">VOTR PANIER EST VIDE </h1>
                    <ul class="breadcrumb-links">
                        <li><a href="{{route('sotre.index')}}">Commander des produits </a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endif
</div>
