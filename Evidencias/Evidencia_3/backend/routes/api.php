<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\v1\OrderApiController;
use App\Http\Controllers\Api\v1\WorkersApiController;
use App\Http\Controllers\Api\v1\CustomersApiController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function () {
    Route::apiResource('/orders', OrderApiController::class);
    Route::apiResource('/workers', WorkersApiController::class);
    Route::apiResource('/customers', CustomersApiController::class);

});

Route::get('test', function () {
    return response([1,2,3,4], 200);
});

//Route::post('login', [AuthController::class, 'login']);
