<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CandleController;
use App\Models\Candle;
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


//View's routes
Route::get('/', function(){
    $user = Auth::check();
    $role = 0;
    if($user){
        $role = Auth::user()->role;
    }
    return view('index', compact(['user', 'role']));
})->name('index');

Route::get('/about', function(){
    $user = Auth::check();
    return view('about', compact("user"));
})->name('about');

Route::get('/catalog', function(){
    $user = Auth::check();
    $candles = Candle::all();
    return view('catalog', compact(["user", 'candles']));
})->name('catalog');

Route::get('/contact', function(){
    $user = Auth::check();
    return view('contact', compact("user"));
})->name('contact');

Route::get('/delivery', function(){
    $user = Auth::check();
    return view('delivery', compact("user"));
})->name('delivery');

Route::get('/candle/{id}', function($id){
    $candle = Candle::find($id);
    if($candle === null){
        return abort('404');
    }
    return view('candle', compact("candle"));
})->name('candle');

//Controller's routes
Route::post('/login', [AuthController::class, 'login']);
Route::post('/registration', [AuthController::class, 'registration']);


Route::middleware('user')->group(function(){
    
    Route::get('/logout', [AuthController::class, 'logout']);

    Route::middleware('admin')->group(function(){
        Route::get('/profile', function(){
            $candles = Candle::all();
            return view('profile', compact('candles'));
        })->name('profile');
    
        Route::get('/profile2', function(){
            return view('profile2');
        })->name('profile2');

        
        Route::post('/candle/{id}', [CandleController::class, 'update']);
        Route::delete('/candle/{id}', [CandleController::class, 'destroy']);
    });

});

Route::post('/candle', [CandleController::class, 'store']);





