<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('id', 'DESC')->get();
        return view('admin.blog.blog-list', compact('blogs'));
    }
    public function blogAdd()
    {
        return view('admin.blog.blog-add');
    }

    public function blogEdit($id)
    {
        $blog = Blog::find($id);
        return view('admin.blog.blog-edit', compact('blog'));
    }

    public function blogSave(Request $request)
    {
        $imageName = '';
        if ($request->hasFile('blog_image')) {
            $blog_image = $request->file('blog_image');
            $extension = $blog_image->getClientOriginalExtension();
            $imageName = time() . '_blog_' . rand(1, 100) . '.' . $extension;
            $blog_image->move(public_path('uploads/blog'), $imageName);
        }

        $userImageName = '';
        if ($request->hasFile('user_image')) {
            $user_image = $request->file('user_image');
            $extension = $user_image->getClientOriginalExtension();
            $userImageName = time() . '_blog_' . rand(1, 100) . '.' . $extension;
            $user_image->move(public_path('uploads/blog'), $userImageName);
        }

        $blog = new Blog();
        $blog->blog_image = $imageName;
        $blog->blog_heading = $request->blog_heading;
        $blog->blog_description = $request->blog_description;
        $blog->meta_title = $request->meta_title;
        $blog->meta_description = $request->meta_description;
        $blog->meta_keyword = $request->meta_keyword;

        $blog->user_image = $userImageName;
        $blog->user_name = $request->user_name;
        $blog->user_description = $request->user_description;
        $blog->category = ($request->category) ? 1 : 0;
        $blog->tranding_product = ($request->tranding_product) ? 1 : 0;
        $blog->new_design = ($request->new_design) ? 1 : 0;

        $blog->save();
        return redirect()->route('blogAdd')->with('success', 'Blog saved successfully.');
    }

    public function blogUpdate(Request $request)
    {
        $imageName = '';
        $blog =  Blog::find($request->blog_id);
        $imagePath = public_path() . '/uploads/blog/' . $blog->blog_image;
        $userImagePath = public_path() . '/uploads/blog/' . $blog->user_image;
        if ($request->hasFile('blog_image')) {
            $blog_image = $request->file('blog_image');
            $extension = $blog_image->getClientOriginalExtension();
            $imageName = time() . '_blog_' . rand(1, 100) . '.' . $extension;
            $blog_image->move(public_path('uploads/blog'), $imageName);
            File::delete($imagePath);
        } else {
            $imageName = $request->hide_blog_img;
        }

        $userImageName = '';
        if ($request->hasFile('user_image')) {
            $user_image = $request->file('user_image');
            $extension = $user_image->getClientOriginalExtension();
            $userImageName = time() . '_blog_' . rand(1, 100) . '.' . $extension;
            $user_image->move(public_path('uploads/blog'), $userImageName);
            File::delete($userImagePath);
        } else {
            $userImageName = $request->user_hide_img;
        }

        $blog->blog_image = $imageName;
        $blog->blog_heading = $request->blog_heading;
        $blog->blog_description = $request->blog_description;
        $blog->meta_title = $request->meta_title;
        $blog->meta_description = $request->meta_description;
        $blog->meta_keyword = $request->meta_keyword;


        $blog->user_image = $userImageName;
        $blog->user_name = $request->user_name;
        $blog->user_description = $request->user_description;
        $blog->category = ($request->category) ? 1 : 0;
        $blog->tranding_product = ($request->tranding_product) ? 1 : 0;
        $blog->new_design = ($request->new_design) ? 1 : 0;

        $blog->save();
        return redirect()->route('blogs')->with('success', 'Blog updated successfully.');
    }

    public function blogDelete($id)
    {
        $blog = Blog::find($id);
        $imagePath = public_path() . '/uploads/blog/' . $blog->blog_image;
        $blog->delete();
        File::delete($imagePath);
        return redirect()->route('blogs')->with('success', 'Blog deleted successfully.');
    }
}
