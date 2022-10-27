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

Route::resource('enterprises', App\Http\Controllers\Api\EnterpriseController::class);
Route::resource('states', App\Http\Controllers\Api\StateController::class);
Route::get('cities/{state}', [App\Http\Controllers\Api\CityController::class, 'index']);