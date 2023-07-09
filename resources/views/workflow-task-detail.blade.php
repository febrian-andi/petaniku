<?php  
    $title = 'Perawatan Lahan';
    $isi = 'Perawatan lahan adalah serangkaian tindakan yang dilakukan untuk menjaga dan mengoptimalkan kondisi lahan agar dapat 
            mendukung pertumbuhan dan hasil panen yang baik. Sebelum menanam padi, persiapan lahan adalah langkah pertama dalam 
            perawatan lahan. Ini melibatkan membersihkan lahan dari gulma, sisa-sisa tanaman, dan bahan organik lainnya yang tidak 
            diinginkan. Lahan juga dapat diberi perataan untuk memastikan permukaan tanah yang rata dan meminimalkan genangan air. 
            Selain itu, pembenahan drainase dan pengaturan irigasi yang baik juga perlu dipertimbangkan agar tanah memiliki kondisi 
            yang optimal untuk pertumbuhan tanaman padi.';
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
        <a href="{{ route('back') }}"><span class="iconify ms-4" data-icon="mdi:arrow-left" style="font-size: 40px;"></span></a>
        <div class="mx-auto text-center">
          <h5 class="fw-light" style="color: #4fc358">{{ $title }}</h5>
        </div>
      </nav>
      
      <section class="pt-7 pb-0">
        <div class="container">
            <div class="text-justify">
              {{ $isi }}
            </div>
        </div>
      </section>
    </main>



    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Chivo:wght@300;400;700;900&amp;display=swap" rel="stylesheet">
  </body>

</html>