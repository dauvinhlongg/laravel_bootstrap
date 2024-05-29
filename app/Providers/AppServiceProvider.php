<?php

namespace App\Providers;

use App\Models\Cart;
use Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
       

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        view()->composer("*", function ($view) {
            if(!Auth::user()) {
                $view->with('countcartshare', 0);
            } else {
                $view->with('countcartshare', Cart::where('user_id', Auth::user()->id)->count());
            }
        });
    }
}
