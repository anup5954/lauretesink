<section class="landing-page-section">
    <div class="owl-carousel owl-theme" id="landingpage">
        @if (!empty($banners))
            @foreach ($banners as $banner)
                <div class="item">
                    <div class="full-banner">
                        <a href="javascript:void(0)">

                            <picture>
                                <source media="(max-width:767px)"
                                    srcset="{{ asset('public/uploads/banner/' . $banner->mobileimage) }}">
                                <img src="{{ asset('public/uploads/banner/' . $banner->image) }}"
                                    alt="{{ $banner->image_alt }}" class="img-fluid">
                            </picture>
                        </a>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</section>
