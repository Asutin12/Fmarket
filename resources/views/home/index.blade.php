@extends('layouts.home')

@section('detail')
    <a href="{{route('home.index')}}">おすすめ</a>
    <a href="{{route('home.mylist')}}">マイリスト</a>
    <a href="">ピックアップ</a>
@endsection

@section('content')
<h1 class="home-title">おすすめの商品</h1>
<hr>
<div class="item-box">
    @foreach ($items as $item)
    <a class="item" href="{{route('items.index',['item_id'=>$item->id])}}">
    <img src="{{ '/storage/' . $item->image}}" width="200px"  alt="">
    <p>{{$item->name}}</p>
    <p>¥{{$item->price}}</p>
    </a>
    @endforeach
</div>
@endsection
