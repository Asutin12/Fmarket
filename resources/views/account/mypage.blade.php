@extends('layouts.home')

@section('content')
@if (Auth::check())
<div class="account">
    <div class="account-menu">
        <div class="account-img">
            @if ($user->image === null)
                <img src="{{asset('sample/70f7a838ebd66165e349ce1e3de630a8_t.jpg')}}" width="200px" alt="">
            @else
                <img src="{{ '/storage/' . $user->image}}" width="200px"  alt="">
            @endif
        </div>
        <div class="user-box">
            <div class="user-item">
                <div class="nn">
                    <p>ニックネーム</p>
                    <a class="un" href="{{route('user.profile',['user_id'=>$user->id])}}"><p>{{$user->name}}</p></a>
                </div>
            @else
            <p>※ログインしていません(<a href="/login">ログイン</a>|<a href="/register">会員登録</a>)</p>
            @endif
            </div>
        </div>
    </div>
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
        </div>
</div>
@endsection
