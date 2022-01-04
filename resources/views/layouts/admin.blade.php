<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
        <!-- Default Statcounter code for devlopment http://dev.enol.mv -->
            <script type="text/javascript">
          var sc_project=12461662; 
          var sc_invisible=1; 
          var sc_security="3b453db4"; 
          var sc_https=1; 
          </script>
          <script type="text/javascript"
          src="https://www.statcounter.com/counter/counter.js" async></script>
          <noscript><div class="statcounter"><a title="Web Analytics"
          href="https://statcounter.com/" target="_blank"><img class="statcounter"
          src="https://c.statcounter.com/12461662/0/3b453db4/1/" alt="Web
          Analytics"></a></div></noscript>
        <!-- End of Statcounter Code -->
        {{-- THEME LOADING  CHECK VARIABLE IF CONDITION--}}
        <link rel="stylesheet" href="{{asset('enol/css/enolbase.css')}}">
        <title>{{ config('app.name', 'SSCM') }}</title>
        <script defer src="{{ asset('fontawesome/js/all.js') }}"></script>
        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    </head>
    <body>

        <main class="container-fluid">
           <x-adminNav></x-adminNav>
            <div class="row">
               <x-adminPanel></x-adminPanel>
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                    <br/>
                    <div class="container">
                        {{-- <div class="row justify-content-center"> --}}
                            <x-alert></x-alert>
                            @yield('content')
                        {{-- </div> --}}
                    </div>
                    
                </main>
            </div>
            <x-footer></x-footer>
        </main>
        <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
    </body>
</html>
