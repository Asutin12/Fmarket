<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PurchaseController extends Controller
{
    public function index(Request $request, $item_id){
        $user_id = Auth::id();
        $item = Item::find($item_id);
        return view('purchase.index',['item'=>$item,'item_id'=>$item_id,'user_id'=>$user_id]);
    }
}
