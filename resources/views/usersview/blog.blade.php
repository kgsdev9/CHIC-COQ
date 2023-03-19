@extends('layout.app')

@section('content')
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-content">
                    <h1 class="breadcrumb-hrading">Liste des articles </h1>

                </div>
            </div>
        </div>
    </div>
</section>


<div class="shop-category-area blog-grid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 order-lg-last col-md-12 order-md-first">
                <div class="blog-posts">
                    <div class="row">
                        @foreach ($blog as $value )
                        <div class="col-md-6 mb-res-sm-30px">
                            <div class="single-blog-post blog-grid-post">
                                <div class="blog-post-media">
                                    <div class="blog-image">
                                        <a href="#"><img src="assets/images/blog-image/blog-1.jpg" alt="blog"></a>
                                    </div>
                                </div>
                                <div class="blog-post-content-inner mt-30">
                                    <h4 class="blog-title"><a href="#">{{$value->name}}</a></h4>

                                    <p>
                                            {{$value->description }}
                                    </p>
                                    <a class="read-more-btn" href="{{route('article.detail', $value->id)}}"> Lire la suite  <i class="ion-android-arrow-dropright-circle"></i></a>
                                </div>
                            </div>
                            <!-- single blog post -->
                        </div>
                        @endforeach





                    </div>
                </div>
                <!--  Pagination Area Start -->
                <div>
                    <ul>
                        {{$blog->links()}}
                    </ul>
                </div>
                <!--  Pagination Area End -->
            </div>
            <!-- Sidebar Area Start -->

            <!-- Sidebar Area End -->
        </div>
    </div>

</div>


@endsection
