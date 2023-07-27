@extends('layouts.admin')
@section('admin-title')
    Admin | Edit Product
@endsection

@section('admin-content')
    <div class="border w-100">
        <div class="content-wrapper">
            <div class="breadcrumbs-top d-flex align-items-center bg-light mb-3">
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb bg-transparent mb-0">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}"
                                class="text-decoration-none">Dashboard</a></li>
                        <li class="breadcrumb-item">Edit Product</li>
                    </ol>
                </div>
                <div class="add-back ml-auto mr-2">
                    <a href="javascript:history.go(-1)" class="btn text-dark"><i class="fa-solid fa-rotate-left"></i> Go
                        Back</a>
                </div>
            </div>
            <div class="content-wrapper">

                <form class="product-details-information" action="{{ route('productupdate', $product->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="product-detail-main" style="width: 100%;">
                        <div class="product-detail-row mb-2">
                            <div class="row">
                                <div class="col-xl-8 col-lg-8 col-md-12">
                                    <div class="row p-2">

                                        <div class="col-md-12 form-group">
                                            <div class="wdinput">
                                                <label>Product Name</label>
                                                <input type="text" placeholder="Product Name" class="form-control"
                                                    name="product_name" value="{{ $product->product_name }}">
                                                @error('product_name')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-12 form-group">
                                            <div class="wdinput">
                                                <label>Short Description</label>
                                                <textarea name="short_description" id="short_description" class="form-control" placeholder="Short Description">{{ $product->short_description }}</textarea>
                                                @error('short_description')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12 form-group">
                                            <div class="wdinput">
                                                <label>Long Description</label>
                                                <textarea name="long_description" id="long_description" class="form-control" placeholder="Long Description">{{ $product->long_description }}</textarea>
                                                @error('long_description')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-12 form-group">
                                            <div class="wdinput">
                                                <label>Youtube Link</label>
                                                <input type="text" name="youtube_link"
                                                    value="{{ $product->youtube_link }}" class="form-control"
                                                    placeholder="Youtube Iframe Link" />
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <label class="font-weight-bold">Other Platform</label>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <div class="wdinput">
                                                <div style="height: 20px;width:20px">
                                                    <img style="height: 20px;width:20px"
                                                        src="{{ asset('public/uploads/product/' . $product->platform_image1) }}"
                                                        alt="">
                                                </div>
                                                <label>Platform -1</label>
                                                <input type="file" accept="image/*" name="platform_image1"
                                                    id="platform_image1" class="form-control">
                                                <p class="text-danger"></p>
                                                <input type="text" name="platform_link1" id="platform_link1"
                                                    placeholder="Link 1" class="form-control"
                                                    value="{{ $product->platform_link1 }}">
                                            </div>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <div class="wdinput">
                                                <div style="height: 20px;width:20px">
                                                    <img style="height: 20px;width:20px"
                                                        src="{{ asset('public/uploads/product/' . $product->platform_image2) }}"
                                                        alt="">
                                                </div>
                                                <label>Platform 2</label>
                                                <input type="file" accept="image/*" name="platform_image2"
                                                    id="platform_image2" class="form-control">
                                                <p class="text-danger"></p>
                                                <input type="text" name="platform_link2" id="platform_link2"
                                                    placeholder="Link 2" class="form-control"
                                                    value="{{ $product->platform_link2 }}">
                                            </div>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <div class="wdinput">
                                                <div style="height: 20px;width:20px">
                                                    <img style="height: 20px;width:20px"
                                                        src="{{ asset('public/uploads/product/' . $product->platform_image3) }}"
                                                        alt="">
                                                </div>
                                                <label>Platform 3</label>
                                                <input type="file" name="platform_image3" id="platform_image3"
                                                    class="form-control">
                                                <p class="text-danger"></p>
                                                <input type="text" accept="image/*" name="platform_link3"
                                                    id="platform_link3" placeholder="Link 3" class="form-control"
                                                    value="{{ $product->platform_link3 }}">
                                            </div>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <div class="wdinput">
                                                <div style="height: 20px;width:20px">
                                                    <img style="height: 20px;width:20px"
                                                        src="{{ asset('public/uploads/product/' . $product->platform_image4) }}"
                                                        alt="">
                                                </div>
                                                <label>Platform 4</label>
                                                <input type="file" name="platform_image4" id="platform_image4"
                                                    class="form-control">
                                                <p class="text-danger"></p>
                                                <input type="text" accept="image/*" name="platform_link4"
                                                    id="platform_link4" placeholder="Link 4" class="form-control"
                                                    value="{{ $product->platform_link3 }}">
                                            </div>
                                        </div>



                                        <div class="col-md-12 form-group ">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="wdinput">
                                                        <label>SEO Title</label>
                                                        <textarea name="meta_title" class="form-control" placeholder="Enter Title">{{ $product->meta_title }}</textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="wdinput">
                                                        <label>SEO Description</label>
                                                        <textarea name="meta_decription" class="form-control" placeholder="SEO Description">{{ $product->meta_decription }}</textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="wdinput">
                                                        <label>SEO Keyword</label>
                                                        <textarea name="meta_keyword" class="form-control" placeholder="Enter SEO Keyword">{{ $product->meta_keyword }}</textarea>
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
                                                <button class="btn btn-primary w-100">Update</button>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <div class="wdinput">
                                                    <label>Category</label>
                                                    <select name="category_id" id="category_id" class="form-control">
                                                        <option value="" selected disabled>Select Category</option>
                                                        @foreach ($categories as $category)
                                                            <option
                                                                {{ $category->id == $product->category_id ? 'selected' : '' }}
                                                                value="{{ $category->id }}">
                                                                {{ $category->category_name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('category_id')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-12 form-group">

                                                <div class="wdinput" id="hideOnChnage">
                                                    <label>Sub Category</label>
                                                    <select name="sub_category_id" id="sub_category_id"
                                                        class="form-control">
                                                        <option value="" selected disabled>Select Sub Category
                                                        </option>
                                                        @foreach ($subcategories as $subcategory)
                                                            <option
                                                                {{ $subcategory->id == $product->sub_category_id ? 'selected' : '' }}
                                                                value="{{ $subcategory->id }}">
                                                                {{ $subcategory->sub_category_name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('category_id')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <div class="wdinput" id="subCategoryResult"></div>
                                            </div>

                                            <div class="col-md-12 form-group">
                                                <div class="wdinput">
                                                    <label class="customcheckbox">Trending Products
                                                        <input type="checkbox" name="tranding_product"
                                                            {{ $product->tranding_product == 1 ? 'checked' : '' }}>
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
                                                        <input type="checkbox"
                                                            {{ $product->new_design == 1 ? 'checked' : '' }}
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
                                                        <input type="checkbox"
                                                            {{ $product->offer_product == 1 ? 'checked' : '' }}
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
                                                        <input type="radio" value="Machinemade" name="made_by"
                                                            {{ !empty($product->made_by) && $product->made_by == 'Machinemade' ? 'checked' : '' }}>
                                                        <span class="checkmark checkmark-raido-btn"></span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="wdinput">
                                                    <label class="customcheckbox">Handmade
                                                        <input type="radio" value="Handmade" name="made_by"
                                                            {{ !empty($product->made_by) && $product->made_by == 'Handmade' ? 'checked' : '' }}>
                                                        <span class="checkmark checkmark-raido-btn"></span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="border-top-sec"></div>






                                            <div class="col-md-12 form-group">
                                                <div class="wdinput">
                                                    <label class="customcheckbox">302
                                                        <input type="radio" value="302"
                                                            {{ !empty($product->product_type) && $product->product_type == '302' ? 'checked' : '' }}
                                                            name="product_type">
                                                        <span class="checkmark checkmark-raido-btn"></span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-md-12 form-group">
                                                <div class="wdinput">
                                                    <label class="customcheckbox">204
                                                        <input type="radio" value="204"
                                                            {{ !empty($product->product_type) && $product->product_type == '204' ? 'checked' : '' }}
                                                            name="product_type">
                                                        <span class="checkmark checkmark-raido-btn"></span>
                                                    </label>
                                                </div>
                                            </div>






                                            <div class="col-md-12 form-group">
                                                <div class="wdinput">
                                                    <label>Original Price</label>
                                                    <input type="text" name="original_price" class="form-control"
                                                        placeholder="Original Price"
                                                        value="{{ $product->original_price }}">
                                                    @error('original_price')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <div class="wdinput">
                                                    <label>Selling Price</label>
                                                    <input type="text" name="selling_price" class="form-control"
                                                        placeholder="Selling Price"
                                                        value="{{ $product->selling_price }}">
                                                    @error('selling_price')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-12 form-group">
                                                <div class="wdinput">
                                                    <label>Size</label>
                                                    <input type="text" value="{{ $product->product_size }}"
                                                        name="product_size" class="form-control" placeholder="Size">
                                                    @error('product_size')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror

                                                    <select name="product_unit" class="form-control selectsize">
                                                        <option value="" disabled selected>Select Unit</option>
                                                        <option {{ $product->product_unit == 'Pkt' ? 'selected' : '' }}
                                                            value="Pkt">Pkt</option>
                                                        <option {{ $product->product_unit == 'Inches' ? 'selected' : '' }}
                                                            value="Inches">Inches</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="col-md-12 form-group">
                                                <div class="wdinput">
                                                    <label>Quantity</label>
                                                    <input type="text" name="quantity" class="form-control"
                                                        placeholder="Quantity" value="{{ $product->quantity }}">
                                                    @error('quantity')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-12 form-group">
                                                <div class="wdinput">
                                                    <label>Position</label>
                                                    <input type="text" value="{{ $product->product_position }}"
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

                                                <div class="wdinput">
                                                    <img src="{{ asset('public/uploads/product/' . $product->product_image) }}"
                                                        style="width: 200px;" />
                                                    <input type="hidden" name="hide_product_image"
                                                        value="{{ $product->product_image }}">
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
                                                <div class="wdinput">
                                                    <img src="{{ asset('public/uploads/product/' . $product->hover_image) }}"
                                                        style="width: 200px;" />
                                                    <input type="hidden" name="hide_hover_image"
                                                        value="{{ $product->hover_image }}">
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
                                                <div class="wdinput">
                                                    <a target="_blank"
                                                        href="{{ asset('public/uploads/product/' . $product->product_document) }}"
                                                        class="btn btn-link">View Document</a>
                                                    <input type="hidden" name="hide_product_document"
                                                        value="{{ $product->product_document }}">
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
                        if (response) {
                            $("#hideOnChnage").hide();
                            $("#subCategoryResult").html(response);
                        } else {
                            $("#hideOnChnage").show();
                            $("#subCategoryResult").html('');
                        }

                    }
                });
            });
        });
    </script>
@endsection
