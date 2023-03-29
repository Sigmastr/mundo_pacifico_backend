<?php

use App\Http\Controllers\calleController;
use App\Http\Controllers\ciudadController;
use App\Http\Controllers\provinciaController;
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

Route::prefix('/region')->group(function () {

    Route::get('/get', [regionController::class, 'mostrarRegion']);
});
Route::prefix('/provincia')->group(function () {

    Route::get('/get/{id}', [provinciaController::class, 'mostrarProvincia']);
    Route::get('/get_calles/{id}', [provinciaController::class, 'mostrarProvinciasCalles']);
});

Route::prefix('/ciudad')->group(function () {

    Route::get('/get/{id}', [ciudadController::class, 'mostrarCiudad']);
});

Route::prefix('/calle')->group(function () {

    Route::get('/get/{id}', [calleController::class, 'mostrarCalle']);
    Route::post('/conditional', [calleController::class, 'mostrarTodasCalles']);
});
