<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use App\Models\User;
use App\Models\Like;


class HomeController extends Controller
{
    public function home(Request $request){
        $user = Auth::user();
        $items = DB::select('select * from items');
        return view('home.index',['items'=>$items,'user'=>$user]);
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
}
