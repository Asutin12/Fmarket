@extends('layouts.home')

@section('detail')
    <a href="{{route('home.index')}}">おすすめ</a>
    <a href="{{route('home.mylist',['user_id'=>$user->id])}}">マイリスト</a>
    <a href="">ピックアップ</a>
@endsection

@section('content')
<p>{{$item->name}}</p>
@endsection
