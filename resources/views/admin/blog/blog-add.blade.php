@extends('layouts.admin')
@section('admin-title')
    Admin | Add Product
@endsection

@section('admin-content')
    {{ show_error_msg() }}
    {{ show_success_msg() }}
    <form method="POST" enctype="multipart/form-data" action="{{ route('saveblog') }}">
        @csrf
        <div class="border w-100">
            <div class="col-md-12 form-group ">
                <div class="row">

                    <div class="col-md-12 form-group">
                        <div class="wdinput">
                            <label>Blog Image</label>
                            <input type="file" name="blog_image" id="blog_image" class="form-control" accept="image/*">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="wdinput">
                            <label>Blog Name</label>
                            <input class="form-control" name="blog_heading" placeholder="Blog Heading" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="wdinput">
                            <label>Blog Description</label>
                            <textarea class="form-control" cols="5" id="blog_description" name="blog_description"
                                placeholder="Blog Description"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 form-group ">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wdinput">
                            <label>SEO Title</label>
                            <input class="form-control" name="meta_title" placeholder="Enter Title" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="wdinput">
                            <label>SEO Description</label>
                            <input class="form-control" name="meta_description" placeholder="SEO Description" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="wdinput">
                            <label>SEO Keyword</label>
                            <input class="form-control" name="meta_keyword" placeholder="Enter SEO Keyword" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="wdinput mt-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@section('admin-script')
    <script>
        ClassicEditor
            .create(document.querySelector('#blog_description'))
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
