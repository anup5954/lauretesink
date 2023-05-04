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

                <li class="breadcrumb-item active" aria-current="page">Video</li>

            </ol>

        </nav>

    </section>

    <!--end here breadcumb-section-->






    <div class="container">

        <ul class="nav nav-tabs tabsection">
            @php
                $i = 0;
            @endphp
            @foreach ($categories as $category)
                <li class="{{ $i == 0 ? 'active' : '' }}"><a href="#tab{{ $category->id }}"
                        data-toggle="tab">{{ $category->video_category_name }}</a>
                </li>
                @php
                    $i++;
                @endphp
            @endforeach
        </ul>

        <div class="tab-content">
            @php
                $j = 0;
            @endphp
            @foreach ($categories as $category)
                <div class="tab-pane {{ $j == 0 ? 'active' : '' }}" id="tab{{ $category->id }}">
                    <div class="panel panel-default">
                        <div class="gridsection">
                            @if (!empty($videos))
                                @foreach ($videos as $video)
                                    @if ($video->category_id == $category->id)
                                        <div class="gridbox">
                                            <iframe width="100%" height="315" src="{{ $video->video_url }}"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                allowfullscreen></iframe>
                                        </div>
                                    @endif
                                @endforeach
                            @endif

                        </div>

                    </div>
                </div>
                @php
                    $j++;
                @endphp
            @endforeach






        </div>
    </div>



    </section>
@endsection
