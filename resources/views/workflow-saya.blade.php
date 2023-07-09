<?php
    $title = 'Menanam Padi Lahan 1';
    $image = asset('https://static.republika.co.id/uploads/images/inpicture_slide/190702155620-374.jpg');
    $referensi_alur = 'Menanam Padi';
?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Petaniku | Alur Saya</title>

    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/gallery/logo-petaniku.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/gallery/logo-petaniku.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/gallery/logo-petaniku.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/gallery/logo-petaniku.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="theme-color" content="#ffffff">

    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet">
    {{-- <link href="assets/css/theme.min.css" rel="stylesheet"> --}}

  </head>


  <body>
    <main class="main" id="top">
      @include('layouts.navbar')

      <section class="mt-3">
        <div class="container d-flex align-items-center justify-content-between">
          <input type="text" class="form-control border-dark" id="search-input" placeholder="Search"/>
          <button class="btn btn-primary" type="submit" style="background-color: #0BAC56; border-color: #0BAC56"><span class="iconify" data-icon="tabler:search"></span></button>     
        </div>
        @include('layouts.filter-sidebar')
        
        <div class="container">
          <h1 class="text-center fw-bold">Alur Saya</h1>
          <hr class="mb-4">
          <div class="row flex-center">
            <div class="row">
              
                @for($i = 1; $i <= 7; $i++)
                <div class="col-md-3 mb-4">
                  <a href="{{ route('alur.saya.detail') }}" class="text-decoration-none">
                  <div class="card shadow h-100 card-span">
                      <img src="{{ $image }}" class="card-img-top" alt="..." style="height:200px; object-fit:cover;">
                      <div class="card-body">
                          <h5 class="card-title fw-bold">{{ $title }}</h5>
                          <p class="card-text text-start mt-5">{{ $referensi_alur }}</p>
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
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Chivo:wght@300;400;700;900&amp;display=swap" rel="stylesheet">
  </body>

</html>