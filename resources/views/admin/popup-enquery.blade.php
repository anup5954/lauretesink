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
                        <li class="breadcrumb-item">Order List</li>
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
                            {{ show_error_msg() }}
                            {{ show_success_msg() }}
                            <table class="table table-bordered table-hover dt-responsive" id="productTable">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Message</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!empty($enquires))
                                        @foreach ($enquires as $enquiry)
                                            <tr>
                                                <th>{{ $loop->iteration }}</th>
                                                <td>{{ $enquiry->name }}</td>
                                                <td>{{ $enquiry->email }}</td>
                                                <td>{{ $enquiry->phone }}</td>
                                                <td>{{ $enquiry->message }}</td>

                                                <td>
                                                    <div class="d-flex">
                                                        <a onclick="return confirm('Are you sure want to delete this?');"
                                                            href="{{ route('deleteleadenquiry', $enquiry->id) }}"
                                                            class="btn bg-transparent"><i class="fa-solid fa-trash"></i></a>
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
    <!-- Modal -->

@endsection
@section('admin-script')
    <script>
        $(document).ready(function() {
            $('#productTable').DataTable();
        });
    </script>
@endsection
