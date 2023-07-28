<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\EnquiriesController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\HappyCustomerController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ReviewsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Admin\SubCategoryController;
use Illuminate\Support\Facades\Route;

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::get('/', [FrontController::class, 'index']);
//Route::get('/categories/{id?}', [FrontController::class, 'categories'])->name('categories_front');
Route::match(['GET', 'POST'], '/product-list/{main_id?}/{sub_id?}', [FrontController::class, 'productList'])->name('product_list');
Route::get('/product/{slug}', [FrontController::class, 'productDetails'])->name('productdetails');
Route::get('/about-us', [FrontController::class, 'aboutUs'])->name('about');
Route::get('/sub-category/{id}', [FrontController::class, 'subCategoryByCat'])->name('subcategory');
Route::get('/faqs', [FrontController::class, 'faqs'])->name('faqs');
Route::get('/gallery', [FrontController::class, 'gallery'])->name('gallery');
Route::get('/brands', [FrontController::class, 'brands'])->name('brands');
Route::get('/video', [FrontController::class, 'video'])->name('video');
Route::get('/contact-us', [FrontController::class, 'contactUs'])->name('contact');
Route::get('/return-policy', [FrontController::class, 'returnpolicy'])->name('return');
Route::get('/terms-conditions', [FrontController::class, 'termsconditions'])->name('terms');
Route::get('/security-policy', [FrontController::class, 'securitypolicy'])->name('security');
Route::get('/privacy-policy', [FrontController::class, 'privacypolicy'])->name('privacy');
Route::get('/payment-policy', [FrontController::class, 'paymentpolicy'])->name('payment');
Route::get('/shipping-policy', [FrontController::class, 'shippingpolicy'])->name('shipping');
Route::get('/cancellation-policy', [FrontController::class, 'cancellationpolicy'])->name('cancellation');
Route::get('/blog', [FrontController::class, 'blog'])->name('blog');
Route::get('/blogger-details/{slug}', [FrontController::class, 'bloggerdetails'])->name('blogger');

Route::put('/save-order/{slug}', [FrontController::class, 'saveOrder'])->name('saveorder');
Route::post('/save-contact', [FrontController::class, 'saveContact'])->name('savecontact');
//subscribe_email
Route::post('/save-subscribe-email', [FrontController::class, 'saveSubscribeEmail'])->name('savesubscribeemail');

Route::post('/min-max-price', [FrontController::class, 'minMaxPrice'])->name('minmaxprice');

