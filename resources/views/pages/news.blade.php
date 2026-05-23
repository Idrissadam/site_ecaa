@extends('layouts.app')

@section('content')
<section class="page-hero">
    <div class="container py-5">
        <span class="page-kicker">Actualités</span>
        <h1 class="display-5 fw-bold">Nouvelles réalisations</h1>
        <p class="lead text-muted col-lg-8">Les dernières activités, formations et innovations de l’ECAA.</p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-4">
            @foreach($site['news'] as $item)
                <div class="col-md-6 col-xl-4">
                    <article class="news-card h-100">
                        <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}">
                        <div class="p-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge text-bg-success-subtle text-success">{{ $item['category'] }}</span>
                                <small class="text-muted">{{ $item['date'] }}</small>
                            </div>
                            <h2 class="h5 fw-bold">{{ $item['title'] }}</h2>
                            <p class="text-muted mb-0">{{ $item['excerpt'] }}</p>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-5 bg-soft">
    <div class="container">
        <div class="section-title text-center mb-4">
            <span>Galerie</span>
            <h2>Images des activités</h2>
        </div>
        <div class="gallery-grid">
            @foreach($site['gallery'] as $photo)
                <div class="gallery-item">
                    <img src="{{ asset($photo['image']) }}" alt="{{ $photo['title'] }}">
                    <div class="gallery-caption">{{ $photo['title'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
