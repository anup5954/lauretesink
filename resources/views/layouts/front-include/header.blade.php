<div class="overlaycss hidden"></div>

<div class="mobile-header d-block d-xl-none d-lg-none">

    <ul class="d-flex justify-content-between">

        <li>

            <a href="{{ url('/') }}"> <i class="fa-light fa-house"></i> Home </a>

        </li>



        <li class="mobilemenu" id="searchproduct">

            <i class="fa-light fa-magnifying-glass"></i> Search

        </li>



        <li>

            <a href="#"> <i class="fa-light fa-user"></i> My Account </a>

        </li>



        <li class="menubtn mobilemenu"> <i class="fa-light fa-bars"></i> Menu </li>

    </ul>

</div>

<header>

    <div class="topheader bg-color-dark-1 py-2">

        <div class="container-fluid">

            <div class="top-social">

                <div class="top-left-sec text-center">

                    <p class="mb-0 font-style-1">{{ !empty($annouData->content) ? $annouData->content : '' }}</p>

                </div>



            </div>

        </div>

    </div>

    <div class="medium-header bg-light py-3">

        <div class="container">

            <div class="medium-header-pnl d-flex align-items-center">
                <div class="logo-img">
                    <a href="">
                        <img src="{{ asset('public/frontend/img/logo.png') }}">
                    </a>
                </div>

                <div class="headerserch text-center">

                    <form class="position-relative d-flex" action="{{ route('product_list') }}" method="POST">
                        @csrf
                        <div class="wdinput inputsearch position-relative w-100">
                            <input type="text" placeholder="Product Search" name="search_data"
                                class="form-control search-categories" required>
                            <button class="btn search-btn bg-color-dark-2" type="submit">
                                <i class="fa-light fa-magnifying-glass"></i>
                            </button>
                        </div>

                    </form>

                    <button class="btn d-xl-none d-lg-none d-block mx-auto" id="closesearch"><i
                            class="fa-solid fa-xmark"></i></button>

                </div>

                <div class="wishlist-cart">

                    <ul class="mb-0">

                        <li>
                            <a href="#">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <div class="main-header">

        <div class="d-flex main-header-pn                                                                            l">

            <div class="menu-categories">

                <div id='cssmenu' class="">



                    <button class="btn close-menu d-xl-none d-lg-none d-block ml-auto" id="closemenue"> <i
                            class="fa-light fa-xmark"></i> </button>



                    <ul class="mobile-menu-list">


                        <li>
                            <a href='{{ url('/') }}'>Home</a>
                        </li>


                        <li>
                            <a href='javascript:void(0)'>Shop</a>
                            <ul>
                                @if (!empty($categories))
                                    @foreach ($categories as $category)
                                        <li class=''>
                                            {{ $category->category_name }}
                                            <div class="subcategories">
                                                @foreach ($category->subcategories as $subCat)
                                                    <a
                                                        href="{{ route('product_list', ['main_id' => $subCat->category_id, 'sub_id' => $subCat->id]) }}">
                                                        <i class="fa-light fa-angles-right"></i>
                                                        {{ $subCat->sub_category_name }}
                                                    </a>
                                                @endforeach
                                            </div>
                                        </li>
                                    @endforeach
                                @endif

                            </ul>
                        </li>

                        <li>
                            <a href='{{ route('about') }}'>About Us</a>
                        </li>

                        <li>
                            <a href='{{ route('brands') }}'>Brands</a>
                        </li>

                        <li>
                            <a href='{{ route('gallery') }}'>Gallery</a>
                        </li>

                        <li>
                            <a href='{{ route('video') }}'>Videos</a>
                        </li>


                        <li>
                            <a href='{{ route('faqs') }}'>FAQs</a>
                        </li>

                        <li>
                            <a href='{{ route('blog') }}'>Blogs</a>
                        </li>


                        <li>
                            <a href='{{ route('contact') }}'>Contact Us</a>
                        </li>




                    </ul>

                </div>

            </div>

        </div>



    </div>

</header>
