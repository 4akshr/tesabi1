@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm__content">
    <div class="confirm__heading">
        <h2>
            お問い合わせ内容確認
        </h2>
    </div>
    <?php print_r($contact['name']) ?>
    <form class="form" action="/contacts" method="post">
        @csrf
        <div class="confirm-table">
            <table class="confirm-table__inner">
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">
                        お名前
                    </th>
                    <td class="confirm-table__text">
                        <input type="text" name="name" value="{{ $contact['first_name'] ['last_name'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">
                        メールアドレス
                    </th>
                    <td class="confirm-table__text">
                        <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">
                        パスワード
                    </th>
                    <td class="confirm-table__text">
                        <input type="password" name="password" value="{{ $contact['password'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">
                        お問い合わせ内容
                    </th>
                    <td class="confirm-table__text">
                        <input type="text" name="content" value="{{ $contact['content'] }}" readonly />
                    </td>
                </tr>
            </table>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">
                送信
            </button>
        </div>
    </form>
</div>
@endsection