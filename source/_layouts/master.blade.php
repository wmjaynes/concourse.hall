<!DOCTYPE html>
<html>
<head>
    @if($page->production)
        @include('_partials.googleAnalytics')
    @endif

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Concourse Hall</title>

    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script
            src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
            crossorigin="anonymous">
    </script>
    <script src="{{ mix('js/navbar.js', 'assets/build') }}"></script>

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

    {{--<link rel="stylesheet" href="/css/aactmad.css">--}}

    @yield('header')
</head>
<body>


@include('_partials.hero')

<div>
    @yield('body')
</div>


@include('_partials.footer')

{{--</div>--}}
</body>
</html>
