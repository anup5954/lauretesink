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

    

    <!--end here breadcumb-section-->



    <section class="blog-section">



        <div class="blog-details-section">

            <div class="blog-details-img">

                <img src="{{ asset('public/uploads/blog/' . $blog->blog_image) }}" class="img-fluid">

            </div>

            <div class="container">
                <div class="bloggrid">

                
                    <div class="blog-details-content p-2">

                    <h6>{{ date('F jS, Y', strtotime($blog->created_at)) }}</h6>

                    <h2>{{ $blog->blog_heading }}</h2>

                    <p> {!! $blog->blog_description !!}</p>



                    </div>

                    <div class="blogrightside">
                        <div class="blogpostbox">
                        <div class="blogpost-user text-center">
                        <img src="https://img.freepik.com/free-icon/user_318-159711.jpg"/>
                        <h6>Anil Bhatt</h6>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                        </div>

                        <div class="blogpostbox text-center">
                            <div class="blogpost-categories">
                            <h3 class="mb-3">Our Catrgories</h3>

                            <div class="owl-carousel owl-theme blogpostslider">
                                <div class="item">
                                    <a href="http://localhost/website/lauretesink/sub-category/22" class="categories-list-box text-center">
                                         <div class="categories-img">
                                             <img src="http://localhost/website/lauretesink/public/uploads/category/1683369435_category_23.jpg">
                                         </div>
                                <div class="categories-list-name">
                                    <h6> Pressed Sinks </h6>
                                </div>
                            </a>
    </div>
</div>
                        
                        </div>
                        </div>

                        <div class="blogpostbox text-center">
                            <div class="blogpost-categories">
                            <h3 class="mb-3">Trainding Products</h3>

                            <div class="owl-carousel owl-theme blogpostslider">
                                <div class="item">
                                <div class="product-box position-relative">
                                <a href="http://localhost/website/lauretesink/product/33">
                                    <div class="product-img position-relative">
                                        <img src="http://localhost/website/lauretesink/public/uploads/product/1683370258_product_78.jpg" class="actualimg">
                                        <img src="http://localhost/website/lauretesink/public/uploads/product/1683370258_product_hover_23.jpg" class="hoverimg">
                                    </div>
                                    <div class="product-content p-2">
                                        <div class="product-name py-2">
                                            <h6>Kitchen Sink KS2204</h6>
                                            <h5><span>Size () :
                                                </span>20 x 25 </h5>
                                        </div>
                                    </div>
                                </a>
                                <div class="product-size-prize px-2">
                                    <div class=" product-price d-flex justify-content-center align-items-center">

                                        <h5 class=" actual-price"><i class="rupeed-icon">
                                                ₹</i>1500
                                        </h5>
                                        <h5 class="ml-2 discount-price"><del> <i class="rupees-icon"> ₹</i>
                                                2000 </del></h5>

                                    </div>

                                </div>


                                <div class="product-review-discount">
                                    <h5 class="product-reviews badge "> <i class="fa-solid fa-star"></i> </h5>
                                    <h5 class="ml-auto product-discount badge">
                                        25%
                                        <span>OFF</span>
                                    </h5>
                                </div>
                            </div>
    </div>
</div>
                        
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </section>

   
@endsection
