<?php

namespace Azuriom\Plugin\Bluemap\Controllers\Admin;

use Azuriom\Http\Controllers\Controller;
use Azuriom\Plugin\Bluemap\Models\BluemapSetting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    /**
     * Show the home admin page of the plugin.
     */
    public function index(): View
    {
        return view('bluemap::admin.index', [
            'settings' => BluemapSetting::query()->latest()->first(),
        ]);
    }

    public function update(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'integration_mode' => ['required', 'in:sql,external'],
            'map_url' => ['required', 'url'],
            'iframe_height' => ['required', 'integer', 'min:200', 'max:2000'],
            'open_in_new_tab' => ['sometimes', 'boolean'],
        ]);

        $settings = BluemapSetting::firstOrNew();

        $settings->fill([
            'integration_mode' => $data['integration_mode'],
            'map_url' => $data['map_url'],
            'iframe_height' => $data['iframe_height'],
            'open_in_new_tab' => $request->boolean('open_in_new_tab'),
        ])->save();

        return back()->with('success', __('bluemap::messages.saved'));
    }
}
