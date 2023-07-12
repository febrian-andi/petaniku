<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/gallery/logo-petaniku.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/gallery/logo-petaniku.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/gallery/logo-petaniku.png') }}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/gallery/logo-petaniku.png') }}">
  <link rel="manifest" href="assets/img/favicons/manifest.json">
        
  <title>Admin Dashboard</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <title>Admin Dashboard</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row flex-nowrap">
      @include('admin.layouts.menu-sidebar')
        <div class="col pt-6">   
          <div class="card-body">
            <div class="text-center">
              <h1>Farmpedia</h1>
            </div>
            <a href="{{ route('admin.farmpedia.create') }}" class="btn btn-primary rounded-pill">Tulis Farmpedia</a>
            <div class="content mt-5">
              @foreach($farmpedia as $content)
              <div class="d-flex justify-content-between align-items-center">
                <h3 class="mb-0">{{ $content->judul }}</h3>
                <h4>{{ $content->kategori }}</h4>
                <div class="mt-2">
                  <div class="d-flex">
                    <a href="{{ route('admin.farmpedia.edit', $content->id) }}" class="btn btn-warning me-2">Edit</a>
                    <form action="{{ route('admin.farmpedia.destroy', $content->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger me-2">Hapus</button>
                    </form>
                    <a href="{{ route('admin.farmpedia.detail', urlencode($content->judul)) }}" class="btn btn-primary">Lihat</a>
                  </div>
                </div>
              </div>
              <hr class="border border-3 border-dark">
              @endforeach
            </div>
          </div>
        </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
</body>
</html>