<div class="col-lg-3 col-md-4 col-12 border-end  d-none d-md-block">
    <div class="pt-10 pe-lg-10">
      <!-- nav -->
      <ul class="nav flex-column nav-pills nav-pills-dark">
        <!-- nav item -->
        <li class="nav-item">
          <a class="nav-link text-dark" aria-current="page" href="{{route('dashboard')}}"><i class="feather-icon icon-shopping-bag me-2"></i>Mes Commandes</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-dark" href="{{route('like.index')}}"><i class="feather-icon icon-map-pin me-2"></i>Liste D'envie</a>
        </li>


        <li class="nav-item">
          <hr>
        </li>
        <!-- nav item -->
        <li class="nav-item">
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button class="btn btn-dark" type="submit"> Déconnexion </button>
            </form>

        </li>
      </ul>
    </div>
  </div>
