<?php

namespace App\Providers;

use Helium\ApiWrapper\ApiWrapper;
use Illuminate\Support\ServiceProvider;

class BungieServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        ApiWrapper::load(base_path('routes/bungie.php'));
    }
}
