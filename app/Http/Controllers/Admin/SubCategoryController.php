<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;
use Illuminate\Support\Facades\File;

class SubCategoryController extends Controller
{
    public function index()
    {
        $subCategories = SubCategory::all()->sortByDesc("id");
        $categories = Category::where('status', 1)->orderby("id")->get();
        return view('admin.sub-categories', compact('subCategories', 'categories'));
    }

    public function saveSubCategory(Request $request)
    {
        $imageName = '';
        if ($request->hasFile('sub_category_image')) {
            $sub_category_image = $request->file('sub_category_image');
            $extension = $sub_category_image->getClientOriginalExtension();
            $imageName = time() . '_sub_category_' . rand(1, 100) . '.' . $extension;
            $sub_category_image->move(public_path('uploads/sub-category'), $imageName);
        }
        $subCategory = new SubCategory();
        $subCategory->sub_category_image = $imageName;
        $subCategory->category_id = $request->category_id;
        $subCategory->sub_category_name = $request->sub_category_name;
        $subCategory->sub_category_description = $request->sub_category_description;
        $subCategory->sub_meta_title = $request->sub_meta_title;
        $subCategory->sub_meta_desc = $request->sub_meta_desc;
        $subCategory->sub_meta_keyword = $request->sub_meta_keyword;
        $subCategory->save();
        return redirect()->route('sub-categories')->with('success', 'Sub Category saved successfully.');
    }

    public function editSubCategory(Request $request)
    {
        $subCategory = SubCategory::find($request->subCatId);
        if ($subCategory) {
            return $subCategory;
        } else {
            echo "Sub Category not found";
        }
    }

    public function updateSubCategory(Request $request)
    {
        $subCategory = SubCategory::find($request->sub_category_id);
        $imagePath = public_path() . '/uploads/sub-category/' . $subCategory->sub_category_image;
        if ($subCategory) {
            $imageName = '';
            if ($request->hasFile('sub_category_image')) {
                $sub_category_image = $request->file('sub_category_image');
                $extension = $sub_category_image->getClientOriginalExtension();
                $imageName = time() . '_sub_category_' . rand(1, 100) . '.' . $extension;
                $sub_category_image->move(public_path('uploads/sub-category'), $imageName);
                File::delete($imagePath);
            } else {
                $imageName = $request->category_hidden_image;
            }
            $subCategory->sub_category_image = $imageName;
            $subCategory->category_id = $request->category_id;
            $subCategory->sub_category_name = $request->sub_category_name;
            $subCategory->sub_category_description = $request->sub_category_description;
            $subCategory->sub_meta_title = $request->sub_meta_title;
            $subCategory->sub_meta_desc = $request->sub_meta_desc;
            $subCategory->sub_meta_keyword = $request->sub_meta_keyword;
            $subCategory->save();
            return redirect()->route('sub-categories')->with('success', 'Sub Category update successfully.');
        } else {
            echo "Sub Category not found";
        }
    }


    public function deleteSubCategory($id)
    {
        $subCategory = SubCategory::find($id);
        $imagePath = public_path() . '/uploads/sub-category/' . $subCategory->sub_category_image;
        $products = Product::where('sub_category_id', $id)->count();
        if ($products > 0) {
            return redirect()->route('categories')->with('error', 'Please remove crosspond product from this sub category.');
        } else {
            if ($subCategory) {
                $subCategory->delete();
                File::delete($imagePath);
                return redirect()->route('sub-categories')->with('success', 'Sub Category deleted successfully.');
            } else {
                return redirect()->route('sub-categories')->with('error', 'Sub Category not found.');
            }
        }
    }
}
