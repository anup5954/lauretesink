@extends('layouts.admin')
@section('admin-title')
    Admin | Categories
@endsection
@section('admin-content')
    <div class="border w-100">

        <div class="content-wrapper">
            <div class="breadcrumbs-top d-flex align-items-center bg-light mb-3">
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb bg-transparent mb-0">
                        <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}"
                                class="text-decoration-none">Dashboard</a></li>
                        <li class="breadcrumb-item">Product Categories</li>
                    </ol>
                </div>
                <div class="add-back ml-auto mr-2">
                    <a href="javascript:history.go(-1)" class="btn text-dark" data-toggle="modal"
                        data-target="#addCategory"><i class="fa-solid fa-plus-large"></i> Add</a>
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
                            <table class="table table-bordered table-hover dt-responsive" id="categoryTable">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Img</th>
                                        <th>Categories Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!empty($categories))
                                        @foreach ($categories as $category)
                                            <tr>
                                                <th>{{ $loop->iteration }}</th>
                                                <td>
                                                    <img src="{{ asset('public/uploads/category/' . $category->category_image) }}"
                                                        class="reviewimg">
                                                </td>
                                                <td>{{ $category->category_name }}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <button type="button" class="btn mr-2 bg-transparent categoryedit"
                                                            id="{{ $category->id }}"><i
                                                                class="fa-solid fa-pen-to-square text-secondary"></i></button>
                                                        <a href="{{ route('deletecategory', $category->id) }}"
                                                            onclick="return confirm('Are you sure want to delete this?')"
                                                            class="btn bg-transparent"><i
                                                                class="fa-solid fa-trash-can text-danger"></i> </a>
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

    <!--start here Add Category-->
    <div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="addquestionLabel"
        aria-hidden="true">
        <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Categories</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row p-2">
                            <div class="col-md-4 form-group">
                                <label class="filelabel">
                                    <i class="fa-light fa-images"></i>
                                    <span class="title">
                                        Upload Image
                                    </span>
                                    <input class="FileUpload" id="files" name="category_image" type="file"
                                        accept="image/*" />
                                </label>
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="wdinput">
                                    <label>Categories Name</label>
                                    <input type="text" placeholder="Categories Name" class="form-control"
                                        name="category_name">

                                </div>
                            </div>

                            <div class="col-md-12 form-group">
                                <div class="wdinput">
                                    <label>Categories Description</label>
                                    <textarea placeholder="Categories Description" class="form-control" name="category_description"></textarea>

                                </div>
                            </div>

                            <div class="col-md-12 form-group ">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wdinput">
                                            <label>SEO Title</label>
                                            <input class="form-control" name='meta_title' placeholder="Enter Title"/>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="wdinput">
                                            <label>SEO Description</label>
                                            <input class="form-control" name='meta_desc' placeholder="SEO Description"/>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="wdinput">
                                            <label>SEO Keyword</label>
                                            <input class="form-control" name='meta_keyword' placeholder="Enter SEO Keyword"/>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary">Save </button>
                    </div>
                </div>
            </div>
        </form>
    </div>


    <!--start here Update Category-->
    <div class="modal fade" id="editCategory" tabindex="-1" role="dialog" aria-labelledby="addquestionLabel"
        aria-hidden="true">
        <form action="{{ route('updatecategory') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Categories</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row p-2">
                            <div class="col-md-4 form-group">
                                <img src="" class="reviewimg" id="previewImage"
                                    style="margin-bottom: 12px;height: 100px;">
                                <label class="filelabel"><i class="fa-light fa-images"></i>
                                    <span class="title">Upload Image</span>
                                    <input class="FileUpload" id="files" name="category_image" type="file"
                                        accept="image/*" />
                                </label>
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="wdinput">
                                    <label>Categories Name</label>
                                    <input type="text" placeholder="Categories Name" class="form-control"
                                        id="category_name" name="category_name">

                                </div>
                            </div>

                            <div class="col-md-12 form-group">
                                <div class="wdinput">
                                    <label>Categories Description</label>
                                    <textarea placeholder="Categories Description" class="form-control" id="category_description"
                                        name="category_description"></textarea>
                                </div>
                            </div>
                            <input type="hidden" name="category_id" id="category_id">
                            <input type="hidden" name="category_hidden_image" id="category_hidden_image">

                        </div>

                        <div class="col-md-12 form-group ">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wdinput">
                                            <label>SEO Title</label>
                                            <input class="form-control" id="meta_title" name='meta_title' placeholder="Enter Title"/>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="wdinput">
                                            <label>SEO Description</label>
                                            <input class="form-control" id="meta_desc" name='meta_desc' placeholder="SEO Description"/>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="wdinput">
                                            <label>SEO Keyword</label>
                                            <input class="form-control" id="meta_keyword" name='meta_keyword' placeholder="Enter SEO Keyword"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary">Save </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('admin-script')
    <script>
        $(document).ready(function() {
            $(document).on("click", ".categoryedit", function() {
                let catId = $(this).attr('id');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{ route('editcategory') }}",
                    method: "POST",
                    data: {
                        "catId": catId
                    },
                    success: function(data) {
                        if (data.trim == 'Category not found') {
                            alert(data);
                            window.location.reload();
                        } else {
                            $("#previewImage").prop("src",
                                "{{ asset('public/uploads/category/') }}/" + data
                                .category_image);
                            $("#category_id").val(data.id);
                            $("#category_hidden_image").val(data.category_image);
                            $("#category_description").val(data.category_description);
                            $("#meta_title").val(data.meta_title);
                            $("#meta_desc").val(data.meta_desc);
                            $("#meta_keyword").val(data.meta_keyword);
                            $("#category_name").val(data.category_name);
                            $("#editCategory").modal("show");
                        }
                    }
                });
            });
        });
        $(document).ready(function() {
            $('#categoryTable').DataTable();
        });
    </script>
@endsection
