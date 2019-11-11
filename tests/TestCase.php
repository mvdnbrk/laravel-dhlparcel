<?php

namespace Mvdnbrk\DhlParcel\Tests;

use Mvdnbrk\DhlParcel\DhlParcelServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
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
