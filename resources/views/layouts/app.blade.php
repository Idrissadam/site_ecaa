<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $site['site_name'] ?? 'ECAA' }} - {{ $site['full_name'] ?? '' }}</title>
    <meta name="description" content="{{ $site['tagline'] ?? '' }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Poppins:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="{{ asset('assets/ecaa/site.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ecaa-navbar sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-3 fw-bold" href="{{ route('home') }}">
            <img src="{{ asset($site['logo']) }}" alt="Logo ECAA" class="ecaa-logo">
            <span class="d-none d-sm-inline">
                <span class="d-block">{{ $site['site_name'] }}</span>
                <small class="fw-normal opacity-75">Technologies Agricoles</small>
            </span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#ecaaNav" aria-controls="ecaaNav" aria-expanded="false" aria-label="Menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="ecaaNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center gap-lg-2">
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Accueil</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">À propos</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('equipment') ? 'active' : '' }}" href="{{ route('equipment') }}">Équipements</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('achievements') ? 'active' : '' }}" href="{{ route('achievements') }}">Réalisations</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('partners') ? 'active' : '' }}" href="{{ route('partners') }}">Partenaires</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('news') ? 'active' : '' }}" href="{{ route('news') }}">Actualités</a></li>
                <li class="nav-item"><a class="btn btn-ecaa ms-lg-2" href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<main>
    @yield('content')
</main>

<footer class="ecaa-footer">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <img src="{{ asset($site['logo']) }}" alt="Logo ECAA" class="ecaa-logo">
                    <div>
                        <div class="fw-bold fs-5">{{ $site['site_name'] }}</div>
                        <small class="text-white-50">Association Tchadienne</small>
                    </div>
                </div>
                <p class="text-white-50 mb-0">{{ $site['tagline'] }}</p>
            </div>
            <div class="col-md-4">
                <h6 class="text-uppercase text-white-50 mb-3">Liens rapides</h6>
                <ul class="list-unstyled footer-links">
                    <li><a href="{{ route('home') }}">Accueil</a></li>
                    <li><a href="{{ route('about') }}">À propos</a></li>
                    <li><a href="{{ route('equipment') }}">Équipements</a></li>
                    <li><a href="{{ route('news') }}">Actualités</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h6 class="text-uppercase text-white-50 mb-3">Contact</h6>
                <div class="text-white-50 small">
                    <div class="mb-2"><i class="bi bi-geo-alt me-2"></i>{{ $site['contact']['location'] }} — {{ $site['contact']['country'] }}</div>
                    <div class="mb-2"><i class="bi bi-telephone me-2"></i>{{ implode(' / ', $site['contact']['phones']) }}</div>
                    <div class="mb-2"><i class="bi bi-envelope me-2"></i>{{ $site['contact']['emails'][0] }}</div>
                </div>
            </div>
        </div>
        <hr class="border-light border-opacity-10 my-4">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-2 small text-white-50">
            <span>&copy; {{ date('Y') }} {{ $site['site_name'] }}. Tous droits réservés.</span>
            <span>{{ $site['full_name'] }}</span>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')
</body>
</html>
