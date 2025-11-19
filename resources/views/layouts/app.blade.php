<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Admin Penginapan</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    :root{
      --primary:#b61b3a; /* deep red */
      --accent:#f3a57a;  /* orange accent */
      --card:#fff0f1;
    }
    body{background:#f5f5f7}
    .topbar{background:var(--primary); color:#fff; padding:14px 20px; border-radius:8px;}
    .card-stat{background:linear-gradient(90deg, rgba(243,165,122,0.12), rgba(182,27,58,0.05)); border-radius:12px; padding:20px}
    .btn-primary{background:var(--primary); border:none}
    .btn-accent{background:var(--accent); border:none; color:#fff}
    .rounded-panel{background:#fff;border-radius:12px;padding:16px;box-shadow:0 2px 8px rgba(0,0,0,0.06)}
  </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesma Booking System</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: "Segoe UI", sans-serif;
        }
        nav.navbar {
            background-color: #003366;
        }
        nav a.navbar-brand {
            color: white !important;
        }
        .container {
            margin-top: 30px;
            margin-bottom: 50px;
        }
    </style>
</head>
<body>
  <nav class="d-flex justify-content-between align-items-center px-4 py-2 topbar mb-3">
    <div class="d-flex align-items-center gap-3">
      @php
        $logoPath = public_path('img/logo.png');
        $logoUrl = file_exists($logoPath) ? asset('img/logo.png') . '?v=' . filemtime($logoPath) : null;
      @endphp
      <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}">
        @if($logoUrl)
          <img src="{{ $logoUrl }}" alt="logo" style="width:40px;height:40px;object-fit:cover;border-radius:6px">
        @else
          <div style="width:40px;height:40px;display:flex;align-items:center;justify-content:center;background:rgba(255,255,255,0.08);border-radius:6px;font-weight:600">P</div>
    <!-- Header Peach (match lebar .container / stepper) -->
    @if (!request()->routeIs('booking.payment'))
    <header style="background:transparent; padding-top:16px; padding-bottom:0;">
        <div class="container">
            <div style="
                background:#f1cfc4;
                border-radius:18px;
                padding:24px 24px;">
                <h1 style="font-weight:800; font-size:36px; color:#111; margin:0;">
                    PESMA Booking Form
                </h1>
            </div>
        </div>
    </header>
@endif



    <!-- Alert pesan sukses / error -->
    @if (!request()->routeIs('booking.payment'))
    <div class="container mt-3">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Terjadi kesalahan:</strong>
                <ul class="mb-0 mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <span style="font-weight:600;color:#fff">Admin Penginapan</span>
      </a>
    </div>
    <div>
      @if(session('admin'))
        <span style="margin-right:12px">Halo, {{ session('admin.name') }}</span>
        <a href="{{ route('auth.logout') }}" class="btn btn-sm btn-outline-light">Logout</a>
      @endif
    </div>
  </nav>

  <nav class="navbar navbar-expand-lg navbar-dark" style="background:var(--primary);border-radius:8px;padding:10px 20px;margin:10px 0">
    <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}">
        <img id="site-logo"
             src="{{ asset('img/logo.png') }}?v={{ file_exists(public_path('img/logo.png')) ? filemtime(public_path('img/logo.png')) : time() }}"
             alt="logo"
             style="width:48px;height:48px;display:block;object-fit:cover;border-radius:6px;z-index:2;">
        <span style="font-weight:600;color:#fff;margin-left:8px">Admin Penginapan</span>
      </a>
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('kamar.index') }}">Data Kamar</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('pengunjung.index') }}">Data Pengunjung</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('booking.corporate') }}">Booking Corporate</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('booking.individu') }}">Booking Individu</a></li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2">
        <div class="rounded-panel">
          <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('kamar.index') }}">Data Kamar</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('pengunjung.index') }}">Data Pengunjung</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('booking.corporate') }}">Booking Corporate</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('booking.individu') }}">Booking Individu</a></li>
          </ul>
        </div>
      </div>

      <div class="col-md-10">
        @if(session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if($errors->any())
          <div class="alert alert-danger"><ul class="mb-0">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul></div>
        @endif
    @endif

        @yield('content')

      </div>
    </div>
  </div>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    @stack('scripts')
>>>>>>> main
</body>
</html>
