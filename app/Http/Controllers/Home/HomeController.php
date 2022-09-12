<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use App\Models\User;


class HomeController extends Controller
{
    public function home(Request $request){
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


    public function show(Request $request, int $item_id){
        $item = Item::find($item_id);
        return view('items.index',['item'=>$item,'item_id'=>$item_id]);
    }
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
            'delivaryCharge'=>$request->delivaryCharge,
            'delivaryMethod'=>$request->delivaryMethod,
            'delivaryArea'=>$request->delivaryArea,
            'delivaryDays'=>$request->delivaryDays,
        ];
        DB::table('items')->insert($item);
        // dd($item);
        return redirect('main');
    }

    public function user(Request $request, int $user_id){
        $user = User::find($user_id);
        return view('account.profile',['user_id'=>$user_id,'user'=>$user]);
    }
}
