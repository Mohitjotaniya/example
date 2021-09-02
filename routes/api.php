<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\userloginController;
use App\Http\Controllers\productController;








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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [apiController::class, 'login']);
Route::post('/register', [apiController::class, 'register']);
Route::get('/userProfile', [apiController::class, 'userProfile']);

Route::get('/product', [productController::class, 'show']);


