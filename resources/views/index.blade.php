@extends('layouts.app')

@section('title', 'Bluemap')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1 class="h3 mb-3">{{ __('bluemap::messages.public.title') }}</h1>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            @if (! $settings || blank($settings->map_url))
                <div class="alert alert-warning mb-0">
                    {{ __('bluemap::messages.public.missing_config') }}
                    <a href="{{ route('bluemap.admin.index') }}" class="alert-link">{{ __('bluemap::messages.public.configure_link') }}</a>
                </div>
            @else
                @if ($settings->open_in_new_tab)
                    <div class="d-flex justify-content-end mb-2">
                        <a class="btn btn-outline-primary btn-sm" href="{{ $settings->map_url }}" target="_blank" rel="noopener">
                            {{ __('bluemap::messages.public.open_tab') }}
                        </a>
                    </div>
                @endif

                <div class="border rounded overflow-hidden">
                    <iframe
                        src="{{ $settings->map_url }}"
                        title="Bluemap"
                        class="w-100 border-0"
                        allowfullscreen
                        loading="lazy"
                        style="height: {{ $settings->iframe_height }}px"
                    ></iframe>
                </div>
            @endif
        </div>
    </div>
@endsection
