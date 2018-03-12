<?php

namespace se\eab\php\laravel\middleware\ssl\provider;

use Illuminate\Support\ServiceProvider;

class EabSslServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        
        $this->publishes([
            __DIR__.'SslMiddleware.php' => app_path("Http/Middleware/EabSslMiddleware.php")
        ]);
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
