<div id="admin-header">
    <div>
        <nav class="navbar is-grayish" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="/dashboard">
                    <img src="{{ asset('images/logo.png') }}" alt="Webdesk.com.ng Website Management Service in Nigeria" width="112" height="28">
                </a>

                <button class="button navbar-burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
            <div class="navbar-menu navbar-end">
                <a href="/dashboard" class="navbar-item">Hi {{ $fullname }}!</a>
                <a href="/logout" class="navbar-item">
                    <span class="icon"><i class="fa fa-power-off"></i></span> <span>Logout</span>
                </a>
            </div> <!-- Navbar menu -->
        </nav>
    </div>
</div>