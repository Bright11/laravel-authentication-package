<?php

// namespace App\Providers;

namespace Brightweb\Authentication;

use App\Models\User as Authenticatable;
use Brightweb\Authentication\Http\Middleware\AdminBrightauthMiddleware;
use Brightweb\Authentication\Http\Middleware\UserBrightauthMiddleware;
use Brightweb\Authentication\Models\User;
use Illuminate\Support\ServiceProvider;

class BrightAuthProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // linking my User model with laravel default model
        $this->app->bind(Authenticatable::class, User::class);


    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'brightauth');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');



        // adding middelware
        $router=$this->app['router'];
        $router->aliasMiddleWare('admin',AdminBrightauthMiddleware::class);
        $router->aliasMiddleWare('user',UserBrightauthMiddleware::class);


        // loading css
    $this->publishes([
             __DIR__.'/../public/authcss'=>public_path('bauthcss'),
        ],'authcss');



    }



}