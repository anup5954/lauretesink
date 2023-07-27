<div id='cssmenu'>
    <ul class="pt-0">
        <li><a href="{{ url('admin/dashboard') }}"><i class="fa-light fa-gauge"></i> Dashboard</a></li>
        <li> <a href='#'><i class="fa-light fa-images"></i> Media</a>
            <ul>
                <li><a href="{{ route('banner') }}">Banner</a></li>
                <li><a href="{{ route('galleries') }}">Gallery</a></li>

            </ul>
        </li>

        <li> <a href='#'><i class="fa-regular fa-video"></i> Videos</a>
            <ul>
                <li><a href="{{ route('videocategory') }}">Video Category</a></li>
                <li><a href="{{ route('videos') }}">Video List</a></li>

            </ul>
        </li>

        <li> <a href='#'><i class="fa-light fa-cart-flatbed-suitcase"></i> Products</a>
            <ul>
                <li><a href="{{ route('categories') }}">Categories</a></li>
                <li><a href="{{ route('sub-categories') }}">Sub Categories</a></li>
                <li><a href="{{ route('productadd') }}">Add Product</a></li>
                <li><a href="{{ route('products') }}">Product List</a></li>
            </ul>
        </li>



        <li> <a href='#'><i class="fa-sharp fa-regular fa-page-caret-down"></i> Pages</a>
            <ul>
                <li><a href='{{ route('adminbrands') }}'> Brands</a></li>
                <li><a href="{{ route('reviews') }}"> Reviews</a></li>
                <li><a href="{{ route('blogs') }}">Blog</a></li>
                <li><a href='{{ route('faq') }}'>Faqs</a>

            </ul>
        </li>




        <li><a href='#'> <i class="fa-solid fa-headset"></i> Enquires</a>

            <ul>
                <li><a href='{{ route('orders') }}'>Orders Enquiries</a>
                <li><a href="{{ route('contactEnquiries') }}"> Contact Enquiries </a></li>
                <li><a href="{{ route('subscriber') }}"> Subscribers </a></li>
                <li><a href="{{ route('leadenquiries') }}"> Popup Enquiries </a></li>
            </ul>
        </li>


    </ul>
</div>
