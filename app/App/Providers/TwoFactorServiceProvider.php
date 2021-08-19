<?php

namespace CreatyDev\App\Providers;

use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;
use CreatyDev\App\TwoFactor\Authy;
use CreatyDev\App\TwoFactor\TwoFactor;

class TwoFactorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(TwoFactor::class, function () {
            return new Authy(new Client);
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
