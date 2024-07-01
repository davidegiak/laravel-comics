<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-comics</title>
    <link rel="stylesheet" href="/app.css">
</head>

<body>
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
</body>

</html>