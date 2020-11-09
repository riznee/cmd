<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('enol/css/enolbase.css')}}">
        <title>{{ config('app.name', 'SSCM') }}</title>
        <script defer src="{{ asset('fontawesome/js/all.js') }}"></script>

      </head>
      <body>
        @include('dark.partials.flash-message')
        @yield('content')
        @include('dark.partials.footer')
         <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
    </body>
</html>
