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

    <section class="breadcumb-section">

        <nav aria-label="breadcrumb">

            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="#">Home</a></li>

                <li class="breadcrumb-item active" aria-current="page">Blog Details</li>

            </ol>

        </nav>

    </section>

    <!--end here breadcumb-section-->



    <section class="blog-section">



        <div class="blog-details-section">

            <div class="blog-details-img">

                <img src="{{ asset('public/uploads/blog/' . $blog->blog_image) }}" class="img-fluid">

            </div>

            <div class="container">

                <div class="blog-details-content p-2">

                    <h6>{{ date('F jS, Y', strtotime($blog->created_at)) }}</h6>

                    <h2>{{ $blog->blog_heading }}</h2>

                    <p> {!! $blog->blog_description !!}</p>



                </div>

            </div>

        </div>



    </section>
@endsection
