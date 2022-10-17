@extends('layouts.home')

@section('content')
{{-- @if (Auth::check())
                <p>USER: {{$user->name}}</p>
                {{-- <p>USER: {{$user->family_name . ' ' . $user->first_name }}</p> --}}
                {{-- <p>Birth_day: {{$user->birth_day_yy . '年' . $user->birth_day_mm . '月' . $user->birth_day_dd . '日'}}</p> --}}

            {{-- @else
            <p>※ログインしていません(<a href="/login">ログイン</a>|<a href="/register">会員登録</a>)</p>
            @endif  --}}

            <h3>プロフィール設定</h3>
            <img src="{{ '/storage/' . $user->image}}" width="100px"  alt="">
            <form method="post" action="{{route('profile.edit',$user)}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$user->id}}">
                <div class="row mb-3">
                    <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('プロフィール画像') }}</label>

                    <div class="col-md-6">
                        <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('$image') }}" required autocomplete="image" autofocus>

                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('ニックネーム') }}</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="introduction" class="col-md-4 col-form-label text-md-end">{{ __('自己紹介文') }}</label>

                    <div class="col-md-6">
                        <textarea id="introduction" type="text" class="form-control @error('introduction') is-invalid @enderror" name="introduction" value="{{$user->introduction}}" required autocomplete="introduction" autofocus></textarea>

                        @error('introduction')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('更新する') }}
                        </button>
                    </div>
                </div>
            </form>
@endsection
