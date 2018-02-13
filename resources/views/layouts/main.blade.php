<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>

        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css') }}">
    </head>
    <body>
        <h1>Layout Main</h1>

        <div class="container">
            @yield('content')
        </div>

        <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    </body>
</html>