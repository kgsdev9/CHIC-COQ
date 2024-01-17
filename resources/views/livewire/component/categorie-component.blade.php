<div>
    <section class="pt-0 pt-md-5">
        <div class="container">
            <!-- Title -->
            <div class="row">
                <div class="col-12">

                    <!-- Title -->
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="m-0">Liste des catégories</h3>
                        <a href="#" class="text-body small"><u>Consulter</u></a>
                    </div>

                    <!-- Slider -->
                    <div class="tiny-slider arrow-hover arrow-dark arrow-blur arrow-round">
                        <div class="tiny-slider-inner"
                        data-autoplay="false"
                        data-hoverpause="true"
                        data-gutter="24"
                        data-arrow="true"
                        data-dots="false"
                        data-items-xl="5"
                        data-items-lg="4"
                        data-items-md="3"
                        data-items-sm="2"
                        data-items-xs="2"
                        >

                        @foreach ($allCategories as $category)
                            <div>
                                <div class="card bg-transparent">
                                    <img class="card-img" src="{{asset('categorie/images/'.$category->image)}}" alt="card image">
                                    <div class="card-body ps-0">
                                        <h5 class="mb-0"><a href="#" class="stretched-link">{{$category->name}}</a></h5>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
