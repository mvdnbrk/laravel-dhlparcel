<?php

namespace Mvdnbrk\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

class DhlParcel extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'dhlparcel.adapter';
    }
}
