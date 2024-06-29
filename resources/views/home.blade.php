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
            <img src=" {{$comic['thumb']}} " alt="">
            <h4>{{$comic['title']}} </h4>
            <p>{{$comic['description']}} </p>
            <span> {{$comic['series']}} </span>
            <span> {{$comic['sale_date']}} </span>
            <span> {{$comic['type']}} </span>
        </div>
        @endforeach
    </div>
</body>
</html>