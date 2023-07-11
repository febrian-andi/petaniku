<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row flex-nowrap">
        @include('admin.layouts.menu-sidebar')
        <div class="col-4 pt-6">
          <div class="card">
            <div class="card-body">
              <h6 class="card-title fw-bold fs-1 heading-color">Jumlah Pengguna</h6>
              <p class="card-text mt-3 mb-md-0 mb-lg-2">{{ $userCount }}</p>
            </div>
          </div>
        </div>
        <div class="col-4 pt-6">
          <div class="card">
            <div class="card-body">
              <h6 class="card-title fw-bold fs-1 heading-color">Jumlah Farmpedia</h6>
              <p class="card-text mt-3 mb-md-0 mb-lg-2">{{ $farmpediaCount }}</p>
            </div>
          </div>
        </div>    
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
  </body>
</html>