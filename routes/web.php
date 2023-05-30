<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('about', function () {
    return view('about');
});
Route::get('catalog', function () {
    return view('catalog');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('del', function () {
    return view('del');
});
Route::get('delete', function () {
    return view('delete');
});
Route::get('delivery', function () {
    return view('delivery');
});
Route::get('profile', function () {
    return view('profile');
});
Route::get('profile2', function () {
    return view('profile2');
});

