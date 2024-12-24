<?php

namespace Abhimanyu\Hive;

use Illuminate\Support\ServiceProvider;
use Abhimanyu\Hive\Services\ActivityLogger;

class UserActivityServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(ActivityLogger::class, function ($app) {
            return new ActivityLogger();
        });
    }

  
    public function boot()
    {
        // Load the routes from the custom routes file
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        
        // Load the views from the package
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'user_activity');
    }
}
