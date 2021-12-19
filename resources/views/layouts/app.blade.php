<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DC COMICS | @yield('page-title','pasta')</title>

         <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <!-- Custom CSS -->
        @yield('custom-css')
    </head>


    <body>

        @include('partials.header')

        <main id='app_main'>
            @yield('content')
        </main>

        <footer id='app_footer'>
        </footer>
        @include('partials.footer')


        <!-- Custom scripts -->
        @yield('custom-js')
    </body>
</html>
