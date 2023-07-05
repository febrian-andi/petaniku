<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Petaniku | Farmpedia</title>

    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/gallery/logo-petaniku.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/gallery/logo-petaniku.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/gallery/logo-petaniku.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/gallery/logo-petaniku.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="theme-color" content="#ffffff">

    <link href="assets/css/theme.css" rel="stylesheet">

  </head>


  <body>
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top p-2 bg-light" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="{{ route('index') }}"><img class="d-inline-block align-top img-fluid" src="assets/img/gallery/logo-petaniku.png" alt="" width="40"/><span class="text-theme font-monospace fs-4 ps-2">Petaniku</span></a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item px-2"><a class="nav-link fw-medium active" href="{{ route('index') }}">Home</a></li>
              <li class="nav-item px-2"><a class="nav-link fw-medium" href="{{ route('farmpedia') }}">Farmpedia</a></li>
              <li class="nav-item px-2"><a class="nav-link fw-medium" href="{{ route('workflow') }}">Workflow</a></li>
              <li class="nav-item px-2"><a class="nav-link fw-medium" href="#invest">Community</a></li>
              <li class="nav-item px-2"><a class="nav-link fw-medium" href="#contact">Market </a></li>
            </ul>
            <form class="d-flex">
              <a class="btn btn-lg bg-gradient order-0" type="submit" style= "background-color:black; color:white;" onmouseover="this.style.backgroundColor='green';" onmouseout="this.style.backgroundColor='black';" href="{{ route('register') }}">Sign Up</a>
            </form>
          </div>
        </div>
      </nav>
      
      <section>
        <div class="container">
            <div class="container mb-5">
                <input type="text" class="form-control border-dark" id="search-input" placeholder="Search"/>        
            </div>
            <div class="row flex-center">
                <div class="row">
                    <?php
                        $title = 'Menanam Padi';
                        $image = 'assets/img/gallery/fully-funded.png';
                    ?>

                    @for($i = 1; $i <= 10; $i++)
                    <div class="col-md-3 mb-4">
                        <a class="text-decoration-none" href="{{ route('index')}}">
                            <div class="card shadow h-100">
                                <img src="{{ $image }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">{{ $title }}</h5>
                                    <p class="card-text text-start mt-6"><a href="#">Pelajari lebih lanjut</a></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endfor
                </div>    
            </div>
        </div>
      </section>
    </main>



    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="assets/js/theme.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Chivo:wght@300;400;700;900&amp;display=swap" rel="stylesheet">
  </body>

</html>