<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
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
                <div class="content has-text-centered">
                    <p>
                        <strong>Bulma</strong> by <a href="http://jgthms.com">Jeremy Thomas</a>. The source code is licensed
                        <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
                        is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
                    </p>
                </div>
            </div>
        </footer>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
