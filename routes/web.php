<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ViewbookController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\UsermanagementController;
use App\Http\Controllers\UserloginController;
use App\Http\Controllers\BookviewController;
use App\Http\Controllers\AddtocartController;
use App\Http\Controllers\CartviewController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BoderhisController;
use App\Http\Controllers\ReturnedbookController;
use App\Http\Controllers\DateuserController;

















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

// Auth::routes();
// Route::post('/login/writer', 'Auth\LoginController@writerLogin');



//Frontend Root(user side)
Route::get('/', [FrontendController::class, 'index']);
Route::resource('user_register', SigninController::class);
Route::resource('user_login', UserloginController::class);
Route::post('/u_login', [UserloginController::class, 'checklogin']);
Route::get('/u_login', [UserloginController::class, 'checklogin']);
Route::get('/u_logout', [UserloginController::class, 'logout']);
Route::get('/u_profile', [UserloginController::class, 'edit']);
Route::post('/Update_u_profile',[UserloginController::class, 'update']);
Route::get('/u_change_password', [UserloginController::class, 'u_change_password']);
Route::post('/u_update_password', [UserloginController::class, 'u_update_password']);


//Frontend Root(book side)
Route::get('/book_view', [BookviewController::class, 'index']);
Route::resource('/cart', AddtocartController::class);
Route::get('/cart', [AddtocartController::class, 'show']);
Route::get('/cartview', [CartviewController::class, 'index']);
Route::get('cartdelete/{c_id}',[CartviewController::class, 'destroy']);

//Frontend Root(oder side)
Route::resource('/order', OrderController::class);
Route::get('/user_oder_view', [OrderController::class, 'show']);
Route::get('/pdf_d', [OrderController::class, 'pdf']);

Route::post('/oder_add', [OrderController::class, 'store']);

Route::get('/excel', [BoderhisController::class, 'excel']);
Route::get('/exceldate', [BoderhisController::class, 'exceldate']);


Route::get('/r_book', [BoderhisController::class, 'returnedbook']);
// Route::post('/r_book_up', [boderhisController::class, 'update']);
 Route::get('Editrbook/{o_id}',[BoderhisController::class, 'edit']);
Route::post('Update_r/{o_id}',[BoderhisController::class, 'update']);
// Route::post('Update_r/{o_id}',[boderhisController::class, 'update']);


// Route::resource('/r_book_mang',returnedbookController::class);
// Route::get('/r_s', [returnedbookController::class, 'show']);


















//Frontend Root(user register side)
Route::post('/register', [SigninController::class, 'store']);
Route::get('/user_man', [UsermanagementController::class, 'index']);
Route::get('/user_man_view', [UsermanagementController::class, 'show']);
Route::get('u_delete/{u_id}',[UsermanagementController::class, 'destroy']);
Route::get('u_Edit/{u_id}',[UsermanagementController::class, 'edit']);
Route::post('Update_u/{u_id}',[UsermanagementController::class, 'update']);



//Admin Root
Route::get('/Admin/Deshbord', [AdminController::class, 'index']);
Route::get('/Admin', [LoginController::class, 'index']);
Route::resource('book', BookController::class);
Route::get('delete/{book_id}',[BookController::class, 'destroy']);
Route::get('Editbook/{book_id}',[BookController::class, 'edit']);
Route::post('Updatebook/{book_id}',[BookController::class, 'update']);
Route::post('/login', [LoginController::class, 'checklogin']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/change_password', [LoginController::class, 'change_password']);
Route::post('/update_password', [LoginController::class, 'update_password']);	
Route::get('/view_book_page', [ViewbookController::class, 'show']);
Route::get('images/{filename}', [ViewbookController::class,'getPubliclyStorgeFile'])->name('images.displayImage');
Route::resource('/viewbook', ViewbookController::class);


Route::resource('/b_book_o_h', BoderhisController::class);

// Route::resource('/date_user', dateuserController::class);
Route::get('/date_user', [DateuserController::class, 'index']);







