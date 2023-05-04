@extends('layouts.front')
@section('front-title')
Laurete Premium Kitchen Sink | About
@endsection
@section('front-content')
    <section class="content-page-section pt-5">
        <div class="container">
            <div class="about-grid-section">
                <div class="about-grid-img">
                    <img src="{{ asset('public/frontend/img/about-people.jpg') }}" class="img-fluid">
                </div>
                <div class="about-content-box">
                    <h2 class="text-dark-color-1 mb-3">Quisque erat urna, congue et libero in eleifend euismod velit.
                    </h2>

                    <p>In nec purus eget neque accumsan finibus. Duis condimentum elit ut libero commodo iaculis. Donec
                        augue diam, tristique et ultricies nec, consectetur quis enim. Nullam id rutrum ex. Aliquam a
                        lectus id lacus rhoncus dapibus non ac justo. Vivamus lacinia vestibulum metus in dapibus.
                        Vestibulum sit amet sollicitudin enim. Ut id interdum turpis. Curabitur porta auctor quam,
                        pretium facilisis nisl. Pellentesque efficitur elit ante, vel vulputate tortor blandit nec.</p>

                    <p>In nec purus eget neque accumsan finibus. Duis condimentum elit ut libero commodo iaculis. Donec
                        augue diam, tristique et ultricies nec, consectetur quis enim. Nullam id rutrum ex. Aliquam a
                        lectus id lacus rhoncus dapibus non ac justo. Vivamus lacinia vestibulum metus in dapibus.
                        Vestibulum sit amet sollicitudin enim. Ut id interdum turpis. Curabitur porta auctor quam,
                        pretium facilisis nisl. Pellentesque efficitur elit ante, vel vulputate tortor blandit nec.</p>
                </div>
            </div>
            <div class="about-content-box mt-5">
                <h2 class="text-dark-color-1 mb-3">Quisque erat urna, congue et libero in eleifend euismod velit.</h2>

                <p>In nec purus eget neque accumsan finibus. Duis condimentum elit ut libero commodo iaculis. Donec
                    augue diam, tristique et ultricies nec, consectetur quis enim. Nullam id rutrum ex. Aliquam a lectus
                    id lacus rhoncus dapibus non ac justo. Vivamus lacinia vestibulum metus in dapibus. Vestibulum sit
                    amet sollicitudin enim. Ut id interdum turpis. Curabitur porta auctor quam, pretium facilisis nisl.
                    Pellentesque efficitur elit ante, vel vulputate tortor blandit nec.</p>

                <p>In nec purus eget neque accumsan finibus. Duis condimentum elit ut libero commodo iaculis. Donec
                    augue diam, tristique et ultricies nec, consectetur quis enim. Nullam id rutrum ex. Aliquam a lectus
                    id lacus rhoncus dapibus non ac justo. Vivamus lacinia vestibulum metus in dapibus. Vestibulum sit
                    amet sollicitudin enim. Ut id interdum turpis. Curabitur porta auctor quam, pretium facilisis nisl.
                    Pellentesque efficitur elit ante, vel vulputate tortor blandit nec.</p>
            </div>


        </div>

        <div class="client-testimonials py-5 mt-5">
            <div class="container">
                <div class="heading-section text-center">
                    <h3 class="heading-2">Our Happy Customers</h3>
                </div>

                <div class="client-reviw-slider">
                    <div class="owl-carousel owl-theme" id="clientreviews">
                        <div class="item">

                            <div class="client-content landing-client-content text-center">
                                <div class="client-img">
                                    <img src="{{ asset('public/frontend/img/client/client-1.jpg') }}">
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. </p>
                                <div class="star-reviews">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star-half"></i>
                                </div>
                                <h6>Nitika</h6>
                                <div class="quote-section">
                                    <i class="fa-solid fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="item">

                            <div class="client-content landing-client-content text-center">
                                <div class="client-img">
                                    <img src="{{ asset('public/frontend/img/client/client-2.jpg') }}">
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. </p>
                                <div class="star-reviews">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <h6>Neil</h6>
                                <div class="quote-section">
                                    <i class="fa-solid fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-content landing-client-content text-center">

                                <div class="client-img">
                                    <img src="{{ asset('public/frontend/img/client/client-3.jpg') }}">
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. </p>
                                <div class="star-reviews">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <h6>Ntasha</h6>
                                <div class="quote-section">
                                    <i class="fa-solid fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
