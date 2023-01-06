<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\SoalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use League\OAuth2\Server\Grant\AuthCodeGrant;

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

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::apiResource('pelanggans', PelangganController::class);

Route::apiResource('customers', CustomerController::class);

Route::apiResource('films', FilmController::class);

Route::apiResource('soals', SoalController::class);