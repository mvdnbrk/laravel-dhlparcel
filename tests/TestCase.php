<?php

namespace Mvdnbrk\Laravel\Tests;

use Illuminate\Foundation\Application;
use Mvdnbrk\Laravel\DhlParcelServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    /**
     * Define environment setup.
     *
     * @param  Application  $app
     */
    protected function getEnvironmentSetUp($app): void
    {
        $app['config']->set('dhlparcel.id', '123456');
        $app['config']->set('dhlparcel.secret', 'DHLPARCEL_SECRET_TOKEN');
    }

    /**
     * Get package providers.
     *
     * @param  Application  $app
     * @return array<int, class-string>
     */
    protected function getPackageProviders($app): array
    {
        return [
            DhlParcelServiceProvider::class,
        ];
    }
}
