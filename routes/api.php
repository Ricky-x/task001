<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customersController;
use App\Http\Controllers\ordersController;
use App\Http\Controllers\itemsController;
use App\Http\Controllers\deliveryController;

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

Route::group(['prefix' => 'customers'], function () {
    Route::get('/', [customersController::class, 'index']);
    Route::get('/{id}', [customersController::class, 'show']);
    Route::post('/', [customersController::class, 'store']);
    Route::put('/{id}', [customersController::class, 'update']);
    Route::delete('/{id}', [customersController::class, 'destroy']);
});


Route::group(['prefix' => 'orders'], function () {
    Route::get('/', [ordersController::class, 'index']);
    Route::get('/{id}', [ordersController::class, 'show']);
    Route::post('/', [ordersController::class, 'store']);
    Route::put('/{id}', [ordersController::class, 'update']);
    Route::delete('/{id}', [ordersController::class, 'destroy']);
});


Route::group(['prefix' => 'items'], function () {
    Route::get('/', [itemsController::class, 'index']);
    Route::get('/{id}', [itemsController::class, 'show']);
    Route::post('/', [itemsController::class, 'store']);
    Route::put('/{id}', [itemsController::class, 'update']);
    Route::delete('/{id}', [itemsController::class, 'destroy']);
});


Route::group(['prefix' => 'delivery'], function () {
    Route::get('/', [deliveryController::class, 'index']);
    Route::get('/{id}', [deliveryController::class, 'show']);
    Route::post('/', [deliveryController::class, 'store']);
    Route::put('/{id}', [deliveryController::class, 'update']);
    Route::delete('/{id}', [deliveryController::class, 'destroy']);
});