<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

/* Route::get('/{name}', function ($name){
    return view('home');
});
 */
Route:get('/user-form', function(){
    return view('user-from');
});
/* Route::view('user-form', 'user-form'); */
