@extends('layouts.home')

@section('content')
<h1>profileページ</h1>
<p>{{$user->name}}</p>
@if ($auth_id == $user->id)
<div class="user-item">
    <a class="user-edit" href="{{route('account.edit')}}">ユーザー編集</a>
</div>
@else
<p>フォロー</p>
@endif
<hr>
<div class="item-box">
    @foreach ($user->item as $item)
    <a class="item" href="{{route('items.index',['item_id'=>$item->id])}}">
        <img src="{{ '/storage/' . $item->image}}" width="200px"  alt="">
        <p>{{$item->name}}</p>
        <p>¥{{$item->price}}</p>
        </a>
    @endforeach
</div>

@endsection
