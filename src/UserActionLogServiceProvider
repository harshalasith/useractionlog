<?php

namespace Sprii\UserActionLog;

use Illuminate\Support\ServiceProvider;
use Sprii\UserActionLog\Console\Commands\Purge;

class UserActionLogServiceProvider extends ServiceProvider
{

    public function __construct($app)
    {
        $this->app = $app;
    }


    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }


    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        if ($this->app->runningInConsole()) {
            $this->commands([
                Purge::class,
            ]);
        }
    }

}
