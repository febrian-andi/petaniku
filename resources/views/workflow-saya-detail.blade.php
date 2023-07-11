<?php
    $title = "Menanam Padi Lahan 1";
    $image = asset('https://static.republika.co.id/uploads/images/inpicture_slide/190702155620-374.jpg');
    $referensi_alur = "Menanam Padi";
    $waktu_mulai = "1 Januari 2023";
    $estimasi_berakhir = "2 Maret 2023";
    $href_referensi_alur = "{{ route('workflow.detail') }}";
    $tahapan = "tahapan"
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
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top p-2 bg-light">
        <a href="{{ route('alur.saya') }}"><span class="iconify ms-4" data-icon="mdi:arrow-left" style="font-size: 40px;"></span></a>
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
            <div class="col-md-6 d-flex flex-column justify-content-center" style="height: 300px;">
              <div class="text-center">
                <table>
                  <tr>
                    <td class="text-start">
                      <p>Nama Alur Saya</p>
                      <p>Dari Panduan</p>
                      <p>Waktu Mulai</p>
                      <p>Estimasi Berakhir</p>
                    </td>
                    <td class="text-start">
                      <p>: {{ $title }}</p>
                      <p><a href="{{ $href_referensi_alur }}">: {{ $referensi_alur }}</a></p>
                      <p>: {{ $waktu_mulai }}</p>
                      <p>: {{ $estimasi_berakhir }}</p>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="text-end align-self-end mt-auto">
                <a href="{{ route('alur.saya.edit') }}" class="btn btn-success btn-lg rounded-pill ps-5 pe-5" style="border:none; background-color:#D3AF37;">Edit<span class="iconify ms-2" data-icon="mdi:edit" style="height:20px"></span></a>
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