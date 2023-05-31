<?php

namespace App\Providers;

use App\Models\Departemen;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
        // Schema::defaultStringLength(191);
        // View::composer('auth.register', function ($view) {
        //     $departemen = Departemen::all();
        //     $view->with('departemen', $departemen);
        // });
        
        Schema::defaultStringLength(191);
        view()->composer('auth.register', function ($view) {
            $departemen = Departemen::all();
            $view->with('departemen', $departemen);
        });

    }
}
