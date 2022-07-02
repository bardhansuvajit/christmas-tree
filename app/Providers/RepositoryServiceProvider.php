<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Interfaces\BannerInterface;

use App\Repositories\BannerRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BannerInterface::class, BannerRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
