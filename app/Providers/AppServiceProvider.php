<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // This code is a "Global Override" that forces your Laravel application to ignore SSL certificate errors for all HTTP requests made using Guzzle.
        $this->app->bind(\GuzzleHttp\Client::class, function () {
            return new \GuzzleHttp\Client([
                'verify' => false,
            ]);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
    }

}
