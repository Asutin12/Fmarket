@extends('layouts.sell')

@section('title','商品の出品')

@section('content')
<form method="post" action="{{route('sell.create')}}" class="listing">
    @csrf
    <h1 class="title">商品の出品</h1>
    {{-- <section>
        <div class="section-title">商品の詳細</div>
        <p class="section-item">カテゴリー</p>
        <input type="text" name="category">
        <p class="section-item">商品の状態</p>
        <input type="text" name="situation">
    </section> --}}
    <section>
        <div class="section-title">商品名と説明</div>
        <div class="row mb-3">
            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('商品名') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('商品の説明') }}</label>

            <div class="col-md-6">
                <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus></textarea>

                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </section>
    {{-- <section>
        <div class="section-title">配送について</div>
        <p class="section-item">配送料の負担</p>
        <input type="text" name="Dcharge">
        <p class="section-item">配送の方法</p>
        <input type="text" name="Dmethod">
        <p class="section-item">発送元の地域</p>
        <input type="text" name="Darea">
        <p class="section-item">発送までの日数</p>
        <input type="text" name="Ddays">
    </section> --}}
    <section>
        <div class="section-title">販売価格</div>
        <div class="row mb-3">
            <label for="price" class="col-md-4 col-form-label text-md-end">{{ __('販売価格') }}</label>

            <div class="col-md-6">
                <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

                @error('price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </section>
    <section>
        <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('出品') }}
                </button>
            </div>
        </div>
    </section>
</form>
@endsection
