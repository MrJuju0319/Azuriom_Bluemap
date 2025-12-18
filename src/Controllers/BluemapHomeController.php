<?php

namespace Azuriom\Plugin\Bluemap\Controllers;

use Azuriom\Http\Controllers\Controller;

class BluemapHomeController extends Controller
{
    /**
     * Show the home plugin page.
     */
    public function index()
    {
        return view('bluemap::index');
    }
}
