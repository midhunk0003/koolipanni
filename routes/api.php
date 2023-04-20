<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\HomeController;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('/registeruser',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);
Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::post('/home', [HomeController::class, 'home']);
    Route::get('/workerdetailpage/{id?}', [HomeController::class, 'workerdetailpage']);
    Route::post('/insertviewcount', [HomeController::class, 'insertviewcount']);
});
