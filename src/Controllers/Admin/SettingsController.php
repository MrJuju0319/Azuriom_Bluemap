<?php

namespace Azuriom\Plugin\Bluemap\Controllers\Admin;

use Azuriom\Http\Controllers\Controller;
use Azuriom\Support\SettingsRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class SettingsController extends Controller
{
    public function index()
    {
        return view('bluemap::admin.settings', [
            'bluemapUrl' => setting('bluemap.url', Config::get('bluemap.url')),
            'bluemapMode' => setting('bluemap.mode', Config::get('bluemap.mode')),
            'bluemapTitle' => setting('bluemap.title', Config::get('bluemap.title')),
        ]);
    }

    public function update(Request $request, SettingsRepository $settings)
    {
        $validated = $request->validate([
            'url' => ['required', 'url'],
            'mode' => ['required', 'in:iframe,link'],
            'title' => ['required', 'string', 'max:100'],
        ]);

        $settings->set([
            'bluemap.url' => $validated['url'],
            'bluemap.mode' => $validated['mode'],
            'bluemap.title' => $validated['title'],
        ]);

        return redirect()->route('admin.bluemap.settings')
            ->with('success', trans('messages.status.success'));
    }
}
