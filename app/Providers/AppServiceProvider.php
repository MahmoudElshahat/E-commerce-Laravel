<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
###################
use Illuminate\Support\Facades\Blade;
// use Illuminate\Support\ServiceProvider;


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
        //##################################
        // View::composer('sidebar', function ($view) {
        //     $counts = Cache::remember('counts', 3600, function() {
        //         return [ 'tools_1' => Tools1::count(), 'users' => language::count() ];
        //     });
        
        //     return $view->with('counts', $counts);
        // });
        
        // Blade::withoutDoubleEncoding();

        // ##################################
        
    }
}
