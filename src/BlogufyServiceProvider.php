<?php
namespace PySosu\Blogufy;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class BlogufyServiceProvider extends ServiceProvider
{
    
    public function register()
    {
        
    }

    public function boot()
    {
        // migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        // configurations
        if($this->app->runningInConsole()){
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('blogufy.php')
            ]);
        }

        // routes
        $this->registerRoutes();
        
    }

    protected function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function(){
            $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        });
    }

    protected function routeConfiguration()
    {
        return [
            'prefix' => config('blogufy.prefix'),
            'middleware' => config('blogufy.middleware')
        ];
    }

    
}