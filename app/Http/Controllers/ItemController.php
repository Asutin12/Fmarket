<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{

    public function add(Request $request){
        return view('sell.create');
    }
    public function create(Request $request){
       $items = new Items;
       $form = $request->all();
       unset($form['_token']);
       $items->fill($form)->save();
       return redirect('home.index');
    }
}
