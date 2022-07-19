@extends('layouts.home')

@section('detail')
    <a href="{{route('home.index')}}">おすすめ</a>
    <a href="{{route('home.mylist')}}">マイリスト</a>
    <a href="">ピックアップ</a>
@endsection

@section('content')
<h1 class="home-title">おすすめの商品</h1>
<h1>{{$items->name}}</h1>
<p>{{$items->description}}</p>
<p>{{$items->price}}</p>

@endsection
