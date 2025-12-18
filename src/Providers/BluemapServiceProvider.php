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
        $this->loadViews();
        $this->loadTranslations();
        $this->registerRouteDescriptions();
        $this->registerAdminNavigation();

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

    /**
     * Routes affichables dans la barre de navigation publique.
     *
     * @return array<string, string>
     */
    protected function routeDescriptions(): array
    {
        return [
            'bluemap.index' => setting('bluemap.title', 'BlueMap'),
        ];
    }

    /**
     * Entrées de navigation dans le panneau d’administration.
     *
     * @return array<string, array<string, string>>
     */
    protected function adminNavigation(): array
    {
        return [
            'bluemap' => [
                'name' => 'BlueMap',
                'icon' => 'bi bi-map',
                'route' => 'bluemap.admin.settings',
                'permission' => 'admin.settings',
            ],
        ];
    }
}
