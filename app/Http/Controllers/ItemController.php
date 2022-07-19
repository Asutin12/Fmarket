<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\DB;


class ItemController extends Controller
{
    public function add(Request $request){
        return view('sell.create');
    }
    public function create(Request $request){
        $item = new Item;
        $form = $request->all();
        unset($form['_token']);
        $item->fill($form)->save();
        return view('home.index');
    }
}
