<?php
    $title = "Menjadi Petani Padi";
    $image = asset('assets/img/gallery/fully-funded.png');
    $tahapan = "Tahap";

    $titleRekomendasi = "Padi";
    $imageRekomendasi = asset('assets/img/gallery/fully-funded.png');
    $menu = "Farmpedia";
    $hrefRekomendasi = "route('farmpedia.detail')";
    
?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $panduan->judul }}</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/gallery/logo-petaniku.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/gallery/logo-petaniku.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/gallery/logo-petaniku.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/gallery/logo-petaniku.png') }}">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="theme-color" content="#ffffff">

    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet">

  </head>


  <body>
    <style>
      .text-limit {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
      }
    </style>

    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top p-2 bg-light">
        <a href="{{ route('workflow') }}"><span class="iconify ms-4" data-icon="mdi:arrow-left" style="font-size: 40px;"></span></a>
        <div class="mx-auto text-center">
          <h5 class="fw-light" style="color: #4fc358">{{ $panduan->judul }}</h5>
        </div>
      </nav>
      
      <section class="pt-7 pb-0">
        <div class="container">
          <div class="row">
            <div class="col-md-6" style="height: 300px;">
              <div style="aspect-ratio: 4/3;">
                <img src="{{ $image }}" class="img-fluid card-img-top" alt="gambar" style="object-fit:contain; height: 300px; width: 100%;">
              </div>  
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-between" style="height: 300px;">
              <div class="text-center">
                <h1 class="fw-bold mb-auto">{{ $panduan->judul }}</h1> 
              </div>
              <div class="text-center mt-auto">
                <a class="btn btn-success btn-lg rounded-pill text-decoration-none" style="background-color: #4FC385" href="">Mulai Alur</a>
              </div>
            </div>            
            {{-- <div class="col-md-6" style="height: 300px; display: grid;">
              <div class="text-center">
                <h1 class="fw-bold">{{ $panduan->judul }}</h1> 
              </div>
              <div class="text-end" style="grid-row: 2; align-self: end;">
                <form method="POST" action="{{ route('workflow.mulai', urlencode($panduan->judul)) }}">
                  <button type="submit" class="btn btn-success btn-lg rounded-pill" style="background-color: #4FC385">Mulai Alur</button>
                </form>
              </div>

            </div>                     --}}
          </div>
        </div>
      </section>
  
      <section class="pt-2 pb-0">
        <div class="container">
          <div class="mt-5">
            <div class="accordion" id="taskAccordion">
              @foreach ($materi as $index => $materiItem)
                <div class="accordion-item">
                  <h2 class="accordion-header" id="task{{ $index + 1 }}Heading">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#task{{ $index + 1 }}Content" aria-expanded="true" aria-controls="task{{ $index + 1 }}Content">
                      {{ $materiItem->tahapan }}
                    </button>
                  </h2>
                  <div id="task{{ $index + 1 }}Content" class="accordion-collapse collapse" aria-labelledby="task{{ $index + 1 }}Heading" data-bs-parent="#taskAccordion">
                    <div class="accordion-body text-justify">
                      <div class="text-justify">
                        {!! $materiItem->isi !!}
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </section>


      <section class="py-4">
        <div class="container">
          <h4><i>Rekomendasi Terkait</i></h4>
          <div class="row flex-center mt-4">
            <div class="row">

              @foreach($rekomendasi as $content)
                <div class="col-md-3 mb-4">
                  <a href="{{ route('farmpedia.detail', urlencode($content->judul)) }}" class="text-decoration-none">
                    <div class="card shadow h-100 card-span">
                        <img src="{{ $imageRekomendasi }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{ $content->judul }}</h5>
                            <p class="card-text text-start mt-6"><i>~{{ $menu }}</i></p>
                        </div>
                    </div>
                  </a>
                </div>
              @endforeach
                
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