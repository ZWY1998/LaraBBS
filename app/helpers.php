<?php


namespace App;


use Illuminate\Support\Facades\Route;

class helpers
{
    function route_class()
    {
        return str_replace('.', '-', Route::currentRouteName());
    }


}
