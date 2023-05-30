<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', function(){
    $user = Auth::check();
    return view('index', compact("user"));
})->name('index');

Route::post('/login', [AuthController::class, 'login']);
Route::post('/registration', [AuthController::class, 'registration']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/about', function(){
    $user = Auth::check();
    return view('about', compact("user"));
})->name('about');

Route::get('/catalog', function(){
    $user = Auth::check();
    return view('catalog', compact("user"));
})->name('catalog');

Route::get('/contact', function(){
    $user = Auth::check();
    return view('contact', compact("user"));
})->name('contact');

Route::get('/delivery', function(){
    $user = Auth::check();
    return view('delivery', compact("user"));
})->name('delivery');

Route::view('/profile', 'profile');

Route::view('/profile2', 'profile2');


