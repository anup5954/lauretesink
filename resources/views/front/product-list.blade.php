@extends('layouts.front')
@section('front-title')
    All Products
@endsection


@section('front-content')
    <!--start here breadcumb-section-->
    <section class="breadcumb-section">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $categories[0]->category_name }}</li>
            </ol>
        </nav>
    </section>
    <!--end here breadcumb-section-->

    <section class="product-list-sidebard my-3">
        <div class="container-fluid">
            <div class="mainproduct-flex d-flex">
                @if ($products->count() > 0)
                    <aside class="product-sidebar border">
                        <div class="closeproductmenu d-xl-none d-lg-none d-block text-right">
                            <button class="btn productclose" id="productmenuclose"><i
                                    class="fa-solid fa-xmark"></i></button>
                        </div>
                        @if (!empty($categories))
                            <div class="product-sidebar-box">
                                <div class="heading-section bg-color-dark-1 pt-2 pb-3 px-2">
                                    <h5 class="heading-1 mb-0">Categories</h5>
                                </div>
                                <div class="product-sidebar-list">
                                    <ul>
                                        @foreach ($categories as $category)
                                            <li>
                                                <a href="{{ route('subcategory', $category->category_slug) }}"> <i
                                                        class="fa-light fa-angles-right"></i>
                                                    {{ $category->category_name }}</a>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        @endif


                        <div class="product-sidebar-box">
                            <div class="heading-section bg-color-dark-1 pt-2 pb-3 px-2">
                                <h5 class="heading-1 mb-0">Type</h5>
                            </div>
                            <div class="product-sidebar-list">
                                <ul>

                                    <li>
                                        <label class="checkbox-custom"> Machine Made
                                            <input type="radio" class="made_by" name="made_by" value="Machinemade">
                                            <span class="checkmark checkmark-radio"></span>
                                        </label>
                                    </li>

                                    <li>
                                        <label class="checkbox-custom"> Handmade Made
                                            <input type="radio" class="made_by" name="made_by" value="Handmade">
                                            <span class="checkmark checkmark-radio"></span>
                                        </label>
                                    </li>



                                </ul>
                            </div>
                        </div>

                        {{-- <div class="product-sidebar-box">
                            <div class="heading-section bg-color-dark-1 pt-2 pb-3 px-2">
                                <h5 class="heading-1 mb-0">Type</h5>
                            </div>
                            <div class="product-sidebar-list">
                                <ul>

                                    <li>
                                        <label class="checkbox-custom"> 302
                                            <input type="radio" class="made_by" name="made_by" value="302">
                                            <span class="checkmark checkmark-radio"></span>
                                        </label>
                                    </li>

                                    <li>
                                        <label class="checkbox-custom"> 204
                                            <input type="radio" class="made_by" name="made_by" value="204">
                                            <span class="checkmark checkmark-radio"></span>
                                        </label>
                                    </li>



                                </ul>
                            </div>
                        </div>
 --}}
                        <div class="product-sidebar-box">
                            <div class="heading-section bg-color-dark-1 pt-2 pb-3 px-2">
                                <h5 class="heading-1 mb-0">Overall Size (Length x Width)</h5>
                            </div>
                            <div class="product-sidebar-list">
                                <ul>
                                    @for ($i = 0; $i < 1000; $i = $i + 200)
                                        <li>
                                            <label class="checkbox-custom"> {{ $i }} - {{ $i + 200 }}
                                                <input type="checkbox" class="sizeCheck" name="sizeCheckBox[]"
                                                    value="{{ $i }},{{ $i + 200 }}">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    @endfor


                                </ul>
                            </div>
                        </div>




                        <div class="product-sidebar-box">
                            <div
                                class="heading-section bg-color-dark-1 pt-2 pb-2 px-2 d-flex justify-content-between align-items-center">
                                <h5 class="heading-1 mb-0">Price</h5>
                            </div>
                            <div class="d-flex">
                                <div class="wrapper px-3">

                                    <div class="price-input">
                                        <div class="field minfield">
                                            <input type="number" class="input-min text-left" value="0">
                                        </div>
                                        <div class="field maxfield">
                                            <input type="number" class="input-max text-right" value="10000">
                                        </div>
                                    </div>
                                    <div class="slider">
                                        <div class="progress"></div>
                                    </div>
                                    <div class="range-input">
                                        <input type="range" class="range-min" id="minPrice" min="0" max="10000"
                                            value="0" step="100">
                                        <input type="range" class="range-max" id="maxPrice" min="0" max="10000"
                                            value="10000" step="100">
                                    </div>
                                </div>

                                <!--   Support Section -->

                            </div>
                        </div>



                    </aside>
                @endif
                <div class="main-product-section position-relative">
                    <div class="product-grid-section">

                        @if ($products->count() > 0)
                            @foreach ($products as $product)
                                <div class="product-box position-relative" id="{{ $product->id }}">
                                    <a href="{{ route('productdetails', $product->product_slug) }}">
                                        <div class="product-img position-relative">
                                            <img src="{{ asset('public/uploads/product/' . $product->product_image) }}" x>
                                            <img
                                                src="{{ asset('public/uploads/product/' . $product->hover_image) }}"class="hoverimg" />
                                            <div class="product-cart-view-hover">
                                                <div class="product-cart-view">
                                                    <!-- <button href="product-details.php" class="btn add-wishlist-btn"><i class="fa-light fa-heart"></i></button> -->
                                                    <a href="{{ route('productdetails', $product->id) }}"
                                                        class="btn add-to-cart"><i
                                                            class="fa-light fa-cart-shopping"></i></a>
                                                    <a href="{{ route('productdetails', $product->product_slug) }}"
                                                        class="btn view-more-product"><i class="fa-light fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content p-2">
                                            <div class="product-name py-2">
                                                <h6>{{ $product->product_name }}</h6>
                                                <h5><span>Size ({{ $product->product_unit }}) :
                                                    </span>{{ $product->product_size }} </h5>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="product-size-prize px-2">
                                        <div class=" product-price d-flex justify-content-center align-items-center">
                                            <h5 class=" actual-price"><i class="rupeed-icon">
                                                    ₹</i>{{ $product->selling_price }}</h5>
                                            <h5 class="ml-2 discount-price"><del> <i class="rupees-icon"> ₹</i>
                                                    {{ $product->original_price }} </del>
                                            </h5>

                                        </div>

                                    </div>


                                    <div class="product-review-discount">
                                        @if ($product->product_type)
                                            <h5 class="product-reviews badge  mr-2"> {{ $product->product_type }} </h5>
                                        @endif
                                        @if ($product->made_by)
                                            <h5 class="product-reviews badge "> {{ $product->made_by }} </h5>
                                        @endif
                                        <h5 class="ml-auto product-discount badge">
                                            {{ round(100 - ($product->selling_price / $product->original_price) * 100) }}%&nbsp;
                                            <span> OFF</span>
                                        </h5>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    @if ($products->count() <= 0)
                        <div class="no-product-aviable text-center py-30">
                            <img src="{{ asset('public/frontend/img/no-product.png') }}" />
                        </div>
                    @endif
                    <!-- <button class="btn productmenu d-lg-none d-xl-none d-inline-block" id="productmenu"><i
                                                                    class="fa-light fa-bars"></i></button> -->
                </div>

            </div>

        </div>
        @php
            $urlData = implode(',', Route::current()->parameters());
            
        @endphp

    </section>
    <div class="d-flex justify-content-center">
        {!! $products->links() !!}
    </div>

