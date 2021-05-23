<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="/home"><img class="logo" src="{{ \Illuminate\Support\Facades\URL::to("img/logo.png") }}" alt=""><span class="ml-2">BOOKAS</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <div class="search">
            <ul class="navbar-nav mr-auto">
                <form class="form-inline my-2 my-lg-0" action="{{ url('/pencarian') }}" method="GET">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="cari">
                    <input class="btn btn-bookas my-2 my-sm-0" type="submit" value="">
                </form>
            </ul>
        </div>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle dropdowntext" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#EA6941">
                        Kategori
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Pengetahuan</a>
                        <a class="dropdown-item" href="#">Teknologi</a>
                        <a class="dropdown-item" href="#">Hukum</a>
                        <a class="dropdown-item" href="#">Memasak</a>
                        <a class="dropdown-item" href="#">Bisnis</a>
                    </div>
                </div>
            </li>
            <li class="nav-item ml-4">
            <!-- <a class="nav-link" href="{{ url('keranjang') }}"><i class="bi bi-handbag-fill" href="#"></i></a> -->
                <a class="nav-link" href="{{ url('keranjang') }}"><i class="bi bi-handbag-fill" style="font-size: 20px; color: #ffffff;"></i></i></a>
            </li>
            <li class="nav-item ml-2">
                <a class="nav-link" href="/profile"><p>{{ session("name") }}</p></a>
            </li>
        </ul>
    </div>
</nav>
