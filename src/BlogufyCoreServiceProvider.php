<?php
namespace Blogufy\Core;

use Blogufy\Core\Interfaces\Crudable;
use Blogufy\Core\Repositories\ArticleRepository;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class BlogufyCoreServiceProvider extends ServiceProvider
{
    
    public function register()
    {
        // $this->app->bind(Crudable::class, ArticleRepository::class);
    }

    public function boot()
    {
        // migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        // configurations
        if($this->app->runningInConsole()){
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('blogufy_core.php')
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
            'prefix' => config('blogufy_core.prefix'),
            'middleware' => config('blogufy_core.middleware')
        ];
    }

    
}