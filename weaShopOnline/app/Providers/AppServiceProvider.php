<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//brand
use App\Repositories\Brand\BrandInterface;
use App\Repositories\Brand\BrandRepository;
//slide
use App\Repositories\Slide\SlideInterface;
use App\Repositories\Slide\SlideRepository;
//category
use App\Repositories\Category\CategoryInterface;
use App\Repositories\Category\CategoryRepository;
//product
use App\Repositories\Product\ProductInterface;
use App\Repositories\Product\ProductRepository;
//user
use App\Repositories\User\UserInterface;
use App\Repositories\User\UserRepository;
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
        $this->app->bind(
            CategoryInterface::class,
            CategoryRepository::class
        );
        $this->app->bind(
            ProductInterface::class,
            ProductRepository::class
		);
        $this->app->bind(
            UserInterface::class,
            UserRepository::class
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
