<?php

namespace Hd\Test;

use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
       if (! $this->app->routesAreCached()) {
         require __DIR__.'/routes.php';
       }

        $this->loadViewsFrom(__DIR__.'/views', 'test');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
       $this->app['test'] = $this->app->share(function($app){

         return new TEST;

       });
    }
}
