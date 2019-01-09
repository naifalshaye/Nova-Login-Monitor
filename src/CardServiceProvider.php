<?php

namespace Naif\NovaLoginMonitor;

use Illuminate\Support\Facades\Config;
use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class CardServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->booted(function () {
            $this->routes();
        });

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/nova-login-monitor.php' => base_path('config/nova-login-monitor.php'),
            ], 'config');
        }

        Nova::serving(function (ServingNova $event) {
            Nova::script('nova-login-monitor', __DIR__.'/../dist/js/card.js');
            Nova::style('nova-login-monitor', __DIR__.'/../dist/css/card.css');
        });

    }

    /**
     * Register the card's routes.
     *
     * @return void
     */
    protected function routes()
    {
        if ($this->app->routesAreCached()) {
            return;
        }

        Route::middleware(['nova'])
                ->prefix('nova-vendor/nova-login-monitor')
                ->group(__DIR__.'/../routes/api.php');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/nova-login-monitor.php', 'nova-login-monitor');
    }
}
