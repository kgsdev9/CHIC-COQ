<div>
    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Slider START -->
                    <div class="tiny-slider tns-nav-line rounded-3">
                        <div class="tiny-slider-inner"
                        data-autoplay="true"
                        data-hoverpause="true"
                        data-arrow="false"
                        data-dots="true"
                        data-items="1">

                            <!-- Slider Item START -->
                            @foreach ($allproduct as $prodouct)
                            <div>
                                <div class="row g-4 align-items-center">
                                    <div class="col-md-6">
                                        <h2 class="display-5">{{$prodouct->name}} </h2>
                                        <p>{{$prodouct->descritpion}}</p>
                                        <!-- Buttons & Price -->
                                        <div class="hstack gap-4 align-items-center">
                                            <button type="button" class="btn btn-primary mb-0" wire:click="add({{$prodouct->id}})"><i class="bi bi-cart2 me-2"></i>Ajouter au panier</button>
                                            <h4 class="text-success mb-0">{{$prodouct->price}} FCFA </h4>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{asset('cover/'.$prodouct->img_one)}}" alt="">
                                    </div>
                                </div>

                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Slider END -->
                </div>
            </div>
        </div>
    </section>
</div>
