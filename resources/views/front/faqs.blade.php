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

                <li class="breadcrumb-item active" aria-current="page">FAQs</li>

            </ol>

        </nav>

    </section>

    <!--end here breadcumb-section-->



    <section class="content-page-section">

        <div class="container-fluid">

            <div id="main" class="mt-0">

                <div class="accordion" id="faq">
                    @if (!empty($faqs))
                        @foreach ($faqs as $faq)
                            <div class="card">
                                <div class="card-header" id="faqhead1">
                                    <a href="#" class="btn btn-header-link" data-toggle="collapse"
                                        data-target="#faq{{ $loop->iteration }}" aria-expanded="true"
                                        aria-controls="faq{{ $loop->iteration }}"> {{ $faq->heading }}</a>
                                </div>
                                <div id="faq{{ $loop->iteration }}" class="collapse show" aria-labelledby="faqhead1"
                                    data-parent="#faq">
                                    <div class="card-body">
                                        <p>{!! $faq->description !!}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif




                </div>

            </div>



    </section>
@endsection
