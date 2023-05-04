<div id='cssmenu'>
    <ul class="pt-0">
        <li><a href="{{ url('admin/dashboard') }}"><i class="fa-light fa-gauge"></i> Dashboard</a></li>
        <li> <a href='#'><i class="fa-light fa-images"></i> Media</a>
            <ul>
                <li><a href="{{ route('banner') }}">Banner</a></li>
                <li><a href="{{ route('galleries') }}">Gallery</a></li>

            </ul>
        </li>

        <li> <a href='#'><i class="fa-light fa-cart-flatbed-suitcase"></i> Products</a>
            <ul>
                <li><a href="{{ route('categories') }}">Categories</a></li>
                <li><a href="{{ route('sub-categories') }}">Sub Categories</a></li>
                {{-- <li><a href="offers.php">Offers</a></li>
                <li><a href="offer-slider.php">Offer Slider</a></li>
                <li><a href="new-designs.php">New Design</a></li>
                <li><a href="collection.php">Collection</a></li>
                <li><a href="offer-banner.php">Offers Banner</a></li>
                <li><a href="add-attribute.php">Add Attribute</a></li> --}}
                <li><a href="{{ route('productadd') }}">Add Product</a></li>
                <li><a href="{{ route('products') }}">Product List</a></li>
            </ul>
        </li>

        <li> <a href='#'><i class="fa-light fa-cart-flatbed-suitcase"></i> Videos</a>
            <ul>
                <li><a href="{{ route('videocategory') }}">Video Category</a></li>
                <li><a href="{{ route('videos') }}">Video List</a></li>

            </ul>
        </li>

        <li><a href='{{ route('adminbrands') }}'> <i class="fa-light fa-handshake-angle"></i> Brands</a></li>
        <li><a href="{{ route('reviews') }}"><i class="fa-light fa-comments"></i> Reviews</a></li>
        <li><a href="{{ route('blogs') }}"><i class="fa-brands fa-blogger"></i> Blog</a></li>
        <li><a href='{{ route('faq') }}'> <i class="fa-solid fa-headset"></i> Faqs</a>
        <li><a href='{{ route('orders') }}'> <i class="fa-brands fa-first-order"></i> Orders</a>

        <li><a href='#'> <i class="fa-solid fa-headset"></i> Enquires</a>

            <ul>
                <li><a href="{{ route('contactEnquiries') }}"> Contact Enquiries </a></li>

                <li><a href="{{ route('subscriber') }}"> Subscribers </a></li>
            </ul>
        </li>
    </ul>
</div>
