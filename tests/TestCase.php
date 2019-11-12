<?php

namespace Mvdnbrk\DhlParcel\Tests;

use Mvdnbrk\DhlParcel\DhlParcelServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('dhlparcel.id', '123456');
        $app['config']->set('dhlparcel.secret', 'DHLPARCEL_SECRET_TOKEN');
    }

    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            DhlParcelServiceProvider::class,
        ];
    }
}
