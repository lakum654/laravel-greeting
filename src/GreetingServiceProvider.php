<?php

namespace SevenTS\Greeting;

use Illuminate\Support\ServiceProvider;
use SevenTS\DateFormat\DateFormat;

class GreetingServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        // Publish migrations
        $this->publishes([
            __DIR__ . '/database/migrations' => database_path('migrations')
        ], 'migrations');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Bind 'greeting' to Greeting class
        $this->app->bind('greeting', function () {
            return new Greeting();
        });

        // Bind 'dateformat' to DateFormat class
        $this->app->bind('dateformat', function () {
            return new DateFormat();
        });
    }
}
