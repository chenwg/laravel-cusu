<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Model\Common\Cate;
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //View::share(['cate'=>self::getCate()]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}
