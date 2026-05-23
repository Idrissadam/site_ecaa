@extends('layouts.app')

@section('content')
<section class="hero-section">
    <div class="hero-overlay"></div>
    <img src="{{ asset($site['hero_image']) }}" alt="ECAA en action" class="hero-image">
    <div class="container position-relative">
        <div class="row align-items-center min-vh-80 py-5">
            <div class="col-lg-7 text-white">
                <span class="badge rounded-pill ecaa-badge mb-3">Depuis 1988 • Bokoro • Tchad</span>
                <h1 class="display-4 fw-bold lh-1 mb-4">{{ $site['site_name'] }}<span class="d-block text-accent">Technologies Agricoles</span></h1>
                <p class="lead mb-4 text-white-75">{{ $site['tagline'] }}</p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="{{ route('equipment') }}" class="btn btn-ecaa btn-lg">Découvrir les équipements</a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg">Nous contacter</a>
                </div>
            </div>
            <div class="col-lg-5 mt-5 mt-lg-0">
                <div class="glass-card p-4 p-md-5">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <div class="text-uppercase text-white-50 small">Points clés</div>
                            <div class="fs-5 fw-semibold">Innovation locale</div>
                        </div>
                        <i class="bi bi-leaf fs-1 text-accent"></i>
                    </div>
                    <div class="row g-3">
                        @foreach ($site['stats'] as $stat)
                            <div class="col-6">
                                <div class="stat-box">
                                    <div class="stat-value">{{ $stat['value'] }}</div>
                                    <div class="stat-label">{{ $stat['label'] }}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-4">
            @foreach($site['stats'] as $stat)
                <div class="col-md-3 col-6">
                    <div class="feature-card h-100">
                        <div class="feature-value">{{ $stat['value'] }}</div>
                        <div class="feature-label">{{ $stat['label'] }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <div class="section-title">
                    <span>Présentation</span>
                    <h2>Une association au service des producteurs</h2>
                </div>
                <p class="text-muted">{{ $site['intro']['summary'] }}</p>
                <p class="text-muted mb-4">Implantée à {{ $site['intro']['location'] }}, l’ECAA accompagne les producteurs avec des solutions concrètes pour le travail du sol, le semis, la récolte, le transport et la transformation.</p>
                <a href="{{ route('about') }}" class="btn btn-ecaa">Lire l’historique complet</a>
            </div>
            <div class="col-lg-6">
                <div class="image-stack">
                    <img src="{{ asset($site['about']['images'][0]) }}" class="stack-main" alt="Atelier ECAA">
                    <img src="{{ asset($site['about']['images'][1]) }}" class="stack-secondary" alt="Production ECAA">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-soft">
    <div class="container">
        <div class="section-title text-center mb-4">
            <span>Équipements</span>
            <h2>Nos domaines d’intervention</h2>
        </div>
        <div class="row g-4">
            @foreach($site['equipment_categories'] as $category)
                <div class="col-md-6 col-xl-4">
                    <div class="info-card h-100">
                        <div class="icon-pill mb-3"><i class="bi bi-tools"></i></div>
                        <h3 class="h5 fw-bold">{{ $category['name'] }}</h3>
                        <p class="text-muted">{{ $category['description'] }}</p>
                        <a href="{{ route('equipment') }}" class="link-accent">Voir les équipements <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-end gap-3 flex-wrap mb-4">
            <div class="section-title mb-0">
                <span>Actualités</span>
                <h2>Dernières réalisations</h2>
            </div>
            <a href="{{ route('news') }}" class="btn btn-outline-ecaa">Voir toutes les actualités</a>
        </div>
        <div class="row g-4">
            @foreach(array_slice($site['news'], 0, 3) as $item)
                <div class="col-lg-4">
                    <article class="news-card h-100">
                        <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}">
                        <div class="p-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge text-bg-success-subtle text-success">{{ $item['category'] }}</span>
                                <small class="text-muted">{{ $item['date'] }}</small>
                            </div>
                            <h3 class="h5 fw-bold">{{ $item['title'] }}</h3>
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
            <h2>Un aperçu de nos activités</h2>
        </div>
        <div class="gallery-grid">
            @foreach(array_slice($site['gallery'], 0, 8) as $photo)
                <div class="gallery-item">
                    <img src="{{ asset($photo['image']) }}" alt="{{ $photo['title'] }}">
                    <div class="gallery-caption">{{ $photo['title'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="cta-box">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-2">Vous souhaitez un site plus complet avec espace administration ?</h2>
                    <p class="mb-0 text-white-75">La base Laravel est prête pour recevoir un tableau de bord, une gestion des actualités, des images et des messages de contact.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Parler à l’équipe</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
