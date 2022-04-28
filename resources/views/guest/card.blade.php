@extends('guest.template.main')

@section('title', $title)

@section('content')
<div class="container card_cont">
    <h1>{{ $product['title'] }}</h1>
    <a href="{{ route('home') }}"><img src="{{ $product['thumb'] }}" alt="{{ $product['title'] }}"></a>
    <p>{{ $product['description'] }}</p>
</div>
@endsection
