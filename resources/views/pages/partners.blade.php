@extends('layouts.app')

@section('content')
<section class="page-hero">
    <div class="container py-5">
        <span class="page-kicker">Partenaires</span>
        <h1 class="display-5 fw-bold">Un réseau de coopération durable</h1>
        <p class="lead text-muted col-lg-8">L’ECAA collabore avec des organisations nationales et internationales pour renforcer son impact.</p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="partner-grid">
            @foreach($site['partners'] as $partner)
                <div class="partner-chip">{{ $partner }}</div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-5 bg-soft">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="content-panel">
                    <h2 class="h3 fw-bold mb-3">Pourquoi ces partenariats sont essentiels</h2>
                    <p class="text-muted">Le ministère de l’Agriculture et les projets de développement ont permis à l’ECAA de renforcer ses capacités à travers des formations, des voyages d’étude et des transferts de savoir-faire.</p>
                    <ul class="check-list">
                        <li>Accès à des formations et des technologies de pointe</li>
                        <li>Développement de projets d’envergure régionale</li>
                        <li>Renforcement des capacités de production et d’innovation</li>
                        <li>Extension de l’impact auprès des producteurs et artisans</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
