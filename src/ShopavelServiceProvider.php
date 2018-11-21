<?php

namespace Fireapps\Shopavel;

use Illuminate\Support\ServiceProvider;

class ShopavelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Fireapps\Shopavel\Controllers\AppsController');
        $this->loadViewsFrom(__DIR__.'/views', 'shopavel');
    }
}
