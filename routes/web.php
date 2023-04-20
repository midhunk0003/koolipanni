<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\WorkerdetailController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostWorkController;
use App\Http\Controllers\MyadsviewController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\ProfilepicController;

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


Route::get('/',[HomeController::class,'index']);



////profilepick///
Route::post('/postprofilepick',[ProfilepicController::class,'profilepicupload']);
Route::post('/updateprofilepick/{id}',[ProfilepicController::class,'updateprofilepic']);
Route::get('/removeprofilepic/{id}',[ProfilepicController::class,'removeprofilepic']);
////profilepick///


///////////home/////////////
Route::get('/workerdetailpage/{id}',[HomeController::class,'workerdetailpage']);
Route::post('/insertviewcount',[HomeController::class,'insertviewcount']);
Route::post('/insertrecentviews',[HomeController::class,'insertrecentviews']);
///////////home/////////////


Route::get('/loginview',[LoginController::class,'index']);
Route::get('/login',[LoginController::class,'login']);
Route::post('/registeruser',[LoginController::class,'register']);
Route::get('/logout',[LoginController::class,'logout']);




//worker page
Route::get('/categoryworker/{id}',[WorkerController::class,'index']);

//worker detail  page
Route::get('/workerdetailview',[WorkerdetailController::class,'index']);
Route::post('/comments',[WorkerdetailController::class,'commentsrating']);

//postworkcontroler
Route::get('/PostWorkController',[PostWorkController::class,'index']);
Route::post('/storeworkerdetail',[PostWorkController::class,'postwork']);

//myadscontroler
Route::get('/myadsview',[MyadsviewController::class,'index']);

//editportion
Route::get('/editviewworkerdetail/{id}',[MyadsviewController::class,'vieweditshowworkerdetail']);
Route::post('/updateworkerdetail/{id}',[MyadsviewController::class,'updateworkerdetail']);
Route::get('/removemyad/{id}',[MyadsviewController::class,'removemyad']);
////////////////images//////////////////
Route::post('/insertworkerimage',[MyadsviewController::class,'insertworkerimage']);
Route::get('/deleteworkerimg/{id}',[MyadsviewController::class,'deleteworkerimg']);
////////////////images end//////////////////


////////////worker profile img//////
Route::post('/updateworkerprofileimg/{id}',[MyadsviewController::class,'updateworkerprofileimg']);
////////////worker profile img/////////

/////////wishlist///////
Route::post('/insertwishlist',[WishlistController::class,'insertwishlist']);
/////////wishlist///////

//////////wishlist//////
Route::get('/wishlist',[WishlistController::class,'wishlistview']);
Route::get('/removewishlist/{id}',[WishlistController::class,'removewishlist']);
/// wishlist/////////



////////search by location ////////
Route::get('/searchbylocation',[HomeController::class,'searchworkerbylocation']);
////////search by location ////////



