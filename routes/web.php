<?php
use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

use App\Http\Controllers\RegController;

/* Route::get('/register',[RegController::class,'index']); */
Route::get('/formcd', [RegController::class, 'index']);

