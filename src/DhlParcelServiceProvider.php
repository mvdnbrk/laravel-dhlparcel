<?php

namespace Mvdnbrk\Laravel;

use Illuminate\Support\ServiceProvider;

class DhlParcelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/dhlparcel.php', 'dhlparcel');
    }
}