@endsection
@section('front-script')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $(document).on("change", "#minPrice", function() {
                var minValue = $(this).val();
                var maxValue = $("#maxPrice").val();
                let size = [];
                var made_byData = "";
                if ($(".made_by").is(':checked')) {
                    made_byData = $(".made_by").val();
                }
                $('input[name="sizeCheckBox[]"]:checked').each(function() {
                    size.push($(this).val());
                });
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    method: "POST",
                    url: "{{ route('minmaxprice') }}",
                    data: {
                        "minValue": minValue,
                        "maxValue": maxValue,
                        "categories": "{{ $urlData }}",
                        "size": size,
                        "made_by": made_byData

                    },
                    success: function(response) {
                        let arrShowIds = [];
                        for (let i = 0; i < response.length; i++) {
                            arrShowIds.push(response[i].id);
                        }

                        $('.product-box').each(function() {

                            if (arrShowIds.includes(parseInt($(this).attr('id')))) {
                                $(this).css("display", "block");
                            } else {
                                $(this).css("display", "none");
                            }
                        });
                    }
                });
            });
            $(document).on("change", "#maxPrice", function() {
                var minValue = $("#minPrice").val();
                var maxValue = $(this).val();
                var made_byData = "";
                if ($(".made_by").is(':checked')) {
                    made_byData = $(".made_by").val();
                }
                let size = [];
                $('input[name="sizeCheckBox[]"]:checked').each(function() {
                    size.push($(this).val());
                });
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    method: "POST",
                    url: "{{ route('minmaxprice') }}",
                    data: {
                        "minValue": minValue,
                        "maxValue": maxValue,
                        "categories": "{{ $urlData }}",
                        "size": size,
                        "made_by": made_byData
                    },
                    success: function(response) {
                        let arrShowIds = [];
                        for (let i = 0; i < response.length; i++) {
                            arrShowIds.push(response[i].id);
                        }

                        $('.product-box').each(function() {

                            if (arrShowIds.includes(parseInt($(this).attr('id')))) {
                                $(this).css("display", "block");
                            } else {
                                $(this).css("display", "none");
                            }
                        });
                    }
                });
            })
            let size = [];
            $(document).on("change", ".sizeCheck", function() {
                var minValue = $("#minPrice").val();
                var maxValue = $("#maxPrice").val();
                var made_byData = "";
                if ($(".made_by").is(':checked')) {
                    made_byData = $(".made_by").val();
                }
                size = [];
                $('input[name="sizeCheckBox[]"]:checked').each(function() {
                    size.push($(this).val());
                });
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    method: "POST",
                    url: "{{ route('minmaxprice') }}",
                    data: {
                        "size": size,
                        "categories": "{{ $urlData }}",
                        "minValue": minValue,
                        "maxValue": maxValue,
                        "made_by": made_byData
                    },
                    success: function(response) {
                        let arrShowIds = [];
                        for (let i = 0; i < response.length; i++) {
                            arrShowIds.push(response[i].id);
                        }

                        $('.product-box').each(function() {

                            if (arrShowIds.includes(parseInt($(this).attr('id')))) {
                                $(this).css("display", "block");
                            } else {
                                $(this).css("display", "none");
                            }
                        });
                    }
                });
            });

            $(document).on("click", ".made_by", function() {
                var made_byData = "";
                if ($(".made_by").is(':checked')) {
                    made_byData = $(".made_by").val();
                }
                var minValue = $("#minPrice").val();
                var maxValue = $("#maxPrice").val();
                size = [];
                $('input[name="sizeCheckBox[]"]:checked').each(function() {
                    size.push($(this).val());
                });
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    method: "POST",
                    url: "{{ route('minmaxprice') }}",
                    data: {
                        "size": size,
                        "categories": "{{ $urlData }}",
                        "minValue": minValue,
                        "maxValue": maxValue,
                        "made_by": made_byData
                    },
                    success: function(response) {
                        let arrShowIds = [];
                        for (let i = 0; i < response.length; i++) {
                            arrShowIds.push(response[i].id);
                        }

                        $('.product-box').each(function() {

                            if (arrShowIds.includes(parseInt($(this).attr('id')))) {
                                $(this).css("display", "block");
                            } else {
                                $(this).css("display", "none");
                            }
                        });
                    }
                });
            });

        });
    </script>
@endsection
