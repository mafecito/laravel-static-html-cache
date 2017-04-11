<?php

namespace MScharl\LaravelStaticHtmlCache\Provider;

use Illuminate\Support\ServiceProvider;
use MScharl\LaravelStaticHtmlCache\Classes\HtmlProxy;
use MScharl\LaravelStaticHtmlCache\Commands\ClearStaticCache;

class LaravelStaticHtmlCacheProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../config/static-html-cache.php' => config_path('static-html-cache.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/static-html-cache.php', 'static-html-cache');

        $this->commands([
            ClearStaticCache::class,
        ]);
    }

    public function provides()
    {
        return [
            'static-html-cache'
        ];
    }
}
