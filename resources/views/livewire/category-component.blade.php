

@section('content')

<div>
    <section class="my-lg-14 my-8">
        <div class="container">
            <div class="card mb-4 bg-light border-0">
                <!-- card body -->
                <div class="card-body p-9">
                  <!-- title -->
                  <h2 class="mb-0 fs-1">Nos Catégories </h2>
                </div>
              </div>

          <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3">

            @foreach ($category as $value )


            <div class="col">
                <!-- card product -->
                <div class="card card-product">
                  <div class="card-body">

                    <!-- badge -->
                    <div class="text-center position-relative ">

                      <a href="{{route('category.product' , $value->slug)}}">
                        <!-- img --><img src="{{asset('categorie/images/'.$value->image)}}" alt="Grocery Ecommerce Template" class="mb-3 img-fluid"></a>
                      <!-- action btn -->

                    </div>
                    <!-- heading -->
                    <div class="product-decs text-center">
                        <h2><a href="{{route('category.product' , $value->slug)}}" class="product-link">{{$value->name}}</a>
                        </h2>
                    </div>
                    <div class="add-to-link-btn">
                        <a href="{{route('category.product',$value->slug)}}">Consulter  </a>
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
