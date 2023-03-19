<div>


    <section class="my-lg-14 my-8">
        <div class="container">
          <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3">

            @foreach ($productcategory as $value )


            <div class="col">
                <div class="card card-product">
                  <div class="card-body">
                    <div class="text-center position-relative ">
                      <div class=" position-absolute top-0 start-0">
                        @if($value->statut =="disponible")
                        <span class="badge bg-success">EN STOCK</span>
                        @elseif($value->statut =="stock vide")
                        <span class="badge bg-danger">Stock vide </span>
                        @endif
                      </div>
                      <a href="">
                        <!-- img --><img src="{{asset('cover/'.$value->img_one)}}" alt="Grocery Ecommerce Template" class="mb-3 img-fluid"></a>

                    </div>
                    <div class="product-decs text-center">
                        <a class="inner-link" href="#"><span>POULET PONDEUSES</span></a>
                        <h2><a href="#" class="product-link">POULET AFRICAIN</a>
                        </h2>
                        <div class="rating-product">
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                        </div>
                        <div class="pricing-meta">
                            <ul>
                                <li class="old-price not-cut"> {{$value->price}} FCFA </li>
                            </ul>
                        </div>
                    </div>
                    <div class="add-to-link-btn">

                        <a class="text-white" wire:click="add({{$value->id}})"> Commander </a>
                    </div>
                    <!-- price -->
                    <div class="d-flex justify-content-between align-items-center mt-3">
                    </div>
                  </div>
                </div>
              </div>






            @endforeach






          </div>
        </div>
      </section>



</div>
