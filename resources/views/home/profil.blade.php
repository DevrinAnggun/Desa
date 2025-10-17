@extends('layouts.app')

@section('content')
<!-- Spacer untuk menghindari tertutup navbar -->
<div class="pt-28"></div>

<!-- Hero Section -->
<section class="relative">
  <img src="{{ asset('images/slide1.jpg') }}" alt="Profil Kelurahan Karangtengah"
    class="w-full h-[450px] object-cover brightness-75">
  <div class="absolute inset-0 flex items-center justify-center">
    <h1 class="text-white text-3xl md:text-4xl font-semibold drop-shadow-lg">
      Profil Kelurahan Karangtengah
    </h1>
  </div>
</section>

<!-- Visi dan Misi -->
<section id="visiMisi" class="py-16 bg-gray-100">
  <div class="container mx-auto px-6">
    <h2 class="text-3xl font-bold text-center mb-10 text-blue-700">Visi dan Misi</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-6xl mx-auto">
      <!-- Visi -->
      <div class="bg-white shadow-lg rounded-2xl p-8 border border-gray-200">
        <h3 class="text-2xl font-semibold text-blue-700 mb-4 text-center">Visi</h3>
        <p class="text-gray-700 leading-relaxed text-justify">
          Menjadi kelurahan yang maju, mandiri, dan berdaya saing melalui pelayanan publik yang transparan dan partisipatif.
        </p>
      </div>

      <!-- Misi -->
      <div class="bg-white shadow-lg rounded-2xl p-8 border border-gray-200">
        <h3 class="text-2xl font-semibold text-blue-700 mb-4 text-center">Misi</h3>
        <ul class="list-disc pl-6 text-gray-700 space-y-2 text-justify">
          <li>Meningkatkan kualitas pelayanan publik berbasis teknologi.</li>
          <li>Mendorong partisipasi masyarakat dalam pembangunan.</li>
          <li>Menjaga lingkungan hidup yang bersih dan lestari.</li>
          <li>Mengembangkan potensi ekonomi lokal dan UMKM.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Potensi Desa -->
<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-6">
    <h2 class="text-2xl font-semibold mb-10 text-center text-blue-900">Potensi Kelurahan Karangtengah</h2>

    <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8">
      <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden">
        <img src="{{ asset('images/potensi1.jpg') }}" alt="Pertanian" class="h-52 w-full object-cover">
        <div class="p-5">
          <h3 class="font-semibold text-lg mb-2 text-gray-800">Pertanian</h3>
          <p class="text-gray-600 text-sm">Karangtengah memiliki lahan pertanian luas dengan komoditas utama padi dan jagung.</p>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden">
        <img src="{{ asset('images/potensi2.jpg') }}" alt="UMKM" class="h-52 w-full object-cover">
        <div class="p-5">
          <h3 class="font-semibold text-lg mb-2 text-gray-800">UMKM Lokal</h3>
          <p class="text-gray-600 text-sm">Warga aktif mengembangkan usaha kecil menengah seperti kerajinan dan kuliner tradisional.</p>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden">
        <img src="{{ asset('images/potensi3.jpg') }}" alt="Wisata Alam" class="h-52 w-full object-cover">
        <div class="p-5">
          <h3 class="font-semibold text-lg mb-2 text-gray-800">Wisata Alam</h3>
          <p class="text-gray-600 text-sm">Keindahan alam Karangtengah menjadi daya tarik wisatawan untuk berkunjung dan berfoto.</p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
