@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
<link rel="stylesheet" href="{{asset('css/common.css')}}"/>
@endsection

@section('content')

<div class="form-content">
<div class="contact-form__content">
    <div class="contact-form__title">
        Contact</div>
</div>

<form class="form-contact" action="/confirm" method="post">
    @csrf
<div class="contact-row">
    <div class="form-row__label">
        お名前
        <span class="form-row__need">※</span>
</div>

    <div class="form-contact__name">
        <input class="form-contact__name-input" type="text" name="last_name" placeholder="例:山田" value="{{old('last_name')}}"/>
        <div class="form__error">
        @error('last_name')
        {{$message}}
        @enderror
</div>
<input class="form-contact__name-input" type="text" name="first_name" placeholder="例:太郎" value="{{old('first_name')}}"/>
<div class="form__error">
        @error('first_name')
        {{$message}}
        @enderror
</div>
</div>
</div>


<div class="contact-row">
<div class="form-row__label">
        性別
        <span class="form-row__need">※</span>
</div>
<div class="form-radio">
    <label><input type="radio" name="gender" value="1">男性</label>
    <label><input type="radio" name="gender" value="2">女性</label>
    <label><input type="radio" name="gender" value="3">その他</label>
    <div class="form__error">
        @error('gender')
        {{$message}}
        @enderror
</div>
</div>
</div>


<div class="contact-row">
    <div class="form-row__label">
        メールアドレス
        <span class="form-row__need">※</span>
</div>

<div class="form-contact__mall">
<div class="form-contact__field">
        <input class="form-contact__mall-input" type="email" name="email" placeholder="test@example.jp" value="{{old('email')}}"/>
        <div class="form__error">
        @error('email')
        {{$message}}
        @enderror
</div>
</div>
</div>
</div>

<div class="contact-row">
<div class="form-row__label">
        電話番号
        <span class="form-row__need">※</span>
</div>

<div class="form-contact__tel">
<div class="form-contact__tel-input">
        <input type="tel" name="tel1" placeholder="090" value="{{old('tel1')}}"/> -
        <input type="tel" name="tel2" placeholder="1234" value="{{old('tel2')}}"/> -
        <input type="tel" name="tel3" placeholder="5678" value="{{old('tel3')}}"/>
        <div class="form__error">
        @error('tel')
        {{$message}}
        @enderror
</div>
</div>
</div>
</div>

<div class="contact-row">
    <div class="form-row__label">
        住所
        <span class="form-row__need">※</span>
</div>

<div class="form-contact__address">
<div class="form-contact__field">
        <input class="form-contact__address-input" type="text" name="address" placeholder="東京都渋谷区..." value="{{old('address')}}"/><div class="form__error">
        @error('address')
        {{$message}}
        @enderror
</div>
</div>
</div>
</div>

<div class="contact-row">
    <div class="form-row__label">
        建物名
</div>

<div class="form-contact__address2">
<div class="form-contact__field">
        <input class="form-contact__address2-input" type="text" name="building" placeholder="〇×マンション" value="{{old('building')}}"/>
</div>
</div>
</div>

<div class="contact-row">
    <div class="form-row__label">
        お問い合わせの種類
        <span class="form-row__need">※</span>
</div>

<div class="form-contact__contact">
<div class="form-contact__contact-box">
        <div class="form-contact__contact-input" type="text" name="category_id">
        <select class=select  name="category_id">
        <option value="1">商品のお届けについて</option>
        <option value="2">商品の交換について</option>
        <option value="3">商品トラブル</option>
        <option value="4">ショップへのお問い合わせ</option>
        <option value="5">その他</option>
</select>
<div class="form__error">
        @error('category_id')
        {{$message}}
        @enderror
</div>
</div>
</div>
</div>
</div>

<div class="contact-row">
    <div class="form-row__label">
        お問い合わせの内容
        <span class="form-row__need">※</span>
</div>

<div class="form-contact__contact2">
<div class="form-contact__contact2-box">
        <input class="form-contact__contact2-input" type="detail" name="detail" placeholder="お問い合わせ内容をご記載ください" value="{{old('detail')}}"/>
        <div class="form__error">
        @error('detail')
        {{$message}}
        @enderror
</div>
</div>
</div>
</div>

        <div class="check-form">
        <div class=check-form__button>
        <button class="check-form__button-submit" type="submit">
            確認画面
</button>
</div>
</div>
</form>
</div>


@endsection
