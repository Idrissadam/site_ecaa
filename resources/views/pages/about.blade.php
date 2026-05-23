@extends('layouts.app')

@section('content')
<section class="page-hero">
    <div class="container py-5">
        <span class="page-kicker">À propos</span>
        <h1 class="display-5 fw-bold">{{ $site['about']['title'] }}</h1>
        <p class="lead text-muted col-lg-8">Association Tchadienne pour le Développement des Technologies Agricoles.</p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-7">
                <div class="section-title">
                    <span>Préambule</span>
                    <h2>Une vision orientée vers l’autosuffisance</h2>
                </div>
                @foreach($site['about']['preamble'] as $paragraph)
                    <p class="text-muted">{{ $paragraph }}</p>
                @endforeach
            </div>
            <div class="col-lg-5">
                <div class="image-card">
                    <img src="{{ asset($site['about']['images'][0]) }}" alt="Atelier ECAA">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-soft">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-5 order-lg-2">
                <div class="image-card">
                    <img src="{{ asset($site['about']['images'][1]) }}" alt="Fabrication d’équipements">
                </div>
            </div>
            <div class="col-lg-7 order-lg-1">
                <div class="section-title">
                    <span>Historique</span>
                    <h2>Depuis 1988 à Bokoro</h2>
                </div>
                @foreach($site['about']['history'] as $paragraph)
                    <p class="text-muted">{{ $paragraph }}</p>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="section-title text-center mb-4">
            <span>Objectifs</span>
            <h2>Les axes prioritaires de l’association</h2>
        </div>
        <div class="row g-4">
            @foreach($site['about']['objectives'] as $objective)
                <div class="col-md-6 col-lg-4">
                    <div class="objective-card h-100">
                        <i class="bi bi-check2-circle text-success fs-3 mb-3"></i>
                        <p class="mb-0 fw-semibold">{{ $objective }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
