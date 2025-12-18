@extends('admin.layouts.admin')

@section('title', 'BlueMap')

@section('content')
<div class="row">
    <div class="col-12 col-md-10 col-lg-8">
        <div class="card shadow-sm">
            <div class="card-header">
                <h5 class="mb-0">{{ __('Configuration BlueMap') }}</h5>
            </div>
            <form method="POST" action="{{ route('admin.bluemap.settings.update') }}">
                @csrf

                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label" for="bluemap-url">{{ __('URL publique de BlueMap') }}</label>
                        <input type="url" id="bluemap-url" name="url" class="form-control @error('url') is-invalid @enderror" value="{{ old('url', $bluemapUrl) }}" required>
                        <div class="form-text">
                            {{ __('Exemple : https://mon-serveur.fr/bluemap/') }}
                        </div>
                        @error('url')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="bluemap-title">{{ __('Titre de la page') }}</label>
                        <input type="text" id="bluemap-title" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $bluemapTitle) }}" maxlength="100" required>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">{{ __('Mode d’affichage') }}</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="mode-iframe" name="mode" value="iframe" {{ old('mode', $bluemapMode) === 'iframe' ? 'checked' : '' }}>
                            <label class="form-check-label" for="mode-iframe">
                                {{ __('Intégration dans une iframe (affiche la carte directement sur le site)') }}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="mode-link" name="mode" value="link" {{ old('mode', $bluemapMode) === 'link' ? 'checked' : '' }}>
                            <label class="form-check-label" for="mode-link">
                                {{ __('Lien externe (ouvre BlueMap dans un nouvel onglet)') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card-footer d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">
                        {{ trans('messages.actions.save') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
