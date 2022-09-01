<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarListController;
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
//Index 
Route::get('/', [CarListController::class, 'index']);

Route::post('/saveItemRoute', [CarListController::class, 'saveItem'])->name('saveItem');

Route::post('/bookCompleteRoute/{id}', [CarListController::class, 'bookComplete'])->name('bookComplete');

Route::post('/colorChangeRoute/{id}', [CarListController::class, 'colorChange'])->name('colorChange');