Route::post('/save-popup-enquery', [FrontController::class, 'popupEnquery'])->name('savepopupenquery');


Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'isAdmin']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    /* Banner Routes */
    Route::get('/banner', [BannerController::class, 'index'])->name('banner');
    Route::post('/save-banner', [BannerController::class, 'storeBanner'])->name('save_banner');
    Route::post('/edit-banner', [BannerController::class, 'editBanner'])->name('editbanner');
    Route::post('/update-banner', [BannerController::class, 'updateBanner'])->name('updatebanner');
    Route::get('/delete-banner/{id}', [BannerController::class, 'deleteBanner'])->name('deletebanner');

    // Category
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
    Route::post('/save-category', [CategoryController::class, 'saveCategory'])->name('store');
    Route::post('/edit-category', [CategoryController::class, 'editCategory'])->name('editcategory');
    Route::post('/update-category', [CategoryController::class, 'updateCategory'])->name('updatecategory');
    Route::get('/delete-category/{id}', [CategoryController::class, 'deleteCategory'])->name('deletecategory');

    // Sub Category
    Route::get('/sub-categories', [SubCategoryController::class, 'index'])->name('sub-categories');
    Route::post('/save-sub-category', [SubCategoryController::class, 'saveSubCategory'])->name('subcategorysave');
    Route::post('/edit-sub-category', [SubCategoryController::class, 'editSubCategory'])->name('subcategoryedit');
    Route::post('/update-sub-category', [SubCategoryController::class, 'updateSubCategory'])->name('subcategoryupdate');
    Route::get('/delete-sub-category/{id}', [SubCategoryController::class, 'deleteSubCategory'])->name('subcategorydelete');


    // Product Routes
    Route::get('/products', [ProductController::class, 'index'])->name('products');
    Route::get('/add-product', [ProductController::class, 'productAdd'])->name('productadd');
    Route::post('/save-product', [ProductController::class, 'productSave'])->name('productsave');
    Route::get('/edit-product/{id}', [ProductController::class, 'productEdit'])->name('productedit');
    Route::put('/update-product/{id}', [ProductController::class, 'productUpdate'])->name('productupdate');
    Route::post('/update-product-status', [ProductController::class, 'productStatus'])->name('changestatus');

    Route::get('/product-delete/{id}', [ProductController::class, 'productDelete'])->name('productdelete');
    Route::get('/sub-cat-by-category', [ProductController::class, 'subCatByCategory'])->name('subcatbycategory');

    Route::get('/product-gallery/{id}', [ProductController::class, 'productGallery'])->name('productgallery');

    Route::post('/save-product-gallery', [ProductController::class, 'saveProductGallery'])->name('saveproductgallery');

    Route::post("/get-product-gallery", [ProductController::class, 'getProductGallery'])->name('getproductgalleryimage');

    Route::post('/delete-product-gallery', [ProductController::class, 'deleteProductGallery'])->name('deleteproductgallery');


    //Blog Routes
    Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
    Route::get('/add-blog', [BlogController::class, 'blogAdd'])->name('blogAdd');
    Route::get('/edit-blog/{id}', [BlogController::class, 'blogEdit'])->name('blogEdit');
    Route::post('/save-blog', [BlogController::class, 'blogSave'])->name('saveblog');
    Route::post('/update-blog', [BlogController::class, 'blogUpdate'])->name('updateblog');
    Route::get('/delete-blog/{id}', [BlogController::class, 'blogDelete'])->name('deleteblog');

    //Enquiries Routes
    Route::get('/contact-enquiries', [EnquiriesController::class, 'contactEnquiries'])->name('contactEnquiries');
    Route::get('/delete-contact-enquiries/{id}', [EnquiriesController::class, 'deleteContactEnquiries'])->name('deletecontact');
    Route::get('/product-enquiries', [EnquiriesController::class, 'productEnquiries'])->name('productEnquiries');
    Route::get('/subscriber', [EnquiriesController::class, 'subscriber'])->name('subscriber');
    Route::get('/leadenquiries', [EnquiriesController::class, 'leadenquiries'])->name('leadenquiries');
    Route::get('/delete-leadenquiry/{id}', [EnquiriesController::class, 'deleteLeadenquiry'])->name('deleteleadenquiry');

    //Reviews Routes
    Route::get('/reviews', [ReviewsController::class, 'index'])->name('reviews');
    Route::get('/reviews-add', [ReviewsController::class, 'reviewsAdd'])->name('reviewsAdd');
    Route::get('/reviews-edit/{id}', [ReviewsController::class, 'reviewsEdit'])->name('reviewsEdit');
    Route::get('/reviews-delete/{id}', [ReviewsController::class, 'reviewsDelete'])->name('reviewsdelete');
    Route::POST('/save-review', [ReviewsController::class, 'saveReview'])->name('savereview');
    Route::put('/update-review/{id}', [ReviewsController::class, 'updateReview'])->name('updatereview');




    // Gallery Routes
    Route::get("/galleries", [DashboardController::class, 'Gallery'])->name('galleries');
    Route::post("/save-gallery", [DashboardController::class, 'saveGallery'])->name('savegallery');
    Route::get("/get-gallery", [DashboardController::class, 'getGallery'])->name('getgalleryimage');
    Route::post('/delete-gallery', [DashboardController::class, 'deleteGallery'])->name('deletegallery');

    Route::post('/change-popup-image', [DashboardController::class, 'changePopupImage'])->name('changepopupimage');

    // Video Routes
    Route::get("/videos", [DashboardController::class, 'Video'])->name('videos');
    Route::post("/save-video", [DashboardController::class, 'saveVideo'])->name('savevideo');
    Route::get("/delete-video/{id}", [DashboardController::class, 'deleteVideo'])->name('videodelete');

    // Video Category Routes
    Route::get("/video-category", [DashboardController::class, 'videoCategory'])->name('videocategory');
    Route::post("/save-video-category", [DashboardController::class, 'saveVideoCategory'])->name('saveVideoCategory');
    Route::get("/delete-video-category/{id}", [DashboardController::class, 'deleteVideoCategory'])->name('videocategorydelete');


    // Brand Routes
    Route::get("/admin-brands", [DashboardController::class, 'Brand'])->name('adminbrands');
    Route::post("/save-brand", [DashboardController::class, 'saveBrand'])->name('savebrand');
    Route::get("/get-brand", [DashboardController::class, 'getBrand'])->name('getbrandimage');
    Route::post('/delete-brand', [DashboardController::class, 'deleteBrand'])->name('deletebrand');

    // Faq Routes
    Route::get("/admin-faq", [FaqController::class, 'index'])->name('faq');
    Route::post("/save-faq", [FaqController::class, 'saveFaq'])->name('savefaq');
    Route::get("/edit-faq/{id}", [FaqController::class, 'editFaq'])->name('editfaq');
    Route::put("/update-faq/{id}", [FaqController::class, 'updateFaq'])->name('updatefaq');
    Route::get('/delete-faq/{id}', [FaqController::class, 'deleteFaq'])->name('deletefaq');

    Route::get('/orders', [OrderController::class, 'odersDetail'])->name('orders');
    Route::get('/order/{id}', [OrderController::class, 'singleOrderDetails'])->name('order');

    //Announcement
    Route::post('/save-announcement', [DashboardController::class, 'saveAnnouncement'])->name('saveannouncement');

    //subscribe
    Route::get('/delete-subscribe-email/{id}', [EnquiriesController::class, 'deleteSubscribeEmail'])->name('deletesubscribe');
});

Auth::routes();
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
