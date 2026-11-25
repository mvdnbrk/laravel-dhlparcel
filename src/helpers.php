<?php

use Mvdnbrk\Laravel\DhlParcelClientAdapter;

if (! function_exists('dhlparcel')) {
    function dhlparcel(): DhlParcelClientAdapter
    {
        return app('dhlparcel.adapter');
    }
}
