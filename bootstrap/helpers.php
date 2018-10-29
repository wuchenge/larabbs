<?php

/**
 * @Author: wuchenge
 * @Date: 2018-10-29 13:29:48
 */

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}
