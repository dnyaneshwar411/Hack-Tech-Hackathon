<?php

namespace App\Http\Controllers;

use App\Models\Community as ModelsCommunity;
use Illuminate\Http\Request;

class Community extends Controller
{
    public function communinty(){
        $contents = ModelsCommunity::all();
        return view('Application/.community')->with(compact('contents'));
    }
}
