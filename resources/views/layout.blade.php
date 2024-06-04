<!DOCTYPE html>
<html>
    <head>
        <style>
            .activo a{
                display: block;
                background-color: white;
                color:#55BAC6;
                border-width: medium;
                border-radius: 5px;
                text-decoration: none;
            }
        </style>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        </head>
    <body>
        <h1 class="colores box">CEXPE</h1>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
            <table class = "table tabla">
                @include('partials.nav')
            </table>
            </div>
        </nav>
        @yield('content')
    </body>
</html>