<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class BanController extends Controller
{

    public function ban($id){
        $user = User::find($id);
        if(!$user){
            return redirect()->back();
        }
        if($user->ban == 0){
            $user->ban = 1;
        } else {
            $user->ban = 0;
        }
        $user->save();
        return redirect()->back();
    }

    public function find(Request $request){
        return redirect(route('profile2').'?find='.$request['find']);
    }

}
