<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use App\Models\Category;
use App\Models\ProductGallery;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->get();
        return view('admin.product.product-list', compact('products'));
    }

    public function productAdd()
    {
        $categories = Category::all();
        $subcategories = SubCategory::all();
        return view('admin.product.product-add', compact('categories', 'subcategories'));
    }

    public function productSave(Request $request)
    {
        //return $request->all();
        $validated = $request->validate([
            'category_id' => 'required',

            'product_name' => 'required',
            'original_price' => 'required',
            'selling_price' => 'required',
            'quantity' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'product_image' => 'required|mimes:jpg,jpeg,png,gif,svg|max:10240',
        ], [
            'category_id.required' => 'Please select category!',

            'product_name.required' => 'Please enter product name!',
            'original_price.required' => 'Please enter original price!',
            'selling_price.required' => 'Please enter selling price!',
            'quantity.required' => 'Please enter quantity!',
            'short_description.required' => 'Please enter short description!',
            'long_description.required' => 'Please enter long description!',
            'product_image.required' => 'Please select product image!',
        ]);

        $productImageName = '';
        if ($request->hasFile('product_image')) {
            $product_image = $request->file('product_image');
            $extension = $product_image->getClientOriginalExtension();
            $productImageName = time() . '_product_' . rand(1, 100) . '.' . $extension;
            $product_image->move(public_path('uploads/product'), $productImageName);
        }

        $productHoverImageName = '';
        if ($request->hasFile('hover_image')) {
            $product_image = $request->file('hover_image');
            $extension = $product_image->getClientOriginalExtension();
            $productHoverImageName = time() . '_product_hover_' . rand(1, 100) . '.' . $extension;
            $product_image->move(public_path('uploads/product'), $productHoverImageName);
        }

        $productDocumentName = '';
        if ($request->hasFile('product_document')) {
            $product_image = $request->file('product_document');
            $extension = $product_image->getClientOriginalExtension();
            $productDocumentName = time() . '_product_document_' . rand(1, 100) . '.' . $extension;
            $product_image->move(public_path('uploads/product'), $productDocumentName);
        }

        /* Platform Image */

        $platform_image1 = '';
        if ($request->hasFile('platform_image1')) {
            $product_image = $request->file('platform_image1');
            $extension = $product_image->getClientOriginalExtension();
            $platform_image1 = time() . '_platform_image1_' . rand(1, 100) . '.' . $extension;
            $product_image->move(public_path('uploads/product'), $platform_image1);
        }

        $platform_image2 = '';
        if ($request->hasFile('platform_image2')) {
            $product_image = $request->file('platform_image2');
            $extension = $product_image->getClientOriginalExtension();
            $platform_image2 = time() . '_platform_image2_' . rand(1, 100) . '.' . $extension;
            $product_image->move(public_path('uploads/product'), $platform_image2);
        }

        $platform_image3 = '';
        if ($request->hasFile('platform_image3')) {
            $product_image = $request->file('platform_image3');
            $extension = $product_image->getClientOriginalExtension();
            $platform_image3 = time() . '_platform_image3_' . rand(1, 100) . '.' . $extension;
            $product_image->move(public_path('uploads/product'), $platform_image3);
        }


        $platform_image4 = '';
        if ($request->hasFile('platform_image4')) {
            $product_image = $request->file('platform_image4');
            $extension = $product_image->getClientOriginalExtension();
            $platform_image4 = time() . '_platform_image4_' . rand(1, 100) . '.' . $extension;
            $product_image->move(public_path('uploads/product'), $platform_image4);
        }


        /* End Platform Image */

        $product = new Product();
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;
        $product->product_name = $request->product_name;
        $product->product_slug = null;
        $product->product_image = $productImageName;
        $product->hover_image = $productHoverImageName;
        $product->product_document = $productDocumentName;
        $product->selling_price = $request->selling_price;
        $product->original_price = $request->original_price;
        $product->quantity = $request->quantity;
        $product->product_size = $request->product_size;
        $product->product_unit = $request->product_unit;
        $product->product_position = $request->product_position;

        $product->youtube_link = $request->youtube_link;

        $product->platform_image1 = $platform_image1;
        $product->platform_image2 = $platform_image2;
        $product->platform_image3 = $platform_image3;
        $product->platform_image4 = $platform_image4;

        $product->platform_link1 = $request->platform_link1;
        $product->platform_link2 = $request->platform_link2;
        $product->platform_link3 = $request->platform_link3;
        $product->platform_link4 = $request->platform_link4;
        $product->product_type = $request->product_type;

        $product->meta_title = $request->meta_title;
        $product->meta_decription = $request->meta_decription;
        $product->meta_keyword = $request->meta_keyword;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->tranding_product = ($request->tranding_product) ? 1 : 0;
        $product->new_design = ($request->new_design) ? 1 : 0;
        $product->offer_product = ($request->offer_product) ? 1 : 0;
        $product->made_by = ($request->made_by) ? $request->made_by : '';
        $product->save();
        return redirect()->route('productadd')->with('success', 'Product saved successfully.');
    }

    public function productEdit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        $subcategories = SubCategory::all();
        if ($product) {
            return view('admin.product.product-edit', compact('product', 'categories', 'subcategories'));
        } else {
            return redirect()->route('products')->with('error', 'Product not found.');
        }
    }

    public function productUpdate($id, Request $request)
    {
        //return $request->all();
        $validated = $request->validate([
            'category_id' => 'required',

            'product_name' => 'required',
            'original_price' => 'required',
            'selling_price' => 'required',
            'quantity' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',

        ], [
            'category_id.required' => 'Please select category!',

            'product_name.required' => 'Please enter product name!',
            'original_price.required' => 'Please enter original price!',
            'selling_price.required' => 'Please enter selling price!',
            'quantity.required' => 'Please enter quantity!',
            'short_description.required' => 'Please enter short description!',
            'long_description.required' => 'Please enter long description!',

        ]);

        $product = Product::find($id);
        $imagePath = public_path() . '/uploads/product/' . $product->product_image;
        if (!empty($product)) {
            $productImageName = '';
            if ($request->hasFile('product_image')) {
                $product_image = $request->file('product_image');
                $extension = $product_image->getClientOriginalExtension();
                $productImageName = time() . '_product_' . rand(1, 100) . '.' . $extension;
                $product_image->move(public_path('uploads/product'), $productImageName);
                File::delete($imagePath);
            } else {
                $productImageName = $request->hide_product_image;
            }

            $productHoverImageName = '';
            if ($request->hasFile('hover_image')) {
                $product_image = $request->file('hover_image');
                $extension = $product_image->getClientOriginalExtension();
                $productHoverImageName = time() . '_product_hover_' . rand(1, 100) . '.' . $extension;
                $product_image->move(public_path('uploads/product'), $productHoverImageName);
            } else {
                $productHoverImageName = $request->hide_hover_image;
            }

            $productDocumentName = '';
            if ($request->hasFile('product_document')) {
                $product_image = $request->file('product_document');
                $extension = $product_image->getClientOriginalExtension();
                $productDocumentName = time() . '_product_document_' . rand(1, 100) . '.' . $extension;
                $product_image->move(public_path('uploads/product'), $productDocumentName);
            } else {
                $productDocumentName = $request->product_document;
            }


            /* Platform Image */

            $platform_image1 = '';
            if ($request->hasFile('platform_image1')) {
                $product_image = $request->file('platform_image1');
                $extension = $product_image->getClientOriginalExtension();
                $platform_image1 = time() . '_platform_image1_' . rand(1, 100) . '.' . $extension;
                $product_image->move(public_path('uploads/product'), $platform_image1);
            } else {
                $platform_image1 = $product->platform_image1;
            }

            $platform_image2 = '';
            if ($request->hasFile('platform_image2')) {
                $product_image = $request->file('platform_image2');
                $extension = $product_image->getClientOriginalExtension();
                $platform_image2 = time() . '_platform_image2_' . rand(1, 100) . '.' . $extension;
                $product_image->move(public_path('uploads/product'), $platform_image2);
            } else {
                $platform_image2 = $product->platform_image2;
            }

            $platform_image3 = '';
            if ($request->hasFile('platform_image3')) {
                $product_image = $request->file('platform_image3');
                $extension = $product_image->getClientOriginalExtension();
                $platform_image3 = time() . '_platform_image3_' . rand(1, 100) . '.' . $extension;
                $product_image->move(public_path('uploads/product'), $platform_image3);
            } else {
                $platform_image3 = $product->platform_image3;
            }


            $platform_image4 = '';
            if ($request->hasFile('platform_image4')) {
                $product_image = $request->file('platform_image4');
                $extension = $product_image->getClientOriginalExtension();
                $platform_image4 = time() . '_platform_image4_' . rand(1, 100) . '.' . $extension;
                $product_image->move(public_path('uploads/product'), $platform_image4);
            } else {
                $platform_image4 = $product->platform_image4;
            }


            /* End Platform Image */

            $product->category_id = $request->category_id;
            $product->sub_category_id = $request->sub_category_id;
            $product->product_name = $request->product_name;
            $product->product_image = $productImageName;
            $product->hover_image = $productHoverImageName;
            $product->product_document = $productDocumentName;
            $product->selling_price = $request->selling_price;
            $product->original_price = $request->original_price;
            $product->quantity = $request->quantity;
            $product->product_size = $request->product_size;
            $product->product_unit = $request->product_unit;
            $product->product_position = $request->product_position;
            $product->youtube_link = $request->youtube_link;

            $product->platform_image1 = $platform_image1;
            $product->platform_image2 = $platform_image2;
            $product->platform_image3 = $platform_image3;
            $product->platform_image4 = $platform_image4;

            $product->platform_link1 = $request->platform_link1;
            $product->platform_link2 = $request->platform_link2;
            $product->platform_link3 = $request->platform_link3;
            $product->platform_link4 = $request->platform_link4;
            $product->product_type = $request->product_type;

            $product->meta_title = $request->meta_title;
            $product->meta_decription = $request->meta_decription;
            $product->meta_keyword = $request->meta_keyword;
            $product->short_description = $request->short_description;
            $product->long_description = $request->long_description;
            $product->tranding_product = ($request->tranding_product) ? 1 : 0;
            $product->new_design = ($request->new_design) ? 1 : 0;
            $product->offer_product = ($request->offer_product) ? 1 : 0;
            $product->made_by = ($request->made_by) ? $request->made_by : '';
            $product->save();
            return redirect()->route('products')->with('success', 'Product update successfully.');
        } else {
            return redirect()->route('products')->with('error', 'Product not found.');
        }
    }

    public function productStatus(Request $request)
    {
        $product = Product::find($request->productId);
        $product->status = $request->status;
        $product->save();
        echo "Product status changed.";
    }

    public function productDelete($id)
    {
        $product = Product::find($id);
        $imagePath = public_path() . '/uploads/product/' . $product->product_image;
        if ($product) {
            $product->delete();
            File::delete($imagePath);
            return redirect()->route('products')->with('success', 'Product deleted successfully.');
        } else {
            return redirect()->route('products')->with('error', 'Product not found.');
        }
    }

    public function subCatByCategory(Request $request)
    {
        $subCategories = SubCategory::where('category_id', $request->cat_id)->get();
        $output = "";
        $output .= '<div class="wdinput">';
        $output .= '<label>Sub Category</label>';
        $output .= '<select name="sub_category_id" id="sub_category_id"
                                                        class="form-control">
                                                        <option value="" selected disabled>Select Sub Category
                                                        </option>';
        foreach ($subCategories as $subcategory) {
            $output .= '<option value="' . $subcategory->id . '">
                                                                ' . $subcategory->sub_category_name . '</option>';
        }
        $output .= '</select>';

        $output .= '</div>';
        echo $output;
    }


    public function productGallery($id)
    {
        return view('admin.product.product-gallery', compact('id'));
    }

    public function saveProductGallery(Request $request)
    {
        if ($request->hasFile('file')) {
            $product_image = $request->file('file');
            $extension = $product_image->getClientOriginalExtension();
            $imageName = time() . '_gallery_' . rand(1, 100) . '.' . $extension;
            $product_image->move(public_path('uploads/productGallery'), $imageName);
            $gallery = new ProductGallery();
            $gallery->product_id = $request->product_id;
            $gallery->product_image = $imageName;
            $gallery->save();
        }
    }

    public function getProductGallery(Request $request)
    {
        $output = '';
        $images = ProductGallery::where('product_id', $request->product_id)->get();
        //return $images;
        if (!empty($images)) {
            foreach ($images as $image) {
                $output .= '<img src="' . asset('public/uploads/productGallery/' . $image->product_image) . '" width="200" class="ml-2 mb-2" style="vertical-align: top;"> <a href="javascript:void(0)"  class="deleteProductGalleryImage" id="' . $image->id . '" ><i class="fa fa-trash text-danger"></i></a>';
            }
        }
        echo $output;
    }

    public function deleteProductGallery(Request $request)
    {
        $image = ProductGallery::find($request->imageId);
        $imagePath = public_path() . '/uploads/productGallery/' . $image->product_image;
        $image->delete();
        File::delete($imagePath);
        echo "File deleted";
    }
} // end class
