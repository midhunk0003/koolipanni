<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\WorkerdetailController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\LogoController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[LoginController::class,'loginview']);
Route::post('/login',[LoginController::class,'login']);


Route::get('/logoview',[LogoController::class,'index']);
Route::post('/store_logo',[LogoController::class,'store_logo']);
Route::get('/deletelogo/{id}',[LogoController::class,'deletelogo']);

Route::get('/addstate',[CategoryController::class,'addstate']);



Route::group(['middleware' => ['auth', 'web']], function () {
//changepassword///
    Route::get('/change_password',[ChangePasswordController::class,'index']);
    Route::post('/update_password',[ChangePasswordController::class,'update_password']);
//changepassword///

    Route::get('/logout',[LoginController::class,'logout']);

    Route::get('/dashboard',[DashboardController::class,'index']);

    //category//
    Route::get('/category',[CategoryController::class,'index']);
    Route::post('/store_category',[CategoryController::class,'insertcategory']);
    Route::post('/edit_category',[CategoryController::class,'updatecategory']);
    Route::get('/delete_category/{id}',[CategoryController::class,'deletecategory']);
    // end category //

    //subcategory//
    Route::get('/subcategory',[SubcategoryController::class,'index']);
    Route::post('/store_subcategory',[SubcategoryController::class,'insertcategory']);
    Route::post('/edit_subcategory',[SubcategoryController::class,'updatecategory']);
    Route::get('/delete_subcategory/{id}',[SubcategoryController::class,'deletecategory']);
    // sub end category //



//    /workerdetail

    Route::get('/workerdetail',[WorkerdetailController::class,'index']);
    Route::get('/addworkingdetailsanddocumentsview',[WorkerdetailController::class,'addworkingdetailsanddocumentsview']);
    Route::post('/storeworkerdetail',[WorkerdetailController::class,'storeworkerdetail']);
    Route::get('/viewworkerdetails/{id}',[WorkerdetailController::class,'viewworkerdetails']);
    Route::post('/vaificationstatuspost/{id}',[WorkerdetailController::class,'vaificationstatuspost']);
    Route::post('/unvaificationstatuspost/{id}',[WorkerdetailController::class,'unvaificationstatuspost']);

//    /workerdetail
});
