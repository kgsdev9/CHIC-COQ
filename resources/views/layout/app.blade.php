
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>CHIC COQ VENTE DE POULET EN LIGNE </title>
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.png" />

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800&amp;family=DM+Serif+Display:ital@0;1&amp;display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('assets/css/vendor/vendor.min.css')}}">

        <link rel="stylesheet" href="{{asset('assets/css/plugins/plugins.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/responsive.min.css')}}">
        <script src="https://cdn.cinetpay.com/seamless/main.js"></script>
        @livewireStyles




    </head>

    <body style="z-index:1;">
        <div id="main">
            <!-- Header Start -->
            <header class="main-header" style="z-index:1000">
                <!-- Header Top Start -->
                <div class="header-top-nav">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!--Left Start-->
                            <div class="col-lg-4 col-md-12">
                                <div class="text-lg-start text-center">
                                    <p class="color-white">Bienvenue sur CHIC COQ store!</p>
                                </div>
                            </div>
                            <!--Left End-->
                            <!--Right Start-->
                            <div class="col-8 d-lg-block d-none">
                                <div class="header-right-nav hover-style-default">
                                    <ul>
                                        <li>
                                            <a href="{{route('sotre.index')}}">Nos Produits </a>
                                        </li>
                                        <li class="border-color-white">
                                            <a href="{{route('category.index')}}"></i>Categories </a>
                                        </li>
                                    </ul>
                                    <!-- Header Top Language Currency -->
                                        <div class="header-top-set-lan-curr d-flex justify-content-end">
                                            <div class="header-bottom-set dropdown">
                                                <button class="dropdown-toggle header-action-btn hover-style-default color-white" data-bs-toggle="dropdown"> Compte  <i
                                                    class="ion-ios-arrow-down"></i></button>
                                                <ul class="dropdown-menu">
                                                        @guest
                                                        <li><a class="dropdown-item" href="{{route('login')}}">Connexion </a></li>
                                                        <li><a class="dropdown-item" href="{{route('register')}}">Inscription</a></li>
                                                        @else
                                                        <li><a class="dropdown-item" href="#">Connecté</a></li>
                                                        @endguest

                                                </ul>
                                            </div>

                                            <!-- Single Wedge Start -->
                                            <div class="header-top-curr dropdown">
                                                <button class="dropdown-toggle header-action-btn hover-style-default color-white pr-0" data-bs-toggle="dropdown"> USD FCFA
                                              </i></button>

                                            </div>
                                            <!-- Single Wedge End -->
                                        </div>
                                    <!-- Header Top Language Currency -->
                                </div>
                            </div>
                            <!--Right End-->
                        </div>
                    </div>
                </div>
                <!-- Header Top End -->
                <!-- Header Buttom Start -->
                <div class="header-navigation sticky-nav d-none d-lg-block">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- Logo Start -->
                            <div class="col-md-2 col-sm-2">
                                <div class="logo">
                                    <a href="{{URL('/')}}">
                                        <img  class="img-fluid" src="{{asset('logo.jpg')}}" style="height:60px;"  alt="" / ></a>
                                </div>
                            </div>
                            <!-- Logo End -->
                            <!-- Navigation Start -->
                            <div class="col-md-10 col-sm-10">
                                <!--Main Navigation Start -->
                                <div class="main-navigation">
                                    <ul>
                                        <li  >
                                            <a href="{{URL('/')}}">Accueil </a>

                                        </li>
                                        <li class="menu-dropdown">
                                            <a href="{{route('sotre.index')}}">Nos Produits</i></a>

                                        </li>
                                        <li class="menu-dropdown">
                                            <a href="{{route('category.index')}}">Nos Categories </a>

                                        </li>
                                        <li class="menu-dropdown">
                                            <a href="#"> Mon Compte <i class="ion-ios-arrow-down"></i></a>
                                            <ul class="sub-menu">
                                                @guest
                                                <li class="menu-dropdown position-static"> <a href="{{route('login')}}">Connexion</a></li>
                                                <li class="menu-dropdown position-static"> <a href="{{route('register')}}">Inscription </a></li>
                                                    @else
                                                    <li class="menu-dropdown position-static"> <a href="{{route('dashboard')}}">Mon Espace</a></li>
                                                    <li class="menu-dropdown position-static"> <a href="#">Vous etes Connecté </a></li>
                                                @endguest


                                            </ul>
                                        </li>
                                        <li><a href="{{URL('/presentation')}}">Presentation  </a></li>
                                        <li><a href="{{URL('/blog')}}">Acutalités  </a></li>
                                    </ul>
                                </div>
                                <!--Main Navigation End -->
                                <!--Header Bottom Account Start -->
                                <div class="header_account_area">

                                    <!--Contact info Start -->
                                    <div class="contact-link">
                                        <div class="phone">
                                            <p>Contact :</p>
                                            <a href="tel:(+800)345678"> 07 68 36 58 66 </a>
                                        </div>
                                    </div>
                                    <!--Contact info End -->
                                    <!--Cart info Start -->
                                    <div class="cart-info d-flex">
                                        <div class="mini-cart-warp">
                                            <a href="{{route('cart.index')}}" class="count-cart color-black">
                                                @livewire('counter-component')
                                            </a>
                                        </div>
                                    </div>


                                    <!--Cart info End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!--Header Bottom Account End -->
                <div class="header-bottom d-lg-none sticky-nav py-3 mobile-navigation">
                    <div class="container-fluid">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-md-3 col-sm-3">
                                <a href="#offcanvas-mobile-menu" class="offcanvas-toggle mobile-menu">
                                    <i class="ion-navicon"></i>
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-4 d-flex justify-content-center">
                                <div class="logo m-0">
                                    <a href="{{url('/')}}"><img src="{{asset('logo.jpg')}}" alt="" style="height:60px;"></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-5">
                                <!--Cart info Start -->
                                <div class="cart-info d-flex m-0 justify-content-end">
                                    <div class="header-bottom-set dropdown">
                                        <button class="dropdown-toggle border-0 header-action-btn hover-style-default" data-bs-toggle="dropdown"> <i class="ion-person"></i></button>
                                        <ul class="dropdown-menu">
                                            @guest
                                            <li><a class="dropdown-item" href="{{route('login')}}">Connexion  </a></li>
                                            <li><a class="dropdown-item" href="{{route('register')}}">Inscription </a></li>
                                                @else
                                                <li><a class="dropdown-item" href="{{route('dashboard')}}">Mon espace </a></li>

                                            @endguest


                                        </ul>
                                    </div>
                                    <div class="mini-cart-warp">
                                        <a href="#offcanvas-cart" class="count-cart color-black offcanvas-toggle">
                                            @livewire('counter-component')
                                        </a>
                                    </div>
                                </div>
                                <!--Cart info End -->
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Header mobile area start -->

            <!-- Header mobile area end -->
            </header>

            <!-- Header End -->


        <!-- offcanvas overlay start -->
        <div class="offcanvas-overlay"></div>
        <!-- offcanvas overlay end -->
        <!-- OffCanvas Cart Start -->
        <div id="offcanvas-cart" class="offcanvas offcanvas-cart hover-style-default">
            <div class="inner">
                <div class="head">
                    <span class="title">Cart</span>
                    <button class="offcanvas-close">×</button>
                </div>
                <div class="body customScroll">
                    <ul class="minicart-product-list">
                        <li>
                            <a href="single-product.html" class="image"><img
                                    src="assets/images/product-image/mini-cart/1.jpg" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="single-product.html" class="title">Juicy Couture...</a>
                                <span class="quantity-price">1 x <span class="amount">$18.86</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                        <li>
                            <a href="single-product.html" class="image"><img
                                    src="assets/images/product-image/mini-cart/2.jpg" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="single-product.html" class="title">Water and Wind...</a>
                                <span class="quantity-price">1 x <span class="amount">$43.28</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                        <li>
                            <a href="single-product.html" class="image"><img
                                    src="assets/images/product-image/mini-cart/3.jpg" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="single-product.html" class="title">Fila Locker Room...</a>
                                <span class="quantity-price">1 x <span class="amount">$37.34</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="shopping-cart-total">
                    <h4>Subtotal : <span>$20.00</span></h4>
                    <h4>Shipping : <span>$7.00</span></h4>
                    <h4>Taxes : <span>$0.00</span></h4>
                    <h4 class="shop-total">Total : <span>$27.00</span></h4>
                </div>
                <div class="foot">
                    <div class="buttons">
                        <a href="cart.html" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                        <a href="checkout.html" class="btn btn-outline-dark current-btn">checkout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- OffCanvas Cart End -->
        <!-- OffCanvas Menu Start -->
        <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu hover-style-default">
            <button class="offcanvas-close"></button>
            <!-- contact Info -->
            <div class="contact-info d-flex align-items-center justify-content-center color-black py-3">
                <img class="me-3" src="assets/images/icons/mobile-contact.png" alt="">
                <p>Contact </p>
                <a class="color-black" href="tel:(+800)345678">(+225)345678</a>
            </div>
            <!-- offcanvas compare & wishlist -->

            <div class="menu-close">
                menu
            </div>
            <!-- offcanvas menu -->
            <div class="inner customScroll">
                <div class="offcanvas-menu mb-4">
                    <ul>
                        <li><a href="{{URL('/')}}"><span class="menu-text">Accueil</span></a>

                        </li>
                        <li class="menu-dropdown">
                            <a href="{{route('sotre.index')}}">Nos Produits </a>

                        </li>
                        <li><a href="{{route('category.index')}}"><span class="menu-text">Nos Catégories </span></a>

                        </li>
                        <li><a href="#"><span class="menu-text">Mon Compte </span></a>
                            <ul class="sub-menu">
                                @guest
                                <li><a href="{{route('login')}}">Connexion</a></li>
                                <li><a href="{{route('register')}}">Inscription </a></li>

                                    @else
                                    <li><a href="#">Connecté </a></li>
                                @endguest
                            </ul>
                        </li>
                        <li><a href="{{url('/presentation')}}">Presentation </a></li>
                        <li><a href="{{url('/blog')}}">Actualités </a></li>
                    </ul>
                </div>
                <!-- OffCanvas Menu End -->
                <div class="offcanvas-social mt-5">
                    <ul>
                        <li>
                            <a href="#"><i class="ion-social-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-google"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-youtube"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- OffCanvas Menu End -->
            <!-- Slider Arae Start -->

            <!-- Slider Arae End -->
            <!-- Static Area Start -->
                @yield('content')
            <!-- Footer Area start -->
            <footer class="footer-area">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <!-- footer single wedget -->
                            <div class="col-md-6 col-lg-4">
                                <!-- footer logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="{{asset('logo.jpg')}}" alt="" /></a>
                                </div>
                                <!-- footer logo -->
                                <div class="about-footer">
                                    <p class="text-info">Chic coc est une plateforme de vente de poulet de chair et fumé en ligne</p>
                                    <div class="need-help">
                                        <p class="phone-info">
                                            BESOIN D'AIDE?
                                            <span>
                                                (+800) 345 678 <br />
                                                (+800) 123 456
                                            </span>
                                        </p>
                                    </div>
                                    <div class="social-info">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="ion-social-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-youtube"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-google"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- footer single wedget -->
                            <div class="col-md-6 col-lg-2 mt-res-sx-30px mt-res-md-30px">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">Liens Utiles</h4>
                                    <div class="footer-links">
                                        <ul>
                                            <li><a href="{{route('sotre.index')}}">Nos Produits </a></li>
                                            <li><a href="{{route('category.index')}}">Nos Catégories </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- footer single wedget -->

                            <!-- footer single wedget -->
                            <div class="col-md-6 col-lg-4 mt-res-md-50px mt-res-sx-30px mt-res-md-30px">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">Newsletter</h4>
                                    <div class="subscrib-text">
                                        <p>Souscribe aux  newsLetters .</p>
                                    </div>
                                    <div id="mc_embed_signup" class="subscribe-form">
                                        <form
                                            id="mc-embedded-subscribe-form"
                                            class="validate"
                                            novalidate=""
                                            target="_blank"
                                            name="mc-embedded-subscribe-form"
                                            method="post"
                                            action="#"
                                        >
                                            <div id="mc_embed_signup_scroll" class="mc-form">
                                                <input class="email" type="email" required="" placeholder="Votre adresse E-mail" name="EMAIL" value="" />
                                                <div class="mc-news" aria-hidden="true" style="position: absolute; left: -5000px;">
                                                    <input type="text" value="" tabindex="-1" />
                                                </div>
                                                <div class="clear">
                                                    <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe"  />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="img_app">
                                        <a href="#"><img src="assets/images/icons/app_store.png" alt="" /></a>
                                        <a href="#"><img src="assets/images/icons/google_play.png" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <!-- footer single wedget -->
                        </div>
                    </div>
                </div>
                <!--  Footer Bottom Area start -->
                <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-7 text-center text-md-end order-1 order-md-2">
                            <img class="payment-img" src="assets/images/icons/payment.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
                <!--  Footer Bottom Area End-->
            </footer>
            <!--  Footer Area End -->
        </div>


        <!-- Modal end -->
        <script src="{{asset('assets/js/vendor/vendor.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/plugins.min.js')}}"></script>

        <!-- Main Activation JS -->
        <script src="{{asset('assets/js/main.js')}}"></script>
        @livewireScripts

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top',
                showConfirmButton: false,
                showCloseButton: true,
                timer: 5000,
                timerProgressBar:true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });

            window.addEventListener('alert',({detail:{type,message}})=>{
                Toast.fire({
                    icon:type,
                    title:message
                })
            })
        </script>
        @yield('extra-js')
    </body>
</html>
