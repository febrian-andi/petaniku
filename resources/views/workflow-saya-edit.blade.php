<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Petaniku | Edit Alur</title>

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
            <a href="{{ route('alur.saya.detail') }}"><span class="iconify ms-4" data-icon="mdi:arrow-left" style="font-size: 40px;"></span></a>
            <div class="mx-auto text-center">
              <h5 class="fw-light" style="color: #4fc358">Edit Alur</h5>
            </div>
        </nav>

        <section class="pt-7 pb-0">
            <div class="container">
                <form>
                    <div class="mb-3">
                        <label for="namaAlur" class="form-label">Nama Alur</label>
                        <input type="text" class="form-control" id="namaAlur" value="Menanam Padi Lahan 1" required>
                    </div>
                    <div class="mb-3">
                        <label for="panduan" class="form-label">Dari Panduan</label>
                        <input type="text" class="form-control" id="panduan" value="Menanam Padi" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="waktuMulai" class="form-label">Waktu Mulai</label>
                        <input type="text" class="form-control" id="waktuMulai" value="1 Januari 2023" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="estimasiBerakhir" class="form-label">Estimasi Berakhir</label>
                        <input type="text" class="form-control" id="estimasiBerakhir" value="2 Maret 2023" disabled>
                    </div>
                    <div class="mx-auto text-end">
                        <a href="{{ route('alur.saya.detail') }}" class="btn btn-danger me-auto">Batal</a>
                        <a type="submit" class="btn" style="background-color: #0BAC56; color:white;">Simpan</a>
                    </div>                  
                </form>
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
  