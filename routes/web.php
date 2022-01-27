<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\main;
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
Route::post('/home',[main::class,'home']);
Route::get('/register',[main::class,'register']);
Route::post('/registered',[main::class,'login']);
Route::get('/feedback',[main::class,'feedback']);
Route::get('/products',[main::class,'products']);
Route::get('/loginform',[main::class,'loginform']);
Route::get('/dashboard',[main::class,'dashboard']);
Route::get('/change',[main::class,'change']);
Route::get('/orders',[main::class,'orders']);
Route::get('/category', function () {
    return view('admin.pages.category');
});