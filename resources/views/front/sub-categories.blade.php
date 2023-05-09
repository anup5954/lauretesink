@extends('layouts.front')
@section('front-title')
    {{ $category->category_name }}
@endsection
@section('front-content')
    <section class="breadcumb-section">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $category->category_name }}</li>
            </ol>
        </nav>
    </section>
    <!--end here breadcumb-section-->

    <section class="product-list-sidebard my-3">
        <div class="container-fluid">
            <div class="mainproduct-flex d-flex">

                <div class="main-product-section position-relative">
                    <div class="product-grid-section">
                        @if (!empty($subcategories))
                            @foreach ($subcategories as $subcategory)
                                <div class="product-box position-relative">
                                    <a
                                        href="{{ route('product_list', ['main_id' => $category->category_slug, 'sub_id' => $subcategory->sub_category_slug]) }}">
                                        <div class="product-img position-relative">
                                            <img
                                                src="{{ asset('public/uploads/sub-category/' . $subcategory->sub_category_image) }}">
                                            <div class="product-cart-view-hover">
                                                <div class="product-cart-view">

                                                    <a href="{{ route('product_list', ['main_id' => $category->category_slug, 'sub_id' => $subcategory->sub_category_slug]) }}"
                                                        class="btn view-more-product"><i class="fa-light fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content p-2">
                                            <div class="product-name py-2">
                                                <h6>{{ $subcategory->sub_category_name }}</h6>
                                            </div>
                                        </div>
                                    </a>



                                </div>
                            @endforeach
                        @endif
                    </div>
                    <button class="btn productmenu d-lg-none d-xl-none d-inline-block" id="productmenu"><i
                            class="fa-light fa-bars"></i></button>
                </div>
            </div>
        </div>
    </section>
@endsection
