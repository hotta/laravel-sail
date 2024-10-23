<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function() {
    return view('home');
});
Route::get('/phpinfo', function() {
    xdebug_info();
    phpinfo();
});
