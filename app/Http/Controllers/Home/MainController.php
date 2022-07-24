<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class MainController extends Controller
{
    public function home(){
        $items = DB::select('select * from items');
        return view('home.index',['items'=>$items]);
    }
    public function sell(Request $request){
        return view('sell.home');
    }
    public function mylist(Request $request){
        return view('home.mylist');
    }
    public function index(Request $request){
        $user = Auth::user();
        return view('account.mypage',compact('user'));
    }
    public function post(Request $request){
        $items = DB::select('select * from users');
        return view('account.mypage',['items'=>$items]);
    }
    public function add(Request $request){
        return view('sell.create');
    }
    public function create(Request $request){
        $data = [
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price,
        ];
        DB::table('items')->insert($data);
        return redirect('main');
    }
}
