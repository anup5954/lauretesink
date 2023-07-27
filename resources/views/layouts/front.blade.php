<!DOCTYPE html>
<html>

<head>
    <title>@yield('front-title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Start here SEO Part -->
    @yield('meta-details')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- End here SEO Part -->
    <!--start here favicon-->
    <link rel="shortcut icon" href="{{ asset('public/frontend/img/logo.png') }}" / alt="Signo Elevators">
    <!--end here favicon-->
    <!--start here css file-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/owl.theme.green.css') }}">
    <link rel="stylesheet" type="text/css" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/common.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/header.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/footer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/responsive.css') }}">
    <!--end here css file-->
</head>

<body class="menu-class-change">
    <!--start here header section-->
    @include('layouts.front-include.header')
    <!--end here header section-->
    @yield('front-banner')


    @yield('front-content')



    <!--start here footer section-->
    @include('layouts.front-include.footer')
    <!--end here footer section-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    {{-- <script type="text/javascript" src="{{ asset('public/frontend/js/jquery.js') }}"></script> --}}
    <script type="text/javascript" src="{{ asset('public/frontend/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/js/all.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/js/owl.carousel2.thumbs.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/js/header.js') }}"></script>
    @yield('front-script')
    <!--end here js file -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#global-modal').modal('show');
        });
    </script>
    <!--start here banner section-->
    <script type="text/javascript">
        $('#landingpage').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
            items: 1,
            dots: false,


        })
    </script>
    <!--end here banner section-->

    <!--start here landing categories-->

    <script type="text/javascript">
        $('#landingcategories').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                991: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        })
    </script>
    <!--end here landing categories-->

    <!--start here landing offer-->
    <script type="text/javascript">
        $('#landingoffer').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
            dots: false,
            autoplay: true,
            autoplayTimeout: 5000,
            responsive: {
                0: {
                    items: 1.2,
                },
                991: {
                    items: 2.5,
                },
                1000: {
                    items: 2.5,
                }
            }

        })
    </script>
    <!--end here landing offer-->

    <!--start here product slider-->

    <script type="text/javascript">
        $('.productslider').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
            dots: false,
            responsive: {
                0: {
                    items: 1.1,
                    nav: false
                },
                991: {
                    items: 2.5,
                    nav: false
                },
                1000: {
                    items: 4
                }
            }
        })
    </script>
    <!--end here product slider-->

    <script type="text/javascript">
        $('#productsliderdetail').owlCarousel({

            loop: true,

            items: 1,

            dots: false,
            nav: true,

            thumbs: false,

            thumbImage: true,

            thumbContainerClass: 'owl-thumbs',

            thumbItemClass: 'owl-thumb-item'

        });
    </script>
    <!--start here categories slider-->

    <script type="text/javascript">
        $('.categoriesslider').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
            dots: false,
            responsive: {
                0: {
                    items: 1.5,
                    nav: false
                },
                600: {
                    items: 3.5,
                    nav: false
                },
                1000: {
                    items: 4
                }
            }
        });

        $('.blogpostslider').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots: true,
            items: 1,

        })
    </script>
    <!--end here categories slider-->

    <!--start here blog section-->
    <script type="text/javascript">
        $('#blogslider').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
            dots: false,
            responsive: {
                0: {
                    items: 1.1,
                    nav: false
                },
                600: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>
    <!--end here blog section-->

    <!--start here client reviews-->
    <script type="text/javascript">
        $('#clientreviews').owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
            dots: false,
            responsive: {
                0: {
                    items: 1.1,
                    nav: false
                },
                600: {
                    items: 2.1,
                    nav: false
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>
    <!--end here client review-->
    <script type="text/javascript">
        $("#enquiryform").click(function() {
            $(".enquiry-form").addClass("show");
            $(".overlaycss").removeClass("hidden");
        });

        $("#closeenquiryform").click(function() {
            $(".enquiry-form").removeClass("show");
            $(".overlaycss").addClass("hidden");
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#popupEnqueryForm").on("submit", function(e) {
                e.preventDefault();
                $.ajax({
                    method: "post",
                    url: "{{ route('savepopupenquery') }}",
                    data: $("#popupEnqueryForm").serialize(),
                    success: function(response) {
                        alert(response);
                        window.location.reload();
                    }
                });
            })
        });
    </script>
</body>

</html>
