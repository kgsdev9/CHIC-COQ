
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Askbootstrap" />
        <meta name="author" content="Askbootstrap" />
        <title>DASHBOARD ADMINISTRATION ECOMMERCE </title>
        <link rel="icon" type="image/png" href="img/favicon.png">
        <link rel="stylesheet" href="{{asset('ressources/vendor/icons/feather.css')}}">
        <link href="{{asset('ressources/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('ressources/css/styles.css')}}">
        <link href="{{asset('ressources/vendor/dropzone/dist/dropzone.css')}}" rel="stylesheet">
        <link href="http://www.ansonika.com/foogra/admin_section/css/date_picker.css" rel="stylesheet">
          <link rel="stylesheet" href="{{asset('ressources/vendor/summernote/summernote-bs4.min.css')}}">
        <link rel="stylesheet" href="{{asset('ressources/vendor/dataTables/dataTables/css/dataTables.bootstrap4.min.css')}}">
     </head>

   <body class="sb-nav-fixed">
      <nav class="sb-topnav navbar navbar-expand navbar-light bg-white shadow-sm">

         <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
         <!-- Navbar Search-->
         <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

         </form>
         <!-- Navbar-->
         <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown no-arrow d-sm-none">
               <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="feather-search mr-2"></i>
               </a>
               <!-- Dropdown - Messages -->
               <div class="dropdown-menu dropdown-menu-right p-3 shadow-sm animated--grow-in" aria-labelledby="searchDropdown">
                  <form class="form-inline mr-auto w-100 navbar-search">
                     <div class="input-group">
                        <input type="text" class="form-control border-0 shadow-none" placeholder="Search people, jobs and more..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                           <button class="btn" type="button">
                           <i class="feather-search"></i>
                           </button>
                        </div>
                     </div>
                  </form>
               </div>
            </li>


            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow ml-1 osahan-profile-dropdown">
               <a class="nav-link dropdown-toggle pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <img class="img-profile rounded-circle" src="{{asset('logo.jpg')}}">
               </a>
               <!-- Dropdown - User Information -->
               <div class="dropdown-menu dropdown-menu-right shadow-sm">
                  <div class="p-3 d-flex align-items-center">
                     <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="{{asset('logo.jpg')}}" alt="">
                        <div class="status-indicator bg-success"></div>
                     </div>
                     <div class="font-weight-bold">
                        <div class="text-truncate">Administrateur</div>

                     </div>
                  </div>
                  <div class="dropdown-divider"></div>
                  <div class="dropdown-divider"></div>
                  <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button class="btn btn-dak"> Se Deconnecter</button>
                </form>

               </div>
            </li>
         </ul>
      </nav>
      @include('dashboard.master.slider-bar')
      <!-- Jquery -->
      <script src="{{asset('ressources/vendor/jquery/jquery.min.js')}}"></script>
      <!-- Fontawesome -->
      <!-- Bootstrap -->
      <script src="{{asset('ressources/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <!-- Custom Js -->
      <script src="{{asset('assets/js/main.js')}}"></script>
      <!-- Ajax Chart Js -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
      <!-- Chart Js -->
      <script src="{{asset('ressources/assets/demo/chart-area-demo.js')}}"></script>
      <script src="{{asset('ressources/assets/demo/chart-bar-demo.js')}}"></script>
      <script src="{{asset('ressources/assets/demo/chart-pie-demo.js')}}"></script>
      <!-- Datatable Js -->
      <script src="{{asset('ressources/vendor/dataTables/dataTables/js/jquery.dataTables.min.js')}}"></script>
      <script src="{{asset('vendor/dataTables/dataTables/js/dataTables.bootstrap.min.js')}}"></script>
      <script src="{{asset('assets/demo/datatables-demo.js')}}"></script>
   </body>
</html>
