<!DOCTYPE html>
<html>
<head>
    <title>Portfolio Saya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="/">Portofolio</a>
    <div>
      <a class="nav-link" href="{{ route('home') }}">Beranda</a>
      <a class="nav-link" href="{{ route('about') }}">Tentang Saya</a>
      <a class="nav-link" href="{{ route('projects.index') }}">Proyek</a>
      <a class="nav-link" href="{{ route('sertifikat') }}">Sertifikat</a>

    </div>
  </div>
</nav>
<div class="container mt-4">
    @yield('content')
</div>
</body>
</html>
