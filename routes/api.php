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

Route::group(['prefix' => 'v1', 'namespace' => 'V1'], function() {
    Route::get('login/{email?}/{password?}/{fcm?}', [App\Http\Controllers\Api\AuthController::class, 'login']);
    Route::post('register', [App\Http\Controllers\Api\AuthController::class, 'register']);
    Route::get('sewa', [App\Http\Controllers\Api\AuthController::class, 'jadwal']);
    Route::get('sewaku/{email?}', [App\Http\Controllers\Api\AuthController::class, 'jadwal_ku']);
    Route::post('buat/{email?}', [App\Http\Controllers\Api\AuthController::class, 'add_jadwal']);
    Route::get('jadwal/{id?}', [App\Http\Controllers\Api\AuthController::class, 'detail_jadwal']);
    Route::get('alamat', [App\Http\Controllers\Api\AuthController::class, 'alamat']);
    Route::post('struk/{id?}', [App\Http\Controllers\Api\AuthController::class, 'upload_struk']);
    Route::post('profil/update', [App\Http\Controllers\Api\AuthController::class, 'update_profil']);
    Route::post('password/update', [App\Http\Controllers\Api\AuthController::class, 'update_password']);
});
