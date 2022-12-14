<?php

use App\Http\Controllers\Auth\RegisterController;
use Laravel\Passport\Passport;
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

Route::prefix('auth')->namespace('auth')->group(function () {
    Route::post('register', [RegisterController::class, 'register']);
});

Passport::routes();