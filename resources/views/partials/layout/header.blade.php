<nav class="navbar navbar-static-top navbar-oa">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home_path') }}">
                <img src="{{ asset('images/logo_oa.png') }}" alt="" class="brand-logo">
            </a>

        </div>
        <div id="navbar" class="collapse navbar-collapse">
            @include('partials.sidebar.main')
        </div>
    </div>
</nav>