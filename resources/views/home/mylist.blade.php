@extends('layouts.home')

@section('detail')
    <a href="{{route('home.index')}}">おすすめ</a>
    <a href="{{route('home.mylist',['user_id'=>$user->id])}}">マイリスト</a>
@endsection

@section('content')
<section>
    <div class="section-title">いいねした商品</div>
    @foreach ($likes as $like)
    @if ($auth_id = $like->user_id)
    <p>{{$like->item_id}}</p>
    @endif
    @endforeach
    <hr>
</section>
{{-- <section>
    <div class="section-title">フォロー中のユーザー</div>
    <hr>
</section> --}}

@endsection
