@extends('layouts.home')

@section('content')
<h1>profileページ</h1>
<p>{{$user->name}}</p>
{{-- <p>{{$user->item->price}}</p> --}}
<hr>

{{-- <a class="item" href="{{route('items.index',['item_id'=>$item->id])}}">
<img src="{{ '/storage/' . $item->image}}" width="200px"  alt="">
<p>{{$item->name}}</p>
<p>¥{{$item->price}}</p>
</a> --}}
@endsection
