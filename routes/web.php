<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;










Route::get('/', [RouteController::class, 'home']);
Route::get('/about', [RouteController::class, 'about']);
Route::get('/contact', [RouteController::class, 'contact']);
Route::get('/services', [RouteController::class, 'services']);
Route::get('/reservation', [RouteController::class, 'reservation']);
Route::get('/events', [RouteController::class, 'events']);
Route::get('/gallery', [RouteController::class, 'gallery']);
Route::get('/branches', [RouteController::class, 'branches']);
Route::get('/branches/branch1', [RouteController::class, 'branch1']);
Route::get('/branches/branch2', [RouteController::class, 'branch2']);
Route::get('/branches/branch3', [RouteController::class, 'branch3']);


// Route::get('/about', [RouteController::class, 'about']);
// Route::get('/services', [RouteController::class, 'services']);
// Route::get('/events', [RouteController::class, 'events']);
// Route::get('/gallery', [RouteController::class, 'gallery']);
