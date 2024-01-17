<div>
    <section class="pt-0 pt-md-5">
        <div class="container">
            <!-- Title -->
            <div class="d-sm-flex justify-content-between align-items-center mb-4">
                <h2 class="m-0">Consulter les produits récemments ajoutés </h2>
                <a href="#" class="text-body small"><u>Voir plus </u></a>
            </div>

            <div class="row g-4">
                @foreach ($allProcuts as $product)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card border p-3 h-100">
                        <div class="position-relative">
                            <!-- Image -->
                            <a href="#" class="position-relative z-index-9"><img class="card-img" src="{{asset('cover/'.$product->img_one)}}" alt=""></a>
                            <!-- Overlay -->
                            <div class="card-img-overlay p-0">
                                <span class="badge text-bg-success">New Arrival</span>
                            </div>
                        </div>

                        <!-- Card body -->
                        <div class="card-body text-center p-3 px-0">

                            <!-- Title -->
                            <h5 class="card-title"><a href="#">{{ $product->name}}</a></h5>
                            <h6 class="mb-0 text-success">{{ $product->price}} FCFA </h6>
                        </div>

                        <!-- Card footer -->
                        <div class="card-footer text-center p-0">
                            <!-- Button -->
                            <button type="button" wire:click="add({{$product->id}})" class="btn btn-sm btn-primary-soft mb-0"><i class="bi bi-cart me-2"></i>Ajouter au panier</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
