<?php
    $title = "Padi/Oryza sativa";
    $image = "assets/img/gallery/fully-funded.png";
    $isi = "Padi (bahasa Latin: Oryza sativa) merupakan salah satu tanaman budidaya terpenting dalam peradaban. 
    Meskipun terutama mengacu pada jenis tanaman budidaya, padi juga digunakan untuk mengacu pada beberapa jenis dari marga (genus) yang sama, yang biasa disebut sebagai padi liar. 
    Padi diduga berasal dari India atau Indocina dan masuk ke Indonesia dibawa oleh nenek moyang yang migrasi dari daratan Asia sekitar 1500 SM.
    Padi termasuk dalam suku padi-padian atau poaceae. Terna semusim, berakar serabut, batang sangat pendek, struktur serupa batang terbentuk dari rangkaian pelepah daun yang saling 
    menopang daun sempurna dengan pelepah tegak, daun berbentuk lanset,warna hijau muda hingga hijau tua, berurat daun sejajar, tertutupi oleh rambut yang pendek dan jarang, bagian 
    bunga tersusun majemuk, tipe malai bercabang, satuan bunga disebut floret yang terletak pada satu spikelet yang duduk pada panikula, tipe buah bulir atau kariopsis yang tidak 
    dapat dibedakan mana buah dan bijinya, bentuknya hampir bulat hingga lonjong, ukuran 3 mm hingga 15 mm, tertutup oleh palea dan lemma yang dalam bahasa sehari-hari disebut sekam, 
    struktur dominan padi yang biasa dikonsumsi yaitu jenis enduspermium.Setiap bunga padi memiliki enam kepala sari (anther) dan kepala putik (stigma) bercabang dua berbentuk sikat botol. Kedua organ seksual ini umumnya siap bereproduksi dalam waktu yang bersamaan. Kepala sari kadang-kadang keluar dari palea dan lemma jika telah masak. Dari segi reproduksi, padi merupakan tanaman berpenyerbukan sendiri, karena 95% atau lebih serbuk sari membuahi sel telur tanaman yang sama. Setelah pembuahan terjadi, zigot dan inti polar yang telah dibuahi segera membelah diri. Zigot berkembang membentuk embrio dan inti polar menjadi endosperm. Pada akhir perkembangan, sebagian besar bulir padi mengadung pati dibagian endosperm. Bagi tanaman muda,pati dimanfaatkan sebagai sumber gizi.";
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
        <a href="{{ ('farmpedia') }}"><span class="iconify ms-4" data-icon="mdi:arrow-left" style="font-size: 40px;"></span></a>
        <div class="mx-auto text-center">
          <h5 class="fw-light" style="color: #4fc358">{{ $title }}</h5>
        </div>
      </nav>
      
      <section class="pt-7 pb-0">
        <div class="container">
            <div>
                <img src="{{ $image }}" class="img-fluid" alt="gambar" style="">
            </div>
            <div>
                <p>{{ ($isi) }}</p>
            </div>
        </div>
      </section>
    </main>



    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="assets/js/theme.js"></script>
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Chivo:wght@300;400;700;900&amp;display=swap" rel="stylesheet">
  </body>

</html>