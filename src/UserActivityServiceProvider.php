<?php

namespace Abhimanyu\Hive;

use Illuminate\Support\ServiceProvider;
use Abhimanyu\Hive\Services\ActivityLogger;


class UserActivityServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        // Publish configuration
        $this->publishes([
            __DIR__.'/../config/user_activity.php' => config_path('user_activity.php'),
        ], 'config');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        // Load views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'hive');
    }

    public function register()
    {
        $this->app->singleton(ActivityLogger::class, function ($app) {
            return new ActivityLogger();
        });
        $this->mergeConfigFrom(__DIR__.'/../config/user_activity.php', 'user_activity');
    }
}
