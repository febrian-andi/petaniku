<nav class="navbar navbar-expand-lg navbar-light fixed-top p-2 bg-light" data-navbar-on-scroll="data-navbar-on-scroll">
    <div class="container"><a class="navbar-brand" href="{{ route('dashboard') }}"><img class="d-inline-block align-top img-fluid" src="assets/img/gallery/logo-petaniku.png" alt="" width="40"/><span class="text-theme font-monospace fs-4 ps-2">Petaniku</span></a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item px-2"><a class="nav-link fw-medium active" href="{{ route('dashboard') }}">Home</a></li>
                <li class="nav-item px-2"><a class="nav-link fw-medium" href="{{ route('farmpedia') }}">Farmpedia</a></li>
                <li class="nav-item px-2"><a class="nav-link fw-medium" href="{{ route('workflow') }}">Workflow</a></li>
                <li class="nav-item px-2 dropdown">
                    <a class="nav-link fw-medium dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Community
                    </a>
                    <ul class="dropdown-menu bg-light" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item bg-light" href="#">Artikel</a></li>
                        <li><a class="dropdown-item bg-light" href="#">Acara</a></li>
                        <li><a class="dropdown-item bg-light" href="#">Forum</a></li>
                    </ul>
                </li>
                <li class="nav-item px-2"><a class="nav-link fw-medium" href="#contact">Market </a></li>
            </ul>
            
        </div>
        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0 ms-11" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
                <li class="nav-item px-2 dropdown">
                    <a class="nav-link fw-medium dropdown-toggle" type="button" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu bg-light" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item bg-light" href="{{ route('profile.edit') }}">Profil</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item bg-light">Keluar</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>