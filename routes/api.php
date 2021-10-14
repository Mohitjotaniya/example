<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\userloginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\AddtocartController;
use App\Http\Controllers\CartviewController;
use App\Http\Controllers\OrderController;











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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => 'auth:sanctum'], function(){
    //All secure URL's
    Route::get('/userProfile', [ApiController::class, 'userProfile']);
    Route::post('/update/{u_id}', [ApiController::class, 'update']);

Route::get('/product', [AddtocartController::class, 'apishow']);
Route::post('/addtocart', [AddtocartController::class, 'addtocart']);
Route::get('/cartview/{u_id}', [CartviewController::class, 'cartview']);
Route::get('/logout', [ApiController::class, 'logout']);

Route::post('/cartdelete', [CartviewController::class, 'cartdelete']);

Route::post('/order', [OrderController::class, 'order']);
Route::get('/logout', [SigninController::class, 'logout']);


    });

Route::post('/login', [SigninController::class, 'login']);

Route::post('/register', [SigninController::class, 'register']);





