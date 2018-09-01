<nav class="navbar sticky-top flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="#">
                <i class="fas fa-power-off"></i> Sign out</a>
        </li>
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">

        <nav class="col-md-2 d-none d-md-block sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <i class="fas fa-tachometer-alt"></i> Dashboard
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#collapseMedias">
                            <i class="fas fa-newspaper"></i> Médias
                            <i class="fas fa-caret-down fa-2x float-right"></i>
                        </a>
                        <ul class="manage-command collapse" id="collapseMedias">
                            <li class="nav-item">
                                <a class="nav-link">Ajouter</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">supprimer</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#collapseContent">
                            <i class="fas fa-book-open"></i> Contenus
                            <i class="fas fa-caret-down fa-2x float-right"></i>
                        </a>
                        <ul class="manage-command collapse" id="collapseContent">
                            <li class="nav-item">
                                <a class="nav-link">Ajouter</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">supprimer</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

    </div>
</div>