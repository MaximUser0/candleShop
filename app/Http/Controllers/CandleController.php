<?php

namespace App\Http\Controllers;

use App\Models\Candle;
use Illuminate\Http\Request;

class CandleController extends Controller
{

    public function store(Request $request)
    {
        $imgs = ['img_main', 'img_1', 'img_2', 'img_3'];

        $form = $request->only(['title', 'aroma', 'universe', 'volume', 'price', 'description',]);

        foreach($imgs as $img){
            if(!isset($_FILES[$img])){
                return redirect(route('profile')."#openModal2")->withErrors([
                    'files' => "Для публикации требуется 4 фотографии!",
                ]);
            }
            $path = 'download/img/' . time() . $_FILES[$img]['name'];
            copy($_FILES[$img]['tmp_name'], $path);
            $form[$img] = $path;
        }

        $candle = Candle::create($form);
        if($candle){
            return redirect(route('profile'));
        }
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $candle = Candle::find($id);

        $candle->title = $request['title'];
        $candle->aroma = $request['aroma'];
        $candle->universe = $request['universe'];
        $candle->volume = $request['volume'];
        $candle->price = $request['price'];
        $candle->description = $request['description'];

        $imgs = ['img_main', 'img_1', 'img_2', 'img_3'];

        foreach($imgs as $img){
            if(isset($_FILES[$img])){
                unlink($candle[$img]);
                $path = 'download/img/' . time() . $_FILES[$img]['name'];
                copy($_FILES[$img]['tmp_name'], $path);
                $candle[$img] = $path;
            }
        }

        $candle->save();
        return redirect(route('profile'));
    }

    public function destroy($id)
    {
        $candle = Candle::find($id);

        $imgs = ['img_main', 'img_1', 'img_2', 'img_3'];

        foreach($imgs as $img){
            unlink($candle[$img]);
        }

        $candle->delete();
        return redirect(route('profile'));
    }

}