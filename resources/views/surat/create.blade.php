@extends('layouts.app')
@section('title','Layanan Surat Online')
@section('content')
<h3>Layanan Surat Online</h3>
<form action="{{ route('surat.store') }}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label>Nama Pemohon</label>
    <input type="text" name="nama_pemohon" class="form-control" value="{{ old('nama_pemohon') }}" required>
  </div>
  <div class="mb-3">
    <label>NIK</label>
    <input type="text" name="nik" class="form-control" value="{{ old('nik') }}" required>
  </div>
  <div class="mb-3">
    <label>Jenis Surat</label>
    <select name="jenis_surat" class="form-select" required>
      <option value="">-- Pilih --</option>
      <option value="surat-keterangan-domisili">Surat Keterangan Domisili</option>
      <option value="surat-pengantar-ktp">Surat Pengantar KTP</option>
      <option value="surat-lainnya">Lainnya</option>
    </select>
  </div>
  <div class="mb-3">
    <label>Keterangan</label>
    <textarea name="keterangan" class="form-control">{{ old('keterangan') }}</textarea>
  </div>
  <div class="mb-3">
    <label>Lampiran (scan KTP, dsb.)</label>
    <input type="file" name="file" class="form-control">
  </div>
  <button class="btn btn-primary">Kirim Permohonan</button>
</form>
@endsection
