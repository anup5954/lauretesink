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
                                        <th>Video Url</th>
                                        <th>Category</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!empty($videos))
                                        @foreach ($videos as $video)
                                            <tr>
                                                <th>{{ $loop->iteration }}</th>
                                                <td>
                                                    {{ $video->video_url }}
                                                </td>
                                                <td>{{ $video->category->video_category_name }}</td>

                                                <td>
                                                    <div class="d-flex">
                                                        <a href="{{ route('videodelete', $video->id) }}"
                                                            onclick="return confirm('Are you sure want to delete this?')"
                                                            class="btn bg-transparent"><i
                                                                class="fa-solid fa-trash-can text-danger"></i></a>
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
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"
                            aria-hidden="true"></i></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('savevideo') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Video Category</label>
                                    <select name="video_category" id="video_category" class="form-control">
                                        <option value="" selected disabled>--Select--</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->video_category_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Video Url</label>
                                    <textarea name="video_url" id="video_url" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
    </script>
@endsection
