<?php


namespace App\Providers;


use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class FrontendServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $categories = Category::where('top', 1)->with('subcategories.subsubcategories')->get()->take(10);
            $view->with([
                'categories' => $categories,
            ]);
        });
    }
}