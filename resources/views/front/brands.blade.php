@extends('layouts.front')
@section('front-title')
    Laurete Premium Kitchen Sink | Terms & Conditions
@endsection
@section('front-content')
    <!--start here breadcumb-section-->

    <section class="breadcumb-section">

        <nav aria-label="breadcrumb">

            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="#">Home</a></li>

                <li class="breadcrumb-item active" aria-current="page">Brands</li>

            </ol>

        </nav>

    </section>

    <!--end here breadcumb-section-->
    <section>
        <div class="container">
            <div class="gridsection">
                @if (!empty($brands))
                    @foreach ($brands as $brand)
                        <div class="gridbox">
                            <img src="{{ asset('public/uploads/brand/' . $brand->image) }}" />
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </section>
@endsection
