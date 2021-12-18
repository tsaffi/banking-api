<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CustomerController;

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

Route::middleware('auth:api')->get('/demo-url',  function  (Request $request)  {
    return response()->json(['Laravel 8 CORS Demo']);
});

Route::group([
    // 'prefix' => '/banking/',
    // 'middleware' => ['json.response']
    ], function () {

    // Registration & Authentication
    Route::post('/register', [RegisterController::class, 'register']);
    Route::post('/login', [LoginController::class, 'login']);

});

Route::group([
    // 'prefix' => '/banking/',
    'middleware' => ['auth:api']
    ], function () {

    Route::post('/logout', [LoginController::class, 'logout']);

    // Account
    Route::post('/accounts/create', [AccountController::class, 'create']);
    Route::get('/accounts/history/{uuid}', [AccountController::class, 'history']);
    Route::get('/accounts/balance/{uuid}', [AccountController::class, 'balance']);
    Route::post('/accounts/funds/transfer', [AccountController::class, 'fundsTransfer']);

    // Customer
    Route::post('/customers/register', [CustomerController::class, 'register']);


});