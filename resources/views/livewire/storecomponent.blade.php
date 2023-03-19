<div>

    <section class="mt-8 mb-lg-14 mb-8">
        <div class="container">
          <!-- row -->
          <div class="row">
            <!-- col -->
            <div class="col-lg-12">
              <!-- page header -->
              <div class="card mb-4 bg-light border-0">
                <!-- card body -->
                <div class="card-body p-9">
                  <!-- title -->
                  <h2 class="mb-0 fs-1">Nos Produits</h2>
                </div>
              </div>

              <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3 mt-2">

                <!-- col -->



                @foreach ($product as $value )
                <div class="col">
                    <!-- card product -->
                    <div class="card card-product">
                      <div class="card-body">

                        <!-- badge -->
                        <div class="text-center position-relative ">
                          <div class=" position-absolute top-0 start-0">
                            @if($value->statut =="disponible")
                            <span class="badge bg-success">EN STOCK</span>
                            @elseif($value->statut =="stock vide")
                            <span class="badge bg-danger">Stock vide </span>
                            @endif
                          </div>
                          <a href="{{route('product.detail', $value->id)}}">
                            <!-- img --><img src="{{asset('cover/'.$value->img_one)}}" alt="Grocery Ecommerce Template" class="mb-3 img-fluid"></a>
                          <!-- action btn -->

                        </div>
                        <!-- heading -->
                        <div class="product-decs text-center">
                            <a class="inner-link" href="shop-4-column.html"><span>{{$value->category->name}}</span></a>
                            <h2><a href="single-product.html" class="product-link">{{$value->name}}</a>
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
                                    <li class="old-price not-cut">{{$value->price}} FCFA</li>
                                </ul>
                            </div>
                        </div>


                        <div class="add-to-link-btn">
                            <a   class="text-white" wire:click="add({{$value->id}})"> Commander     </a>
                        </div>
                        <!-- price -->
                        <div class="d-flex justify-content-between align-items-center mt-3">
                        </div>
                      </div>
                    </div>
                  </div>


                @endforeach









              </div>
              <!-- row -->
              <div class="row mt-8">
                <div class="col">
                  <!-- nav -->
                  <nav>
                    {{$product->links()}}
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



</div>
