<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Item;


class AccountController extends Controller
{
    public function edit(Request $request , int $user_id){
        $user = User::find($user_id);
        return view('account.edit',['user'=>$user,'user_id'=>$user_id]);
    }
    public function update(Request $request){

    }
    public function show(Request $request, int $user_id){
        $auth_id = Auth::id();
        $user = User::find($user_id);
        return view('account.profile',['user_id'=>$user_id,'user'=>$user,'auth_id'=>$auth_id]);
    }
}
