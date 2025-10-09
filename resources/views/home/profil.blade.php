@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Profil Desa</h1>

    @if($profile)
        <h3>{{ $profile->nama_desa ?? 'Desa Karangtengah' }}</h3>
        <p>{{ $profile->deskripsi ?? 'Belum ada deskripsi profil desa.' }}</p>
    @else
        <p>Data profil belum tersedia.</p>
    @endif
</div>
@endsection
