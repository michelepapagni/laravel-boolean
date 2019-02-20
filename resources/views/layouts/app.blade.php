<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="@yield('meta_description', 'Boolean Careers - Corso Full Stack')">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>@yield('title', 'Boolean Careers')</title>
    </head>
    <body>
        @include('partials._header')

        @yield('content')

        @include('partials._footer')

        <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
    </body>
</html>
