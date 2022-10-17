@extends('layouts.home')

@section('content')
<h1>profileページ</h1>
<img src="{{ '/storage/' . $user->image}}" width="100px"  alt="">
<p>{{$user->name}}</p>
<p>{{$user->introduction}}</p>
@if ($auth_id == $user->id)
<div class="user-item">
    <a class="user-edit" href="{{route('profile.edit',['user_id'=>$user->id])}}">ユーザー編集</a>
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
