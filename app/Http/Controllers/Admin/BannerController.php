<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
    public function index()
    {
        $banners  = Banner::all();
        return view('admin.banner', compact('banners'));
    }

    public function storeBanner(Request $request)
    {
        //return $request->file();
        $imageName = "";
        $imageMobileName = "";
        if ($request->hasFile('bannerImage')) {
            $bannerImage = $request->file('bannerImage');
            $extension = $bannerImage->getClientOriginalExtension();
            $imageName = time() . '_banner_' . rand(1, 100) . '.' . $extension;
            $bannerImage->move(public_path('uploads/banner'), $imageName);
        }

        if ($request->hasFile('bannerMobileImage')) {
            $bannerMobileImage = $request->file('bannerMobileImage');
            $extension = $bannerMobileImage->getClientOriginalExtension();
            $imageMobileName = time() . '_banner_mobile_' . rand(1, 100) . '.' . $extension;
            $bannerMobileImage->move(public_path('uploads/banner'), $imageMobileName);
        }
        $banner = new Banner();
        $banner->image = $imageName;
        $banner->mobileimage = $imageMobileName;
        $banner->image_alt = $request->image_alt;
        $banner->save();
        return redirect()->route('banner')->with('success', 'Banner added successfully.');
    }

    public function editBanner(Request $request)
    {
        $banner = Banner::find($request->bannerId);
        if ($banner) {
            return $banner;
        } else {
            echo 'Image not found';
        }
    }

    public function updateBanner(Request $request)
    {

        $imageName = "";
        $imageMobileName = "";
        $banner = Banner::find($request->bannerId);
        $imagePath = public_path() . '/uploads/banner/' . $banner->image;
        $imageMobilePath = public_path() . '/uploads/banner/' . $banner->mobileimage;
        if ($request->hasFile('bannerImage')) {
            $bannerImage = $request->file('bannerImage');
            $extension = $bannerImage->getClientOriginalExtension();
            $imageName = time() . '_banner_' . rand(1, 100) . '.' . $extension;
            $bannerImage->move(public_path('uploads/banner'), $imageName);
            File::delete($imagePath);
        } else {
            $imageName = $request->hideImageDesktop;
        }

        if ($request->hasFile('bannerMobileImage')) {
            $bannerMobileImage = $request->file('bannerMobileImage');
            $extension = $bannerMobileImage->getClientOriginalExtension();
            $imageMobileName = time() . '_banner_mobile_' . rand(1, 100) . '.' . $extension;
            $bannerMobileImage->move(public_path('uploads/banner'), $imageMobileName);
            File::delete($imageMobilePath);
        } else {
            $imageMobileName = $request->hideImageMobile;
        }
        $banner->image = $imageName;
        $banner->mobileimage = $imageMobileName;
        $banner->image_alt = $request->image_alt;
        $banner->save();
        return redirect()->route('banner')->with('success', 'Banner updated successfully.');
    }

    public function deleteBanner($id)
    {
        $banner = Banner::find($id);
        $imagePath = public_path() . '/uploads/banner/' . $banner->image;
        $imageMobilePath = public_path() . '/uploads/banner/' . $banner->mobileimage;
        $banner->delete();
        File::delete($imagePath);
        File::delete($imageMobilePath);
        return redirect()->route('banner')->with('success', 'Banner deleted successfully.');
    }
}
