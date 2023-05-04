@extends('layouts.admin')
@section('admin-title')
    Admin | Gallery
@endsection

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">

@section('admin-content')
    <div class="w-100">

        <div class="content-wrapper">
            <div class="breadcrumbs-top d-flex align-items-center bg-light mb-3">
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb bg-transparent mb-0">
                        <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}"
                                class="text-decoration-none">Dashboard</a></li>
                        <li class="breadcrumb-item">Product Gallery</li>
                    </ol>
                </div>
                <div class="add-back ml-auto mr-2">
                    {{--  <a href="javascript:history.go(-1)" class="btn text-dark" data-toggle="modal" data-target="#adBanner"><i
                            class="fa-solid fa-plus-large"></i> Add</a> --}}
                    <a href="javascript:history.go(-1)" class="btn text-dark"><i class="fa-solid fa-rotate-left"></i> Go
                        Back</a>
                </div>
            </div>
            <div class="container-fluid ">

                <div class="content-wrapper">
                    <div class="product-detail-main w-100">
                        <div class='content'>
                            <!-- Dropzone -->


                            <form action="{{ route('savegallery') }}" class="dropzone" id='fileupload'>

                            </form>

                        </div>

                        <div id="imageResult"></div>


                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('admin-script')
    <script>
        function getImages() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('getgalleryimage') }}",
                method: "GET",

                success: function(data) {
                    //console.log("sdfsdfsd" + data);
                    $("#imageResult").html(data);
                }
            });
        }
        getImages();
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
    <script>
        var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
        Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone(".dropzone", {
            maxFilesize: 5, // 2 mb
            acceptedFiles: 'image/*',
            aautoProcessQueue: false,
            uploadMultiple: false,
            parallelUploads: 1
        });
        myDropzone.on("sending", function(file, xhr, formData) {
            formData.append("_token", CSRF_TOKEN);
        });
        myDropzone.on("success", function(file, response) {
            if (response.success == 0) { // Error
                alert(response.error);
            }
            getImages();
        });
        /*  myDropzone.on("complete", function(file) {
             this.removeAllFiles(true);
         }); */
        $(document).ready(function() {
            $(document).on("click", ".deleteGalleryImage", function(e) {
                if (confirm('Are you sure want to delete this?')) {
                    e.preventDefault();
                    let imageId = $(this).attr('id');
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: "{{ route('deletegallery') }}",
                        method: "post",
                        data: {
                            "imageId": imageId,
                        },
                        success: function(data) {
                            getImages();
                            console.log(data);
                        }
                    });
                } else {
                    return false;
                }


            });
        });
    </script>
@endsection
