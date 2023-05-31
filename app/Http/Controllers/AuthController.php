<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    
    public function registration(Request $request){
        if(Auth::check()){
            return redirect(route('index'));
        }
        if(User::where('email', "=", $request['email'])->exists()){
            return redirect(route('index') . '#openModal2')->withErrors([
                'email' => "Такая почта уже есть!"
            ]);
        }
        if($request['password'] != $request['password_confirmation']){
            return redirect(route('index') . '#openModal2')->withErrors([
                'password' => "Пароли не совпадают!"
            ]);
        }

        $validate = $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        $user = User::create($validate);
        if($user){
            Auth::login($user);
            return redirect(route('index'));
        }
    }

    public function login(Request $request){
        if(Auth::check()){
            return redirect(route('index'));
        }
        $form = $request->only(['email', 'password']);
        if(Auth::attempt($form)){
            return redirect(route('index'));
        }

        return redirect(route('index') . '#openModal3')->withErrors([
            'form' => "Проверьте почту или пароль"
        ]);
    }

    public function logout(){
        if(!Auth::check()){
            return redirect(route('index'));
        }
        Auth::logout();
        return redirect()->back();
    }

}
