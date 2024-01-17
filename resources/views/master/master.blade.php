
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bienvenue sur KGS STORE BOUTIQUE </title>
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="kgsinformatique.tech">
	<meta name="description" content="KGS INFORMATIQUE">

	<!-- Favicon -->
	<link rel="shortcut icon" href="#">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.gstatic.com/">
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;700&amp;family=Rubik:wght@400;500;700&amp;display=swap" rel="stylesheet">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/tiny-slider/tiny-slider.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
    @livewireStyles
</head>

<body>

	<!-- Offcanvas START -->
	<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu">
		<!-- Offcanvas header -->
		<div class="offcanvas-header justify-content-between border-bottom px-3">
			<h3 class="mb-0">Votre  panier</h3>
			<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		</div>

		<!-- Offcanvas body -->
		<div class="offcanvas-body d-flex flex-column px-3">
            @foreach( (array)session('cart') as $id => $details)
			<div class="row g-3">
				<!-- Image -->
				<div class="col-3">
					<img class="rounded-2 bg-light p-2" src="{{asset('cover/'.$details['img_one'])}}" alt="avatar">
				</div>

				<div class="col-6">
					<h6 class="mb-1">{{ Str::limit($details['name'], 30)}}</h6>
					<div class="d-flex justify-content-between">
						<h6 class="mb-0 text-success">{{ $details['price'] * $details['quantity'] }} FCFA</h6>

					</div>
				</div>


			</div>

             @endforeach
			<!-- Button and price -->
			<div class="mt-auto">
				<div class="d-flex justify-content-between mb-2">
					<h6 class="mb-0">Sous total</h6>
					<h5 class="text-success mb-0">$103</h5>
				</div>
				<!-- Button -->
				<div class="d-grid">
					<a href="/cart" class="btn btn-lg btn-primary-soft mb-0">Consulter le panier</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Offcanvas END -->

<!-- =======================
Header START -->
<header class="navbar-light navbar-sticky header-static">
	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-xl">
		<div class="container">
			<!-- Logo START -->
			<a class="navbar-brand" href="/">

				KGS STORE
			</a>
			<!-- Logo END -->

			<!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="text-body h6 d-none d-sm-inline-block">Menu</span>
				<span class="navbar-toggler-icon"></span>
			</button>

			<!-- Main navbar START -->
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<!-- Nav Search START -->
				<div class="nav mt-3 mt-lg-0 px-4 flex-nowrap align-items-center">
					<div class="nav-item w-100">
						<form class="rounded position-relative">
							<input class="form-control pe-5 bg-light" type="search" placeholder="Rechercher un produit " aria-label="Search">
							<button class="btn bg-transparent border-0 px-2 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="bi bi-search fs-5"> </i></button>
						</form>
					</div>
				</div>
				<!-- Nav Search END -->
				<ul class="navbar-nav navbar-nav-scroll ms-auto">

					<!-- Nav item 1 Demos -->
					<li class="nav-item">
						<a class="nav-link" href="/"  >Accueil</a>

					</li>

					<!-- Nav item 2 shop all -->
					<li class="nav-item"> <a class="nav-link" href="#">Catalogue categorie</a></li>

					<!-- Nav item 3 pages -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="pagesMenu">Catalogue produit </a>

					</li>

					<!-- Nav item 4 link-->
					<li class="nav-item"> <a class="nav-link" href="#">Contact</a></li>
				</ul>
			</div>
			<!-- Main navbar END -->

			<div class="nav flex-nowrap align-items-center ms-3 ms-lg-4">

				<!-- Offcanvas menu toggler -->
				@livewire('counter-component')
			</div>
		</div>
	</nav>
	<!-- Logo Nav END -->
</header>
<!-- =======================
Header END -->

    @yield('master')
<!-- =======================
Footer START -->
<footer class="bg-dark pt-5">
	<div class="container">
		<!-- About and Newsletter START -->
		<div class="row pt-3 pb-4">
			<div class="col-md-3">
			    	KGS INFORMATIQUE
			</div>
			<div class="col-md-5">
				<p class="text-body-secondary">une site ecommerce concu par kgs informatique technologie .</p>
			</div>
			<div class="col-md-4">
				<!-- Form -->
				<form class="row row-cols-lg-auto g-2 align-items-center justify-content-end">
					<div class="col-12">
						<input type="email" class="form-control" placeholder="Enter your email address">
					</div>
					<div class="col-12">
						<button type="submit" class="btn btn-primary m-0">Souscrire</button>
					</div>
					<div class="form-text mt-2">En souscrivant vous acceptez-de recevoir des annonces
						<a href="#" class="text-decoration-underline text-reset">Politique de confidentialité</a>
					</div>
				</form>
			</div>
		</div>
		<!-- About and Newsletter END -->

		<!-- Divider -->
		<hr>

	</div>

</footer>
<!-- =======================
Footer END -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short"></i></div>

<!-- =======================
JS libraries, plugins and custom scripts -->

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="assets/vendor/tiny-slider/tiny-slider.js"></script>

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>
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
</body>
</html>
