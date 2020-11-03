<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/bulma.css')}}">
        <link rel="stylesheet" href="{{'css/enol.css'}}">
        <title>{{ config('app.name', 'SSCM') }}</title>
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script> 
      </head>
      <body>
        @include('partials.flash-message')
        @yield('content')
        @include('partials.footer')
        <script src="{{ asset('js/bulma.js') }}"></script>
    </body>
</html>
