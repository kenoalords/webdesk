<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="{{ asset('css/default.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script>
            window.Laravel  = {!! json_encode([
                'csrfToken'     => csrf_token(),
                'url'           => config('app.url'),
                'userLoggedIn'  => (Auth::user()) ? true : false,
                'user_id'       => (Auth::user()) ? Auth::user()->id : 0,
                'is_admin'      => (Auth::user() && Auth::user()->is_admin) ? Auth::user()->id : 0,
            ]) !!};
        </script>
    </head>
    <body>

        @include('dashboard.composers.admin_header')

        <div class="columns is-gapless" style="margin-bottom: 0">
            <aside class="column is-2" style="background-color: #f5f5f5">
                @include('dashboard.includes.aside')
            </aside>
            <div class="column is-10"  id="app">
                <div class="hero ">
                    <div class="hero-body is-paddingless">
                        <div class="hero">
                            <div class="hero-body">
                                <div class="columns">
                                    <div class="column is-6 is-offset-3">
                                        @yield('content')
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
        <script src="{{ asset('js/app.js') }}"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112666247-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-112666247-1');
        </script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114100486-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-114100486-1');
        </script>

    </body>
</html>
