@extends('layouts.app')
@section('title','Beranda')
@section('content')
<div class="row">
  <div class="col-md-8">
    <h2>Berita Terbaru</h2>
    @foreach($latestBerita as $b)
      <div class="card mb-3">
        <div class="card-body">
          <h5><a href="{{ route('berita.show', $b->slug) }}">{{ $b->judul }}</a></h5>
          <p>{{ $b->excerpt }}</p>
        </div>
      </div>
    @endforeach
    <a href="{{ route('berita.index') }}" class="btn btn-outline-primary">Lihat semua berita</a>
  </div>

  <div class="col-md-4">
    <h4>Profil Singkat</h4>
    @if($profile)
      <p>{{ \Illuminate\Support\Str::limit($profile->deskripsi,150) }}</p>
      <a href="{{ route('profil') }}" class="btn btn-sm btn-secondary">Selengkapnya</a>
    @endif

    <h4 class="mt-4">Infografis</h4>
    @foreach($infografis as $i)
      <div class="mb-2">
        <img src="{{ asset('storage/'.$i->image_path) }}" alt="" style="width:100%;max-height:120px;object-fit:cover;">
        <small>{{ $i->judul }}</small>
      </div>
    @endforeach
  </div>
</div>
@endsection
