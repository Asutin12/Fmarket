<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use App\Models\User;

class ItemController extends Controller
{
    public function index(Request $request, int $item_id){
        $user_id = Auth::id();
        $item = Item::find($item_id);
        return view('items.index',['item'=>$item,'item_id'=>$item_id,'user_id'=>$user_id]);
    }
}
