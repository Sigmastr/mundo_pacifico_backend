<?php

use App\Http\Controllers\calleController;
use App\Http\Controllers\ciudadController;
use App\Http\Controllers\regionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('/regiones')->group(function () {

    Route::get('/get/{id}', [regionController::class, 'mostrarRegion']);
});
Route::prefix('/provincia')->group(function () {

    Route::get('/get/{id}', [regionController::class, 'mostrarRegion']);
});

Route::prefix('/ciudad')->group(function () {

    Route::get('/get/{id}', [ciudadController::class, 'mostrarCiudad']);
});

Route::prefix('/calle')->group(function () {

    Route::get('/get/{id}', [calleController::class, 'mostrarCalle']);
});
