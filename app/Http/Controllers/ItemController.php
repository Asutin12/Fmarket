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
    // 編集機能
    public function edit(Request $request,int $item_id){
        $item = Item::find($item_id);
        return view('items.edit',['item_id'=>$item_id,'item'=>$item]);
    }
    public function update(Request $request, int $item_id){
        $image = $request->file('image');
        if ($request->hasFile('image')){
            $path = \Storage::put('public/' , $image);
            $path = explode('/', $path);
        }else{
            $path = null;
        }
        $item = Item::find($item_id);
        $item->image = $path[2];
        $item->name = $request->input('name');
        $item->description = $request->input('description');
        $item->price = $request->input('price');
        $item->save();
        return redirect()->route('items.index',['item'=>$item,'item_id'=>$item_id,'image'=>$image]);
    }
    // 削除機能
    public function delete(Request $request , int $item_id){
        $item = Item::find($item_id);
        $item->delete();
        return redirect()->route('user.profile',['item'=>$item]);
    }
}
