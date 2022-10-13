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
            <p>{{$user->name}}</p>
            <form action="">
                @csrf
                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('ニックネーム') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </form>
@endsection
