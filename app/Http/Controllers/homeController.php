<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home(){
        return view('home.index');
    }
    public function sell(Request $request){
        return view('sell.home');
    }
}
