<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Brand\BrandInterface;
use App\Repositories\Brand\BrandRepository;
use App\Repositories\Order\OrderInterface;
use App\Repositories\Order\OrderRepository;

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
            OrderInterface::class,
            OrderRepository::class
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
