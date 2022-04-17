<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\FooterModel;
use App\CategoryModel;
use Illuminate\Support\Facades\View;
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
        $categorys = CategoryModel::take(4)->get();
        view::share('categorys',$categorys);

        $footer = FooterModel::first();
        view::share('footer',$footer);
    }
}
