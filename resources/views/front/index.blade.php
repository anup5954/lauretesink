@extends('layouts.front')
@section('front-title')
    Laurete Premium Kitchen Sink | HOME
@endsection

@section('front-banner')
    @include('layouts.front-include.banner')
@endsection

@section('front-content')
    <!--start here categories list-->
    <section class="categories-list my-5">
        <div class="heading-section text-center">
            <h4 class="heading-2">Our Categories</h4>
        </div>
        <div class="container">
            <div class="owl-carousel owl-theme categoriesslider">
                @if (!empty($categories))
                    @foreach ($categories as $category)
                        <div class="item">
                            <a href="{{ route('subcategory', $category->category_slug) }}"
                                class="categories-list-box text-center">
                                <div class="categories-img">
                                    <img src="{{ asset('public/uploads/category/' . $category->category_image) }}">
                                </div>
                                <div class="categories-list-name">
                                    <h6> {{ $category->category_name }} </h6>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <!--start here categoreis list-->

    <!--start here offer-grid system-->
    <!--start here offer section-->
    <section class="landing-page-offer py-5 bg-light">
        <div class="container">
            <div class="owl-carousel owl-theme" id="landingoffer">
                @if (!empty($offerProducts))
                    @foreach ($offerProducts as $oProduct)
                        <div class="item">

                            <div class="landing-offer">
                                <div class="landing-left-offer-box position-relative">
                                    <img src="{{ asset('public/uploads/product/' . $oProduct->product_image) }}">
                                </div>
                                <div class="landing-right-offer-box">
                                    <div class="landing-offer-content">
                                        <div class="heading-section text-center">
                                            <h6>{{ $oProduct->product_name }} </h6>
                                        </div>
                                        <div class="offer-content-sec text-center">
                                            @if (!empty($oProduct->product_size))
                                                <div class="product-name py-2">
                                                    <h4><span>Size ({{ $oProduct->product_unit }}) :
                                                        </span>{{ $oProduct->product_size }} </h4>
                                                </div>
                                            @endif

                                            <div class=" product-price d-flex justify-content-center align-items-center">
                                                <h5 class=" actual-price"><i class="rupeed-icon">
                                                        ₹</i>{{ $oProduct->selling_price }}
                                                </h5>
                                                <h5 class="ml-2 discount-price"><del> <i class="rupees-icon"> ₹</i>
                                                        {{ $oProduct->original_price }} </del></h5>

                                            </div>
                                            <a href="{{ route('productdetails', $oProduct->product_slug) }}"
                                                class="btn border-btn ">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </section>
    <!--end here offer section-->
    <!--end here offer-grid system -->

    <!--start here product slider-->
    <section class="product-section-slider py-5">
        <div class="container">
            <div class="heading-section text-center">
                <h4 class="heading-2">Trending Products</h4>
            </div>

            <div class="owl-carousel owl-theme productslider">
                @if (!empty($trendingProducts))
                    @foreach ($trendingProducts as $tProduct)
                        <div class="item">
                            <div class="product-box position-relative">
                                <a href="{{ route('productdetails', $tProduct->product_slug) }}">
                                    <div class="product-img position-relative">
                                        <img src="{{ asset('public/uploads/product/' . $tProduct->product_image) }}"
                                            class="actualimg">
                                        <img src="{{ asset('public/uploads/product/' . $tProduct->hover_image) }}"
                                            class="hoverimg" />
                                    </div>
                                    <div class="product-content p-2">
                                        <div class="product-name py-2">
                                            <h6>{{ $tProduct->product_name }}</h6>
                                            @if (!empty($oProduct->product_size))
                                                <h5><span>Size ({{ $tProduct->product_unit }}) :
                                                    </span>{{ $tProduct->product_size }} </h5>
                                            @endif
                                        </div>
                                    </div>
                                </a>
                                <div class="product-size-prize px-2">
                                    <div class=" product-price d-flex justify-content-center align-items-center">

                                        <h5 class=" actual-price"><i class="rupeed-icon">
                                                ₹</i>{{ $tProduct->selling_price }}
                                        </h5>
                                        <h5 class="ml-2 discount-price"><del> <i class="rupees-icon"> ₹</i>
                                                {{ $tProduct->original_price }} </del></h5>

                                    </div>

                                </div>


                                <div class="product-review-discount">

                                    @if (!empty($tProduct->made_by))
                                        <h5 class="product-reviews badge  mr-2"> {{ $tProduct->made_by }} </h5>
                                    @endif
                                    @if (!empty($tProduct->product_type))
                                        <h5 class="product-reviews badge "> {{ $tProduct->product_type }} </h5>
                                    @endif
                                    <h5 class="ml-auto product-discount badge">
                                        {{ round(100 - ($tProduct->selling_price / $tProduct->original_price) * 100) }}%
                                        <span>OFF</span>
                                    </h5>
                                </div>
                            </div>

                        </div>
                    @endforeach
                @endif



            </div>
        </div>
    </section>
    <!--end here product slider-->

    <!--start here about us-->
    <section class="bg-light py-5">
        <div class="container">
            <div class="about-grid-section">
                <div class="about-grid-img">
                    <img src="{{ asset('public/frontend/img/offer/chair.jpg') }}" class="img-fluid" />
                </div>
                <div class="about-content-box">
                    <h2 class="text-dark-color-1 mb-3">Laurete Premium Kitchen Sink </h2>

                    <p>Established in the year 1992, “Laurete Premium Kitchen Sink” has emerged as a premium manufacturer of
                        Stainless Steel kitchen sinks, Faucets, Wash basins, Floor drains, Shower channels and Accessories
                        under the brand name of Laurete catering to a fast growing retail market as well as renowned
                        designers, Interior decorators, Architects and builders in India as well as abroad.</p>

                    <p>While buying any of our product, always look for Jayna hologram sticker on each of our products which
                        guarantees its quality and authenticity.</p>
                </div>
            </div>
        </div>
    </section>
    <!--end here about us -->
    <!--start here product section-->
    <section class="landing-product-section py-5 ">
        <div class="container">
            <div class="heading-section text-center">
                <h4 class="heading-2">New Designs</h4>
            </div>



            <div id="content" class="tab-content" role="tablist">
                <div id="pane-A" class="tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">


                    <!-- Note: New place of `data-parent` -->
                    <div id="collapse-A" class="collapse show" data-parent="#content" role="tabpanel"
                        aria-labelledby="heading-A">

                        <div class="owl-carousel owl-theme productslider">
                            @if (!empty($newProducts))
                                @foreach ($newProducts as $nProduct)
                                    <div class="item">
                                        <div class="product-box position-relative">
                                            <a href="{{ route('productdetails', $nProduct->product_slug) }}">
                                                <div class="product-img position-relative">
                                                    <img src="{{ asset('public/uploads/product/' . $nProduct->product_image) }}"
                                                        class="actualimg">
                                                    <img
                                                        src="{{ asset('public/uploads/product/' . $nProduct->hover_image) }}"class="hoverimg" />

                                                </div>
                                                <div class="product-content p-2">
                                                    <div class="product-name py-2">
                                                        <h6>{{ $nProduct->product_name }}</h6>
                                                        <h5><span>Size ({{ $nProduct->product_unit }}) :
                                                            </span>{{ $nProduct->product_size }} </h5>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="product-size-prize px-2">
                                                <div
                                                    class=" product-price d-flex justify-content-center align-items-center">

                                                    <h5 class=" actual-price"><i class="rupeed-icon">
                                                            ₹</i>{{ $nProduct->selling_price }}</h5>
                                                    <h5 class="ml-2 discount-price"><del> <i class="rupees-icon"> ₹</i>
                                                            {{ $nProduct->original_price }}
                                                        </del></h5>

                                                </div>

                                            </div>


                                            <div class="product-review-discount">
                                                @if (!empty($nProduct->made_by))
                                                    <h5 class="product-reviews badge  mr-2"> {{ $nProduct->made_by }} </h5>
                                                @endif
                                                @if (!empty($nProduct->product_type))
                                                    <h5 class="product-reviews badge "> {{ $nProduct->product_type }} </h5>
                                                @endif
                                                <h5 class="ml-auto product-discount badge">
                                                    {{ round(100 - ($nProduct->selling_price / $nProduct->original_price) * 100) }}%
                                                    <span>OFF</span>
                                                </h5>
                                            </div>
                                        </div>

                                    </div>
                                @endforeach
                            @endif

                        </div>

                    </div>
                </div>

                {{-- <div id="pane-B" class="tab-pane fade" role="tabpanel" aria-labelledby="tab-B">

                    <div class="owl-carousel owl-theme productslider">
                        <div class="item">
                            <div class="product-box position-relative">
                                <a href="product-details.php">
                                    <div class="product-img position-relative">
                                        <img src="{{ asset('public/frontend/img/product/j-product-1.jpg') }}">
                                        <div class="product-cart-view-hover">
                                            <div class="product-cart-view">
                                                <button href="product-details.php" class="btn add-wishlist-btn"><i
                                                        class="fa-light fa-heart"></i></button>
                                                <a href="#" class="btn add-to-cart"><i
                                                        class="fa-light fa-cart-shopping"></i></a>
                                                <a href="product-details.php" class="btn view-more-product"><i
                                                        class="fa-light fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content p-2">
                                        <div class="product-name py-2">
                                            <h6>Sleev Rings</h6>
                                        </div>
                                    </div>
                                </a>
                                <div class="product-size-prize px-2">
                                    <div class=" product-price d-flex justify-content-center align-items-center">
                                        <h5 class=" actual-price"><i class="rupeed-icon"> ₹</i>100</h5>
                                        <h5 class="ml-2 discount-price"><del> <i class="rupees-icon"> ₹</i> 150 </del>
                                        </h5>

                                    </div>

                                </div>


                                <div class="product-review-discount">
                                    <h5 class="product-reviews badge "> <i class="fa-solid fa-star"></i> </h5>
                                    <h5 class="ml-auto product-discount badge">25% <span>OFF</span> </h5>
                                </div>
                            </div>

                        </div>

                        <div class="item">
                            <div class="product-box position-relative">
                                <a href="product-details.php">
                                    <div class="product-img position-relative">
                                        <img src="{{ asset('public/frontend/img/product/j-product-2.jpg') }}">
                                        <div class="product-cart-view-hover">
                                            <div class="product-cart-view">
                                                <button href="product-details.php" class="btn add-wishlist-btn"><i
                                                        class="fa-light fa-heart"></i></button>
                                                <a href="#" class="btn add-to-cart"><i
                                                        class="fa-light fa-cart-shopping"></i></a>
                                                <a href="product-details.php" class="btn view-more-product"><i
                                                        class="fa-light fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content p-2">
                                        <div class="product-name py-2">
                                            <h6>Adipiscing Mollitelit Ipsum </h6>
                                        </div>


                                    </div>
                                </a>
                                <div class="product-size-prize px-2">

                                    <div class=" product-price d-flex justify-content-center align-items-center">
                                        <h5 class="actual-price"><i class="rupeed-icon"> ₹</i> 80</h5>
                                        <h5 class="ml-2 discount-price"><del> <i class="rupees-icon"> ₹</i> 100 </del>
                                        </h5>

                                    </div>

                                </div>


                                <div class="product-review-discount">
                                    <h5 class="product-reviews badge "> <i class="fa-solid fa-star"></i> </h5>
                                    <h5 class="ml-auto product-discount badge">25% <span>OFF</span> </h5>
                                </div>
                            </div>

                        </div>

                        <div class="item">
                            <div class="product-box position-relative">
                                <a href="product-details.php">
                                    <div class="product-img position-relative">
                                        <img src="{{ asset('public/frontend/img/product/j-product-3.jpg') }}">
                                        <div class="product-cart-view-hover">
                                            <div class="product-cart-view">
                                                <button href="product-details.php" class="btn add-wishlist-btn"><i
                                                        class="fa-light fa-heart"></i></button>
                                                <a href="#" class="btn add-to-cart"><i
                                                        class="fa-light fa-cart-shopping"></i></a>
                                                <a href="product-details.php" class="btn view-more-product"><i
                                                        class="fa-light fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content p-2">
                                        <div class="product-name py-2">
                                            <h6>Caprese Satchel combines </h6>
                                        </div>
                                    </div>
                                </a>
                                <div class="product-size-prize px-2">
                                    <div class=" product-price d-flex justify-content-center align-items-center">
                                        <h5 class="actual-price"><i class="rupeed-icon"> ₹</i> 150</h5>
                                        <h5 class="ml-2 discount-price"><del> <i class="rupees-icon"> ₹</i> 200 </del>
                                        </h5>

                                    </div>

                                </div>

                                <div class="product-review-discount">
                                    <h5 class="product-reviews badge "> <i class="fa-solid fa-star"></i> </h5>
                                    <h5 class="ml-auto product-discount badge">25% <span>OFF</span> </h5>
                                </div>
                            </div>

                        </div>

                        <div class="item">
                            <div class="product-box position-relative">
                                <a href="product-details.php">
                                    <div class="product-img position-relative">
                                        <img src="{{ asset('public/frontend/img/product/j-product-4.jpg') }}">
                                        <div class="product-cart-view-hover">
                                            <div class="product-cart-view">
                                                <button href="product-details.php" class="btn add-wishlist-btn"><i
                                                        class="fa-light fa-heart"></i></button>
                                                <a href="#" class="btn add-to-cart"><i
                                                        class="fa-light fa-cart-shopping"></i></a>
                                                <a href="product-details.php" class="btn view-more-product"><i
                                                        class="fa-light fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content p-2">
                                        <div class="product-name py-2">
                                            <h6>Consectetur Adipiscing</h6>
                                        </div>
                                    </div>
                                </a>
                                <div class="product-size-prize px-2">
                                    <div class=" product-price d-flex justify-content-center align-items-center">
                                        <h5 class=" actual-price"><i class="rupeed-icon"> ₹</i> 250</h5>
                                        <h5 class="ml-2 discount-price"><del> <i class="rupees-icon"> ₹</i> 300 </del>
                                        </h5>

                                    </div>


                                </div>

                                <div class="product-review-discount">
                                    <h5 class="product-reviews badge "> <i class="fa-solid fa-star"></i> </h5>
                                    <h5 class="ml-auto product-discount badge">25% <span>OFF</span> </h5>
                                </div>
                            </div>

                        </div>

                        <div class="item">
                            <div class="product-box position-relative">
                                <a href="product-details.php">
                                    <div class="product-img position-relative">
                                        <img src="{{ asset('public/frontend/img/product/j-product-5.jpg') }}">
                                        <div class="product-cart-view-hover">
                                            <div class="product-cart-view">
                                                <button href="product-details.php" class="btn add-wishlist-btn"><i
                                                        class="fa-light fa-heart"></i></button>
                                                <a href="#" class="btn add-to-cart"><i
                                                        class="fa-light fa-cart-shopping"></i></a>
                                                <a href="product-details.php" class="btn view-more-product"><i
                                                        class="fa-light fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content p-2">
                                        <div class="product-name py-2">
                                            <h6>High Waist Rings</h6>
                                        </div>
                                    </div>
                                </a>
                                <div class="product-size-prize px-2">
                                    <div class=" product-price d-flex justify-content-center align-items-center">
                                        <h5 class=" actual-price"><i class="rupeed-icon"> ₹</i> 250</h5>
                                        <h5 class="ml-2 discount-price"><del> <i class="rupees-icon"> ₹</i> 300 </del>
                                        </h5>

                                    </div>


                                </div>


                                <div class="product-review-discount">
                                    <h5 class="product-reviews badge "> <i class="fa-solid fa-star"></i> </h5>
                                    <h5 class="ml-auto product-discount badge">25% <span>OFF</span> </h5>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-box position-relative">
                                <a href="product-details.php">
                                    <div class="product-img position-relative">
                                        <img src="{{ asset('public/frontend/img/product/j-product-6.jpg') }}">
                                        <div class="product-cart-view-hover">
                                            <div class="product-cart-view">
                                                <button href="product-details.php" class="btn add-wishlist-btn"><i
                                                        class="fa-light fa-heart"></i></button>
                                                <a href="#" class="btn add-to-cart"><i
                                                        class="fa-light fa-cart-shopping"></i></a>
                                                <a href="product-details.php" class="btn view-more-product"><i
                                                        class="fa-light fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content p-2">
                                        <div class="product-name py-2">
                                            <h6>Striped Muffler breakthrough </h6>
                                        </div>
                                    </div>
                                </a>
                                <div class="product-size-prize px-2">
                                    <div class=" product-price d-flex justify-content-center align-items-center">
                                        <h5 class=" actual-price"><i class="rupeed-icon"> ₹</i> 150</h5>
                                        <h5 class="ml-2 discount-price"><del> <i class="rupees-icon"> ₹</i> 200 </del>
                                        </h5>

                                    </div>


                                </div>


                                <div class="product-review-discount">
                                    <h5 class="product-reviews badge "> <i class="fa-solid fa-star"></i> </h5>
                                    <h5 class="ml-auto product-discount badge">25% <span>OFF</span> </h5>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div id="pane-C" class="tab-pane fade" role="tabpanel" aria-labelledby="tab-C">

                    <div class="owl-carousel owl-theme productslider">
                        <div class="item">
                            <div class="product-box position-relative">
                                <a href="product-details.php">
                                    <div class="product-img position-relative">
                                        <img src="{{ asset('public/frontend/img/product/j-product-1.jpg') }}">
                                        <div class="product-cart-view-hover">
                                            <div class="product-cart-view">
                                                <button href="product-details.php" class="btn add-wishlist-btn"><i
                                                        class="fa-light fa-heart"></i></button>
                                                <a href="#" class="btn add-to-cart"><i
                                                        class="fa-light fa-cart-shopping"></i></a>
                                                <a href="product-details.php" class="btn view-more-product"><i
                                                        class="fa-light fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content p-2">
                                        <div class="product-name py-2">
                                            <h6>Sleev Rings</h6>
                                        </div>
                                    </div>
                                </a>
                                <div class="product-size-prize px-2">
                                    <div class=" product-price d-flex justify-content-center align-items-center">
                                        <h5 class=" actual-price"><i class="rupeed-icon"> ₹</i>100</h5>
                                        <h5 class="ml-2 discount-price"><del> <i class="rupees-icon"> ₹</i> 150 </del>
                                        </h5>

                                    </div>

                                </div>


                                <div class="product-review-discount">
                                    <h5 class="product-reviews badge "> <i class="fa-solid fa-star"></i> </h5>
                                    <h5 class="ml-auto product-discount badge">25% <span>OFF</span> </h5>
                                </div>
                            </div>

                        </div>

                        <div class="item">
                            <div class="product-box position-relative">
                                <a href="product-details.php">
                                    <div class="product-img position-relative">
                                        <img src="{{ asset('public/frontend/img/product/j-product-2.jpg') }}">
                                        <div class="product-cart-view-hover">
                                            <div class="product-cart-view">
                                                <button href="product-details.php" class="btn add-wishlist-btn"><i
                                                        class="fa-light fa-heart"></i></button>
                                                <a href="#" class="btn add-to-cart"><i
                                                        class="fa-light fa-cart-shopping"></i></a>
                                                <a href="product-details.php" class="btn view-more-product"><i
                                                        class="fa-light fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content p-2">
                                        <div class="product-name py-2">
                                            <h6>Adipiscing Mollitelit Ipsum </h6>
                                        </div>


                                    </div>
                                </a>
                                <div class="product-size-prize px-2">

                                    <div class=" product-price d-flex justify-content-center align-items-center">
                                        <h5 class="actual-price"><i class="rupeed-icon"> ₹</i> 80</h5>
                                        <h5 class="ml-2 discount-price"><del> <i class="rupees-icon"> ₹</i> 100 </del>
                                        </h5>

                                    </div>

                                </div>


                                <div class="product-review-discount">
                                    <h5 class="product-reviews badge "> <i class="fa-solid fa-star"></i> </h5>
                                    <h5 class="ml-auto product-discount badge">25% <span>OFF</span> </h5>
                                </div>
                            </div>

                        </div>

                        <div class="item">
                            <div class="product-box position-relative">
                                <a href="product-details.php">
                                    <div class="product-img position-relative">
                                        <img src="{{ asset('public/frontend/img/product/j-product-3.jpg') }}">
                                        <div class="product-cart-view-hover">
                                            <div class="product-cart-view">
                                                <button href="product-details.php" class="btn add-wishlist-btn"><i
                                                        class="fa-light fa-heart"></i></button>
                                                <a href="#" class="btn add-to-cart"><i
                                                        class="fa-light fa-cart-shopping"></i></a>
                                                <a href="product-details.php" class="btn view-more-product"><i
                                                        class="fa-light fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content p-2">
                                        <div class="product-name py-2">
                                            <h6>Caprese Satchel combines </h6>
                                        </div>
                                    </div>
                                </a>
                                <div class="product-size-prize px-2">
                                    <div class=" product-price d-flex justify-content-center align-items-center">
                                        <h5 class="actual-price"><i class="rupeed-icon"> ₹</i> 150</h5>
                                        <h5 class="ml-2 discount-price"><del> <i class="rupees-icon"> ₹</i> 200 </del>
                                        </h5>

                                    </div>

                                </div>

                                <div class="product-review-discount">
                                    <h5 class="product-reviews badge "> <i class="fa-solid fa-star"></i> </h5>
                                    <h5 class="ml-auto product-discount badge">25% <span>OFF</span> </h5>
                                </div>
                            </div>

                        </div>

                        <div class="item">
                            <div class="product-box position-relative">
                                <a href="product-details.php">
                                    <div class="product-img position-relative">
                                        <img src="{{ asset('public/frontend/img/product/j-product-4.jpg') }}">
                                        <div class="product-cart-view-hover">
                                            <div class="product-cart-view">
                                                <button href="product-details.php" class="btn add-wishlist-btn"><i
                                                        class="fa-light fa-heart"></i></button>
                                                <a href="#" class="btn add-to-cart"><i
                                                        class="fa-light fa-cart-shopping"></i></a>
                                                <a href="product-details.php" class="btn view-more-product"><i
                                                        class="fa-light fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content p-2">
                                        <div class="product-name py-2">
                                            <h6>Consectetur Adipiscing</h6>
                                        </div>
                                    </div>
                                </a>
                                <div class="product-size-prize px-2">
                                    <div class=" product-price d-flex justify-content-center align-items-center">
                                        <h5 class=" actual-price"><i class="rupeed-icon"> ₹</i> 250</h5>
                                        <h5 class="ml-2 discount-price"><del> <i class="rupees-icon"> ₹</i> 300 </del>
                                        </h5>

                                    </div>


                                </div>

                                <div class="product-review-discount">
                                    <h5 class="product-reviews badge "> <i class="fa-solid fa-star"></i> </h5>
                                    <h5 class="ml-auto product-discount badge">25% <span>OFF</span> </h5>
                                </div>
                            </div>

                        </div>

                        <div class="item">
                            <div class="product-box position-relative">
                                <a href="product-details.php">
                                    <div class="product-img position-relative">
                                        <img src="{{ asset('public/frontend/img/product/j-product-5.jpg') }}">
                                        <div class="product-cart-view-hover">
                                            <div class="product-cart-view">
                                                <button href="product-details.php" class="btn add-wishlist-btn"><i
                                                        class="fa-light fa-heart"></i></button>
                                                <a href="#" class="btn add-to-cart"><i
                                                        class="fa-light fa-cart-shopping"></i></a>
                                                <a href="product-details.php" class="btn view-more-product"><i
                                                        class="fa-light fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content p-2">
                                        <div class="product-name py-2">
                                            <h6>High Waist Rings</h6>
                                        </div>
                                    </div>
                                </a>
                                <div class="product-size-prize px-2">
                                    <div class=" product-price d-flex justify-content-center align-items-center">
                                        <h5 class=" actual-price"><i class="rupeed-icon"> ₹</i> 250</h5>
                                        <h5 class="ml-2 discount-price"><del> <i class="rupees-icon"> ₹</i> 300 </del>
                                        </h5>

                                    </div>


                                </div>


                                <div class="product-review-discount">
                                    <h5 class="product-reviews badge "> <i class="fa-solid fa-star"></i> </h5>
                                    <h5 class="ml-auto product-discount badge">25% <span>OFF</span> </h5>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-box position-relative">
                                <a href="product-details.php">
                                    <div class="product-img position-relative">
                                        <img src="{{ asset('public/frontend/img/product/j-product-6.jpg') }}">
                                        <div class="product-cart-view-hover">
                                            <div class="product-cart-view">
                                                <button href="product-details.php" class="btn add-wishlist-btn"><i
                                                        class="fa-light fa-heart"></i></button>
                                                <a href="#" class="btn add-to-cart"><i
                                                        class="fa-light fa-cart-shopping"></i></a>
                                                <a href="product-details.php" class="btn view-more-product"><i
                                                        class="fa-light fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content p-2">
                                        <div class="product-name py-2">
                                            <h6>Striped Muffler breakthrough </h6>
                                        </div>
                                    </div>
                                </a>
                                <div class="product-size-prize px-2">
                                    <div class=" product-price d-flex justify-content-center align-items-center">
                                        <h5 class=" actual-price"><i class="rupeed-icon"> ₹</i> 150</h5>
                                        <h5 class="ml-2 discount-price"><del> <i class="rupees-icon"> ₹</i> 200 </del>
                                        </h5>

                                    </div>


                                </div>


                                <div class="product-review-discount">
                                    <h5 class="product-reviews badge "> <i class="fa-solid fa-star"></i> </h5>
                                    <h5 class="ml-auto product-discount badge">25% <span>OFF</span> </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> --}}
            </div>


        </div>
    </section>
    <!--end here product section-->



    <section class="landing-page-testimonials py-5">

        <div class="container">
            <div class="heading-section text-center">
                <h3 class="heading-2">Our Happy Customers</h3>
            </div>

            <div class="client-reviw-slider">
                <div class="owl-carousel owl-theme" id="clientreviews">
                    @if (!empty($reviews))
                        @foreach ($reviews as $review)
                            <div class="item">
                                <div class="client-content landing-client-content text-center">
                                    <div class="client-img">
                                        <img src="{{ asset('public/uploads/review/' . $review->client_image) }}">
                                    </div>
                                    <p>{{ $review->client_review }}</p>
                                    <div class="star-reviews">
                                        @for ($i = 1; $i <= $review->client_rating; $i++)
                                            <i class="fa-solid fa-star"></i>
                                        @endfor


                                    </div>
                                    <h6>{{ $review->client_name }}</h6>
                                    <div class="quote-section">
                                        <i class="fa-solid fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>

    </section>


    <!--start here categories list-->
    <section class="categories-list my-5">
        <div class="heading-section text-center">
            <h4 class="heading-2">Our Brands</h4>
        </div>
        <div class="container">
            <div class="owl-carousel owl-theme categoriesslider">
                @if (!empty($brands))
                    @foreach ($brands as $brand)
                        <div class="item">
                            <div class="categories-img brands-img">
                                <img src="{{ asset('public/uploads/brand/' . $brand->image) }}">
                            </div>

                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <!--start here categoreis list-->


    <!--start here blog section-->
    <section class="blog-section position-relative py-5 bg-light">
        <div class="container">
            <h4 class="heading-2">Blogs</h4>
            <div class="owl-carousel owl-theme" id="blogslider">
                @if (!empty($blogs))
                    @foreach ($blogs as $blog)
                        <div class="item">
                            <div class="blog-pnl">
                                <div class="blog-img">
                                    <img src="{{ asset('public/uploads/blog/' . $blog->blog_image) }}" class="img-fluid">
                                </div>
                                <div class="blog-content p-2">
                                    <h6>{{ date('F jS, Y', strtotime($blog->created_at)) }}</h6>
                                    <h4>{{ $blog->blog_heading }}</h4>
                                    <p> {!! substr($blog->blog_description, 0, 200) !!}</p>
                                    <a href="{{ route('blogger', $blog->blog_slug) }}">Read More <i
                                            class="fa-light fa-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif


            </div>
        </div>
    </section>
@endsection
