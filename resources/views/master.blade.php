<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/png" href="{!! asset('/favicon.png') !!}"/>
        <title>@yield('title')</title>

        @section('css')
            <!-- Fonts -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
            <!-- Styles -->
            <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">        
        @show
        
    </head>
    
    <body>
        
        <main class="full-height">
            <section class="page">
                @yield('content')
            </section>
        </main>
        
        @section('js')
            <script src="{{ asset('js/app.js') }}"></script>
        @show
    </body>
</html>