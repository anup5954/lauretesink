@extends('layouts.front')
@section('front-title')
    {{ !empty($product->meta_title) ? $product->meta_title : '' }}
@endsection
@section('meta-details')
    <meta name="description" content="{{ !empty($product->meta_decription) ? $product->meta_decription : '' }}">
    <meta name="keywords" content="{{ !empty($product->meta_keyword) ? $product->meta_keyword : '' }}">
@endsection
<style>
    .error {
        color: red;
    }

    .server-error {
        text-align: center;
        color: #ff0000;
    }
</style>
@section('front-content')
    <section class="product-details-section my-2">
        @if ($errors->any())
            {!! implode('', $errors->all('<li class="server-error">:message</li>')) !!}
        @endif
        <div class="container-fluid">
            {{ show_error_msg() }}
            {{ show_success_msg() }}
            <div class="product-details-flex position-relative mb-5">
                <div class="product-right-section position-relative">
                    <div class="ready-to-wishlist">
                        <h6 class="ready-to-ship  mb-0 mr-3"><i class="fa-light fa-truck"></i></h6>
                        <a target="_blank"
                            href="{{ !empty($product->product_document) ? asset('public/uploads/product/' . $product->product_document) : 'javascript:void(0)' }}"
                            class="ready-to-ship mb-0 mr-3"><i class="fa-regular fa-file-pdf"></i></a>
                        <a href="#videopopup" class="ready-to-ship mb-0 mr-3" data-toggle="modal"
                            data-target="#videopopup"><i class="fa-regular fa-video"></i></a>
                    </div>

                    <div class="owl-carousel owl-theme" id="productsliderdetail">
                        <div class="item">
                            @if (!empty($product->product_image))
                                <img src="{{ asset('public/uploads/product/' . $product->product_image) }}"
                                    class="img-fluid">
                            @endif
                            {{-- @if (!empty($galleryImages))
                                @foreach ($galleryImages as $galleryImage)
                                    <img src="{{ asset('public/uploads/productGallery/' . $galleryImage->product_image) }}"
                                        class="img-fluid">
                                @endforeach
                            @else
                                @if (!empty($product->product_image))
                                    <img src="{{ asset('public/uploads/product/' . $product->product_image) }}"
                                        class="img-fluid">
                                @endif
                            @endif --}}

                        </div>
                    </div>
                </div>

                <div class="product-left-section px-3 pt-2">

                    <div class="product-detail-heading">

                        <h1 class="heading-4">{{ !empty($product->product_name) ? $product->product_name : '' }}</h1>
                        <h2>{{ $product->category->category_name }} >
                            <span>{{ !empty($product->subcategory->sub_category_name) ? $product->subcategory->sub_category_name : '' }}</span>
                        </h2>
                        <p>{!! $product->short_description !!}</p>
                        {{-- <ul>
                            <li>Handmade</li>
                            <li>304</li>
                        </ul> --}}


                    </div>



                    <div class=" product-details-price d-flex align-items-center">

                        <h5 class="actual-price"><i class="rupeed-icon"> ₹</i>{{ $product->selling_price }}</h5>

                        <h5 class="ml-2 discount-price"><del> <i class="rupees-icon"> ₹</i> {{ $product->original_price }}
                            </del></h5>

                    </div>

                    <div class="yousave-taxes">

                        <h6 class="yousavemoney text-danger">You Save
                            {{ round(100 - ($product->selling_price / $product->original_price) * 100) }}%</h6>

                        <h6 class="inclusivetax">(Inclusive of all taxes)</h6>

                    </div>



                    {{-- <div class="product-color-sec my-4">

                        <h6 class="mb-3 text-light-color-2">Color</h6>

                        <div class="prodcut-color-pnl" id="productcolor">

                            <button class="btn color-btn color-change" style="background-color: #000; color: #fff"></button>

                            <button class="btn color-btn" style="background-color: #ECB235; color: #000"></button>

                        </div>

                    </div> --}}



                    <!-- <div class="product-size-sec my-4">

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <h6 class="mb-3 text-light-color-2">Size</h6>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <div class="prodcut-size-pnl">

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <button class="btn select-size show">19</button>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <button class="btn select-size">20</button>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <button class="btn select-size">21</button>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <button class="btn select-size">22</button>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <button class="btn select-size">23</button>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <button class="btn select-size">24</button>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          </div>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      </div> -->



                    {{-- <div class="quantity-product mt-4">

                        <h6 class="mb-3 text-light-color-2">Quantity</h6>

                        <div class="qty-container">

                            <button class="btn qty-btn-minus" type="button"><i class="fa fa-minus"></i></button>

                            <input type="text" name="qty" value="0" class="input-qty btn" />

                            <button class="btn qty-btn-plus" type="button"><i class="fa fa-plus"></i></button>

                        </div>

                    </div> --}}



                    <div class="product-details-btn my-4">

                        <button id="enquiryform" class="btn add-to-cart">Enquiry Now</button>

                        <!-- <a href="checkout.php" class="btn view-more-product py-2">Enquiry Now</a> -->

                        <a href="https://api.whatsapp.com/" class="btn view-more-product py-2"><i
                                class="fa-brands fa-whatsapp"></i>
                            Whatsapp</a>

                    </div>



                    <div class="product-details-information-sect border p-2" style="margin-top: 20px;">

                        <ul id="tabs" class="nav nav-tabs" role="tablist">

                            <li class="nav-item">

                                <a id="tab-A" href="#pane-A" class="nav-link active" data-toggle="tab"
                                    role="tab">Information</a>

                            </li>

                            {{-- <li class="nav-item">

                                <a id="tab-C" href="#pane-C" class="nav-link" data-toggle="tab"
                                    role="tab">Reviews</a>

                            </li> --}}

                        </ul>





                        <div id="content" class="tab-content product-information-content" role="tablist">

                            <div id="pane-A" class="card tab-pane fade show active" role="tabpanel"
                                aria-labelledby="tab-A">

                                <div class="product-card-header" role="tab" id="heading-A">

                                    <h5 class="mb-0">

                                        <a data-toggle="collapse" href="#collapse-A" aria-expanded="true"
                                            aria-controls="collapse-A">

                                            Information

                                        </a>

                                    </h5>

                                </div>



                                <!-- Note: New place of `data-parent` -->

                                <div id="collapse-A" class="collapse show" data-parent="#content" role="tabpanel"
                                    aria-labelledby="heading-A">

                                    <div class="card-body">

                                        <div class="product-information">

                                            <div class="product-details-information-box mb-2">

                                                <h5>Details:</h5>

                                                {!! $product->long_description !!}


                                            </div>





                                            {{-- <div class="product-details-information-box mb-2">

                                                <h6>Shipping Policy</h6>

                                                <p>We dispatch and deliver the product within 10-15 business days at
                                                    your door steps</p>

                                            </div> --}}



                                            {{-- <div class="product-details-information-box mb-2">

                                                <h6>Return Policy</h6>

                                                <p>If you are not satisfied with your purchase for any reason, you can
                                                    return the unused product to C LGupta Retail in its original packing
                                                    along with the original price tags, labels, bar-codes, user manual,
                                                    warranty card, invoices and all related documents within 48 hours
                                                    from the time of delivery (Not applicable on Furniture &
                                                    Lighting).It is advised that the return packet should be adequately
                                                    packed for dispatch purposes so that there is no further damage to
                                                    the product during transit.If a product has technical /
                                                    manufacturing defects, C LGupta Retail is willing to replace the
                                                    product.</p>

                                                <p>In case you receive any damaged, defective or improper product, you
                                                    need to inform us within 48 hours of delivery for
                                                    replacement/repair. If you are unable to inform us within 48 hours,
                                                    CLG Retail shall not be held liable for providing solution against
                                                    any such complaint. The time frame starts from date/time of product
                                                    delivered at your door steps as per the confirmation received from
                                                    our logistics team or courier partners. Please send us the pictures
                                                    of damaged, defective or improper product at customercare@iaah.com
                                                    within the given time frame.</p>

                                            </div> --}}







                                            {{-- <div class="product-details-information-box mb-2">

                                                <h6>Disclaimer</h6>

                                                <p>product packaging and materials may contain more and/or different
                                                    information. It is recommended not to solely rely on the information
                                                    presented.</p>

                                            </div> --}}

                                        </div>

                                    </div>

                                </div>

                            </div>



                            <div id="pane-C" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-C">

                                <div class="product-card-header" role="tab" id="heading-C">

                                    <h5 class="mb-0">

                                        <a class="collapsed" data-toggle="collapse" href="#collapse-C" aria-expanded="false"
                                            aria-controls="collapse-C">

                                            Ratings & Reviews

                                        </a>

                                    </h5>

                                </div>

                                <div id="collapse-C" class="collapse" role="tabpanel" data-parent="#content"
                                    aria-labelledby="heading-C">

                                    <div class="card-body">

                                        <div class="rating-reviews-section">

                                            <div class="rating-reviews-box">

                                                <div class="rating-reviews-star">

                                                    <img src="img/product/j-product-1.jpg">

                                                    <div class="reviews-name">

                                                        <h5>Lokesh</h5>

                                                        <h6><i class="fa-solid fa-star"></i> <i
                                                                class="fa-solid fa-star"></i> <i
                                                                class="fa-solid fa-star"></i> <i
                                                                class="fa-solid fa-star"></i> <i
                                                                class="fa-solid fa-star"></i></h6>

                                                    </div>

                                                </div>

                                                <div class="rating-review-content">

                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod

                                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                                        minim veniam,

                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                        commodo

                                                        consequat. </p>

                                                </div>

                                            </div>



                                            <div class="rating-reviews-box">

                                                <div class="rating-reviews-star">

                                                    <img src="img/product/j-product-1.jpg">

                                                    <div class="reviews-name">

                                                        <h5>Lokesh</h5>

                                                        <h6><i class="fa-solid fa-star"></i> <i
                                                                class="fa-solid fa-star"></i> <i
                                                                class="fa-solid fa-star"></i> <i
                                                                class="fa-solid fa-star"></i> <i
                                                                class="fa-solid fa-star-half"></i></h6>

                                                    </div>

                                                </div>

                                                <div class="rating-review-content">

                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod

                                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                                        minim veniam,

                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                        commodo

                                                        consequat. </p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>







                </div>

            </div>

        </div>





        </div>

    </section>





    <!--start here product slider-->

    {{-- <section class="product-section-slider bg-light py-5">

        <div class="container-fluid">

            <h4 class="heading-2">Trending Products</h4>

            <div class="owl-carousel owl-theme productslider">

                <div class="item">

                    <div class="product-box position-relative">

                        <a href="product-details.php">

                            <div class="product-img position-relative">

                                <img src="img/product/j-product-1.jpg">

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

                                <h5 class="ml-2 discount-price"><del> <i class="rupees-icon"> ₹</i> 150 </del></h5>



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

                                <img src="img/product/j-product-2.jpg">

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

                                <h5 class="ml-2 discount-price"><del> <i class="rupees-icon"> ₹</i> 100 </del></h5>



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

                                <img src="img/product/j-product-3.jpg">

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

                                <h5 class="ml-2 discount-price"><del> <i class="rupees-icon"> ₹</i> 200 </del></h5>



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

                                <img src="img/product/j-product-4.jpg">

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

                                <h5 class="ml-2 discount-price"><del> <i class="rupees-icon"> ₹</i> 300 </del></h5>



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

                                <img src="img/product/j-product-5.jpg">

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

                                <h5 class="ml-2 discount-price"><del> <i class="rupees-icon"> ₹</i> 300 </del></h5>



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

                                <img src="img/product/j-product-6.jpg">

                                <div class="product-cart-view-hover">

                                    <div class="product-cart-view">

                                        <button class="btn add-wishlist-btn"><i class="fa-light fa-heart"></i>
                                        </button>

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

                                <h5 class="ml-2 discount-price"><del> <i class="rupees-icon"> ₹</i> 200 </del></h5>



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

    </section> --}}

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
                                        <img
                                            src="{{ asset('public/uploads/product/' . $tProduct->hover_image) }}"class="hoverimg" />
                                        {{-- <div class="product-cart-view-hover">
                                            <div class="product-cart-view">
                                                <button href="product-details.php" class="btn add-wishlist-btn"><i
                                                        class="fa-light fa-heart"></i></button>
                                                <a href="#" class="btn add-to-cart"><i
                                                        class="fa-light fa-cart-shopping"></i></a>
                                                <a href="product-details.php" class="btn view-more-product"><i
                                                        class="fa-light fa-eye"></i></a>
                                            </div>
                                        </div> --}}
                                    </div>
                                    <div class="product-content p-2">
                                        <div class="product-name py-2">
                                            <h6>{{ $tProduct->product_name }}</h6>
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
                                    <h5 class="product-reviews badge "> <i class="fa-solid fa-star"></i> </h5>
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
    <section class="enquiry-form">
        <button class="btn bg-color-dark-2 px-3 py-2" id="closeenquiryform"><i class="fa-light fa-xmark"></i></button>
        <form class="border p-2 m-2" name="porductOrderForm" action="{{ route('saveorder', $product->id) }}"
            method="POST">
            @csrf
            @method('PUT')
            <div class="heading-section text-center">
                <i class="fa-light fa-basket-shopping"></i>
                <h1 class="heading-2 d-block">Fill Enquiry Form Below</h1>
            </div>
            <div class="wdinput form-group">
                <label>Product Name</label>
                <input type="text" placeholder="Enter Product Name" class="form-control" name="product_name"
                    value="{{ $product->product_name }}" readonly>
            </div>
            <div class="wdinput form-group">
                <label>Product Price</label>
                <input type="text" placeholder="Enter Product Price" class="form-control" name="product_price"
                    value="{{ $product->selling_price }}" readonly>
            </div>
            <div class="wdinput form-group">
                <label>Product Size</label>
                <input type="text" placeholder="Enter Product Price" class="form-control" name="product_size"
                    value="{{ $product->product_unit . '-' . $product->product_size }}" readonly>
            </div>
            <div class="wdinput form-group">
                <label>Full Name</label>
                <input type="text" placeholder="Full Name" class="form-control" name="name" id="name">
            </div>

            <div class="wdinput form-group">
                <label>Email Id</label>
                <input type="email" placeholder="Email Id" class="form-control" name="email" id="email">
            </div>

            <div class="wdinput form-group">
                <label>Mobile Number</label>
                <input type="number" placeholder="Mobile Number" class="form-control" name="mobile" id="mobile">
            </div>

            <div class="wdinput form-group">
                <label>Message</label>
                <textarea cols="2" class="form-control" name="detailsmessage" id="detailsmessage" placeholder="Messages"> </textarea>
            </div>

            <div class="wdinput form-group mb-5">
                <button class="btn bg-color-dark-2 w-100 mb-5" type="submit">Submit</button>
            </div>

        </form>


    </section>

    <div class="modal fade" id="videopopup" tabindex="-1" role="dialog" aria-labelledby="videopopup"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                    <iframe width="100%" height="315" src="{{ $product->youtube_link }}"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        autoplay allowfullscreen></iframe>
                </div>

            </div>
        </div>
    </div>
    <!--end here product slider-->
@endsection
@section('front-script')
    <script src="{{ asset('public/frontend/js/jquery.validate.min.js') }}"></script>
    <script>
        $(function() {
            $.validator.addMethod("lettersonly", function(value, element) {
                return this.optional(element) || /^[a-zA-Z ]*$/.test(value);
            });
            $.validator.addMethod("validemail", function(value, element) {
                return this.optional(element) ||
                    /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value);
            });
            $("form[name='porductOrderForm']").validate({
                rules: {
                    name: {
                        required: true,
                        lettersonly: true,
                        maxlength: 15
                    },
                    email: {
                        required: true,
                        validemail: true,
                        maxlength: 40
                    },
                    mobile: {
                        required: true,
                        number: true,
                        maxlength: 15
                    },
                    detailsmessage: {
                        required: true
                    },

                },
                messages: {
                    name: {
                        required: "Please enter your name",
                        lettersonly: "please enter alphabet only"
                    },
                    email: {
                        required: "Please enter your email",
                        validemail: "Please enter your valid email"
                    },
                    mobile: {
                        required: "Please enter your contact number",
                        number: "Please enter number only"
                    },

                    detailsmessage: {
                        required: "Please enter your message",
                    }
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        });
    </script>
@endsection
