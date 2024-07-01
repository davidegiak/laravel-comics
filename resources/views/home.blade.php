@extends('layouts.app')

@section('content')
    @foreach ($comics as $key => $comic)
        <div class="card">
            <a href="/comic/{{ $key }}">
                <div class="desc-card">
                    <h4 class="title" style="white-space: nowrap">{{ $comic['title'] }} </h4>
                    <p>{{ $comic['description'] }} </p>
                    <span> {{ $comic['series'] }} </span>
                    <span> {{ $comic['sale_date'] }} </span>
                    <span> {{ $comic['type'] }} </span>
                </div>
                <div class="face">
                    <img class="home-imgs" src=" {{ $comic['thumb'] }} " alt="">
                    <h4 class="title">{{ $comic['title'] }}</h4>
                    <p class="description">{{ $comic['description'] }} </p>
                    <span class="description"> {{ $comic['series'] }} </span>
                    <span class="description"> {{ $comic['sale_date'] }} </span>
                    <span class="description"> {{ $comic['type'] }} </span>
                </div>
            </a>
        </div>
    @endforeach
@endsection
