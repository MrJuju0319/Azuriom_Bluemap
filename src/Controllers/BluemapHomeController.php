<?php

namespace Azuriom\Plugin\Bluemap\Controllers;

use Azuriom\Http\Controllers\Controller;
use Azuriom\Plugin\Bluemap\Models\BluemapSetting;

class BluemapHomeController extends Controller
{
    /**
     * Show the home plugin page.
     */
    public function index()
    {
        $settings = BluemapSetting::query()->latest()->first();

        return view('bluemap::index', [
            'settings' => $settings,
        ]);
    }
}
