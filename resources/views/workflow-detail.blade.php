<?php
    $title = "Menjadi Petani Padi";
    $image = "assets/img/gallery/fully-funded.png";
    $tahapan = "Tahap";

    $titleRekomendasi = "Padi";
    $imageRekomendasi = "assets/img/gallery/fully-funded.png";
    $menu = "Farmpedia";
    $hrefRekomendasi = "farmpedia-detail";
    
?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>

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
      <nav class="navbar navbar-expand-lg navbar-light fixed-top p-2 bg-light">
        <a href="{{ ('workflow') }}"><span class="iconify ms-4" data-icon="mdi:arrow-left" style="font-size: 40px;"></span></a>
        <div class="mx-auto text-center">
          <h5 class="fw-light" style="color: #4fc358">{{ $title }}</h5>
        </div>
      </nav>
      
      <section class="pt-7 pb-0">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
                <img src="{{ $image }}" class="img-fluid card-img-top" alt="gambar" style="object-fit:cover">
            </div>
            <div class="col-md-6">
              <div class="text-center">
                <h1 class="fw-bold">{{ $title }}</h1> 
              </div>
              <div class="text-center mt-11">
                <button class="btn btn-success btn-lg rounded-pill" style="background-color: #4FC385">Mulai Alur</button>
              </div>
            </div>          
          </div>
        </div>
      </section>

      <section class="pt-2 pb-0">
        <div class="container">
          @for ($i = 0; $i < 10; $i++)
          <div class="card border mt-4 mb-4 shadow-sm" onmouseover="this.style.backgroundColor='#eefaee';" onmouseout="this.style.backgroundColor='white'">
            <div class="card-body">
              <h3 class="fw-bold" style="color: #0BAC56">{{ $tahapan }}</h3>
            </div>
          </div>
          @endfor
        
        </div>
      </section>

      <section class="py-4">
        <div class="container">
          <h4><i>Rekomendasi Terkait</i></h4>
          <div class="row flex-center mt-4">
            <div class="row">

                @for($i = 1; $i <= 4; $i++)
                <div class="col-md-3 mb-4">
                  <a href="{{ ($hrefRekomendasi) }}" class="text-decoration-none">
                    <div class="card shadow h-100 card-span">
                        <img src="{{ $imageRekomendasi }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{ $titleRekomendasi }}</h5>
                            <p class="card-text text-start mt-6"><i>~{{ $menu }}</i></p>
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
    <script src="assets/js/theme.min.js"></script>
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Chivo:wght@300;400;700;900&amp;display=swap" rel="stylesheet">
  </body>

</html>