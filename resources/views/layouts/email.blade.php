<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
        {{-- THEME LOADING  CHECK VARIABLE IF CONDITION--}}
        <link rel="stylesheet" href="{{asset('enol/css/enolemail.css')}}">
        <title>{{ config('app.name', 'SSCM') }}</title>
        <script defer src="{{ asset('fontawesome/js/all.js') }}"></script>
    </head>
    <body>
        @yield('content')
        <script src="{{ asset('js/bulma.js') }}"></script>
    </body>
</html>
