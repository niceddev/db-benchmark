<?php

namespace App\Providers;

use App\Services\BarcodeService;
use App\Services\QrService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(BarcodeService::class, function () {
            return new BarcodeService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->singleton(QrService::class, function () {
            return new QrService();
        });
    }
}
