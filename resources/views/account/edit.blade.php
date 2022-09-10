@extends('layouts.home')

@section('content')
{{-- @if (Auth::check())
                <p>USER: {{$user->name}}</p>
                {{-- <p>USER: {{$user->family_name . ' ' . $user->first_name }}</p> --}}
                {{-- <p>Birth_day: {{$user->birth_day_yy . '年' . $user->birth_day_mm . '月' . $user->birth_day_dd . '日'}}</p> --}}

            @else
            <p>※ログインしていません(<a href="/login">ログイン</a>|<a href="/register">会員登録</a>)</p>
            @endif --}}

            <h3>編集</h3>
@endsection
