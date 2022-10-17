<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Item;


class AccountController extends Controller
{
    public function edit(Request $request , int $user_id){
        $user = User::find($user_id);
        return view('account.edit',['user'=>$user,'user_id'=>$user_id]);
    }
    public function update(Request $request, int $user_id){
        $image = $request->file('image');
        if ($request->hasFile('image')){
            $path = \Storage::put('public/' , $image);
            $path = explode('/', $path);
        }else{
            $path = null;
        }
        $user = User::find($user_id);
        $item = [
            'name'=>$request->name,
            'introduction'=>$request->introduction,
            'image'=>$path[2],
        ];
        DB::table('users')->update($item);
        // $user->name = $request->input('name');
        // $user->introduction = $request->input('introduction');
        // $user->save();
        return redirect()->route('user.profile',['user'=>$user,'user_id'=>$user_id,'image'=>$image,'item'=>$item]);
    }
    public function show(Request $request, int $user_id){
        $auth_id = Auth::id();
        $user = User::find($user_id);
        return view('account.profile',['user_id'=>$user_id,'user'=>$user,'auth_id'=>$auth_id]);
    }
}
