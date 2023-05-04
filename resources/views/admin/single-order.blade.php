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
                        <li class="breadcrumb-item">Order Details</li>
                    </ol>
                </div>
                <div class="add-back ml-auto mr-2">
                    <a href="#" class="btn text-dark" data-toggle="modal" data-target="#myModal"><i
                            class="fa-solid fa-plus-large"></i> Add</a>
                    <a href="javascript:history.go(-1)" class="btn text-dark"><i class="fa-solid fa-rotate-left"></i> Go
                        Back</a>
                </div>
            </div>
            <div class="container-fluid ">

                <div class="content-wrapper">
                    <form class="product-details-information">
                        <div class="product-detail-main w-100">

                            <table class="table table-bordered table-hover dt-responsive" id="productTable">
                                <tr>
                                    <th>ID#</th>
                                    <td>{{ $order->id }}</td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $order->name }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $order->email }}</td>
                                </tr>
                                <tr>
                                    <th>Mobile</th>
                                    <td>{{ $order->mobile }}</td>
                                </tr>
                                <tr>
                                    <th>Product Name</th>
                                    <td>{{ $order->product_name }}</td>
                                </tr>
                                <tr>
                                    <th>Product Price</th>
                                    <td>{{ $order->product_price }}</td>
                                </tr>
                                <tr>
                                    <th>Product Size</th>
                                    <td>{{ $order->product_size }}</td>
                                </tr>
                                <tr>
                                    <th>Message</th>
                                    <td>{{ $order->message }}</td>
                                </tr>
                                <tr>
                                    <th>Date</th>
                                    <td>{{ date('d-M-Y H:i:sa', strtotime($order->created_at)) }}</td>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
@endsection
