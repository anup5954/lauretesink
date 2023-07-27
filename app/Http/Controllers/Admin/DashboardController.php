<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\OrderDetail;
use App\Models\Review;
use App\Models\StaticPage;
use App\Models\subscribe;
use App\Models\Video;
use App\Models\VideoCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DashboardController extends Controller
{
    public function index()
    {
        $productCount = Product::count();
        $conEnqCount = Contact::count();
        $subscribeCount = subscribe::count();
        $reviewCount = Review::count();
        $blogCount = Blog::count();
        $categoryCount = Category::count();
        $brandCount = Brand::count();
        $orderCount = OrderDetail::count();
        $announcement = StaticPage::where('id', 1)->where('category', 'Announcement')->first();
        return view('admin.index', compact('productCount', 'blogCount', 'categoryCount', 'brandCount', 'orderCount', 'announcement', 'reviewCount', 'conEnqCount', 'subscribeCount'));
    }

    public function saveAnnouncement(Request $request)
    {
        if (!empty($request->static_id) && !empty($request->category)) {
            $data = StaticPage::where('id', 1)->where('category', 'Announcement')->first();
            $data->content = $request->announcement;
            $data->save();
            return redirect()->to('/admin/dashboard')->with('success', 'Announcement Saved.');
        } else {
            $data = new StaticPage();
            $data->category = 'Announcement';
            $data->content = $request->announcement;
            $data->save();
            return redirect()->to('/admin/dashboard')->with('success', 'Announcement Saved.');
        }
    }

    public function Gallery()
    {
        return view('admin.gallery');
    }

    public function saveGallery(Request $request)
    {
        if ($request->hasFile('file')) {
            $product_image = $request->file('file');
            $extension = $product_image->getClientOriginalExtension();
            $imageName = time() . '_gallery_' . rand(1, 100) . '.' . $extension;
            $product_image->move(public_path('uploads/gallery'), $imageName);
            $gallery = new Gallery();
            $gallery->image = $imageName;
            $gallery->save();
        }
    }

    public function getGallery(Request $request)
    {
        $output = '';
        $images = Gallery::all();
        //return $images;
        if (!empty($images)) {
            foreach ($images as $image) {
                $output .= '<img src="' . asset('public/uploads/gallery/' . $image->image) . '" width="200" class="ml-2 mb-2" style="vertical-align: top;"> <a href="javascript:void(0)"  class="deleteGalleryImage" id="' . $image->id . '" ><i class="fa fa-trash text-danger"></i></a>';
            }
        }
        echo $output;
    }

    public function deleteGallery(Request $request)
    {
        $image = Gallery::find($request->imageId);
        $imagePath = public_path() . '/uploads/gallery/' . $image->image;
        $image->delete();
        File::delete($imagePath);
        echo "File deleted";
    }

    public function Video()
    {
        $videos = Video::all();
        $categories = VideoCategory::all();
        return view('admin.video-list', compact('videos', 'categories'));
    }

    public function saveVideo(Request $request)
    {
        $video = new Video();
        $video->video_url = $request->video_url;
        $video->save();
        return redirect()->route('videos')->with('success', 'Video url added successfully.');
    }

    public function deleteVideo($id)
    {
        $video =  Video::find($id);
        $video->delete();
        return redirect()->route('videos')->with('success', 'Video url deleted successfully.');
    }

    public function videoCategory()
    {
        $categories = VideoCategory::all();
        return view('admin.video-category', compact('categories'));
    }

    public function saveVideoCategory(Request $request)
    {
        $videocat = new VideoCategory();
        $videocat->video_category_name = $request->video_category_name;
        $videocat->save();
        return redirect()->route('videocategory')->with('success', 'Video category added successfully.');
    }

    public function deleteVideoCategory($id)
    {
        $videocat = VideoCategory::find($id);
        $videocat->delete();
        return redirect()->route('videocategory')->with('success', 'Video category deleted successfully.');
    }


    // Brand

    public function Brand()
    {
        return view('admin.brand');
    }

    public function saveBrand(Request $request)
    {
        if ($request->hasFile('file')) {
            $product_image = $request->file('file');
            $extension = $product_image->getClientOriginalExtension();
            $imageName = time() . '_brand_' . rand(1, 100) . '.' . $extension;
            $product_image->move(public_path('uploads/brand'), $imageName);
            $brand = new Brand();
            $brand->image = $imageName;
            $brand->save();
        }
    }

    public function getBrand(Request $request)
    {
        $output = '';
        $images = Brand::all();
        //return $images;
        if (!empty($images)) {
            foreach ($images as $image) {
                $output .= '<img src="' . asset('public/uploads/brand/' . $image->image) . '" width="200" class="ml-2 mb-2" style="vertical-align: top;"> <a href="javascript:void(0)"  class="deleteGalleryImage" id="' . $image->id . '" ><i class="fa fa-trash text-danger"></i></a>';
            }
        }
        echo $output;
    }

    public function deleteBrand(Request $request)
    {
        $image = Brand::find($request->imageId);
        $imagePath = public_path() . '/uploads/brand/' . $image->image;
        $image->delete();
        File::delete($imagePath);
        echo "File deleted";
    }


    public function changePopupImage(Request $request)
    {
        if ($request->hasFile('image')) {
            $product_image = $request->file('image');
            $extension = $product_image->getClientOriginalExtension();
            $imageName = time() . '_popup_' . rand(1, 100) . '.' . $extension;
            $product_image->move(public_path('uploads/popup'), $imageName);
            $image =  StaticPage::where('category', 'popup')->first();
            $image->image = $imageName;
            $image->save();
            return redirect()->to('admin/dashboard')->with('success', 'Image uploaded successfully.');
        }
    }
}
