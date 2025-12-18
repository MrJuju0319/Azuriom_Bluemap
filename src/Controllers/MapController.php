<?php

namespace Azuriom\Plugin\Bluemap\Controllers;

use Azuriom\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class MapController extends Controller
{
    /**
     * Display the BlueMap page.
     */
    public function index()
    {
        $url = setting('bluemap.url', Config::get('bluemap.url'));
        $mode = setting('bluemap.mode', Config::get('bluemap.mode', 'iframe'));
        $title = setting('bluemap.title', Config::get('bluemap.title', 'BlueMap'));

        return view('bluemap::index', [
            'bluemapUrl' => $url,
            'bluemapMode' => $mode,
            'bluemapTitle' => $title,
        ]);
    }
}
