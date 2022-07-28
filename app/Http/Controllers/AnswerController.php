<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function answer($param = ''){
        $item = ['room' => $param];
        return view('answer', $item) ;
    }
}
