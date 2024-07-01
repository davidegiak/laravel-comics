@extends('layouts.app')

@section('content')
    <div class="thumb">
        <div class="cardDesc">
            <h4>{{ $fumetto['title'] }} </h4>
            <p>{{ $fumetto['description'] }} </p>
            <div class="spans">
                <span> {{ $fumetto['series'] }} </span>
                <span> {{ $fumetto['sale_date'] }} </span>
                <span> {{ $fumetto['type'] }} </span>
            </div>
        </div>
        <div class="about-thumb">
            <img src=" {{ $fumetto['thumb'] }} " alt="" style="width: 100%" height="100%">
        </div>
    </div>
@endsection
