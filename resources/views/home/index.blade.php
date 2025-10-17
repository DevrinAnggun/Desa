@extends('layouts.app')

@section('content')

<!-- Hero Section dengan Slider -->
<section class="relative">
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="{{ asset('images/slide1.jpg') }}" class="w-full h-[500px] object-cover brightness-75">
      </div>
      <div class="swiper-slide">
        <img src="{{ asset('images/slide2.jpg') }}" class="w-full h-[500px] object-cover brightness-75">
      </div>
      <div class="swiper-slide">
        <img src="{{ asset('images/slide3.jpg') }}" class="w-full h-[500px] object-cover brightness-75">
      </div>
    </div>
    <!-- Tombol navigasi -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>

  <!-- Teks di tengah -->
  <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white">
    <h1 class="text-3xl md:text-4xl font-extrabold mb-3">SELAMAT DATANG</h1>
    <p class="text-lg md:text-xl">Sistem Informasi dan Layanan Administrasi Kelurahan Karangtengah</p>
  </div>
</section>

  <!-- Berita dan Event -->
  <section class="py-16 bg-gray-100">
    <div class="container mx-auto px-6">
      <h2 class="text-center text-2xl font-semibold mb-10">Berita dan Event</h2>
      <div class="grid md:grid-cols-3 gap-8">
        <!-- Card 1 -->
        <div class="bg-white shadow-lg rounded-xl overflow-hidden">
          <img src="{{ asset('images/event1.jpg') }}" alt="Event 1" class="w-full h-56 object-cover">
          <div class="p-5">
            <h3 class="font-semibold text-lg mb-2">Event Bulan November 2022</h3>
            <p class="text-gray-600 text-sm">Rangkaian acara Kamandaka Ciptarasa bulan November menghadirkan...</p>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="bg-white shadow-lg rounded-xl overflow-hidden">
          <img src="{{ asset('images/event2.jpg') }}" alt="Event 2" class="w-full h-56 object-cover">
          <div class="p-5">
            <h3 class="font-semibold text-lg mb-2">Event Bulan November 2022</h3>
            <p class="text-gray-600 text-sm">Rangkaian acara Kamandaka Ciptarasa bulan November menghadirkan...</p>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="bg-white shadow-lg rounded-xl overflow-hidden">
          <img src="{{ asset('images/event3.jpg') }}" alt="Event 3" class="w-full h-56 object-cover">
          <div class="p-5">
            <h3 class="font-semibold text-lg mb-2">Pagelaran Wayang Kulit</h3>
            <p class="text-gray-600 text-sm">Acara wayang kulit dengan lakon terkenal menghadirkan dalang...</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Struktur Pemerintahan -->
<section class="py-16 bg-white">
  <div class="container mx-auto px-6">
    <h2 class="text-center text-2xl font-semibold mb-10">Struktur Pemerintahan</h2>

    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8 justify-items-center">
      @php
        $staffs = [
          ['nama' => 'Asep Saefullah', 'jabatan' => 'Kepala Kelurahan', 'foto' => 'asep.jpg'],
          ['nama' => 'Aulia Naresti', 'jabatan' => 'Sekretaris', 'foto' => 'aulia.jpg'],
          ['nama' => 'Nabila Aminatun', 'jabatan' => 'Bendahara', 'foto' => 'nabila.jpg'],
          ['nama' => 'Bintang Shallahudin', 'jabatan' => 'Seksi Masyarakat', 'foto' => 'bintang.jpg'],
          ['nama' => 'David Aditya', 'jabatan' => 'Seksi Ekonomi', 'foto' => 'david.jpg'],
          ['nama' => 'Daffa Hafid', 'jabatan' => 'Seksi Kegiatan', 'foto' => 'daffa.jpg'],
        ];
      @endphp

      @foreach ($staffs as $s)
        <div class="text-center">
          <img src="{{ asset('images/perangkat/' . $s['foto']) }}" 
               alt="{{ $s['nama'] }}" 
               class="w-24 h-24 mx-auto rounded-full object-cover shadow-md mb-3">
          <p class="font-semibold">{{ $s['nama'] }}</p>
          <p class="text-gray-600 text-sm">{{ $s['jabatan'] }}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>

  <!-- Tentang Kami -->
  <section class="py-16 bg-gray-100">
    <div class="container mx-auto px-6">
      <h2 class="text-center text-2xl font-semibold mb-6">Tentang Kami</h2>
      <div class="bg-white shadow-lg rounded-xl p-6 md:p-10">
        <p class="text-gray-700 text-justify leading-relaxed">
          Website Kelurahan Karangtengah memberikan layanan bagi masyarakat untuk mengakses informasi dan mengajukan surat keterangan secara online dengan mudah, cepat, dan transparan. Website ini bertujuan untuk mendukung digitalisasi pelayanan publik agar lebih efisien serta mempermudah warga dalam memperoleh informasi dan layanan administrasi tanpa harus datang langsung ke kantor kelurahan.
        </p>
      </div>
    </div>
  </section>
  <!-- Script Slider -->
<script>
  const swiper = new Swiper(".mySwiper", {
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>
@endsection
