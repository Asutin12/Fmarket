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
    <img src="{{asset('/storage/sample/PfsWCOr5XJzjBowpV4zTyO97SVYdZE6m8FoyYrKt.png')}}"  alt="">
    @foreach ($items as $item)
    <a class="item" href="{{route('items.index')}}">
    <p>{{$item->name}}</p>
    <p>{{$item->description}}</p>
    <p>¥{{$item->price}}</p>
    </a>
    @endforeach
</div>
@endsection
