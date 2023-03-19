<div>


    <section class="product-details-area mtb-60px">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="product-details-img product-details-tab">
                        <div class="zoompro-wrap zoompro-2">
                            <div class="zoompro-border zoompro-span">
                                <img class="zoompro" src="{{asset('cover/'.$colletiondetail->img_one)}}" data-zoom-image="{{asset('cover/'.$colletiondetail->img_one)}}" alt="">
                            </div>
                        </div>
                        <div id="gallery" class="product-dec-slider-2 slick-initialized slick-slider">






                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="product-details-content">
                        <h2> {{$colletiondetail->name}}</h2>
                        <p class="reference">Quanrtité :<span> {{$colletiondetail->quantity}}</span></p>

                        <div class="pricing-meta">
                            <ul>
                                <li class="old-price not-cut">{{$colletiondetail->price}} FCFA </li>
                            </ul>
                        </div>
                        <p>{{$colletiondetail->descritpion}} </p>
                        <div class="pro-details-list">
                            <ul>
                                <li>- 0.5 mm Dail</li>
                                <li>- Inspired vector icons</li>
                                <li>- Very modern style</li>
                            </ul>
                        </div>
                        <div class="pro-details-quality mt-0px">
                            <div class="pro-details-cart btn-hover">
                                <a href="#" wire:click="add({{{$colletiondetail->id}}})">Commander </a>
                            </div>
                        </div>


                </div>
            </div>
        </div>
    </section>



</div>
