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
          @if ($user_id === $item->user->id)
               <a href="{{route('items.edit',['item_id'=>$item_id])}}" class="purchase">編集</a>
          @elseif($item->sold === 'soldOut')
               <p class="purchase">うりきれました</p>
          @else
               <div class="like">
                  @if ($item->is_liked_by_auth_user())
                     <a href="{{route('item.unlike',['item_id'=>$item_id])}}"><i class="fa-solid fa-heart"></i><span>{{$item->likes->count()}}</span></a>
                  @else
                     <a href="{{route('item.like',['item_id'=>$item_id])}}"><i class="fa-regular fa-heart"></i><span>{{$item->likes->count()}} </span></a>
                  @endif
               </div>
               <a href="{{route('purchase',['item_id'=>$item->id])}}" class="purchase">購入手続きへ</a>
          @endif
      <h3 class="secttion-title">商品説明</h3>
        <p>{{$item->description}}</p>
        <hr>
      <h3 class="secttion-title">商品の情報</h3>
        <div class="item-section">
            <p>カテゴリー</p>
            <p>{{$item->category_id}}</p>
        </div>
        <div class="item-section">
            <p>配送料の負担</p>
            <p></p>
        </div>
        <hr>
        <h3 class="user">出品者</h3>
        <hr>
        <div class="user-link">
            <img src="{{ '/storage/' . $item->user->image}}" width="100px"  alt="">
            <a href="{{route('user.profile',['user_id'=>$item->user->id])}}">{{$item->user->name}}</a>
        </div>
        <hr>
    </div>
  </div>
@endsection
