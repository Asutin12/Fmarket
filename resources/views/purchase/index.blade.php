@extends('layouts.purchase')

@section('content')
<div class="p-content">
    <div class="p-box">
        <div class="p-item">
            <img class="detail-img" src="{{ '/storage/' . $item->image}}" width="200px"  alt="">
        </div>
        <h1 class="name">{{$item->name}}</h1>
        <p class="price">¥{{$item->price}}</p>
    </div>
    <div class="p">
        <div class="price">
            <p>商品代金</p>
            <p>¥{{$item->price}}</p>
        </div>
        {{-- @if ($item-> = '購入者負担')
            <p>配送料</p>
            <p>{{$item->}}</p>
        @endif --}}
        <div class="price-b">
            <p>購入金額</p>
            <p>¥{{$item->price}}</p>
        </div>
    </div>
</div>
<div class="p-b">
    <a class="purchase" href="{{route('item.purchase',['item_id'=>$item_id])}}">購入する</a>
</div>
@endsection
