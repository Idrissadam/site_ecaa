@extends('layouts.app')

@section('content')
<section class="page-hero">
    <div class="container py-5">
        <span class="page-kicker">Réalisations</span>
        <h1 class="display-5 fw-bold">Nos quatre piliers d’activité</h1>
        <p class="lead text-muted col-lg-8">Production, maintenance, formation et recherche-innovation structurent l’action de l’ECAA.</p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-4">
            @foreach($site['achievements'] as $item)
                <div class="col-md-6">
                    <div class="achievement-card h-100">
                        <i class="bi {{ $item['icon'] }} achievement-icon"></i>
                        <h2 class="h4 fw-bold">{{ $item['title'] }}</h2>
                        <p class="text-muted mb-0">{{ $item['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-5 bg-soft">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <div class="section-title">
                    <span>Production</span>
                    <h2>Un catalogue d’équipements complet</h2>
                </div>
                <ul class="check-list">
                    <li>Travail de sol : houes et charrues</li>
                    <li>Semis : semoirs monorang et multirang</li>
                    <li>Récolte : soulèveuse d’arachide</li>
                    <li>Transport : charrettes et remorques</li>
                    <li>Transformation : décortiqueuses, moulins, presses</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="image-card">
                    <img src="{{ asset($site['gallery'][24]['image']) }}" alt="Production ECAA">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
