@extends('layouts.admin')
@section('admin-title')
    Admin | Add Product
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
            <a href="{{ route('blogAdd') }}" class="btn text-dark"><i class="fa-solid fa-plus-large"></i> Add</a>
            <a href="javascript:history.go(-1)" class="btn text-dark"><i class="fa-solid fa-rotate-left"></i> Go
                Back</a>
        </div>
    </div>
    <div class="container-fluid ">

        <div class="content-wrapper">
            <form class="product-details-information">
                <div class="product-detail-main w-100">
                   
                    <table class="table table-bordered table-hover dt-responsive" id="productTable">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Product Name</th>
                                <th>Full Name</th>
                                <th>Email Id</th>
                                <th>Phone Number</th>
                                <th>Messages</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Product Name</td>
                                <td>Full Name</td>
                                <td>Email Id</td>
                                <td>Phone Number</td>
                                <td>Messages</td>
                                <td>
                                <div class="d-flex">
                                            <a href="#"
                                               class="btn mr-2 bg-transparent"><i
                                                    class="fa-solid fa-pen-to-square text-secondary"></i></a>
                                            <a href="#"
                                               class="btn bg-transparent"><i
                                                    class="fa-solid fa-trash-can text-danger"></i> </a>
                                        </div>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                          
                            
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
        ClassicEditor
            .create(document.querySelector('#long_description'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#short_description'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
