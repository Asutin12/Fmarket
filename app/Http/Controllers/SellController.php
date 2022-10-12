<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SellController extends Controller
{
    public function create(){
        return view('sell.create');
    }
    public function drafts(){
        return view('sell.drafts');
    }
}
