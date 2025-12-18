@extends('admin.layouts.admin')

@section('title', __('bluemap::messages.admin.title'))

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('bluemap.admin.settings') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label" for="integration_mode">{{ __('bluemap::messages.admin.integration_mode') }}</label>
                    <select class="form-select" id="integration_mode" name="integration_mode" required>
                        <option value="sql" @selected(optional($settings)->integration_mode === 'sql')>
                            {{ __('bluemap::messages.admin.modes.sql') }}
                        </option>
                        <option value="external" @selected(optional($settings)->integration_mode === 'external')>
                            {{ __('bluemap::messages.admin.modes.external') }}
                        </option>
                    </select>
                    <small class="form-text text-muted">{{ __('bluemap::messages.admin.integration_mode_help') }}</small>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="map_url">{{ __('bluemap::messages.admin.map_url') }}</label>
                    <input type="url" class="form-control" id="map_url" name="map_url" value="{{ old('map_url', optional($settings)->map_url) }}" required>
                    <small class="form-text text-muted">{{ __('bluemap::messages.admin.map_url_help') }}</small>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="iframe_height">{{ __('bluemap::messages.admin.iframe_height') }}</label>
                    <input type="number" min="200" max="2000" step="10" class="form-control" id="iframe_height" name="iframe_height" value="{{ old('iframe_height', optional($settings)->iframe_height ?? 720) }}" required>
                    <small class="form-text text-muted">{{ __('bluemap::messages.admin.iframe_height_help') }}</small>
                </div>

                <div class="form-check form-switch mb-4">
                    <input class="form-check-input" type="checkbox" role="switch" id="open_in_new_tab" name="open_in_new_tab" value="1" @checked(optional($settings)->open_in_new_tab)>
                    <label class="form-check-label" for="open_in_new_tab">{{ __('bluemap::messages.admin.open_in_new_tab') }}</label>
                </div>

                <button type="submit" class="btn btn-primary">
                    {{ __('bluemap::messages.admin.save') }}
                </button>
            </form>
        </div>
    </div>
@endsection
