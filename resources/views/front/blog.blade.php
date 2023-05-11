@extends('layouts.front')
@section('front-title')
    Laurete Premium Kitchen Sink | FAQs
@endsection
@section('front-content')
    <!--start here breadcumb-section-->

    <section class="breadcumb-section">

        <nav aria-label="breadcrumb">

            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="#">Home</a></li>

                <li class="breadcrumb-item active" aria-current="page">Blog</li>

            </ol>

        </nav>

    </section>

    <!--end here breadcumb-section-->



    <section class="blog-section py-5">

        <div class="heading-section text-center">

            <h1 class="heading-3">Blogs</h1>

        </div>

        <div class="container-fluid">

            <div class="blog-grid-section mt-3">

                @if (!empty($blogs))
                    @foreach ($blogs as $blog)
                        <div class="blog-pnl">

                            <div class="blog-img">

                                <img src="{{ asset('public/uploads/blog/' . $blog->blog_image) }}" class="img-fluid">

                            </div>

                            <div class="blog-content p-2">
                                <div class="d-flex justify-content-between">
                                    <h6>Anil Bhatt</h6>
                                    <h6>{{ date('F jS, Y', strtotime($blog->created_at)) }}</h6>
                                </div>
                                <h4> {{ $blog->blog_heading }}</h4>

                                <p> {!! substr($blog->blog_description, 0, 200) !!}</p>

                                <a href="{{ route('blogger', $blog->blog_slug) }}">Read More <i
                                        class="fa-light fa-arrow-right"></i>
                                </a>

                            </div>

                        </div>
                    @endforeach
                @endif




            </div>

        </div>

    </section>
@endsection
