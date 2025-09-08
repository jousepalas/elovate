<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ProductTranslationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(\App\Services\ProductTranslationService::class, function ($app) {
            return new \App\Services\ProductTranslationService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
