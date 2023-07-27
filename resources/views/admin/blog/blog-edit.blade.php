@extends('layouts.admin')
@section('admin-title')
    Admin | Edit Blog
@endsection

@section('admin-content')
    <form method="POST" enctype="multipart/form-data" action="{{ route('updateblog') }}">
        @csrf
        <div class="border w-100">
            <div class="content-wrapper">
                <div class="breadcrumbs-top d-flex align-items-center bg-light mb-3">
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb bg-transparent mb-0">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}"
                                    class="text-decoration-none">Dashboard</a></li>
                            <li class="breadcrumb-item">Edit Blog</li>
                        </ol>
                    </div>

                    <div class="add-back ml-auto mr-2">
                        <a href="javascript:history.go(-1)" class="btn text-dark"><i class="fa-solid fa-rotate-left"></i> Go
                            Back</a>
                    </div>
                </div>
            </div>
            <div class="content-wrapper px-2">
                <div class="row">

                    <div class="col-xl-8 col-lg-8 col-md-12 form-group ">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                @if ($blog->blog_image)
                                    <div style="height: 100px;width:100px">
                                        <img style="height: 80px;width:80px"
                                            src="{{ asset('public/uploads/blog/' . $blog->blog_image) }}" alt="">
                                    </div>
                                @endif
                                <input type="hidden" name="hide_blog_img" value="{{ $blog->blog_image }}">
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="wdinput">
                                    <label>Blog Image</label>
                                    <input type="file" name="blog_image" id="blog_image" class="form-control"
                                        accept="image/*">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="wdinput">
                                    <label>Blog Name</label>
                                    <input class="form-control" value="{{ $blog->blog_heading }}" name="blog_heading"
                                        placeholder="Blog Heading" />
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="wdinput">
                                    <label>Blog Description</label>
                                    <textarea class="form-control" cols="5" name="blog_description" id="blog_description"
                                        placeholder="Blog Description">{{ $blog->blog_description }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="wdinput">
                                    <label>SEO Title</label>
                                    <input class="form-control" value="{{ $blog->meta_title }}" name="meta_title"
                                        placeholder="Enter Title" />
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="wdinput">
                                    <label>SEO Description</label>
                                    <input class="form-control" value="{{ $blog->meta_description }}"
                                        name="meta_description" placeholder="SEO Description" />
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="wdinput">
                                    <label>SEO Keyword</label>
                                    <input class="form-control" value="{{ $blog->meta_keyword }}" name="meta_keyword"
                                        placeholder="Enter SEO Keyword" />
                                </div>
                            </div>
                            <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                            <div class="col-md-12">
                                <div class="wdinput mt-2">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-12">
                        <div class="bg-light border p-2 mr-2 my-2">
                            <div class="row">
                                {{-- <div class="col-md-12 form-group">
                                    <button class="btn btn-primary w-100">Save</button>
                                </div> --}}
                                <div class="col-md-12 form-group">
                                    @if ($blog->user_image)
                                        <div style="height: 100px;width:100px">
                                            <img style="height: 80px;width:80px"
                                                src="{{ asset('public/uploads/blog/' . $blog->user_image) }}"
                                                alt="">
                                        </div>
                                    @endif
                                    <input type="hidden" name="user_hide_img" value="{{ $blog->user_image }}">
                                </div>
                                <div class="col-md-12 form-group">
                                    <div class="wdinput">
                                        <label>User Image</label>
                                        <input type="file" name="user_image" id="user_image" class="form-control"
                                            accept="image/*">
                                    </div>
                                </div>


                                <div class="col-md-12 form-group">
                                    <div class="wdinput">
                                        <label>User Name</label>
                                        <input type="text" value="{{ $blog->user_name }}" name="user_name"
                                            class="form-control" placeholder="Username">
                                    </div>
                                </div>

                                <div class="col-md-12 form-group">
                                    <div class="wdinput">
                                        <label>User Description</label>
                                        <textarea type="text" name="user_description" class="form-control" placeholder="User Description"
                                            cols="5">{{ $blog->user_description }}</textarea>
                                    </div>
                                </div>

                                <div class="col-md-12 form-group">
                                    <div class="wdinput">
                                        <label class="customcheckbox">Categories
                                            <input type="checkbox" {{ $blog->category == 1 ? 'checked' : '' }}
                                                name="category">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-12 form-group">
                                    <div class="wdinput">
                                        <label class="customcheckbox">Trending Products
                                            <input type="checkbox" {{ $blog->tranding_product == 1 ? 'checked' : '' }}
                                                name="tranding_product">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-12 form-group">
                                    <div class="wdinput">
                                        <label class="customcheckbox">New Designs
                                            <input type="checkbox" {{ $blog->new_design == 1 ? 'checked' : '' }}
                                                name="new_design">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
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
