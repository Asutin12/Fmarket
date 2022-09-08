@extends('layouts.home')

@section('content')
<a href="{{route('home.index')}}"><</a>
  <div class="detail">
    <div class="left">
      <img class="detail-img" src="{{asset('/storage/sample/PfsWCOr5XJzjBowpV4zTyO97SVYdZE6m8FoyYrKt.png')}}" width="200px"  alt="">
    </div>
    <div class="rigth">
        <h1 class="name">{{$item->name}}</h1>
        <p class="price">¥{{$item->price}}</p>
        <a href="" class="purchase">購入手続きへ</a>
      <h3 class="secttion-title">商品説明</h3>
        <p>{{$item->description}}</p>
      <h3 class="secttion-title">商品の情報</h3>
        <hr>
    </div>
  </div>
@endsection
