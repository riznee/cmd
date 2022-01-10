<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

        <title>{{ config('app.name', 'SSCM') }}</title>
        
        <link rel="stylesheet" href="{{asset('bulma/css/bulma.css')}}">
        <link rel="stylesheet" href="{{asset('enol/css/enolbase.css')}}">
        <link rel="stylesheet" href="{{asset('DataTables/datatables.min.css')}}">
       
 
        
        <script defer src="{{ asset('fontawesome/js/all.js') }}"></script>
        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
        <script type="text/javascript" src="{{asset('DataTables/datatables.min.js')}}"></script>

        <!-- Default Statcounter code for devlopment http://dev.enol.mv -->
        <script type="text/javascript">
            var sc_project=12461662; 
            var sc_invisible=1; 
            var sc_security="3b453db4"; 
            var sc_https=1; 
        </script>
        <script type="text/javascript"
            src="https://www.statcounter.com/counter/counter.js" async>
        </script>
        <noscript>
            <div class="statcounter"><a title="Web Analytics"
            href="https://statcounter.com/" target="_blank"><img class="statcounter"
            src="https://c.statcounter.com/12461662/0/3b453db4/1/" alt="Web
            Analytics"></a></div>
        </noscript>
          <!-- End of Statcounter Code -->
          {{-- THEME LOADING  CHECK VARIABLE IF CONDITION--}}

    </head>
  

    <body>
        <div class="container">
            <x-adminNav></x-adminNav>
            <x-alert></x-alert>
        </div>
        <section class="container">
            <section class="hero is-fullheight-with-navbar">
                <div class="columns is-gapless" >

                    <div class=" box  column is-3" style=" margin: 10px 0px" > 
                        <section class="hero is-fullheight">   
                            <x-adminPanel></x-adminPanel>
                        </section>
                    </div>

                    <div class=" box  column" style=" margin: 10px 10px" >

                            
                            @yield('content')
                       
                                 
                    </div> 
                </div>
                    <script src="{{ asset('enol/js/enolscripts.js') }}"></script>
                <x-footer></x-footer>
                {{--  </div>  --}}
            </section>
        </section>
         
          
    </body>
    
</html>
