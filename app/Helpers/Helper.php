<?php

if (!function_exists('get_current_currency')) {
    function get_current_currency()
    {
        return trans(config('app.region_currency_array')[request()->cookie('region')]);
    }
}
