@extends('layouts.admin')
@section('admin-title')
    Admin | Sub Categories
@endsection
@section('admin-content')
    <div class="border w-100">

        <div class="content-wrapper">
            <div class="breadcrumbs-top d-flex align-items-center bg-light mb-3">
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb bg-transparent mb-0">
                        <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}"
                                class="text-decoration-none">Dashboard</a></li>
                        <li class="breadcrumb-item">Product Sub Categories</li>
                    </ol>
                </div>
                <div class="add-back ml-auto mr-2">
                    <a href="javascript:history.go(-1)" class="btn text-dark" data-toggle="modal"
                        data-target="#addSubCategory"><i class="fa-solid fa-plus-large"></i> Add</a>
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
                                        <th>Sub Category Img</th>
                                        <th>Category Name</th>
                                        <th>Sub Category Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!empty($subCategories))
                                        @foreach ($subCategories as $subCategory)
                                            <tr>
                                                <th>{{ $loop->iteration }}</th>
                                                <td>
                                                    <img src="{{ asset('public/uploads/sub-category/' . $subCategory->sub_category_image) }}"
                                                        class="reviewimg">
                                                </td>
                                                <td>{{ $subCategory->category->category_name }}</td>
                                                <td>{{ $subCategory->sub_category_name }}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <button type="button"
                                                            class="btn mr-2 bg-transparent subCategoryEdit"
                                                            id="{{ $subCategory->id }}"><i
                                                                class="fa-solid fa-pen-to-square text-secondary"></i></button>
                                                        <a href="{{ route('subcategorydelete', $subCategory->id) }}"
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
    <div class="modal fade" id="addSubCategory" tabindex="-1" role="dialog" aria-labelledby="addquestionLabel"
        aria-hidden="true">
        <form action="{{ route('subcategorysave') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Sub Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row p-2">

                            <div class="col-md-12 form-group">
                                <div class="wdinput">
                                    <label>Category Name</label>
                                    <select class="form-control" name="category_id">
                                        <option value="" selected disabled>Choose Category</option>
                                        @if (!empty($categories))
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->category_name }}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>

                                </div>
                            </div>

                            <div class="col-md-4 form-group">
                                <label class="filelabel">
                                    <i class="fa-light fa-images"></i>
                                    <span class="title">
                                        Sub Category Upload Image
                                    </span>
                                    <input class="FileUpload" id="files" name="sub_category_image" type="file"
                                        accept="image/*" />
                                </label>
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="wdinput">
                                    <label>Sub Category Name</label>
                                    <input type="text" placeholder="Sub Category Name" class="form-control"
                                        name="sub_category_name">

                                </div>
                            </div>

                            <div class="col-md-12 form-group">
                                <div class="wdinput">
                                    <label>Sub Category Description</label>
                                    <textarea placeholder="Sub Category Description" class="form-control" name="sub_category_description"></textarea>

                                </div>
                            </div>

                            <div class="col-md-12 form-group ">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wdinput">
                                            <label>Sub Category SEO Title</label>
                                            <input class="form-control" name='sub_meta_title'
                                                placeholder="Enter SEO Title" />
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="wdinput">
                                            <label>Sub Category SEO Description</label>
                                            <input class="form-control" name='sub_meta_desc'
                                                placeholder="SEO Description" />
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="wdinput">
                                            <label>Sub Category SEO Keyword</label>
                                            <input class="form-control" name='sub_meta_keyword'
                                                placeholder="Enter SEO Keyword" />
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>


    <!--start here Update Category-->
    <div class="modal fade" id="editSubCategory" tabindex="-1" role="dialog" aria-labelledby="addquestionLabel"
        aria-hidden="true">
        <form action="{{ route('subcategoryupdate') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Sub Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row p-2">

                            <div class="col-md-12 form-group">
                                <div class="wdinput">
                                    <label>Category Name</label>
                                    <select class="form-control" name="category_id" id="edit_category_id">
                                        <option value="" selected disabled>Choose Category</option>
                                        @if (!empty($categories))
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->category_name }}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>

                                </div>
                            </div>

                            <div class="col-md-4 form-group">
                                <img src="" class="reviewimg" id="previewImage"
                                    style="margin-bottom: 12px;height: 100px;">
                                <label class="filelabel"><i class="fa-light fa-images"></i>
                                    <span class="title">Upload Sub Category Image</span>
                                    <input class="FileUpload" id="files" name="sub_category_image" type="file"
                                        accept="image/*" />
                                </label>
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="wdinput">
                                    <label>Sub Category Name</label>
                                    <input type="text" placeholder="Sub Category Name" class="form-control"
                                        id="sub_category_name" name="sub_category_name">

                                </div>
                            </div>

                            <div class="col-md-12 form-group">
                                <div class="wdinput">
                                    <label>Sub Category Description</label>
                                    <textarea placeholder="Sub Category Description" class="form-control" id="sub_category_description"
                                        name="sub_category_description"></textarea>
                                </div>
                            </div>
                            <input type="hidden" name="sub_category_id" id="sub_category_id">
                            <input type="hidden" name="category_hidden_image" id="category_hidden_image">

                        </div>

                        <div class="col-md-12 form-group ">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wdinput">
                                        <label>SEO Title</label>
                                        <input class="form-control" id="sub_meta_title" name='sub_meta_title'
                                            placeholder="Enter Title" />
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="wdinput">
                                        <label>SEO Description</label>
                                        <input class="form-control" id="sub_meta_desc" name='sub_meta_desc'
                                            placeholder="SEO Description" />
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="wdinput">
                                        <label>SEO Keyword</label>
                                        <input class="form-control" id="sub_meta_keyword" name='sub_meta_keyword'
                                            placeholder="Enter SEO Keyword" />
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
            $(document).on("click", ".subCategoryEdit", function() {
                let subCatId = $(this).attr('id');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{ route('subcategoryedit') }}",
                    method: "POST",
                    data: {
                        "subCatId": subCatId
                    },
                    success: function(data) {
                        console.log(data);
                        if (data.trim == 'Sub Category not found') {
                            alert(data);
                            window.location.reload();
                        } else {
                            $("#previewImage").prop("src",
                                "{{ asset('public/uploads/sub-category/') }}/" + data
                                .sub_category_image);
                            $("#edit_category_id").val(data.category_id).change();
                            $("#category_hidden_image").val(data.sub_category_image);
                            $("#sub_category_description").val(data.sub_category_description);
                            $("#sub_meta_title").val(data.sub_meta_title);
                            $("#sub_meta_desc").val(data.sub_meta_desc);
                            $("#sub_meta_keyword").val(data.sub_meta_keyword);
                            $("#sub_category_name").val(data.sub_category_name);
                            $("#sub_category_id").val(data.id);
                            $("#editSubCategory").modal("show");
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
