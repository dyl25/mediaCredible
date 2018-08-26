<header>
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark bg-primary">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Product Application</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar" aria-controls="mainNavbar"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="{{ route('medias') }}" class="nav-link">Medias</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contents') }}" class="nav-link">Contenus</a>
                    </li>
                </ul>
                <form class="form-inline mt-2 mt-md-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>