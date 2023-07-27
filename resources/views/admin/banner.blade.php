@extends('layouts.admin')
@section('admin-title')
    Admin | Banner
@endsection
@section('admin-content')
    <div class="w-100">

        <div class="content-wrapper">
            <div class="breadcrumbs-top d-flex align-items-center bg-light mb-3">
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb bg-transparent mb-0">
                        <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}"
                                class="text-decoration-none">Dashboard</a></li>
                        <li class="breadcrumb-item">Banner</li>
                    </ol>
                </div>
                <div class="add-back ml-auto mr-2">
                    <a href="javascript:history.go(-1)" class="btn text-dark" data-toggle="modal" data-target="#adBanner"><i
                            class="fa-solid fa-plus-large"></i> Add</a>
                    <a href="javascript:history.go(-1)" class="btn text-dark"><i class="fa-solid fa-rotate-left"></i> Go
                        Back</a>
                </div>
            </div>
            <div class="container-fluid ">
                {{ show_error_msg() }}
                {{ show_success_msg() }}
                <div class="content-wrapper">
                    <form class="product-details-information">
                        <div class="product-detail-main w-100">
                            <table class="table table-bordered table-hover dt-responsive" id="bannerTable">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Image</th>
                                        <th>Mobile Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($banners as $banner)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>
                                                <img src="{{ asset('public/uploads/banner/' . $banner->image) }}"
                                                    class="reviewimg">
                                            </td>
                                            <td>
                                                <img src="{{ asset('public/uploads/banner/' . $banner->mobileimage) }}"
                                                    class="reviewimg">
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <button type="button" class="btn mr-2 bg-transparent bannerEdit"
                                                        id="{{ $banner->id }}"><i
                                                            class="fa-solid fa-pen-to-square text-secondary"></i></button>
                                                    <a href="{{ route('deletebanner', $banner->id) }}"
                                                        onclick="return confirm('Are you sure want to delete this?')"
                                                        class="btn bg-transparent"><i
                                                            class="fa-solid fa-trash-can text-danger"></i> </a>
                                                </div>
                                            </td>
                                        </tr>
                                        {{ $i++ }}
                                    @endforeach
                                </tbody>

                            </table>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="adBanner" tabindex="-1" role="dialog" aria-labelledby="addquestionLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <form method="POST" enctype="multipart/form-data" action="{{ route('save_banner') }}">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Banner</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row p-2">
                            <div class="col-md-12 form-group">
                                <label>Desktop Image</label>
                                <label class="filelabel">

                                    <span class="title">
                                        Upload Image
                                    </span>
                                    <input class="foem-control" id="files" name="bannerImage" type="file"
                                        accept="image/*" />
                                </label>
                            </div>

                            <div class="col-md-12 form-group">
                                <label>Mobile Image</label>
                                <label class="filelabel">

                                    <span class="title">
                                        Upload Image
                                    </span>
                                    <input class="foem-control" id="files" name="bannerMobileImage" type="file"
                                        accept="image/*" />
                                </label>
                            </div>

                            <div class="col-md-12 form-group">
                                <label>Alt Text</label>
                                <label class="filelabel">
                                    <input class="foem-control w-100" name="image_alt" type="text"
                                        placeholder="Enter Img Alt text" />
                                </label>
                            </div>



                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary">Save </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="editBanner" tabindex="-1" role="dialog" aria-labelledby="addquestionLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <form method="POST" enctype="multipart/form-data" action="{{ route('updatebanner') }}">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Banner</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row p-2">
                            <div class="col-md-12 form-group">
                                <label>Desktop Image</label>
                                <label class="filelabel">
                                    <img src="" class="reviewimg" id="previewImage" />
                                    <span class="title">
                                        Upload Image
                                    </span>
                                    <input class="foem-control" id="files" name="bannerImage" type="file"
                                        accept="image/*" />
                                </label>
                            </div>
                            <input type="hidden" name="bannerId" id="bannerId">

                            <div class="col-md-12 form-group">
                                <label>Mobile Image</label>
                                <label class="filelabel">
                                    <img src="" class="reviewimg" id="previewMobileImage" />
                                    <span class="title">
                                        Upload Image
                                    </span>
                                    <input class="foem-control" id="files" name="bannerMobileImage" type="file"
                                        accept="image/*" />
                                </label>
                            </div>

                            <div class="col-md-12 form-group">
                                <label>Alt Text</label>
                                <label class="filelabel">
                                    <input class="foem-control w-100" name="image_alt" id="image_alt" type="text"
                                        placeholder="Enter Img Alt text" />
                                </label>
                            </div>

                            <input type="hidden" name="hideImageDesktop" id="hideImageDesktop">
                            <input type="hidden" name="hideImageMobile" id="hideImageMobile">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary">Update </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('admin-script')
    <script>
        $(document).ready(function() {
            $(document).on("click", ".bannerEdit", function(e) {
                e.preventDefault();
                let bannerId = $(this).attr('id');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "{{ route('editbanner') }}",
                    data: {
                        "bannerId": bannerId
                    },
                    success: function(response) {
                        if (response.trim == 'Image not found') {
                            alert(response);
                            window.location.reload();
                        } else {
                            console.log(response);
                            $("#previewImage").prop("src",
                                "{{ asset('public/uploads/banner/') }}/" + response
                                .image);
                            $("#previewMobileImage").prop("src",
                                "{{ asset('public/uploads/banner/') }}/" + response
                                .mobileimage);
                            $("#image_alt").val(response.image_alt);
                            $("#hideImageDesktop").val(response.image);
                            $("#hideImageMobile").val(response.mobileimage);
                            $("#bannerId").val(response.id);
                            $("#editBanner").modal("show");
                        }
                    }
                });
            });
            $(document).ready(function() {
                $('#bannerTable').DataTable();
            });
        });
    </script>
@endsection
