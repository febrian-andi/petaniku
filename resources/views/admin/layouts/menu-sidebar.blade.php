<div class="border-bottom border-2 position-fixed text-center p-1 bg-light" style="border-color:#2fb201">
  <a href="/" class="d-flex align-items-center pb-1 mb-md-0 me-md-auto text-white text-decoration-none">
    <div class="mx-auto">
      <img src="{{ asset('assets/img/gallery/logo-petaniku-admin.png') }}" alt="Bootstrap logo" width="150" class="">
    </div>
  </a>
</div>   
<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0" style="background-color:#2fb201">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-6 text-white min-vh-100">
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link align-middle px-0 text-decoration-none">
                  <span class="iconify" data-icon="ic:baseline-home" style="font-size: 40px; color:white;"></span><span class="ms-1 d-none d-sm-inline" style="color:white;">Home</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.farmpedia') }}" class="nav-link px-0 align-middle">
                  <span class="iconify" data-icon="ph:book-fill" style="font-size: 40px; color:white;"></span><span class="ms-1 d-none d-sm-inline" style="color:white;">Farmpedia</span>
                </a>
            </li>
        </ul>
        <div class="dropdown pb-4">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                <span class="d-none d-sm-inline mx-1">loser</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="{{ route('admin.logout') }}">Log out</a></li>
            </ul>
        </div>
    </div>
</div>