@extends('layouts.app')

@section('content')
<section class="page-hero">
    <div class="container py-5">
        <span class="page-kicker">Catalogue</span>
        <h1 class="display-5 fw-bold">Équipements agricoles</h1>
        <p class="lead text-muted col-lg-8">Une gamme organisée par domaine d’application pour faciliter la lecture et la consultation.</p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-4">
            @foreach($site['equipment_categories'] as $category)
                <div class="col-lg-6">
                    <div class="category-card h-100">
                        <div class="d-flex justify-content-between align-items-start gap-3 mb-3">
                            <div>
                                <h2 class="h4 fw-bold mb-2">{{ $category['name'] }}</h2>
                                <p class="text-muted mb-0">{{ $category['description'] }}</p>
                            </div>
                            <span class="count-pill">{{ count($category['items']) }}</span>
                        </div>
                        <div class="row g-3 mt-2">
                            @foreach($category['items'] as $item)
                                <div class="col-md-6">
                                    <div class="equipment-item">
                                        <div class="fw-semibold">{{ $item['name'] }}</div>
                                        <small class="text-muted">{{ $item['description'] }}</small>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-5 bg-soft">
    <div class="container">
        <div class="section-title text-center mb-4">
            <span>Visuel</span>
            <h2>Production et atelier</h2>
        </div>
        <div class="row g-4">
            @foreach(array_slice($site['gallery'], 14, 3) as $photo)
                <div class="col-md-4">
                    <div class="news-card h-100">
                        <img src="{{ asset($photo['image']) }}" alt="{{ $photo['title'] }}">
                        <div class="p-3">
                            <div class="fw-semibold">{{ $photo['title'] }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
