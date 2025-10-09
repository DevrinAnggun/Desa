@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Berita Terbaru</h1>
    @if($beritas->count())
        <div class="row">
            @foreach($beritas as $berita)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $berita->judul }}</h5>
                            <p class="card-text text-muted">{{ Str::limit($berita->isi, 100) }}</p>
                            <a href="{{ route('berita.show', $berita->id) }}" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $beritas->links() }}
    @else
        <p>Belum ada berita yang dipublikasikan.</p>
    @endif
</div>
@endsection
