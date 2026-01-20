@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/thanks.css')}}">
<link rel="stylesheet" href="{{asset('css/common.css')}}"/>
@endsection

@section('content')
<div class=thanks__content>
<div class="thanks__inner"></div>
<div class="thanks__logo">
    Thank you</div>

<dic class="thanks__massage">
    お問い合わせありがとうございました</div>

<form class="home-form" action="/" method="get">
        <div class=home-form__button>
        <button class="home-form__button-submit" type="submit">
            HOME
</button>
</div>
</form>
</div>



@endsection
