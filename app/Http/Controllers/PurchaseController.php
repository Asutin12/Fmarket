<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\User;
use App\Models\Purchase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PurchaseController extends Controller
{
    public function index(Request $request, $item_id){
        $user_id = Auth::id();
        $item = Item::find($item_id);
        $purchases = Purchase::all();
        return view('purchase.index',['item'=>$item,'item_id'=>$item_id,'user_id'=>$user_id,'purchases'=>$purchases]);
    }
    public function purchase(Request $request, $item_id){
        Purchase::create(['item_id'=>$item_id,'user_id'=>Auth::id(),]);
        $item = Item::find($item_id);
        $item->sold = 'soldOut';
        $item->save();
        return redirect ()->route('home.index');
    }
}
