<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\bookController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\viewbookController;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\signinController;
use App\Http\Controllers\usermanagementController;






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Frontend Root
Route::get('/', [frontendController::class, 'index']);
Route::resource('user_register', signinController::class);
Route::post('/register', [signinController::class, 'store']);
Route::get('/user_man', [usermanagementController::class, 'index']);
Route::get('/user_man_view', [usermanagementController::class, 'show']);
Route::get('u_delete/{u_id}',[usermanagementController::class, 'destroy']);
Route::get('u_Edit/{u_id}',[usermanagementController::class, 'edit']);




//Route::get('/user_register', [signinController::class, 'index']);







//Admin Root
Route::get('/Admin/Deshbord', [adminController::class, 'index']);
Route::get('/Admin', [loginController::class, 'index']);
Route::resource('book', bookController::class);
Route::get('delete/{book_id}',[bookController::class, 'destroy']);
Route::get('Editbook/{book_id}',[bookController::class, 'edit']);
Route::post('Updatebook/{book_id}',[bookController::class, 'update']);
Route::post('/login', [loginController::class, 'checklogin']);
Route::get('/logout', [loginController::class, 'logout']);
Route::get('/change_password', [loginController::class, 'change_password']);
Route::post('/update_password', [loginController::class, 'update_password']);	
Route::get('/view_book_page', [viewbookController::class, 'show']);
Route::get('images/{filename}', [viewbookController::class,'getPubliclyStorgeFile'])->name('images.displayImage');
Route::resource('/viewbook', viewbookController::class);



