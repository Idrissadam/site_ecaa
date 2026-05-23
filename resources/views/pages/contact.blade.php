@extends('layouts.app')

@section('content')
<section class="page-hero">
    <div class="container py-5">
        <span class="page-kicker">Contact</span>
        <h1 class="display-5 fw-bold">Nous contacter</h1>
        <p class="lead text-muted col-lg-8">Discutons de vos besoins en équipements agricoles, en maintenance ou en partenariat.</p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success shadow-sm">{{ session('success') }}</div>
        @endif

        <div class="row g-4">
            <div class="col-lg-4">
                <div class="info-panel h-100">
                    <h2 class="h4 fw-bold mb-4">Informations</h2>
                    <div class="mb-4">
                        <div class="text-uppercase text-muted small mb-1">Directeur Général</div>
                        <div class="fw-semibold">{{ $site['contact']['director_name'] }}</div>
                        <div class="text-muted">{{ $site['contact']['director_title'] }}</div>
                    </div>
                    <div class="mb-4">
                        <div class="text-uppercase text-muted small mb-1">Adresse</div>
                        <div class="fw-semibold">{{ $site['contact']['location'] }}</div>
                        <div class="text-muted">{{ $site['contact']['country'] }}</div>
                    </div>
                    <div class="mb-4">
                        <div class="text-uppercase text-muted small mb-1">Téléphones</div>
                        @foreach($site['contact']['phones'] as $phone)
                            <div class="text-muted">{{ $phone }}</div>
                        @endforeach
                    </div>
                    <div>
                        <div class="text-uppercase text-muted small mb-1">Emails</div>
                        @foreach($site['contact']['emails'] as $email)
                            <div class="text-muted text-break">{{ $email }}</div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="form-panel">
                    <h2 class="h4 fw-bold mb-4">Envoyer un message</h2>
                    <form action="{{ route('contact.store') }}" method="POST" class="row g-3">
                        @csrf
                        <div class="col-md-6">
                            <label class="form-label">Nom *</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Votre nom">
                            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Email *</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Votre email">
                            @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Téléphone</label>
                            <input type="text" name="phone" value="{{ old('phone') }}" class="form-control @error('phone') is-invalid @enderror" placeholder="Votre téléphone">
                            @error('phone')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-12">
                            <label class="form-label">Sujet *</label>
                            <input type="text" name="subject" value="{{ old('subject') }}" class="form-control @error('subject') is-invalid @enderror" placeholder="Objet du message">
                            @error('subject')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-12">
                            <label class="form-label">Message *</label>
                            <textarea name="message" rows="6" class="form-control @error('message') is-invalid @enderror" placeholder="Décrivez votre besoin">{{ old('message') }}</textarea>
                            @error('message')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-12">
                            <button class="btn btn-ecaa btn-lg" type="submit">Envoyer le message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
