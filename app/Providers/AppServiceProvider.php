<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        view::composer('*', function($view) {
            $site = (object)[];
            // customer contact
            $site->customer_contact = 9876543210;
            $site->customer_email = "mail@christmastree.com";
            $site->ofc_address = "test address";

            $site->fb_link = "#";
            $site->ig_link = "#";
            $site->pt_link = "#";
            $site->tw_link = "#";

            view()->share('site', $site);
        });
    }
}
