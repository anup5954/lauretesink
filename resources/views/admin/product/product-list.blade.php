@extends('layouts.admin')
@section('admin-title')
    Admin | Products
@endsection
@section('admin-content')
    <div class="border w-100">

        <div class="content-wrapper">
            <div class="breadcrumbs-top d-flex align-items-center bg-light mb-3">
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb bg-transparent mb-0">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}"
                                class="text-decoration-none">Dashboard</a></li>
                        <li class="breadcrumb-item">Product List</li>
                    </ol>
                </div>
                <div class="add-back ml-auto mr-2">
                    <a href="{{ route('productadd') }}" class="btn text-dark"><i class="fa-solid fa-plus-large"></i> Add</a>
                    <a href="javascript:history.go(-1)" class="btn text-dark"><i class="fa-solid fa-rotate-left"></i> Go
                        Back</a>
                </div>
            </div>
            <div class="container-fluid ">

                <div class="content-wrapper">
                    <form class="product-details-information">
                        <div class="product-detail-main w-100">
                            {{ show_error_msg() }}
                            {{ show_success_msg() }}
                            <table class="table table-bordered table-hover dt-responsive" id="productTable">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Product Img</th>
                                        <th>Product Name</th>
                                        <th>Product Categories</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!empty($products))
                                        @foreach ($products as $product)
                                            <tr>
                                                <th>{{ $loop->iteration }}</th>
                                                <td>
                                                    <img src="{{ asset('public/uploads/product/' . $product->product_image) }}"
                                                        class="reviewimg">
                                                </td>
                                                <td>
                                                    {{ $product->product_name }}</td>
                                                <td>{{ !empty($product->category->category_name) ? $product->category->category_name : '' }}
                                                </td>
                                                <td>
                                                    <input type="checkbox" {{ $product->status == 1 ? 'checked' : '' }}
                                                        data-toggle="toggle" class="productStatus" data-size="sm"
                                                        id="{{ $product->id }}">
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="{{ route('productedit', $product->id) }}"
                                                            class="btn mr-2 bg-transparent"><i
                                                                class="fa-solid fa-pen-to-square text-secondary"></i></a>
                                                        <a href="{{ route('productdelete', $product->id) }}"
                                                            onclick="return confirm('Are you sure want to delete this?')"
                                                            class="btn bg-transparent"><i
                                                                class="fa-solid fa-trash-can text-danger"></i> </a>

                                                        <a href="{{ route('productgallery', $product->id) }}"
                                                            class="btn bg-transparent"><i
                                                                class="fa-solid fa-images text-danger"></i> </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('admin-script')
    <script>
        $(document).ready(function() {
            $('#productTable').DataTable();
        });

        $(document).ready(function() {
            $(document).on("change", ".productStatus", function() {
                let checked = $(this).prop('checked');
                let productId = $(this).attr('id');
                let status = 0;
                if (checked) {
                    status = 1;
                }
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "{{ route('changestatus') }}",
                    data: {
                        "status": status,
                        "productId": productId
                    },
                    success: function(response) {
                        alert(response);
                    }
                });
            });
        });
    </script>
@endsection
