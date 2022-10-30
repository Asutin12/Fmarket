<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use App\Models\User;

class SellController extends Controller
{
    public function add(Request $request){
        return view('sell.create');
    }
    public function create(Request $request){
        $image = $request->file('image');
        if ($request->hasFile('image')){
            $path = \Storage::put('public/' , $image);
            $path = explode('/', $path);
        }else{
            $path = null;
        }
        $user_id = Auth::id();
        $item = [
            'id'=>$request->id,
            'name'=>$request->name,
            'user_id'=>$user_id,
            'description'=>$request->description,
            'price'=>$request->price,
            'image'=>$path[2],
            'category'=>$request->category,
            'delivaryCharge'=>$request->delivaryCharge,
        ];
        DB::table('items')->insert($item);
        // dd($item);
        return redirect('home');
    }
    public function drafts(){
        return view('sell.drafts');
    }
}
