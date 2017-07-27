<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        view()->composer('layouts/sidebar-properties', function($view){
            $properties = \App\Property::take(5)->get();
            // $view->with('properties', \App\Property::latest()->get());
            $view->with(compact('properties'));
        });
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
