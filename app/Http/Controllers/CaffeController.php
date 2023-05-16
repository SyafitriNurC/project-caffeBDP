<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaffeController extends Controller
{
    public function landing(){
        return view('index');
    }

    public function order(){
        return view('order');
    }

    public function cart(){
        return view('cart');
    }
}
