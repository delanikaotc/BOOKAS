<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="{{ url('/home') }}"><img class="logo" src="{{ \Illuminate\Support\Facades\URL::to("img/logo.png") }}" alt=""><span class="ml-2">BOOKAS</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item ml-2">
                <a><p>{{ session("name") }}</p></a>
            </li>
        </ul>
    </div>
</nav>
