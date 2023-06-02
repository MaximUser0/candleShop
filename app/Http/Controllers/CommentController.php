<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function store(Request $request, $id)
    {
        $comment = [
            'id_candle' => $id,
            'id_user' => auth()->user()->id,
            'content' => $request['content'],
            'grade' => $request['grade'],
        ];
        $res = Comment::create($comment);
        if($res){
            return redirect(route("candle", $id).'#openModal3');
        }
    }

    public function destroy($id)
    {
        $comment = Comment::find($id);
        if($comment){
            if(auth()->user()->id != $comment['id_user']){
                return redirect(route("index"));
            }
            $comment->delete();
            return redirect(route("catalog"));
        }
    }

}