<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Kelurahan Karangtengah - @yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">Kel. Karangtengah</a>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Beranda</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('profil') }}">Profil</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('berita.index') }}">Berita</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('infografis.index') }}">Infografis</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('faq.index') }}">FAQ</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('surat.create') }}">Layanan Surat</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif
  @yield('content')
</div>

<footer class="text-center py-4 mt-4 border-top">
  &copy; {{ date('Y') }} Kelurahan Karangtengah
</footer>
</body>
</html>
