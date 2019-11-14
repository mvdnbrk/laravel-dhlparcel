<?php

if (! function_exists('dhlparcel')) {
    function dhlparcel()
    {
        return app('dhlparcel.adapter');
    }
}
