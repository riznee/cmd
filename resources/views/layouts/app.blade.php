<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bulma.css">
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script> 
        <script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
    </head>
    <body>
        @yield('content')
    </body>
</html>
