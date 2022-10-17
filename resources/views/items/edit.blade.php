@extends('layouts.sell')

@section('title','商品の出品')

@section('content')
<form method="post" action="{{route('items.edit',$item)}}" enctype="multipart/form-data" class="listing">
    @csrf
    <h1 class="title">商品の編集</h1>
    <section>
        <div class="row mb-3">
            <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('出品画像') }}</label>

            <div class="col-md-6">
                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{old('image')}}" required autocomplete="image" autofocus>

                @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </section>
    {{-- <section>
        <div class="section-title">商品の詳細</div>
        <div class="row mb-3">
            <label for="category" class="col-md-4 col-form-label text-md-end">{{ __('カテゴリー') }}</label>

            <div class="col-md-6">
                <input id="category" type="text" class="form-control @error('category') is-invalid @enderror" name="category" value="{{ old('category') }}" required autocomplete="category" autofocus>
                @error('category')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div> --}}
        {{-- <div class="row mb-3">
            <label for="situation" class="col-md-4 col-form-label text-md-end">{{ __('商品の状態') }}</label>

            <div class="col-md-6">
                <input id="situation" type="text" class="form-control @error('situation') is-invalid @enderror" name="situation" value="{{ old('situation') }}" required autocomplete="situation" autofocus>
                @error('situation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </section> --}}
    <section>
        <div class="section-title">商品名と説明</div>
        <div class="row mb-3">
            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('商品名') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$item->name}}" required autocomplete="name" autofocus>

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
                <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{old('description')}}" required autocomplete="description" autofocus>{{$item->description}}</textarea>

                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </section>
    <section>
        <div class="section-title">配送について</div>
        <div class="row mb-3">
            <label for="DelivaryCharge" class="col-md-4 col-form-label text-md-end">{{ __('配送料の負担') }}</label>

            <div class="col-md-6">
                <select id="DelivaryCharge" type="text" class="form-control @error('DelivaryCharge') is-invalid @enderror" name="DelivaryCharge" value="{{ old('DelivaryCharge') }}" required autocomplete="DelivaryCharge" autofocus>
                    <option value="選択する">選択する</option>
                    <option value="送料込み（出品者負担）">送料込み（出品者負担）</option>
                    <option value="着払い（購入者負担）">着払い（購入者負担）</option>
                @error('DelivaryCharge')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <label for="DelivaryMethod" class="col-md-4 col-form-label text-md-end">{{ __('配送の方法') }}</label>

            <div class="col-md-6">
                <select id="DelivaryMethod" type="text" class="form-control @error('DelivaryMethod') is-invalid @enderror" name="DelivaryMethod" value="{{ old('DelivaryMethod') }}" required autocomplete="DelivaryMethod" autofocus>
                    <option value="選択する">選択する</option>
                    <option value="未定">未定</option>
                    <option value="普通郵便">普通郵便</option>
                    <option value="クロネコヤマト">クロネコヤマト</option>
                @error('DelivaryMethod')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="DelivaryArea" class="col-md-4 col-form-label text-md-end">{{ __('発送元の地域') }}</label>

            <div class="col-md-6">
                <select id="DelivaryArea" type="text" class="form-control @error('DelivaryArea') is-invalid @enderror" name="DelivaryArea" value="{{ old('DelivaryArea') }}" required autocomplete="DelivaryArea" autofocus>
                    <option value="選択する">選択する</option>
                    <option value="未定">未定</option>
                    <option value="普通郵便">普通郵便</option>
                    <option value="クロネコヤマト">クロネコヤマト</option>
                @error('DelivaryArea')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="DelivaryDays" class="col-md-4 col-form-label text-md-end">{{ __('発送までの日数') }}</label>

            <div class="col-md-6">
                <select id="DelivaryDays" type="text" class="form-control @error('DelivaryDays') is-invalid @enderror" name="DelivaryDays" value="{{ old('DelivaryDays') }}" required autocomplete="DelivaryDays" autofocus>
                    <option value="選択する">選択する</option>
                    <option value="１〜２日">１〜２日</option>
                    <option value="２〜４日">２〜４日</option>
                    <option value="４〜７日">４〜７日</option>
                @error('DelivaryDays')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </select>
            </div>
        </div>
    </section>
    <section>
        <div class="section-title">販売価格</div>
        <div class="row mb-3">
            <label for="price" class="col-md-4 col-form-label text-md-end">{{ __('販売価格') }}</label>

            <div class="col-md-6">
                <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{$item->price}}" required autocomplete="price" autofocus>

                @error('price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </section>
    <section>
        <div class="mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('更新する') }}
                </button>
            </div>
        </div>
    </section>
</form>
<section>
    <form method="post" action="{{route('items.delete',$item)}}">
        @csrf
        @method('delete')
        <div class="mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('削除する') }}
                </button>
            </div>
        </div>
    </form>
</section>
@endsection

