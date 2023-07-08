{{-- <?php 
  $title = "Padi/Oryza sativa";
?> --}}

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

    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet">

  </head>


  <body>
    <main class="main" id="top">
      @include('layouts.navbar')
      
      <section class="pb-0 mt-2">
        <div class="container d-flex align-items-center justify-content-between">
          <input type="text" class="form-control border-dark" id="search-input" placeholder="Search"/>
          <button class="btn btn-primary" type="submit" style="background-color: #0BAC56; border-color: #0BAC56"><span class="iconify" data-icon="tabler:search"></span></button>     
        </div>
        @include('layouts.filter-sidebar')
        
        <div class="container">

          @foreach ( $farmpedia as $content )
          <a class="text-decoration-none" href="{{ route('farmpedia-detail', urlencode($content->judul)) }}">
          <div class="card border mt-4 mb-4 shadow-sm" onmouseover="this.style.backgroundColor='#eefaee';" onmouseout="this.style.backgroundColor='white'">
            <div class="card-body">
              <h3 class="fw-bold" style="color: #0BAC56">{{ $content->judul }}</h3>
            </div>
          </div>
          </a>
          @endforeach
        
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