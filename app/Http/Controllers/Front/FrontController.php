<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\OrderDetail;
use App\Models\popupEnquery;
use App\Models\ProductGallery;
use App\Models\Review;
use App\Models\StaticPage;
use App\Models\SubCategory;
use App\Models\subscribe;
use App\Models\Video;
use App\Models\VideoCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        $categories = Category::where('status', 1)->get();
        $brands = Brand::all();
        $blogs = Blog::orderBy('id', 'DESC')->get();
        $newProducts = Product::where('new_design', 1)->where('status', 1)->get();
        $trendingProducts = Product::where('tranding_product', 1)->where('status', 1)->get();
        $offerProducts = Product::where('offer_product', 1)->where('status', 1)->get();

        return view('front.index', compact('categories', 'newProducts', 'trendingProducts', 'blogs', 'brands', 'offerProducts', 'reviews'));
    }

    public function productList($main_id = NULL, $sub_id = NULL, Request $request)
    {
        $products = array();
        $condition = [];
        $category = Category::where('category_slug', $main_id)->first();
        $subcategory = SubCategory::where('sub_category_slug', $sub_id)->first();

        $max_selling_price = Product::select('selling_price')->max('selling_price');
        if (isset($request->search_data) && !empty($request->search_data)) {
            $products = Product::where('product_name', 'like', '%' . $request->search_data . '%')->paginate(20);
        } else {
            if (!empty($main_id) && !empty($sub_id)) {
                $condition = ['status' => 1, 'category_id' => $category->id, 'sub_category_id' => $subcategory->id];
                $products = Product::where($condition)->paginate(20);
            } else {
                $condition = ['status' => 1, 'category_id' => $category->id];
                $products = Product::where($condition)->paginate(20);
            }
        }
        $categories = Category::where('status', 1)->get();

        return view('front.product-list', compact('products', 'categories', 'max_selling_price'));
    }



    public function productDetails($slug)
    {
        $product = Product::where('product_slug', $slug)->first();
        $galleryImages = ProductGallery::where('product_id', $product->id)->get();
        $trendingProducts = Product::where('tranding_product', 1)->where('status', 1)->get();
        return view('front.product-details', compact('product', 'trendingProducts', 'galleryImages'));
    }

    public function aboutUs()
    {
        return view('front.about-us');
    }

    public function faqs()
    {
        $faqs = Faq::orderBy('id', 'DESC')->get();
        return view('front.faqs', compact('faqs'));
    }

    public function gallery()
    {
        $galleries = Gallery::all();
        return view('front.gallery', compact('galleries'));
    }

    public function brands()
    {
        $brands = Brand::orderBy('id', 'DESC')->get();
        return view('front.brands', compact('brands'));
    }

    public function video()
    {
        $videos = Video::orderBy('id', 'DESC')->get();
        $categories = VideoCategory::orderBy('id', 'DESC')->get();
        //return $videos;
        return view('front.video', compact('videos', 'categories'));
    }

    public function blog()
    {
        $blogs = Blog::all();
        return view('front.blog', compact('blogs'));
    }

    public function bloggerdetails($slug)
    {
        $categories = Category::all();
        $tProducts = Product::where('tranding_product', 1)->get();
        $blog = Blog::where('blog_slug', $slug)->first();
        return view('front.blogger-details', compact('blog', 'categories', 'tProducts'));
    }

    public function returnpolicy()
    {
        return view('front.return-policy');
    }

    public function cancellationpolicy()
    {
        return view('front.cancellation-policy');
    }

    public function termsconditions()
    {
        return view('front.terms-conditions');
    }

    public function securitypolicy()
    {
        return view('front.security-policy');
    }

    public function privacypolicy()
    {
        return view('front.privacy-policy');
    }

    public function paymentpolicy()
    {
        return view('front.payment-policy');
    }

    public function shippingpolicy()
    {
        return view('front.shipping-policy');
    }

    public function subCategoryByCat($slug)
    {
        $category = Category::where('category_slug', $slug)->first();
        $subcategories = SubCategory::where('category_id', $category->id)->get();
        if (count($subcategories) > 0) {
            $category = Category::where('category_slug', $slug)->first();
            return view('front.sub-categories', compact('subcategories', 'category'));
        } else {
            return redirect()->route('product_list', ['main_id' => $category->category_slug, 'sub_id' => '']);
        }
    }

    public function contactUs()
    {
        return view('front.contact-us');
    }

    public function saveOrder(Request $request, $id)
    {
        $validate = $request->validate([
            'product_name'  => 'required',
            'product_price'  => 'required',
            'product_size'  => 'required',
            'name'  => 'required',
            'email'  => 'required|email',
            'mobile'  => 'required',
            'detailsmessage'  => 'required',
        ]);
        $product = Product::find($id);
        if (!empty($product)) {
            if ($product->selling_price != $request->product_price) {
                return redirect()->route('productdetails', $product->product_slug)->with('error', 'Something went worng');
            } else {
                $order = new OrderDetail();
                $order->product_id      = $id;
                $order->product_name    = $request->product_name;
                $order->product_price   = $request->product_price;
                $order->product_size    = $request->product_size;
                $order->name            = $request->name;
                $order->email           = $request->email;
                $order->mobile          = $request->mobile;
                $order->message         = $request->detailsmessage;
                $order->save();
                return redirect()->route('productdetails', $product->product_slug)->with('success', 'Order Placed Successfully');
            }
        } else {
            return redirect()->route('productdetails', $product->product_slug)->with('error', 'Something went worng');
        }
    }

    public function saveContact(Request $request)
    {
        $validate = $request->validate([
            'name'  => 'required',
            'email'  => 'required|email',
            'mobile'  => 'required',
            'detailsmessage'  => 'required',
        ]);
        $data = new Contact();
        $data->name     = $request->name;
        $data->email    = $request->email;
        $data->mobile   = $request->mobile;
        $data->message  = $request->detailsmessage;
        $data->save();
        return redirect()->route('contact')->with('success', 'Your message has been sent. We will contact you soon.');
    }

    public function saveSubscribeEmail(Request $request)
    {
        if (!empty($request->subscribe_email)) {
            $data = new subscribe();
            $data->email = $request->subscribe_email;
            $data->save();
            echo "<script>alert('subscription added');</script>";
            return redirect()->back();
        } else {
            echo "<script>alert('Enter your email');</script>";
            return redirect()->back();
        }
    }

    public function minMaxPrice(Request $request)
    {

        $productQuery = "";
        $subcategory = [];
        $categories = explode(',', $request->categories);
        $category = Category::where('category_slug', $categories[0])->first();
        if (isset($categories[1])) {
            $subcategory = SubCategory::where('sub_category_slug', $categories[1])->first();
        }
        if (!empty($request->size)) {
            for ($i = 0; $i < count($request->size); $i++) {
                $sizeExpload = explode(',', $request->size[$i]);
                if ($i == 0) {
                    $productQuery .=  "SELECT id FROM products where (product_size between " . $sizeExpload[0] . " and " . $sizeExpload[1];
                    if (count($request->size) ==  $i + 1) {
                        $productQuery .= ")";
                    }
                } else {
                    $productQuery .= " or product_size between " . $sizeExpload[0] . " and " . $sizeExpload[1];
                    if (count($request->size) ==  $i + 1) {
                        $productQuery .= ")";
                    }
                }
            }
        }

        if (isset($request->minValue) && !empty($request->maxValue)) {
            if (!empty($request->size)) {
                $productQuery .= " and (selling_price between " . $request->minValue . " and " . $request->maxValue . ")";
            } else {
                $productQuery .=  "SELECT id FROM products where (selling_price between " . $request->minValue . " and " . $request->maxValue . ")";
            }
        }
        //print_r($request->made_by);
        if (!empty($request->made_by)) {
            $productQuery .= " and made_by='" . $request->made_by . "'";
        }
        $productQuery .= " and category_id='" . $category->id . "'";
        if (!empty($subcategory)) {
            $productQuery .= " and sub_category_id='" . $subcategory->id . "'";
        }
        //echo $productQuery;
        $products = DB::select($productQuery);
        return $products;
    }

    public function popupEnquery(Request $request)
    {
        $popupenquery = new popupEnquery();
        $popupenquery->name = $request->name;
        $popupenquery->email = $request->email;
        $popupenquery->phone = $request->phone;
        $popupenquery->category = $request->category;
        $popupenquery->message = $request->message;
        $popupenquery->save();
        echo "Your enquery has been sent";
    }
}
