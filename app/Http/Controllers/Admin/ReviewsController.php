<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ReviewsController extends Controller
{
    public function index()
    {
        $reviews = Review::orderBy('id', 'DESC')->get();
        return view('admin.reviews.reviews-list', compact('reviews'));
    }
    public function reviewsAdd()
    {
        return view('admin.reviews.reviews-add');
    }

    public function saveReview(Request $request)
    {
        $imageName = '';
        if ($request->hasFile('client_image')) {
            $client_image = $request->file('client_image');
            $extension = $client_image->getClientOriginalExtension();
            $imageName = time() . '_review_' . rand(1, 100) . '.' . $extension;
            $client_image->move(public_path('uploads/review'), $imageName);
        }
        $review = new Review();
        $review->client_image = $imageName;
        $review->client_name  =  $request->client_name;
        $review->client_review  = $request->client_review;
        $review->client_rating = $request->client_rating;
        $review->save();
        return redirect()->route('reviewsAdd')->with('success', 'Review added successfully');
    }

    public function reviewsEdit($id)
    {
        $review = Review::find($id);
        return view('admin.reviews.reviews-edit', compact('review'));
    }

    public function reviewsDelete($id)
    {
        $review = Review::find($id);
        $imagePath = public_path() . '/uploads/review/' . $review->client_image;
        $review->delete();
        File::delete($imagePath);
        return redirect()->route('reviews')->with('success', 'Review deleted successfully');
    }

    public function updateReview(Request $request, $id)
    {
        $imageName = '';
        $review =  Review::find($id);
        $imagePath = public_path() . '/uploads/review/' . $review->client_image;
        if ($request->hasFile('client_image')) {
            $client_image = $request->file('client_image');
            $extension = $client_image->getClientOriginalExtension();
            $imageName = time() . '_review_' . rand(1, 100) . '.' . $extension;
            $client_image->move(public_path('uploads/review'), $imageName);
            File::delete($imagePath);
        } else {
            $imageName = $request->hide_img;
        }

        $review->client_image = $imageName;
        $review->client_name  =  $request->client_name;
        $review->client_review  = $request->client_review;
        $review->client_rating = $request->client_rating;
        $review->save();
        return redirect()->route('reviews')->with('success', 'Review updated successfully');
    }
}
