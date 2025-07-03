<?php
use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

use App\Http\Controllers\RegController;

/* Route::get('/register',[RegController::class,'index']); */
Route::get('/formcd', [RegController::class, 'index']);

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/course','course')->name('course');
Route::view('/job','job')->name('job');