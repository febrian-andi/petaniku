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

    <title>{{ $title }}</title>

    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/gallery/logo-petaniku.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/gallery/logo-petaniku.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/gallery/logo-petaniku.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/gallery/logo-petaniku.png">
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
          <h5 class="fw-light" style="color: #4fc358">{{ $title }}</h5>
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
                <h1 class="fw-bold mb-auto">{{ $title }}</h1> 
              </div>
              <div class="text-center mt-auto">
                <a class="btn btn-success btn-lg rounded-pill text-decoration-none" style="background-color: #4FC385" href="{{ route('alur.saya') }}">Mulai Alur</a>
              </div>
            </div>            
            {{-- <div class="col-md-6" style="height: 300px; display: grid;">
              <div class="text-center">
                <h1 class="fw-bold">{{ $title }}</h1> 
              </div>
              <div class="text-end" style="grid-row: 2; align-self: end;">
                <button class="btn btn-success btn-lg rounded-pill" style="background-color: #4FC385">Mulai Alur</button>
              </div>
            </div>                     --}}
          </div>
        </div>
      </section>

      <section class="pt-2 pb-0">
        <div class="container">
          <div class="mt-5">
            @for ($i = 0; $i < 1; $i++)
            <div class="accordion" id="taskAccordion">
              <!-- Task 1 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="task1Heading">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#task1Content" aria-expanded="true" aria-controls="task1Content">
                    Perawatan Lahan
                  </button>
                </h2>
                <div id="task1Content" class="accordion-collapse collapse" aria-labelledby="task1Heading" data-bs-parent="#taskAccordion">
                  <div class="accordion-body text-justify">
                    <!-- Task 1 Content -->
                    <p class="text-limit">Perawatan lahan adalah serangkaian tindakan yang dilakukan untuk menjaga dan mengoptimalkan kondisi lahan agar dapat mendukung pertumbuhan
                       dan hasil panen yang baik. Sebelum menanam padi, persiapan lahan adalah langkah pertama dalam perawatan lahan. Ini melibatkan membersihkan lahan dari gulma, 
                       sisa-sisa tanaman, dan bahan organik lainnya yang tidak diinginkan. Lahan juga dapat diberi perataan untuk memastikan permukaan tanah yang rata dan meminimalkan 
                       genangan air. Selain itu, pembenahan drainase dan pengaturan irigasi yang baik juga perlu dipertimbangkan agar tanah memiliki kondisi yang optimal untuk pertumbuhan tanaman padi.</p>
                    <p><a href="{{ route('workflow.task.detail') }}" style="color: blue;">Baca lebih lanjut</a></p>  
                    <!-- Task 1.1 -->
                    <div class="accordion" id="task11Accordion">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="task11Heading">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#task11Content" aria-expanded="true" aria-controls="task11Content">
                            Penyiangan
                          </button>
                        </h2>
                        <!-- Task 1.1 Content -->
                        <div id="task11Content" class="accordion-collapse collapse" aria-labelledby="task11Heading" data-bs-parent="#task11Accordion">
                          <div class="accordion-body">
                            <p class="text-limit">Penyiangan adalah kegiatan menghilangkan gulma atau rumput liar yang tumbuh di sekitar tanaman padi dengan tujuan untuk menjaga pertumbuhan dan produktivitas tanaman utama. 
                              Gulma merupakan tanaman yang tidak diinginkan karena dapat bersaing dengan tanaman padi dalam mendapatkan air, nutrisi, cahaya matahari, dan ruang tumbuh. </p>
                            <p><a href="{{ route('workflow.task.detail') }}" style="color: blue;">Baca lebih lanjut</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Task 1.2 -->
                    <div class="accordion" id="task12Accordion">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="task12Heading">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#task12Content" aria-expanded="true" aria-controls="task12Content">
                            Pengairan
                          </button>
                        </h2>
                        <!-- Task 1.2 Content -->
                        <div id="task12Content" class="accordion-collapse collapse" aria-labelledby="task12Heading" data-bs-parent="#task12Accordion">
                          <div class="accordion-body">
                            <p class="text-limit">Pengairan pada lahan padi adalah proses pemberian air secara teratur dan cukup kepada tanaman padi untuk memenuhi kebutuhan air mereka. Air merupakan faktor penting dalam 
                              pertumbuhan dan perkembangan tanaman padi, dan pengairan yang tepat dapat meningkatkan hasil panen dan kualitas tanaman.</p>
                            <p><a href="{{ route('workflow.task.detail') }}" style="color: blue;">Baca lebih lanjut</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Task 1.3-->
                    <div class="accordion" id="task13Accordion">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="task13Heading">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#task13Content" aria-expanded="true" aria-controls="task13Content">
                            Pemupukan
                          </button>
                        </h2>
                        <!-- Task 1.3 Content -->
                        <div id="task13Content" class="accordion-collapse collapse" aria-labelledby="task13eading" data-bs-parent="#task13Accordion">
                          <div class="accordion-body">
                            <p class="text-limit">Pemupukan adalah proses pemberian nutrisi yang diperlukan oleh tanaman padi agar dapat tumbuh dan berkembang dengan baik. Tanaman padi membutuhkan nutrisi 
                              tertentu untuk menjaga keseimbangan yang optimal dan meningkatkan produksi hasil panen.</p>
                            <p><a href="{{ route('workflow.task.detail') }}" style="color: blue;">Baca lebih lanjut</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            {{-- <div class="accordion" id="taskAccordion">
              <div class="accordion-item">
                <h2 class="accordion-header" id="task1Heading">
                  <button class="card-body accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#task1Content" aria-expanded="true" aria-controls="task1Content">
                    <div class="card border mt-4 mb-4 shadow-sm" onmouseover="this.style.backgroundColor='#eefaee';" onmouseout="this.style.backgroundColor='white'">
                      <div class="card-body">
                        <h3 class="fw-bold" style="color: #0BAC56">Perawatan Lahan<i class="fas fa-chevron-down"></i></h3>
                      </div>
                    </div>
                  </button>
                </h2>
                <div id="task1Content" class="accordion-collapse collapse" aria-labelledby="task1Heading" data-bs-parent="#taskAccordion">
                  <div class="accordion-body">
                    <!-- Task 1 Content -->
                    <p>Task 1 details...</p>
                  </div>
                </div>
              </div>         --}}
            @endfor
          </div>
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
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    

    <link href="https://fonts.googleapis.com/css2?family=Chivo:wght@300;400;700;900&amp;display=swap" rel="stylesheet">
  </body>

</html>