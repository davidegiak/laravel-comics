<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-comics</title>
    <link rel="stylesheet" href="app.css">
</head>

<body>
    <div class="container">
        @foreach ($comics as $comic)
            <div class="card">
                <div class="desc-card">
                    <h4>{{ $comic['title'] }} </h4>
                    <p>{{ $comic['description'] }} </p>
                    <span> {{ $comic['series'] }} </span>
                    <span> {{ $comic['sale_date'] }} </span>
                    <span> {{ $comic['type'] }} </span>
                </div>
                <div class="face">
                    <img src=" {{ $comic['thumb'] }} " alt="">
                    <h4>{{ $comic['title'] }} </h4>
                    <p class="description">{{ $comic['description'] }} </p>
                    <span class="description"> {{ $comic['series'] }} </span>
                    <span class="description"> {{ $comic['sale_date'] }} </span>
                    <span class="description"> {{ $comic['type'] }} </span>
                </div>
            </div>
        @endforeach
    </div>
    @include('about')
</body>

</html>
