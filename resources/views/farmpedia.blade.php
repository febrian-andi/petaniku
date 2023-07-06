<?php 
  $title = "Padi/Oryza sativa";
?>

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
      @include('layouts.navbar')
      
      <section class="pb-0">
        <div class="container">
          <input type="text" class="form-control border-dark" id="search-input" placeholder="Search"/>        
        </div>
        <div class="container mt-5">

          @for ($i = 0; $i < 10; $i++)
          <a class="text-decoration-none" href="{{ ('farmpedia-detail') }}">
          <div class="card border mt-4 mb-4 shadow-sm" onmouseover="this.style.backgroundColor='#eefaee';" onmouseout="this.style.backgroundColor='white'">
            <div class="card-body">
              <h3 class="fw-bold" style="color: #0BAC56">{{ $title }}</h3>
            </div>
          </div>
          </a>
          @endfor
        
        </div>
      </section>
    </main>



    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/theme.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Chivo:wght@300;400;700;900&amp;display=swap" rel="stylesheet">
  </body>

</html>