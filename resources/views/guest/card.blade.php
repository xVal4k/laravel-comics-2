@extends('guest.template.main')

@section('title', $title)

@section('content')
<div class="blue_cont"></div>
<div class="container card_cont">
    <div class="text-top">
        <h1 class="title">{{ $product['title'] }}</h1>
        <div class="price">
            <div class="price_left">
                <p>
                    U.S. PRICE: <span class="white_text">{{ $product['price'] }}</span>
                </p>
                <p>AVAILABLE</p>
            </div>
            <div class="price_right"><a href="{{ route('blank_page') }}">Check Availability</a></div>
        </div>
        <a href="{{ route('home') }}"><img src="{{ $product['thumb'] }}" alt="{{ $product['title'] }}"></a>
        <p class="descr">{{ $product['description'] }}</p>
    </div>
    <div class="text-bottom">
        <div class="left">
            <h2>Talent</h2>
            <hr>
            <div class="art">
                <p>Art by:</p>
                <p class="blue_text"></p>
            </div>
        </div>
        <div class="right"></div>
    </div>
</div>
@endsection
