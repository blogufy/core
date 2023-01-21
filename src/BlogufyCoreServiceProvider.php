<?php
namespace Blogufy\Core;

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
        
    }

    protected function routeConfiguration()
    {
        return [
            'prefix' => config('blogufy_core.prefix'),
            'middleware' => config('blogufy_core.middleware')
        ];
    }

    
}