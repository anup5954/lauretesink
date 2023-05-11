@extends('layouts.front')
@section('front-title')
    {{ !empty($blog->meta_title) ? $blog->meta_title : '' }}
@endsection
@section('meta-details')
    <meta name="description" content="{{ !empty($blog->meta_description) ? $blog->meta_description : '' }}">
    <meta name="keywords" content="{{ !empty($blog->meta_keyword) ? $blog->meta_keyword : '' }}">
@endsection


@section('front-content')
    <!--start here breadcumb-section-->



    <!--end here breadcumb-section-->



    <section class="blog-section">



        <div class="blog-details-section">

            <div class="blog-details-img">

                <img src="{{ asset('public/uploads/blog/' . $blog->blog_image) }}" class="img-fluid">

            </div>

            <div class="container">
                <div class="bloggrid">


                    <div class="blog-details-content p-2">

                        <h6>{{ date('F jS, Y', strtotime($blog->created_at)) }}</h6>

                        <h2>{{ $blog->blog_heading }}</h2>

                        <p> {!! $blog->blog_description !!}</p>



                    </div>

                    <div class="blogrightside">
                        <div class="blogpostbox">
                            <div class="blogpost-user text-center">
                                @if (!empty($blog->user_image))
                                    <img src="{{ asset('public/uploads/blog/' . $blog->user_image) }}" />
                                @endif
                                <h6>{{ !empty($blog->user_name) ? $blog->user_name : '' }}</h6>
                                <p>{!! !empty($blog->user_description) ? $blog->user_description : '' !!}</p>
                            </div>
                        </div>
                        @if ($blog->category == 1)
                            <div class="blogpostbox text-center">
                                <div class="blogpost-categories">
                                    <h3 class="mb-3">Our Catrgories</h3>
                                    @if ($categories->count() > 0)
                                        @foreach ($categories as $category)
                                            <div class="owl-carousel owl-theme blogpostslider">
                                                <div class="item">
                                                    <a href="{{ route('subcategory', $category->category_slug) }}"
                                                        class="categories-list-box text-center">
                                                        <div class="categories-img">
                                                            <img
                                                                src="{{ asset('uploads/category/' . $category->category_image) }}">
                                                        </div>
                                                        <div class="categories-list-name">
                                                            <h6> {{ $category->category_name }} </h6>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if ($blog->tranding_product == 1)
                            <div class="blogpostbox text-center">
                                <div class="blogpost-categories">
                                    <h3 class="mb-3">Trainding Products</h3>
                                    @if ($tProducts->count() > 0)
                                        @foreach ($tProducts as $tProduct)
                                            <div class="owl-carousel owl-theme blogpostslider">
                                                <div class="item">
                                                    <div class="product-box position-relative">
                                                        <a href="{{ route('productdetails', $tProduct->product_slug) }}">
                                                            <div class="product-img position-relative">
                                                                <img
                                                                    src="{{ asset('public/uploads/product/' . $tProduct->product_image) }}">
                                                                <img src="{{ asset('public/uploads/product/' . $tProduct->hover_image) }}"
                                                                    class="hoverimg">
                                                            </div>
                                                            <div class="product-content p-2">
                                                                <div class="product-name py-2">
                                                                    <h6>{{ $tProduct->product_name }}</h6>
                                                                    <h5><span>Size ({{ $tProduct->product_unit }}) :
                                                                        </span>{{ $tProduct->product_size }} </h5>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="product-size-prize px-2">
                                                            <div
                                                                class=" product-price d-flex justify-content-center align-items-center">

                                                                <h5 class=" actual-price"><i class="rupeed-icon">
                                                                        ₹</i>{{ $tProduct->original_price }}
                                                                </h5>
                                                                <h5 class="ml-2 discount-price"><del> <i
                                                                            class="rupees-icon"> ₹</i>
                                                                        {{ $tProduct->selling_price }} </del></h5>

                                                            </div>

                                                        </div>


                                                        <div class="product-review-discount">
                                                            <h5 class="product-reviews badge "> <i
                                                                    class="fa-solid fa-star"></i>
                                                            </h5>
                                                            <h5 class="ml-auto product-discount badge">
                                                                {{ round(100 - ($tProduct->selling_price / $tProduct->original_price) * 100) }}%
                                                                <span>OFF</span>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        </div>



    </section>
@endsection
