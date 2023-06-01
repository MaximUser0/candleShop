<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    
    public function aroma(Request $request){
        return redirect(route('profile2').'?aroma='.$request['aroma']);
    }

    public function universe(Request $request){
        return redirect(route('profile2').'?universe='.$request['universe']);
    }

}
