<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
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
    return view('products.homepage');
});
Route::get('/logout', function () {
   Auth::logout();
   return redirect("/");
});

Auth::routes();
Route::get('/products/create',[ProductController::class,'create'])->middleware('auth');//list all prodect
Route::get('/products',[ProductController::class,'index']);//list all prodect
// Route::get('/products/create','productController@create');//show form to add new prodect
Route::get('/products/{id}',[ProductController::class,'show']);//show one prodect
Route::post('/products/index',[ProductController::class,'search'])->name("search");

Route::post('/products',[ProductController::class,'store'])->name("store");//store the product in database
Route::get('/products/{id}/edit',[productController::class,'edit'])->middleware('auth');;//show form to edit a specific existing product
Route::patch('/products/{id}',[productController::class,'update'])->middleware('auth');
Route::delete('/products/{id}',[productController::class,'destroy'])->middleware('auth');
Route::post('/paypal',[paypalController::class,'index']);
Route::post('/paypal/return',[paypalController::class,'paypalreturn']);
Route::post('/paypal/cancel',[paypalController::class,'paypalcancel']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
