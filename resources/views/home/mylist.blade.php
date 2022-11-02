@extends('layouts.home')

@section('detail')
    <a href="{{route('home.index')}}">おすすめ</a>
    <a href="{{route('home.mylist',['user_id'=>$user->id])}}">マイリスト</a>
@endsection

@section('content')
<h1 class="home-title">マイリスト</h1>
<hr>
<section>
    <div class="section-title">いいねした商品</div>
    @auth
    @foreach ($likes as $like)
    @if ($user->id === $like->user_id)
    <p>{{$like->item_id}}</p>
    @endif
    @endforeach
    @endauth
</section>
{{-- <section>
    <div class="section-title">フォロー中のユーザー</div>
    <hr>
</section> --}}

@endsection
