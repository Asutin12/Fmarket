<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Item;
use App\Models\Purchase;


class AccountController extends Controller
{
    public function edit(Request $request , int $user_id){
        $user = User::find($user_id);
        return view('account.edit',['user'=>$user,'user_id'=>$user_id]);
    }
    // 編集機能
    public function update(Request $request, int $user_id){
        $image = $request->file('image');
        if ($request->hasFile('image')){
            $path = \Storage::put('public/' , $image);
            $path = explode('/', $path);
        }else{
            $path = null;
        }
        $user = User::find($user_id);
        $user->name = $request->input('name');
        $user->introduction = $request->input('introduction');
        $user->image = $path[2];
        $user->save();
        return redirect()->route('user.profile',['user'=>$user,'user_id'=>$user_id,'image'=>$image]);
    }
    public function show(Request $request, int $user_id){
        $auth_id = Auth::id();
        $purchases =Purchase::all();
        $user = User::find($user_id);
        return view('account.profile',['user_id'=>$user_id,'user'=>$user,'auth_id'=>$auth_id,'purchases'=>$purchases]);
    }
}
