<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIKADES - Kelurahan Karangtengah</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body class="font-sans antialiased bg-gray-50 text-gray-900">

<!-- Navbar -->
<nav class="fixed top-0 left-0 w-full bg-blue-800 text-white shadow-md z-50">
  <div class="container mx-auto flex justify-between items-center p-4">
    <img src="{{ asset('images/logo.png') }}" alt="Logo SIKADES" class="w-18 h-16">
    <ul class="flex gap-6 text-sm">
      <li><a href="{{ url('/') }}" class="hover:underline">Home</a></li>
      <li><a href="{{ url('/profil') }}" class="hover:underline">Profil Kelurahan</a></li>
      <li><a href="{{ url('/berita') }}" class="hover:underline">Berita</a></li>
      <li><a href="{{ url('/infografis') }}" class="hover:underline">Infografis</a></li>
      <li><a href="{{ url('/faq') }}" class="hover:underline">FAQ</a></li>
      <li><a href="{{ url('/surat') }}" class="hover:underline">Layanan Surat</a></li>
    </ul>
  </div>
</nav>

<!-- Spacer agar slider tidak tertutup navbar -->
<div class="pt-28"></div>

  <!-- Isi konten halaman -->
  <main>
    @yield('content')
  </main>

  <!-- Footer sederhana -->
  <footer class="bg-blue-800 text-white text-center py-4 mt-8">
    <p class="text-sm">© {{ date('Y') }} Kelurahan Karangtengah - Sistem Informasi Kelurahan</p>
  </footer>
</body>
</html>
