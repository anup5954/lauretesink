<!--start here header section-->
@include('layouts.admin-include.header')
<!--end here header section-->
<div class="main-section">
    <!--start here header section-->
    @include('layouts.admin-include.sidebar')
    <!--end here header section-->
    <div class="main-container-section w-100">

        <div class="content-wrapper">
            <div class="container-fluid">


                @yield('admin-content')


            </div>
        </div>
    </div>
</div>
<!--start here footer section-->
@include('layouts.admin-include.footer')
<!--end here footer section-->
@yield('admin-script')
</body>

</html>
