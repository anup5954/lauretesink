<?php

namespace App\Providers;

use App\Models\Admin\Banner;
use App\Models\Category;
use App\Models\StaticPage;
use App\Models\SubCategory;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        view()->composer('layouts.front-include.banner', function ($view) {
            $banners = Banner::orderBy('id', 'DESC')->get();
            $view->with(['banners' => $banners]);
        });

        view()->composer('layouts.front-include.header', function ($view) {
            $categories = Category::where('status', 1)->get();
            $i = 0;
            foreach ($categories as $category) {
                $categories[$i]->subcategories = SubCategory::where(['category_id' => $category->id, 'status' => 1])->get();
                $i++;
            }
            $annouData = StaticPage::where('id', 1)->where('category', 'Announcement')->first();
            $view->with(['categories' => $categories, 'annouData' => $annouData]);
        });
        view()->composer('layouts.front-include.header', function ($view) {
            $popupimage = StaticPage::where('category', 'popup')->first();
            $view->with(['popupimage' => $popupimage]);
        });

        view()->composer('layouts.front-include.footer', function ($view) {
            $categories = Category::where('status', 1)->get();
            $view->with(['categories' => $categories]);
        });
    }
}
