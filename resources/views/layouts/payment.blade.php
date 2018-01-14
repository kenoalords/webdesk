<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta name="robots" content="index, no-follow" />
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
    </head>
    <body id="app">
        <div class="hero is-light is-medium">
            <div class="hero-body">
                <div class="columns">
                    <div class="column is-6 is-offset-3">
                        @if(Request::get('is_new') && Request::get('is_new') == 'true')
                        <div>
                            <h3 class="title is-4 has-text-weight-light is-marginless">Thank you for signing up!</h3>
                            <p>You are one step away, please make your payment below</p>
                        </div>
                        @endif
                        

                        @yield('content')


                        @if(Request::get('is_new') && Request::get('is_new') == 'true')
                            <p class="has-text-centered padded">
                                <a href="/dashboard" class="has-text-grey-lighter">
                                    <span class="icon"><i class="fa fa-arrow-left"></i></span> Pay later
                                </a>
                            </p>
                        @else
                            <p class="has-text-centered padded">
                                <a href="/dashboard" class="has-text-grey">
                                    <span class="icon"><i class="fa fa-arrow-left"></i></span> Dashboard
                                </a>
                            </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
