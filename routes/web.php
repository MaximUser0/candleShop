<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BanController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\CandleController;
use App\Http\Controllers\CommentController;
use App\Models\Basket;
use App\Models\Candle;
use App\Models\Comment;
use Illuminate\Foundation\Auth\User;
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
    $baskets = [];
    if($user){
        $role = Auth::user()->role;
        $baskets = Basket::where('id_user', '=', auth()->user()->id)->get();
        foreach($baskets as $basket){
            $arr = Candle::find($basket['id_candle']); 
            $basket['img'] = $arr['img_main'];
            $basket['price'] = $arr['price'];
            $basket['title'] = $arr['title'];
        }
    }
    return view('index', compact(['user', 'role', 'baskets']));
})->name('index');

Route::get('/about', function(){
    $user = Auth::check();
    return view('about', compact("user"));
})->name('about');

Route::get('/catalog', function(){
    $user = Auth::check();
    $candles = Candle::all();
    $baskets = [];
    if($user){
        $baskets = Basket::where('id_user', '=', auth()->user()->id)->get();
        foreach($baskets as $basket){
            $arr = Candle::find($basket['id_candle']); 
            $basket['img'] = $arr['img_main'];
            $basket['price'] = $arr['price'];
            $basket['title'] = $arr['title'];
        }
    }
    return view('catalog', compact(["user", 'candles', 'baskets']));
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
    $comments = Comment::where('id_candle', '=', $id)->get();
    foreach($comments as $comment){
        $comment['name'] = User::find($comment['id_user'])['email']; 
    }
    return view('candle', compact(['candle', 'comments']));
})->name('candle');

//Controller's routes
Route::post('/login', [AuthController::class, 'login']);
Route::post('/registration', [AuthController::class, 'registration']);


Route::middleware('user')->group(function(){
    
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::post('/comment/{id}', [CommentController::class, 'store']);
    Route::get('/comment/{id}', [CommentController::class, 'destroy']);

    Route::post('/basket/{id}', [BasketController::class, 'store']);
    Route::get('/basket/{id}', [BasketController::class, 'destroy']);
    Route::get('/basket/plus/{id}', [BasketController::class, 'plus']);
    Route::get('/basket/minus/{id}', [BasketController::class, 'minus']);

    Route::middleware('admin')->group(function(){
        Route::get('/profile', function(){
            $candles = Candle::all();
            return view('profile', compact('candles'));
        })->name('profile');
    
        Route::get('/profile2', function(){
            $users = User::all();
            return view('profile2', compact('users'));
        })->name('profile2');

        Route::post('/candle', [CandleController::class, 'store']);
        Route::post('/candle/{id}', [CandleController::class, 'update']);
        Route::get('/candle/delete/{id}', [CandleController::class, 'destroy']);
        Route::get('/ban/{id}', [BanController::class, 'ban']);
        Route::post('/find', [BanController::class, 'find']);
    });

});

