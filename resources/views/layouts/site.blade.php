<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

    <link rel="stylesheet" href="{{ asset('bulma/css/bulma.css') }}">
    <link rel="stylesheet" href="{{ asset('enol/css/enolbase.css') }}">


    <!-- Default Statcounter code for devlopment http://dev.enol.mv -->
    <script type="text/javascript">
        var sc_project = 12461662;
        var sc_invisible = 1;
        var sc_security = "3b453db4";
        var sc_https = 1;
    </script>
    <script type="text/javascript" src="https://www.statcounter.com/counter/counter.js" async></script>
    <noscript>
        <div class="statcounter"><a title="Web Analytics" href="https://statcounter.com/" target="_blank"><img
                    class="statcounter" src="https://c.statcounter.com/12461662/0/3b453db4/1/" alt="Web
            Analytics"></a></div>
    </noscript>
    <!-- End of Statcounter Code -->
    {{-- THEME LOADING  CHECK VARIABLE IF CONDITION --}}
    <title>{{ config('app.name', 'SSCM') }}</title>
    <script defer src="{{ asset('fontawesome/js/all.js') }}"></script>
</head>

<body class="dark">
    <div class="container">
        <div class="section">
            <x-navbar></x-navbar>

            <x-alert class="is-overlay"></x-alert>
            {{-- <section class="hero is-fullheight"> --}}
            @yield('content')

            {{-- </section> --}}
            <x-footer></x-footer>
        </div>
    </div>
    <script src="{{ asset('enol/js/enolscripts.js') }}"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&libraries=&v=weekly"
      async
    ></script>
</body>

</html>
