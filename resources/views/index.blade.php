@extends('layouts.app')

@section('title', $bluemapTitle)

@section('content')
<div class="container my-4">
    <div class="card shadow-sm">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">{{ $bluemapTitle }}</h5>
            @if($bluemapMode === 'link')
                <a class="btn btn-primary" href="{{ $bluemapUrl }}" target="_blank" rel="noopener">
                    {{ trans('messages.actions.open') }}
                </a>
            @endif
        </div>
        <div class="card-body">
            @if($bluemapMode === 'iframe')
                <div class="ratio ratio-16x9">
                    <iframe src="{{ $bluemapUrl }}" title="{{ $bluemapTitle }}" allowfullscreen loading="lazy" class="border rounded"></iframe>
                </div>
                <p class="text-muted mt-2">
                    {{ __('Affichage BlueMap intégré. Si la carte ne se charge pas, vérifiez que l’URL publique autorise les iframes.') }}
                </p>
            @else
                <p class="mb-3">
                    {{ __('Cliquez sur le bouton pour ouvrir BlueMap dans un nouvel onglet. L’URL est enregistrée dans la base de données pour rester synchronisée avec vos paramètres.') }}
                </p>
            @endif
        </div>
    </div>
</div>
@endsection
