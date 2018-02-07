
<header class="fixed-top">
        <div class="row">
        <div class="col-lg-4">

        </div>
            <div class="col-lg-4 text-center">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    <img src="assets/resources/images/red-sea-one-logo.png" height="60px">
                </a>
            </div>
            <div class="col-lg-4 text-right">
                <button type="button" id="login-btn" class="btn btn-danger btn-sm">Sign In</button>
            </div>
        </div>

    <nav class="navbar navbar-expand-md">
    <div class="container">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto nav-fill">
                <a class="nav-item nav-link" href="{{ url('/liveaboard') }}" {!! (Request::is('liveaboard')? 'class="L1 active"':"") !!}>LiveAboard</a>
                <a class="nav-item nav-link" href="{{ url('/marsa-alam') }}" {!! (Request::is('marsa-alam')? 'class="L1 active"':"") !!}>Marsa Alam</a>
                <a class="nav-item nav-link" href="{{ url('/spots') }}" {!! (Request::is('spots') || substr(Request::path(), 0, 6) == "spots/" ? 'class="L1 active"':"") !!}>Diving Spots</a>
                <a class="nav-item nav-link" href="{{ url('/schedule') }}" {!! (Request::is('schedule')? 'class="L1 active"':"") !!}>Schedule</a>
                <a class="nav-item nav-link" href="{{ url('/gallery') }}" {!! (Request::is('gallery')? 'class="L1 active"':"") !!}>Gallery</a>
                <a class="nav-item nav-link" href="{{ url('/contact') }}" {!! (Request::is('contact')? 'class="L1 active"':"") !!}>Contact</a>
                
            </div>
        </div>
    

    </div>
    <!-- ./container -->
</nav>

</header>

