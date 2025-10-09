@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Pertanyaan yang Sering Diajukan (FAQ)</h1>
    @if($faqs->count())
        <div class="accordion" id="faqAccordion">
            @foreach($faqs as $faq)
                <div class="accordion-item mb-2">
                    <h2 class="accordion-header" id="heading{{ $faq->id }}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $faq->id }}">
                            {{ $faq->pertanyaan }}
                        </button>
                    </h2>
                    <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            {{ $faq->jawaban }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p>Tidak ada data FAQ.</p>
    @endif
</div>
@endsection
