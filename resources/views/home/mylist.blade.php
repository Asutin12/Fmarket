@extends('layouts.home')

@section('detail')
    <a href="{{route('home.index')}}">おすすめ</a>
    <a href="{{route('home.mylist',['user_id'=>$user->id])}}">マイリスト</a>
    <a href="">ピックアップ</a>
@endsection

@section('content')
<section>
    <div class="section-title">保存した検索条件</div>
    <hr>
</section>
<section>
    <div class="section-title">あなたの興味のある商品</div>
    <hr>
</section>
<section>
    <div class="section-title">フォロー中のユーザー</div>
    <hr>
</section>

@endsection
