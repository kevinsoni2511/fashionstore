<?php

use App\Http\Controllers\SecondDemo;
use Illuminate\Support\Facades\Route;

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
Route:: post('/submit-form',[SecondDemo::class,'submitForm']);
// Route::get('/',[firstDemo::class,'index']);
Route::get('/about',[SecondDemo::class,'about']);
Route::get('/checkout',[SecondDemo::class,'checkout']);

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/shop', function () {
    return view('shop');
});





