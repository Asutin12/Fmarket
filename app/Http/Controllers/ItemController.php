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
        $items = DB::select('select * from items');
        return redirect()->route('home.index',['items'=>$items]);
    }
}
