

<div>



<div class="slider-area">
    <div class="slider-active-3 owl-carousel slider-hm8 owl-dot-style">
        <!-- Slider Single Item Start -->
        <div class="slider-height-6 d-flex align-items-start justify-content-start bg-img" style="background-image: url(assets/images/slider-image/sample-1.jpg);">
            <div class="container">
                <div class="slider-content-1 slider-animated-1 text-left">
                    <span class="animated">BIENVENUE SUR CHIC CHOQ CI </span>
                    <h1 class="animated">
                    COMMANDER  <br />
                      VOS POULETS
                    </h1>
                    <p class="animated">Livraison Gratuite</p>
                    <a href="{{route('sotre.index')}}" class="shop-btn animated">CONSULTER </a>
                </div>
            </div>
        </div>
        <!-- Slider Single Item End -->
        <!-- Slider Single Item Start -->
        <div class="slider-height-6 d-flex align-items-start justify-content-start bg-img" style="background-image: url(assets/images/slider-image/sample-2.jpg);">
            <div class="container">
                <div class="slider-content-1 slider-animated-1 text-left">
                    <span class="animated">100% NATUREL</span>
                    <h1 class="animated">
                      POULET 100 %   <br />
                     NATUREL AFRICAIN
                    </h1>
                    <p class="animated">Livraison partout à abidjan </p>
                    <a href="{{route('sotre.index')}}" class="shop-btn animated">CONSULTER </a>
                </div>
            </div>
        </div>
        <!-- Slider Single Item End -->
    </div>
</div>
<section class="static-area mtb-60px">
    <div class="container">
        <div class="static-area-wrap">
            <div class="row">
                <!-- Static Single Item Start -->
                <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6">
                    <div class="single-static pb-res-md-0 pb-res-sm-0 pb-res-xs-0">
                        <img src="assets/images/icons/static-icons-1.png" alt="" class="img-responsive" />
                        <div class="single-static-meta">
                            <h4>Livraison Gratuite</h4>
                            <p>-50% de reduction Sur toutes les commandes de plus de 20,000 FCFA
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Static Single Item End -->
                <!-- Static Single Item Start -->
                <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6">
                    <div class="single-static pb-res-md-0 pb-res-sm-0 pb-res-xs-0 pt-res-xs-20">
                        <img src="assets/images/icons/static-icons-2.png" alt="" class="img-responsive" />
                        <div class="single-static-meta">
                            <h4>Polituqe de retour </h4>
                            <p>Aucun produit ne peut etre retournés apres une commande </p>
                        </div>
                    </div>
                </div>
                <!-- Static Single Item End -->
                <!-- Static Single Item Start -->
                <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6">
                    <div class="single-static pt-res-md-30 pb-res-sm-30 pb-res-xs-0 pt-res-xs-20">
                        <img src="assets/images/icons/static-icons-3.png" alt="" class="img-responsive" />
                        <div class="single-static-meta">
                            <h4>Paiement 100% Sécurisé</h4>
                            <p>Votre paiement est en sécurité avec nous..</p>
                        </div>
                    </div>
                </div>
                <!-- Static Single Item End -->
                <!-- Static Single Item Start -->
                <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6">
                    <div class="single-static pt-res-md-30 pb-res-sm-30 pt-res-xs-20">
                        <img src="assets/images/icons/static-icons-4.png" alt="" class="img-responsive" />
                        <div class="single-static-meta">
                            <h4>Support 24/7</h4>
                            <p>Contactez-nous directement </p>
                        </div>
                    </div>
                </div>
                <!-- Static Single Item End -->
            </div>
        </div>
    </div>
</section>



<!-- Static Area End -->
<!-- Best Sells Area Start -->
<section class="best-sells-area mb-30px">
    <div class="container">
        <!-- Section Title Start -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Nos Categories </h2>
                    <p>Add bestselling products to weekly line up</p>
                </div>
            </div>
        </div>
        <!-- Section Title End -->
        <!-- Best Sell Slider Carousel Start -->
        <div class="best-sell-slider owl-carousel owl-nav-style">
            <!-- Single Item -->
            @foreach ($category as $categorie  )
            <article class="list-product">
                <div class="img-block">
                    <a href="{{route('category.product', $categorie->slug)}}" class="thumbnail">
                        <img class="first-img" src="{{asset('categorie/images/'.$categorie->image)}}" alt="" />
                        <img class="second-img" src="{{asset('categorie/images/'.$categorie->image)}}" alt="" />
                    </a>
                    <div class="quick-view">
                        <a class="quick_view" href="{{route('category.product', $categorie->slug)}}" >
                            <i class="ion-ios-search-strong"></i>
                        </a>
                    </div>
                </div>
                <ul class="product-flag">
                    <li class="new">Populaire</li>
                </ul>
                <div class="product-decs">
                    <a class="inner-link" href="{{route('category.product', $categorie->slug)}}"><span>STUDIO DESIGN</span></a>
                    <h2><a href="{{route('category.product', $categorie->slug)}}" class="product-link">{{$categorie->name}}</a></h2>
                    <div class="pricing-meta">
                        <ul>
                            <li class="old">Produit Disponible </li>
                            <li class="current-price"> {{count($categorie->products)}}</li>

                        </ul>
                    </div>
                </div>
                <div class="add-to-link">
                    <ul>
                        <li class=""><a class="cart-btn" href="{{route('category.product', $categorie->slug)}}">Consulter </a></li>
                    </ul>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>
<section class="mt-8 mb-lg-14 mb-8">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Nos Produits  </h2>
                    <p>Selectionner vos produits et faites vous livrer à domicile </p>
                </div>
            </div>
        </div>
      <!-- row -->
      <div class="row">
        <div class="col-lg-12">
          <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3 mt-2">
            @foreach ($randomProduct as  $value)
            <div class="col">
                <div class="card card-product">
                  <div class="card-body">
                    <div class="text-center position-relative ">
                      <div class=" position-absolute top-0 start-0">
                        <span class="badge bg-success">EN STOCK</span>
                      </div>
                      <a href="">
                        <!-- img --><img src="{{asset('cover/'.$value->img_one)}}" alt="Grocery Ecommerce Template" class="mb-3 img-fluid"></a>

                    </div>
                    <div class="product-decs text-center">
                        <a class="inner-link" href="shop-4-column.html"><span>{{$value->category->name}}</span></a>
                        <h2><a href="#" class="product-link">{{$value->name}}</a>
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

                        <a   class="text-white" wire:click="add({{$value->id}})"> Comander  </a>
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

        </div>
      </div>
    </div>
  </section>



<!-- Hot Deal Area End -->
<!-- Banner Area Start -->
<div class="banner-area">
    <div class="container">
        <div class="row mb-n-30px">
            <div class="col-lg-3 col-sm-6 mb-30px xs-6 order-1 order-lg-1">
                <div class="banner-wrapper">
                    <a href="#"><img src="assets/images/banner-image/1.jpg" alt="" /></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 mb-30px order-3 order-lg-2">
                <div class="banner-wrapper">
                    <a href="#"><img src="assets/images/banner-image/2.jpg" alt="" /></a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-30px xs-6 order-2 order-lg-3">
                <div class="banner-wrapper">
                    <a href="#"><img src="assets/images/banner-image/3.jpg" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End -->
</div>
