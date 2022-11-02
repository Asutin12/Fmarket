@extends('layouts.home')

@section('content')
<div class="profile">
    <div class="p-item">
        @if ($user->image === null)
        <img src="{{asset('sample/70f7a838ebd66165e349ce1e3de630a8_t.jpg')}}" width="100px" alt="">
        @else
        <img src="{{ '/storage/' . $user->image}}" width="100px"  alt="">
        @endif
        <p>{{$user->name}}</p>
    </div>
    @if ($auth_id == $user->id)
       <div class="user-item">
          <a class="user-edit" href="{{route('profile.edit',['user_id'=>$user->id])}}">ユーザー編集</a>
       </div>
    @else
       <p>フォロー</p>
    @endif
</div>
@if ($user->introduction === null)
<p class="intro">自己紹介文は登録されていません</p>
@else
<p class="intro">{{$user->introduction}}</p>
@endif
<hr>
<div class="item-box">
    @foreach ($user->item as $item)
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
