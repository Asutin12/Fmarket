@extends('layouts.home')

@section('content')
@if (Auth::check())
<p>USER: {{$user->name . '(' . $user->email . ')'}}</p>
<p>USER: {{$user->family_name . '(' . $user->first_name . ')'}}</p>
@else
<p>※ログインしていません(<a href="/login">ログイン</a>|<a href="/register">登録</a>)</p>
@endif

@endsection
