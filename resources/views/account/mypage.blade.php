@extends('layouts.home')

@section('content')
@if (Auth::check())
<p>USER: {{$user->nickname . '(' . $user->email . ')'}}</p>
<p>USER: {{$user->family_name . ' ' . $user->first_name }}</p>
<p>Birth_day: {{$user->birth_day_yy . '年' . $user->birth_day_mm . '月' . $user->birth_day_dd . '日'}}</p>
@else
<p>※ログインしていません(<a href="/login">ログイン</a>|<a href="/register">登録</a>)</p>
@endif

@endsection
