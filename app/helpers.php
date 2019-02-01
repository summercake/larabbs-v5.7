<?php
/**
 * Created by PhpStorm.
 * User: jack
 * Date: 2019-01-31
 * Time: 21:31
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}
