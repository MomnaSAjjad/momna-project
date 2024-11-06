<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
use App\Integrations\Stripe;
use App\Interface\BillableInterface;
use App\Models\Subscription;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BillableInterface::class, Stripe::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       //Pass users info to all views
        view()->composer('*', function($view) {
            $view->with('user_data', auth()->user());
        });
    }
}
