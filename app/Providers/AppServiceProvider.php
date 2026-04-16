<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL; 
use Illuminate\Support\Facades\Request; // Tambahkan ini

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
        // LOGIKA CERDAS:
        // 1. Jika URL mengandung 'devtunnels.ms' (Link HP), paksa HTTPS.
        // 2. Jika Production (Hosting Asli), paksa HTTPS.
        // 3. Jika Localhost biasa, BIARKAN HTTP (JANGAN DIPAKSA).
        
        if ($this->app->environment('production') || str_contains(request()->getHost(), 'devtunnels.ms')) {
            URL::forceScheme('https');
        }
    }
}