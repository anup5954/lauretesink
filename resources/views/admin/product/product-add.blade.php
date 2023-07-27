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
                        <li class="breadcrumb-item">Add Product</li>
                    </ol>
                </div>
                <div class="add-back ml-auto mr-2">
                    <a href="javascript:history.go(-1)" class="btn text-dark"><i class="fa-solid fa-rotate-left"></i> Go
                        Back</a>
                </div>
            </div>
            <div class="content-wrapper">
                {{ show_error_msg() }}
                {{ show_success_msg() }}
                <form class="product-details-information" action="{{ route('productsave') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="product-detail-main" style="width: 100%;">
                        <div class="product-detail-row mb-2">
                            <div class="row">
                                <div class="col-xl-8 col-lg-8 col-md-12">
                                    <div class="row p-2">

                                        <div class="col-md-12 form-group">
                                            <div class="wdinput">
                                                <label>Product Name</label>
                                                <input type="text" placeholder="Product Name" class="form-control"
                                                    name="product_name" value="{{ old('product_name') }}">
                                                @error('product_name')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="col-md-12 form-group">
                                            <div class="wdinput">
                                                <label>Short Description</label>
                                                <textarea name="short_description" id="short_description" class="form-control" placeholder="Short Description"
                                                    rows="5">{{ old('short_description') }}</textarea>
                                                @error('short_description')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12 form-group">
                                            <div class="wdinput">
                                                <label>Long Description</label>
                                                <textarea name="long_description" id="long_description" class="form-control" placeholder="Long Description">{{ old('long_description') }}</textarea>
                                                @error('long_description')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12 form-group">
                                            <div class="wdinput">
                                                <label>Youtube Link</label>
                                                <input type="text" name="youtube_link" value="{{ old('youtube_link') }}"
                                                    class="form-control" placeholder="Youtube Iframe Link" />
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <label class="font-weight-bold">Other Platform</label>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <div class="wdinput">
                                                <label>Platform -1</label>
                                                <input type="file" accept="image/*" name="platform_image1"
                                                    id="platform_image1" class="form-control">
                                                <p class="text-danger"></p>
                                                <input type="text" name="platform_link1" id="platform_link1"
                                                    placeholder="Link 1" class="form-control"
                                                    value="{{ old('platform_link1') }}">
                                            </div>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <div class="wdinput">
                                                <label>Platform 2</label>
                                                <input type="file" accept="image/*" name="platform_image2"
                                                    id="platform_image2" class="form-control">
                                                <p class="text-danger"></p>
                                                <input type="text" name="platform_link2" id="platform_link2"
                                                    placeholder="Link 2" class="form-control"
                                                    value="{{ old('platform_link2') }}">
                                            </div>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <div class="wdinput">
                                                <label>Platform 3</label>
                                                <input type="file" accept="image/*" name="platform_image3"
                                                    id="platform_image3" class="form-control">
                                                <p class="text-danger"></p>
                                                <input type="text" name="platform_link3" id="platform_link3"
                                                    placeholder="Link 3" class="form-control"
                                                    value="{{ old('platform_link3') }}">
                                            </div>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <div class="wdinput">
                                                <label>Platform 4</label>
                                                <input type="file" accept="image/*" name="platform_image4"
                                                    id="platform_image4" class="form-control">
                                                <p class="text-danger"></p>
                                                <input type="text" name="platform_link4" id="platform_link4"
                                                    placeholder="Link 4" class="form-control"
                                                    value="{{ old('platform_link4') }}">
                                            </div>
                                        </div>


                                        <div class="col-md-12 form-group ">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="wdinput">
                                                        <label>SEO Title</label>
                                                        <textarea name="meta_title" class="form-control" placeholder="Enter Title">{{ old('meta_title') }}</textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="wdinput">
                                                        <label>SEO Description</label>
                                                        <textarea name="meta_decription" class="form-control" placeholder="SEO Description">{{ old('meta_decription') }}</textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="wdinput">
                                                        <label>SEO Keyword</label>
                                                        <textarea name="meta_keyword" class="form-control" placeholder="Enter SEO Keyword">{{ old('meta_keyword') }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>







                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-12">
                                    <div class="bg-light border p-2 mr-2 my-2">
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <button class="btn btn-primary w-100">Save</button>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                {{ show_error_msg() }}
                                                {{ show_success_msg() }}
                                                <div class="wdinput">
                                                    <label>Category</label>
                                                    <select name="category_id" id="category_id" class="form-control">
                                                        <option value="" selected disabled>Select Category</option>
                                                        @foreach ($categories as $category)
                                                            <option
                                                                {{ old('category_id') == $category->id ? 'selected' : '' }}
                                                                value="{{ $category->id }}">
                                                                {{ $category->category_name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('category_id')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-12 form-group" id="subCategoryResult">

                                                <label>Sub Category</label>
                                                <select name="sub_category_id" id="sub_category_id" class="form-control">
                                                    <option value="" disabled selected>Select Sub Category
                                                    </option>
                                                </select>
                                                @error('sub_category_id')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="col-md-12 form-group">
                                                <div class="wdinput">
                                                    <label class="customcheckbox">Trending Products
                                                        <input type="checkbox"
                                                            {{ old('tranding_product') ? 'checked' : '' }}
                                                            name="tranding_product">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    @error('tranding_product')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-12 form-group">
                                                <div class="wdinput">
                                                    <label class="customcheckbox">New Designs
                                                        <input type="checkbox" {{ old('new_design') ? 'checked' : '' }}
                                                            name="new_design">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    @error('new_design')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="wdinput">
                                                    <label class="customcheckbox">Offers
                                                        <input type="checkbox" {{ old('offer_product') ? 'checked' : '' }}
                                                            name="offer_product">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    @error('offer_product')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="border-top-sec"></div>

                                            <div class="col-md-12 form-group">
                                                <div class="wdinput">
                                                    <label class="customcheckbox">Machinemade
                                                        <input type="radio" {{ old('made_by') ? 'checked' : '' }}
                                                            value="Machinemade" name="made_by">
                                                        <span class="checkmark checkmark-raido-btn"></span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="wdinput">
                                                    <label class="customcheckbox">Handmade
                                                        <input type="radio" {{ old('made_by') ? 'checked' : '' }}
                                                            value="Handmade" name="made_by">
                                                        <span class="checkmark checkmark-raido-btn"></span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="border-top-sec"></div>

                                            <div class="col-md-12 form-group">
                                                <div class="wdinput">
                                                    <label class="customcheckbox">302
                                                        <input type="radio" value="302" name="product_type">
                                                        <span class="checkmark checkmark-raido-btn"></span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-md-12 form-group">
                                                <div class="wdinput">
                                                    <label class="customcheckbox">204
                                                        <input type="radio" value="204" name="product_type">
                                                        <span class="checkmark checkmark-raido-btn"></span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-md-12 form-group">
                                                <div class="wdinput">
                                                    <label>Original Price</label>
                                                    <input type="text" value="{{ old('original_price') }}"
                                                        name="original_price" class="form-control"
                                                        placeholder="Original Price">
                                                    @error('original_price')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-12 form-group">
                                                <div class="wdinput">
                                                    <label>Selling Price</label>
                                                    <input type="text" value="{{ old('selling_price') }}"
                                                        name="selling_price" class="form-control"
                                                        placeholder="Selling Price">
                                                    @error('selling_price')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-12 form-group">
                                                <div class="wdinput">
                                                    <label>Size</label>
                                                    <input type="text" value="{{ old('product_size') }}"
                                                        name="product_size" class="form-control" placeholder="Size">
                                                    @error('product_size')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror

                                                    <select name="product_unit" class="form-control selectsize">
                                                        <option value="" disabled selected>Select Unit</option>
                                                        <option value="Pkt">Pkt</option>
                                                        <option value="Inches">Inches</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-12 form-group">
                                                <div class="wdinput">
                                                    <label>Quantity</label>
                                                    <input type="text" value="{{ old('quantity') }}" name="quantity"
                                                        class="form-control" placeholder="Quantity">
                                                    @error('quantity')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-12 form-group">
                                                <div class="wdinput">
                                                    <label>Position</label>
                                                    <input type="text" value="{{ old('product_position') }}"
                                                        name="product_position" class="form-control"
                                                        placeholder="Product Position">
                                                    @error('product_position')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-12 form-group">
                                                <div class="wdinput">
                                                    <label>Product Image</label>
                                                    <input type="file" name="product_image" id="product_image"
                                                        class="form-control">
                                                    @error('product_image')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-12 form-group">
                                                <div class="wdinput">
                                                    <label>Hover Image</label>
                                                    <input type="file" name="hover_image" id="hover_image"
                                                        class="form-control">
                                                    @error('hover_image')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-12 form-group">
                                                <div class="wdinput">
                                                    <label>Document Upload</label>
                                                    <input type="file" name="product_document" id="product_document"
                                                        class="form-control"
                                                        accept="application/pdf, application/vnd.ms-excel">
                                                    @error('product_document')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

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
    <script>
        $(document).ready(function() {
            $("#category_id").change(function(e) {
                e.preventDefault();
                let cat_id = $(this).val();
                $.ajax({
                    method: "GET",
                    url: "{{ route('subcatbycategory') }}",
                    data: {
                        "cat_id": cat_id
                    },
                    success: function(response) {
                        $("#subCategoryResult").html(response);
                    }
                });
            });
        });
    </script>
@endsection
