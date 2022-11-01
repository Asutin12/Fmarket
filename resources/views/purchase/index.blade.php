@extends('layouts.sell')

@section('content')
<div class="p-box">
    <div class="p-item">
        <img class="detail-img" src="{{ '/storage/' . $item->image}}" width="200px"  alt="">
    </div>
    <h1 class="name">{{$item->name}}</h1>
    <p class="price">¥{{$item->price}}</p>
</div>
@endsection
