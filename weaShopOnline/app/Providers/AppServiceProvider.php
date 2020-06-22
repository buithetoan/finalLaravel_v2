<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Brand\BrandInterface;
use App\Repositories\Brand\BrandRepository;
use App\Repositories\Slide\SlideInterface;
use App\Repositories\Slide\SlideRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            BrandInterface::class,
            BrandRepository::class
        );
        $this->app->bind(
            SlideInterface::class,
            SlideRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
