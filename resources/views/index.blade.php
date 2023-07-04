<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Petaniku | Home</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/gallery/logo-petaniku.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/gallery/logo-petaniku.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/gallery/logo-petaniku.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/gallery/logo-petaniku.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top p-2 bg-light" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="index.html"><img class="d-inline-block align-top img-fluid" src="assets/img/gallery/logo-petaniku.png" alt="" width="40"/><span class="text-theme font-monospace fs-4 ps-2">Petaniku</span></a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item px-2"><a class="nav-link fw-medium active" href="#header">Home</a></li>
              <li class="nav-item px-2"><a class="nav-link fw-medium" href="#Opportuanities">Farmpedia</a></li>
              <li class="nav-item px-2"><a class="nav-link fw-medium" href="#testimonial">Workflow</a></li>
              <li class="nav-item px-2"><a class="nav-link fw-medium" href="#invest">Community</a></li>
              <li class="nav-item px-2"><a class="nav-link fw-medium" href="#contact">Market </a></li>
            </ul>
            <form class="d-flex">
              <a class="btn btn-lg bg-gradient order-0" type="submit" style= "background-color:black; color:white;" onmouseover="this.style.backgroundColor='green';" onmouseout="this.style.backgroundColor='black';" href="{{ route('register') }}">Sign Up</a>
            </form>
          </div>
        </div>
      </nav>
      <section class="py-0" id="header">
        <div class="bg-holder d-none d-md-block" style="background-image:url(assets/img/illustrations/hero-header.png);background-position:right top;background-size:contain;">
        </div>
        <div class="bg-holder d-md-none" style="background-image:url(assets/img/illustrations/hero-bg.png);background-position:right top;background-size:contain;">
        </div>
        <div class="container">
          <div class="row align-items-center min-vh-75 min-vh-lg-100">
            <div class="col-md-7 col-lg-6 col-xxl-5 py-6 text-sm-start text-center">
              <h1 class="mt-6 mb-sm-4 fw-semi-bold lh-sm fs-4 fs-lg-5 fs-xl-6">Kerangka Kerja Bagi Petani Modern</h1>
              <p class="mb-4 fs-1">Mudahkan perjalanan generasi petani selanjutnya dengan website yang menyediakan solusi pertanian inovatif, berkelanjutan, dan mudah diakses.</p><a class="btn btn-lg btn-success" href="#" role="button">Coba Sekarang</a>
            </div>
          </div>
        </div>
      </section>
      <section class="py-5" id="Opportuanities">
        <div class="bg-holder d-none d-sm-block" style="background-image:url(assets/img/illustrations/bg.png);background-position:top left;background-size:225px 755px;margin-top:-17.5rem;">
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-9 mx-auto text-center mb-3">
              <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Layanan</h5>
              <p class="mb-5">Berikut layanan utama yang kami sediakan</p>
            </div>
          </div>
          <div class="row flex-center h-100">
            <div class="row">
              <div class="col-md-3 mb-5">
                <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-6">
                  <div class="text-center text-md-start card-hover"><img class="ps-3 icons" src="assets/img/icons/farmpedia-icon.png" height="60" alt="" />
                    <div class="card-body">
                      <h6 class="fw-bold fs-1 heading-color">Farmpedia</h6>
                      <p class="mt-3 mb-md-0 mb-lg-2">Dokumentasi lengkap mengenai
                        pertanian seperti produk dan peralatan,
                        yang memudahkan akses informasi di
                        bidang pertanian.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-5">
                <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-6">
                  <div class="text-center text-md-start card-hover"><img class="ps-3 icons" src="assets/img/icons/workflow-icon.png" height="60" alt="" />
                    <div class="card-body">
                      <h6 class="fw-bold fs-1 heading-color">Workflow</h6>
                      <p class="mt-3 mb-md-0 mb-lg-2">Alat alat yang dapat memudahkan
                        petani generasi selanjutnya
                        dalam mengatur pertanian agar
                        lebih optimal.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-5">
                <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-6">
                  <div class="text-center text-md-start card-hover"><img class="ps-3 icons" src="assets/img/icons/community-icon.png" height="60" alt="" />
                    <div class="card-body">
                      <h6 class="fw-bold fs-1 heading-color">Community</h6>
                      <p class="mt-3 mb-md-0 mb-lg-2">Mewadahi komunitas petani muda,
                        sumber artikel pertanian, forum tanya
                        jawab, dan informasi mengenai event
                        terkini mengenai pertanian.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-5">
                <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-6">
                  <div class="text-center text-md-start card-hover"><img class="ps-3 icons" src="assets/img/icons/market-icon.png" height="60" alt="" />
                    <div class="card-body">
                      <h6 class="fw-bold fs-1 heading-color">Market</h6>
                      <p class="mt-3 mb-md-0 mb-lg-2">Pusat pembelian dan penjualan,
                        menyediakan berbagai jenis peralatan
                        yang dibutuhkan, dan dapat menjual
                        komoditas hasil pertanian.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-5" id="invest">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-9 mb-3">
              <div class="row">
                <div class="col-lg-9 mb-3">
                  <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Pengunguman</h5>
                  <p class="mb-5">Info terbaru mengenai situs kami</p>
                </div>
                <div class="col-md-6 mb-5">
                  <div class="card text-white"><img class="card-img" src="assets/img/gallery/short-terms.png" alt="..." />
                    <div class="card-img-overlay d-flex flex-column justify-content-center px-5 px-md-3 px-lg-5 bg-dark-gradient">
                      <div class="bg-light opacity-85" style="width: 85px;">
                        <h6 class="text-danger p-1 fs-1 fw-bold">Popular</h6>
                      </div>
                      <hr class="text-white" style="height:0.12rem;width:2.813rem" />
                      <div class="pt-lg-3">
                        <h6 class="fw-bold text-white fs-1 fs-md-2 fs-lg-3 w-xxl-50">Artikel</h6>
                        <p class="w-xxl-75">Pupuk Kaltim Kembangkan Teknologi Pertanian Kelapa Sawit</p>
                        <button class="btn btn-lg btn-light" style="color:#50c287" type="button" onmouseover="this.style.backgroundColor='green'; this.style.color='white';" onmouseout="this.style.backgroundColor='white'; this.style.color='#50c287';">Lihat</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-5">
                  <div class="card text-white"><img class="card-img" src="assets/img/gallery/fully-funded.png" alt="..." />
                    <div class="card-img-overlay d-flex flex-column justify-content-center px-5 px-md-3 px-lg-5 bg-light-gradient">
                      <div class="bg-light opacity-85" style="width: 85px;">
                        <h6 class="text-success p-1 fs-1 fw-bold">Terbaru</h6>
                      </div>
                      <hr class="text-white" style="height:0.12rem;width:2.813rem" />
                      <div class="pt-lg-3">
                        <h6 class="fw-bold text-white fs-1 fs-md-2 fs-lg-3 w-xxl-50">Farmpedia</h6>
                        <p class="w-xxl-75">Menambahkan jenis jenis padi dan karakteristiknya.</p>
                        <button class="btn btn-lg btn-light" style="color:#50c287" type="button" onmouseover="this.style.backgroundColor='green'; this.style.color='white';" onmouseout="this.style.backgroundColor='white'; this.style.color='#50c287';">Lihat</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="py-0">
        <div class="bg-holder" style="background-image:url(assets/img/illustrations/how-it-works.png);background-position:center bottom;background-size:cover;">
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-sm-8 col-md-9 col-xl-5 text-center pt-4">
              <h5 class="fw-bold fs-3 fs-xxl-5 lh-sm mb-3 text-white">Hubungi Kami</h5>
            </div>
            <div class="col-sm-9 col-md-12 col-xxl-9">
              <div class="theme-tab">
                <div class="tab-content">
                  <div class="row align-items-center my-6 mx-auto">
                    <div class="col-md-6 col-lg-5 offset-md-1">
                      <div class="p-3">
                        <input class="form-control" type="text" placeholder="Nama" aria-label="nama" />
                      </div>
                      <div class="p-3">
                        <input class="form-control" type="text" placeholder="Email" aria-label="email" />
                      </div>
                      <div class="p-3">
                        <input class="form-control" type="text" placeholder="Nomor Telepon" aria-label="nomor-telepon" />
                      </div>
                    </div> 
                    <div class="col-md-5 form-floating">
                      <textarea class="form-control" placeholder="Pesan" aria-label="pesan" style="height: 200px"></textarea>
                    </div>
                    <div class="mx-auto row justify-content-center" style="width: 200px;">
                      <button type="button" class="m-3 btn btn-outline-light btn-lg">Kirim</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- <section class="py-0" id="contact">
        <div class="bg-holder" style="background-image:url(assets/img/illustrations/footer-bg.png);background-position:center;background-size:cover;">
        </div>
        <div class="container mt-2">
          <div class="row g-2 justify-content-start">
            <div class="col-sm mt-5">
              Contributor :
            </div>
            <div class="col-sm">
              <p>Veda Bezaleel</p>
              <p>Febrian Andi Nugroho</p>
              <p>Muhammad Ardab Fillah</p>
            </div>
          </div>
        </div>
      </section> -->
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="assets/js/theme.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Chivo:wght@300;400;700;900&amp;display=swap" rel="stylesheet">
  </body>

</html>