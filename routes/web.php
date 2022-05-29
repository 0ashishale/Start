<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [RouteController::class, 'home']);
Route::get('/master', function(){
    return view('layouts.master');
});
Route::get('/about_us', function(){
    return view('about');
});

Route::get('/services', [RouteController::class, 'services']);
Route::get('/reservation', [RouteController::class, 'reservation']);


// Route::get('/about', [RouteController::class, 'about']);
// Route::get('/services', [RouteController::class, 'services']);
// Route::get('/events', [RouteController::class, 'events']);
// Route::get('/gallery', [RouteController::class, 'gallery']);
