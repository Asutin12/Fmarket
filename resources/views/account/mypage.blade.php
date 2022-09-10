@extends('layouts.home')

@section('content')
@if (Auth::check())
<div class="account">
    <div class="account-menu">
        <div class="account-img">
           <h1>画像</h1>
        </div>
        <div class="user-box">
            <div class="user-item">
                <p>USER: {{$user->name}}</p>
                {{-- <p>USER: {{$user->family_name . ' ' . $user->first_name }}</p> --}}
                {{-- <p>Birth_day: {{$user->birth_day_yy . '年' . $user->birth_day_mm . '月' . $user->birth_day_dd . '日'}}</p> --}}
            </div>
            <div class="user-item">
                <a class="user-edit" href="{{route('account.edit')}}">ユーザー編集</a>
            </div>
            @else
            <p>※ログインしていません(<a href="/login">ログイン</a>|<a href="/register">会員登録</a>)</p>
            @endif
        </div>
    </div>
</div>
<hr>
<div class="section-title">出品した商品</div>
@endsection
