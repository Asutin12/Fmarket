<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;


class AccountController extends Controller
{
    public function add(Request $request){
        return view('account.edit');
    }
    public function show(Request $request, int $user_id){
        $user = User::find($user_id);
        return view('account.profile',['user_id'=>$user_id,'user'=>$user]);
    }
}
