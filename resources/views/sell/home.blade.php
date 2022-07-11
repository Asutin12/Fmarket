@extends('layouts.other')

@section('title','出品')

@section('content')
<h2 class="mini-title">商品の出品</h2>
<ul class="sell">
    <p><a class="sell-item" href="{{route('sell.create')}}">出品する</a></p>
    <p><a class="sell-item" href="{{route('sell.drafts')}}">下書き一覧</a></p>
</ul>

@endsection
