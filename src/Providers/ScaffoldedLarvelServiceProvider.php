<?php

namespace KhantNyar\ScaffoldedLaravel\Providers;

// namespace khantnyar\scaffolded-laravel\Providers;


use Illuminate\Support\ServiceProvider;

class ScaffoldedLarvelServiceProvider extends ServiceProvider
{
    protected $vendorName = 'khantnyar';
    protected $packageName = 'Scaffolded-laravel';
    /**
     * Register services.
     */
    public function register(): void
    {
        // $this->publishes([
        //     __DIR__ . '/../config/courier.php' => config_path('scaffolded-laravel.php'),
        //     __DIR__ . '/../lang' => $this->app->langPath('vendor/courier'),
        // ]);
        // $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        // $this->loadRoutesFrom(__DIR__ . '/../routes/api.php');
        // $this->loadViewsFrom(__DIR__ . '/../resources/views', 'courier');
        // $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        // $this->loadTranslationsFrom(__DIR__ . '/../lang', 'courier');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        include __DIR__ . '/../routes/api.php';
    }
}
