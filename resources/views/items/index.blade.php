@extends('layouts.home')

@section('content')
<a href="{{route('home.index')}}"><</a>
  <div class="detail">
    <div class="left">
      <img class="detail-img" src="{{ '/storage/' . $item['image']}}" width="200px"  alt="">
    </div>
    <div class="rigth">
        <h1 class="name">{{$item->name}}</h1>
        <p class="price">¥{{$item->price}}</p>
        <a href="" class="purchase">購入手続きへ</a>
      <h3 class="secttion-title">商品説明</h3>
        <p>{{$item->description}}</p>
      <h3 class="secttion-title">商品の情報</h3>
        <hr>
        <div class="section">
            <p>商品の情報</p>
            <p></p>
        </div>
        <div class="section">
            <p>配送料の負担</p>
            <p></p>
        </div>
        <div class="section">
            <p>配送の方法</p>
            <p></p>
        </div>
        <div class="section">
            <p>配送元の地域</p>
            <p></p>
        </div>
        <div class="section">
            <p>配送までの日数</p>
            <p></p>
        </div>
        <hr>
        <h3 class="user">出品者</h3>
        <hr>
        <a href="{{route('user.profile',['user_id'=>$item->user->id])}}">{{$item->user->name}}</a>
        <hr>
    </div>
  </div>
@endsection
