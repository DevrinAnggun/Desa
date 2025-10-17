@extends('layouts.app')

@section('content')
<!-- ===== HERO / SLIDER ===== -->
<section class="relative">
    <div class="w-full h-[400px] bg-cover bg-center flex items-center justify-center"
         style="background-image: url('{{ asset('images/slider-berita.jpg') }}');">
        <div class="bg-black bg-opacity-50 w-full h-full flex items-center justify-center">
            <h1 class="text-white text-2xl md:text-3xl font-semibold text-center px-6">
                Pantau berita terbaru serta jadwal kegiatan yang sedang dan akan berlangsung <br>
                di wilayah Kelurahan Karangtengah.
            </h1>
        </div>
    </div>
</section>

<section id="berita" class="py-16 bg-white">
  <div class="container mx-auto px-8">
    <h2 class="text-3xl font-bold text-blue-800 mb-12 text-center">Berita Terbaru</h2>

    <!-- Berita 1 -->
    <div class="flex flex-col md:flex-row items-center md:items-start md:space-x-8 space-y-6 md:space-y-0 mb-12">
      <img src="images/berita1.jpg" alt="Gotong Royong Desa" class="w-full md:w-auto max-w-[400px] rounded-lg shadow-lg object-cover">
      <div class="md:w-1/2 text-gray-800 leading-relaxed">
        <h3 class="text-2xl font-semibold text-blue-700 mb-3">Gotong Royong Bersihkan Lingkungan Desa Karangtengah</h3>
        <p class="mb-4">
          Warga Desa Karangtengah bersama perangkat desa melaksanakan kegiatan gotong royong membersihkan lingkungan sekitar balai desa dan jalan utama. Kegiatan ini dilakukan pada Minggu, 13 Oktober 2025, sebagai bentuk kepedulian terhadap kebersihan dan kenyamanan desa.
        </p>
        <p>
          Kepala Desa Karangtengah menyampaikan apresiasi kepada seluruh warga yang turut serta. Beliau berharap kegiatan semacam ini dapat menjadi agenda rutin untuk menjaga lingkungan yang bersih dan sehat.
        </p>
      </div>
    </div>

    <!-- Berita 2 -->
    <div class="flex flex-col md:flex-row-reverse items-center md:items-start md:space-x-8 space-y-6 md:space-y-0 mb-12">
      <img src="images/berita2.jpg" alt="Pelatihan Digitalisasi UMKM" class="w-full md:w-1/2 rounded-lg shadow-lg object-cover">
      <div class="md:w-1/2 text-gray-800 leading-relaxed">
        <h3 class="text-2xl font-semibold text-blue-700 mb-3">Pelatihan Digitalisasi untuk UMKM Karangtengah</h3>
        <p class="mb-4">
          Pemerintah Desa Karangtengah mengadakan pelatihan digitalisasi bagi para pelaku UMKM untuk memperkenalkan cara promosi produk melalui platform online seperti media sosial dan marketplace.
        </p>
        <p>
          Pelatihan ini diharapkan mampu meningkatkan daya saing produk lokal dan memperluas pasar, sehingga memberikan dampak positif terhadap perekonomian desa.
        </p>
      </div>
    </div>

    <!-- Berita 3 -->
    <div class="flex flex-col md:flex-row items-center md:items-start md:space-x-8 space-y-6 md:space-y-0">
      <img src="images/berita3.jpg" alt="Kegiatan Posyandu Balita" class="w-full md:w-1/2 rounded-lg shadow-lg object-cover">
      <div class="md:w-1/2 text-gray-800 leading-relaxed">
        <h3 class="text-2xl font-semibold text-blue-700 mb-3">Posyandu Balita Rutin di Karangtengah</h3>
        <p class="mb-4">
          Kegiatan Posyandu Balita Desa Karangtengah kembali dilaksanakan di Balai Desa dengan antusiasme tinggi dari para orang tua. Kegiatan ini mencakup pemeriksaan kesehatan anak, penimbangan berat badan, serta edukasi gizi.
        </p>
        <p>
          Bidan desa menyampaikan pentingnya pemeriksaan rutin untuk memastikan tumbuh kembang anak tetap optimal serta mendorong masyarakat untuk aktif mengikuti kegiatan kesehatan desa.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- ===== EVENT ===== -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Event</h2>
            <a href="#" class="text-red-600 hover:underline">See all</a>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- EVENT 1 -->
            <div class="bg-gray-50 rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300">
                <img src="{{ asset('images/event1.jpg') }}" class="w-full h-56 object-cover" alt="Event 1">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Lomba Foto dan Reels</h3>
                    <p class="text-gray-600 mb-4">
                        Yuk, kreasikan foto dan reelsmu semenarik mungkin! Tunjukkan keindahan dan kekompakan warga
                        Karangtengah melalui karya kreatifmu.
                    </p>
                    <a href="#" class="text-blue-600 hover:underline">Baca selengkapnya</a>
                </div>
            </div>

            <!-- EVENT 2 -->
            <div class="bg-gray-50 rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300">
                <img src="{{ asset('images/event2.jpg') }}" class="w-full h-56 object-cover" alt="Event 2">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Pagelaran Wayang Kulit</h3>
                    <p class="text-gray-600 mb-4">
                        Saksikan pagelaran budaya “Wayang Kulit” di Balai Kelurahan Karangtengah sebagai bentuk pelestarian
                        seni tradisional Jawa.
                    </p>
                    <a href="#" class="text-blue-600 hover:underline">Baca selengkapnya</a>
                </div>
            </div>

            <!-- EVENT 3 -->
            <div class="bg-gray-50 rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300">
                <img src="{{ asset('images/event3.jpg') }}" class="w-full h-56 object-cover" alt="Event 3">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Gebyar Karangtengah Sehat</h3>
                    <p class="text-gray-600 mb-4">
                        Ayo ikut meriahkan Gebyar Karangtengah Sehat! Ada senam massal, donor darah, dan pemeriksaan
                        kesehatan gratis untuk warga.
                    </p>
                    <a href="#" class="text-blue-600 hover:underline">Baca selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
