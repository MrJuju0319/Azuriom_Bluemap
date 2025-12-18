<?php

namespace Azuriom\Plugin\Bluemap\Providers;

use Azuriom\Extensions\Plugin\BasePluginServiceProvider;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\View;

class BluemapServiceProvider extends BasePluginServiceProvider
{
    /**
     * Register the plugin services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom($this->pluginPath('config/bluemap.php'), 'bluemap');
    }

    /**
     * Bootstrap the plugin services.
     */
    public function boot(): void
    {
        $this->loadViewsFrom($this->pluginPath('resources/views'), 'bluemap');
        $this->loadRoutesFrom($this->pluginPath('routes/web.php'));
        $this->loadRoutesFrom($this->pluginPath('routes/admin.php'));

        // Compatible avec Azuriom v1.2 (Laravel 9) : charge les traductions si elles existent,
        // sans dépendre d’un helper ajouté dans des versions ultérieures.
        $langPath = $this->pluginPath('resources/lang');
        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'bluemap');
        }

        $this->bootViewData();
    }

    private function bootViewData(): void
    {
        View::composer('bluemap::*', function ($view) {
            $view->with([
                'bluemapUrl' => setting('bluemap.url', Config::get('bluemap.url')),
                'bluemapMode' => setting('bluemap.mode', Config::get('bluemap.mode')),
                'bluemapTitle' => setting('bluemap.title', Config::get('bluemap.title')),
            ]);
        });
    }
}
