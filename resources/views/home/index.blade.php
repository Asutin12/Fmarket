@extends('layouts.home')

@section('detail')
   <a class="b" href="{{route('home.index')}}">おすすめ</a>
   <a class="b" href="{{route('home.mylist',['user_id'=>$user->id])}}">マイリスト</a>
@endsection

@section('content')
<h1 class="home-title">おすすめの商品</h1>
<hr>
<div class="item-box">
    @foreach ($items as $item)
    <a class="item" href="{{route('items.index',['item_id'=>$item->id])}}">
    <img class="img" src="{{ '/storage/' . $item->image}}" width="200px" height="200px"  alt="">
    <div class="flex">
        <div class="i">
            <p>{{$item->name}}</p>
            <p>¥{{$item->price}}</p>
        </div>
        @foreach ($purchases as $purchase)
        @if ($item->id === $purchase->item_id)
        <p class="soldout">Sold Out</p>
        @endif
        @endforeach
    </div>
    </a>
    @endforeach
</div>
@endsection
