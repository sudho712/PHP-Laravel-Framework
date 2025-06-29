<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/* Route::get('/demo' ,function(){
    echo "test laravel";
});

Route::get('/dem' ,function(){
    echo "test laravel";
});

 */

 Route::get('/demo',function(){
    return view('demo');
 });