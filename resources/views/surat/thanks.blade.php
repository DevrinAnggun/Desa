@extends('layouts.app')
@section('title','Terima Kasih')
@section('content')
  <div class="p-5 bg-light">
    <h3>Terima Kasih</h3>
    <p>Permohonan Anda telah kami terima. Tim kelurahan akan memproses dan menghubungi Anda melalui telepon atau email.</p>
    <a href="{{ route('home') }}" class="btn btn-secondary">Kembali ke Beranda</a>
  </div>
@endsection
