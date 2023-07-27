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
                        <li class="breadcrumb-item">Contact Enquiries</li>
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
                            {{ show_error_msg() }}
                            {{ show_success_msg() }}
                            <table class="table table-bordered table-hover dt-responsive" id="productTable">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Full Name</th>
                                        <th>Email Id</th>
                                        <th>Phone Number</th>
                                        <th>Messages</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                    @if (!empty($contacts))
                                        @foreach ($contacts as $contact)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $contact->name }}</td>
                                                <td>{{ $contact->email }}</td>
                                                <td>{{ $contact->mobile }}</td>
                                                <td>{{ $contact->message }}</td>
                                                <td>{{ $contact->created_at }}</td>
                                                <td>
                                                    <div class="d-flex">

                                                        <a onclick="return confirm('Are you sure want to delete this?')"
                                                            href="{{ route('deletecontact', $contact->id) }}"
                                                            class="btn bg-transparent"><i
                                                                class="fa-solid fa-trash-can text-danger"></i> </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
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
