<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use App\Models\Category;
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
        $product->meta_title = $request->meta_title;
        $product->meta_decription = $request->meta_decription;
        $product->meta_keyword = $request->meta_keyword;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->tranding_product = ($request->tranding_product) ? 1 : 0;
        $product->new_design = ($request->new_design) ? 1 : 0;
        $product->offer_product = ($request->offer_product) ? 1 : 0;
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
            $product->meta_title = $request->meta_title;
            $product->meta_decription = $request->meta_decription;
            $product->meta_keyword = $request->meta_keyword;
            $product->short_description = $request->short_description;
            $product->long_description = $request->long_description;
            $product->tranding_product = ($request->tranding_product) ? 1 : 0;
            $product->new_design = ($request->new_design) ? 1 : 0;
            $product->offer_product = ($request->offer_product) ? 1 : 0;
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
} // end class
