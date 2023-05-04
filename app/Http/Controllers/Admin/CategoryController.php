<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all()->sortByDesc("id");
        return view('admin.product-categories', compact('categories'));
    }

    public function saveCategory(Request $request)
    {
        $imageName = '';
        if ($request->hasFile('category_image')) {
            $category_image = $request->file('category_image');
            $extension = $category_image->getClientOriginalExtension();
            $imageName = time() . '_category_' . rand(1, 100) . '.' . $extension;
            $category_image->move(public_path('uploads/category'), $imageName);
        }
        $category = new Category();
        $category->category_image = $imageName;
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->meta_title = $request->meta_title;
        $category->meta_desc = $request->meta_desc;
        $category->meta_keyword = $request->meta_keyword;
        $category->save();
        return redirect()->route('categories')->with('success', 'Category saved successfully.');
    }

    public function editCategory(Request $request)
    {
        $category = Category::find($request->catId);
        if ($category) {
            return $category;
        } else {
            echo "Category not found";
        }
    }

    public function updateCategory(Request $request)
    {
        $category = Category::find($request->category_id);
        $imagePath = public_path() . '/uploads/category/' . $category->category_image;
        if ($category) {
            $imageName = '';
            if ($request->hasFile('category_image')) {
                $category_image = $request->file('category_image');
                $extension = $category_image->getClientOriginalExtension();
                $imageName = time() . '_category_' . rand(1, 100) . '.' . $extension;
                $category_image->move(public_path('uploads/category'), $imageName);
                File::delete($imagePath);
            } else {
                $imageName = $request->category_hidden_image;
            }
            $category->category_image = $imageName;
            $category->category_name = $request->category_name;
            $category->category_description = $request->category_description;
            $category->meta_title = $request->meta_title;
            $category->meta_desc = $request->meta_desc;
            $category->meta_keyword = $request->meta_keyword;
            $category->save();
            return redirect()->route('categories')->with('success', 'Category update successfully.');
        } else {
            echo "Category not found";
        }
    }


    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $subCategory = SubCategory::where('category_id', $id)->count();
        $products = Product::where('category_id', $id)->count();
        if ($subCategory > 0 || $products > 0) {
            return redirect()->route('categories')->with('error', 'Please remove crosspond subcategory or product from this category.');
        } else {
            $imagePath = public_path() . '/uploads/category/' . $category->category_image;
            if ($category) {
                $category->delete();
                File::delete($imagePath);
                return redirect()->route('categories')->with('success', 'Category deleted successfully.');
            } else {
                return redirect()->route('categories')->with('error', 'Category not found.');
            }
        }
    }
}
