@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/confirm.css')}}">
<link rel="stylesheet" href="{{asset('css/common.css')}}"/>
@endsection

@section('content')
<?php print_r($contact) ?>
<div class="confirm-form__content">
    <div class="confirm-form__title">
        Confirm</div>
</div>
</div>

<form class="form" action="/thanks" method="post">
        @csrf
        <input type="hidden" name="category_id" value="{{$contact['category_id']}}">
    <div class="confirm-table">
        <table class="confirm-table__inner">
        <tr class="confirm-table__row">
            <th class="confirm-table__label">お名前</th>
            <td class="confirm-table__text">
                <input type="text" name="name" value="{{$contact['last_name']}},{{$contact['first_name']}}" readonly/>
</td>
</tr>

<tr class="confirm-table__row">
<th class="confirm-table__label">性別</th>
            <td class="confirm-table__text">
                <input type="hidden" name="gender" value="{{$contact['gender']}}"readonly />


</td>
</tr>

<tr class="confirm-table__row">
<th class="confirm-table__label">メールアドレス</th>
            <td class="confirm-table__text">
                <input type="hidden" name="email" value="{{$contact['email']}}"readonly />
</td>
</tr>

<tr class="confirm-table__row">
<th class="confirm-table__label">電話番号</th>
            <td class="confirm-table__text">
                <input type="hidden" name="tel" value="{{$contact['tel1']}}-{{$contact['tel2']}}-{{$contact['tel3']}}"readonly />
</td>
</tr>

<tr class="confirm-table__row">
<th class="confirm-table__label">住所</th>
            <td class="confirm-table__text">
                <input type="hidden" name="address" value="{{$contact['address']}}"readonly />
</td>
</tr>

<tr class="confirm-table__row">
<th class="confirm-table__label">建物名</th>
            <td class="confirm-table__text">
                <input type="hidden" name="address2" value="{{$contact['address2']}}"readonly />
</td>
</tr>

<tr class="confirm-table__row">
<th class="confirm-table__label">お問い合わせ種類</th>
            < class="confirm-table__text">
                {{$contact['category_id']}}
                <input type="hidden" name="category_id" value="{{$contact['category_id']}}" readonly/>
</td>
</tr>

<tr class="confirm-table__row">
<th class="confirm-table__label">お問い合わせ内容</th>
            <td class="confirm-table__text">
                {{$contact['detail']}}
                <input type="hidden" name="detail" value="{{$contact['detail']}}"> readonly/>
</td>
</tr>
</table>
</div>

<div class="send-confirm">
        <div class=send-form__button>
        <button class="send-form__button-submit" type="submit">
            送信
</button>
</div>
</form>
</div>


@endsection
