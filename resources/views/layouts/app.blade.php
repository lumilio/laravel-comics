<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DC COMICS | @yield('page-title')</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
        <!-- Custom CSS --> @yield('custom-css')
    </head>



    <body>
        @include('partials.header')
        <main id='app_main'>@yield('content')</main>
        @include('partials.footer')
        
        <!-- Custom scripts --> @yield('custom-js')
    </body>



    
</html>
