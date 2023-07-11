<!DOCTYPE html>
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
  <style>
    body {
      padding-top: 50px;
    }

    .sidebar {
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      z-index: 100;
      padding: 48px 0;
      overflow-x: hidden;
      overflow-y: auto;
      background-color: #f8f9fa;
    }

    .sidebar a {
      display: block;
      padding: 10px 30px;
      margin-right: 70px;
      color: #333;
      font-size: 18px;
      text-decoration: none;
    }

    .sidebar a:hover {
      color: #0d6efd;
    }

    .content {
      margin-left: 250px;
      padding: 20px;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <div class="sidebar">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('admin.dashboard') }}">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.farmpedia') }}">Farmpedia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.dashboard') }}">Workflow</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="container">
        <div class="content border">
          <h1>Welcome to the Admin Dashboard</h1>
          <p>This is the main content area.</p>
        </div>
    </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
