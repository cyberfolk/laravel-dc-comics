<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DC @yield('page_title')</title>
    @vite('resources/scss/app.scss')
    @vite('resources/js/app.js')
</head>

<body>
    @include('partials.header')
    @include('partials.jumbotron')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')
</body>

</html>