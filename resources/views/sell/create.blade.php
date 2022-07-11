@extends('layouts.sell')

@section('title','商品の出品')

@section('content')
<div class="listing">
    <h1 class="title">商品の出品</h1>
    <section>
        <div class="section-title">商品の詳細</div>
        <p class="section-item">カテゴリー</p>
        <input type="text" name="category">
        <p class="section-item">商品の状態</p>
        <input type="text" name="">
    </section>
    <section>
        <div class="section-title">商品名と説明</div>
        <p class="section-item">商品名</p>
        <input type="text" name="">
        <p class="section-item">商品の説明</p>
        <textarea name="" id="" cols="30" rows="10"></textarea>
    </section>
    <section>
        <div class="section-title">配送について</div>
        <p class="section-item">配送料の負担</p>
        <input type="text" name="">
        <p class="section-item">配送の方法</p>
        <input type="text" name="">
        <p class="section-item">発送元の地域</p>
        <input type="text" name="">
        <p class="section-item">発送までの日数</p>
        <input type="text" name="">
    </section>
    <section>
        <div class="section-title">販売価格</div>
        <p class="section-item">販売価格</p>
        <input type="number" name="">
    </section>
    <section>

    </section>
</div>
@endsection
