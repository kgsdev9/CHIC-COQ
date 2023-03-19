<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
       <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
          <div class="sb-sidenav-menu">
             <div class="nav">



                <a class="nav-link" href="{{URL('/')}}" target="blank">
                   <div class="sb-nav-link-icon"><i class="feather-home"></i></div>
                  Retourner à l'accueil
                </a>

                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="feather-layout"></i></div>
                    Gestion de catégories
                    <div class="sb-sidenav-collapse-arrow"><svg class="svg-inline--fa fa-angle-down fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z"></path></svg><!-- <i class="fas fa-angle-down"></i> --></div>
                 </a>

                 <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion" style="">
                    <nav class="sb-sidenav-menu-nested nav">
                       <a class="nav-link" href="{{route('category.create')}}">Nouvelle catégorie</a>
                       <a class="nav-link" href="{{route('category.liste')}}">Liste des catégories </a>
                    </nav>
                 </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayoutss" aria-expanded="false" aria-controls="collapseLayoutss">
                   <div class="sb-nav-link-icon"><i class="feather-list"></i></div>
                   Gestion de produit
                   <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayoutss" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                   <nav class="sb-sidenav-menu-nested nav">
                      <a class="nav-link" href="{{route('create.newproduct')}}">Nouveau produit <span class="badge badge-pill ml-2 badge-primary">6</span></a>
                      <a class="nav-link" href="{{route('product.liste')}}">Liste des produits  <span class="badge badge-pill ml-2 badge-success">5</span></a>

                   </nav>
                </div>
                <a class="nav-link" href="{{route('oders.liste')}}">
                   <div class="sb-nav-link-icon"><i class="feather-star"></i></div>
                   Gestion de commande
                </a>
                <a class="nav-link" href="{{route('users.liste')}}">
                   <div class="sb-nav-link-icon"><i class="feather-heart"></i></div>
                   Gestion d'utilisateur
                </a>

                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="feather-book"></i></div>
                    Gestion d'articles
                    <div class="sb-sidenav-collapse-arrow"><svg class="svg-inline--fa fa-angle-down fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z"></path></svg><!-- <i class="fas fa-angle-down"></i> --></div>
                 </a>

                 <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion" style="">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                       <a class="nav-link collapsed" href="{{route('blog.create')}}" >
                        Nouveau article
                        <div class="sb-sidenav-collapse-arrow"><svg class="svg-inline--fa fa-angle-down fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z"></path></svg><!-- <i class="fas fa-angle-down"></i> --></div>
                       </a>

                       <a class="nav-link collapsed" href="{{route('blog.liste')}}">
                      Liste des articles
                          <div class="sb-sidenav-collapse-arrow"><svg class="svg-inline--fa fa-angle-down fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z"></path></svg><!-- <i class="fas fa-angle-down"></i> --></div>
                       </a>
                       <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                          <nav class="sb-sidenav-menu-nested nav">
                             <a class="nav-link" href="401.html">401 Page</a>
                             <a class="nav-link" href="404.html">404 Page</a>
                             <a class="nav-link" href="500.html">500 Page</a>
                          </nav>
                       </div>
                    </nav>
                 </div>

             </div>
          </div>
       </nav>
    </div>
    @yield('master')


 </div>
