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
            <li class="active"><a href="#tab1" data-toggle="tab">Bathroom</a></li>
            <li><a href="#tab2" data-toggle="tab">Living Room</a></li>
            <li><a href="#tab3" data-toggle="tab">Bedroom</a></li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="tab1">
                <div class="panel panel-default">
                    <div class="gridsection">

                        <div class="gridbox">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/oRDRfikj2z8"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen>
                            </iframe>
                        </div>

                    </div>
                </div>
            </div>


            <div class="tab-pane" id="tab2">
                <div class="panel panel-default">
                    <div class="gridsection">

                        <div class="gridbox">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/CA6Mofzh7jo"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>

                    </div>

                </div>

            </div>
        </div>
        <div class="tab-pane" id="tab3">
            <div class="panel panel-default">
                <div class="gridsection">

                    <div class="gridbox">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/8jxRn-T_LCs"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
                    </div>

                </div>
            </div>
        </div>
    </div>

    </div>
    </div>



    </section>
@endsection
