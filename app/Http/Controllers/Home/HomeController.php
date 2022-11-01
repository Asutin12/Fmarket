<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use App\Models\User;
use App\Models\Like;
use App\Models\Purchase;


class HomeController extends Controller
{
    public function home(Request $request){
        $user = Auth::user();
        // $items = DB::select('select * from items');
        $items = Item::paginate(20);
        $search = $request->input('search');
        $query = Item::query();
        if ($search) {
            $spaceConversion = mb_convert_kana($search, 's');
            $wordArraySearched = preg_split('/[\s,]+/',$spaceConversion,-1,PREG_SPLIT_NO_EMPTY);
            foreach($wordArraySearched as $value) {
                $query->where('name', 'like', '%'.$value.'%');
            }
            $items = $query->paginate(20);
        }
        $purchases =Purchase::all();
        return view('home.index',['items'=>$items,'user'=>$user,'search'=>$search,'purchases'=>$purchases]);
    }
    public function sell(Request $request){
        return view('sell.home');
    }
    public function mylist(Request $request, int $user_id){
        $user = User::find($user_id);
        $likes = DB::select('select * from likes');
        return view('home.mylist',['user'=>$user,'user_id'=>$user_id,'likes'=>$likes]);
    }
    public function index(Request $request){
        $user = Auth::user();
        return view('account.mypage',compact('user'));
    }
    public function post(Request $request){
        $items = DB::select('select * from users');
        return view('account.mypage',['items'=>$items]);
    }
    public function search(Request $request,int $item_id){
        $item = Item::find($item_id);
        return view('search.index',['item'=>$item]);
    }
}
