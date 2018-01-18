<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') {{ config('app.name') }} - Website Designer in Nigeria</title>
        <meta name="description" content="@yield('description')">

        <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="{{ asset('css/default.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div id="app">
            <div id="main-header">
                <div class="container">
                    <nav class="navbar is-primary is-transparent" role="navigation" aria-label="main navigation">
                        <div class="navbar-brand">
                            <a class="navbar-item" href="/">
                            <img src="{{ asset('images/logo.png') }}" alt="Webdesk.com.ng Website Management Service in Nigeria" width="112" height="28">
                            </a>

                            <button class="button navbar-burger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                        <div class="navbar-menu navbar-end">
                            <a href="/" class="navbar-item {{ (Request::path() == '/') ? 'is-active' : '' }}">Home</a>
                            <a href="/about" class="navbar-item">About</a>
                            <a href="/pricing" class="navbar-item {{ (Request::path() == '/pricing') ? 'is-active' : '' }}">Pricing</a>
                            <a href="/contact" class="navbar-item">Contact</a>
                            <div class="navbar-item">
                                <a href="/login" class="button is-danger is-rounded" style="border-width: 2px; font-weight: 800">Client Login</a>
                            </div>
                            <div class="navbar-item"></div>
                        </div> <!-- Navbar menu -->
                    </nav>
                </div>
            </div>
            @yield('content')
            
            <div class="hero is-info">
                <div class="hero-body">
                    <div class="content has-text-centered">
                        <h3 class="title"><a href="tel:08094366415" class="is-size-3 is-size-4-mobile">Call us today on <span class="has-text-weight-bold has-text-white-ter">090 224 22022</span> to speak to an expert</a></h3>
                    </div>
                </div>
            </div>
            
            <footer class="footer">
                <div class="container">
                    <div class="level">
                        <div class="level-left is-size-7">
                            <ul class="footer-menu">
                                <li><a href="/">Home</a></li>
                                <li><a href="/about">About</a></li>
                                <li><a href="/pricing">Pricing</a></li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </div>
                        <div class="level-item has-text-center">
                            <a href="/"><img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }}" style="width: 100px; height: auto; opacity: .2"></a>
                        </div>
                        <div class="level-right is-size-7">
                            <ul class="footer-menu has-text-right">
                                <li><a href="/">Terms of Service</a></li>
                                <li><a href="/about">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <div class="level">
                        <div class="level-item has-text-centered">
                            <span class="is-size-7" style="opacity: .4">Copyright &copy; {{ config('app.name') }}  2018 | A service provided by <a href="http://clickmedia.com.ng" class="has-text-white-ter">Clickmedia Solutions</a></span>
                        </div>
                    </div>
                </div>
            </footer>
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

    </body>
</html>
