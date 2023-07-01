<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <style>
        input, button {
            outline: none !important;
        }
    </style>
</head>
<body>
    <div id="app">
        <section class="px-8 py-4 mb-0">
            <header class="container mx-auto">
                <h1 class="logo" style="font-size: 2em;font-weight: 700;font-style: italic;color:#1DA1F2"> <a href="{{url('/tweets')}}">Tweety</a></h1>
            </header>
        </section>

        <section>
            @yield('loginandsignupcontent');
        </section>

        <section class="px-8">
            <main class="container mx-auto">
                <div class="lg:flex lg:justify-between">
                    <!--Left Sidebar-->
                    @if(Auth::check())
                        <div class="lg:w-32">
                            @include('_sidebar-links')
                        </div>
                    @endif
                    <!--middle content-->
                        <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">

                            @yield('content')

                        </div>
                    <!--friends sidebar-->
                    @if(Auth::check())
                        <div class="lg:w-1/6  rounded-lg p-4">
                            @include('_friends-list')
                        </div>
                    @endif
                </div>
            </main>
        </section>

    </div>
</body>
</html>
