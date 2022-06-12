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
Route::get('/branches/{{name}}', [RouteController::class, 'branch']);

// Route::get('/about', [RouteController::class, 'about']);
// Route::get('/services', [RouteController::class, 'services']);
// Route::get('/events', [RouteController::class, 'events']);
// Route::get('/gallery', [RouteController::class, 'gallery']);
