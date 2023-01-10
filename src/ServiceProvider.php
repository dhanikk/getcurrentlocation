<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\Services\GetCurrentLocation;
class ServiceProvider extends IlluminateServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('get_current_location', function($app){//
            return new GetCurrentLocation($app);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('get_current_location', function($app){
            return new GetCurrentLocation($app);
        });
    }
}
