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
    @include('partials.header')

    <main>
        <div class="container">
           @yield('content')
        </div>
    </main>

    @include('partials.footer')
</body>

</html>
