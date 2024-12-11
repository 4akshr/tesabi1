@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')

<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>
            新規登録
        </h2>
    </div>
    <form class="form" action="contacts/confirm" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--required">
                    ※
                </span>
                <span class="form__label--item">
                    お名前
                </span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="first_name" placeholder="山田" value="{{ old('name') }}" />
                    <input type="text" name="last_name" placeholder="太郎" value="{{ old('name') }}" />
                </div>
                <div class="form__error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--required">
                    ※
                </span>
                <span class="form__label--item">
                    性別
                </span>
            </div>
            <div class="form__group-content">
                <div class="form__input--radio">
                    <input type="radio" name="difficulty" value="1" checked>男性
                    <input type="radio" name="difficulty" value="2" >女性
                </div>
                <br>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--required">
                            ※
                        </span>
                        <span class="form__label--item">
                            メールアドレス
                        </span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}" />
                        </div>
                        <div class="form__error">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--required">
                            ※
                        </span>
                        <span class="form__label--item">
                            パスワード
                        </span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="password" name="password" placeholder="" value="{{ old('password') }}" />
                        </div>
                        <div class="form__error">
                            @error('password')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">
                        送信
                    </button>
                </div>
            </form>
        </div>
    </form>
</div>
@endsection