@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Infografis</h1>
    @if($infografis->count())
        <div class="row">
            @foreach($infografis as $info)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/' . $info->gambar) }}" class="card-img-top" alt="{{ $info->judul }}">
                        <div class="card-body">
                            <h5>{{ $info->judul }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p>Belum ada data infografis.</p>
    @endif
</div>
@endsection
