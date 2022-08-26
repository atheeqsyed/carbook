<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('abc', [\App\Http\Controllers\CarListController::class, 'getXyz']);

Route::post('bookcar1', [\App\Http\Controllers\CarListController::class, 'bookComplete1']);



Route::get('getcarslist', [\App\Http\Controllers\CarListController::class, 'getCarsList']);
