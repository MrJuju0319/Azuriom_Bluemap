<?php

return [
    'saved' => 'Paramètres Bluemap enregistrés avec succès.',

    'nav' => [
        'map' => 'Bluemap',
    ],

    'admin' => [
        'title' => 'Configuration Bluemap',
        'menu' => 'Bluemap',
        'integration_mode' => 'Mode d’intégration',
        'integration_mode_help' => 'Choisissez si le lien de la carte provient de la base de données (SQL) ou d’une URL Bluemap externe.',
        'modes' => [
            'sql' => 'SQL (stocké dans la base Azuriom)',
            'external' => 'Lien externe',
        ],
        'map_url' => 'URL de Bluemap',
        'map_url_help' => 'L’URL complète de l’interface web Bluemap (par exemple https://exemple.com/bluemap/).',
        'iframe_height' => 'Hauteur de l’iframe (px)',
        'iframe_height_help' => 'Hauteur utilisée pour l’iframe intégrée sur la page publique.',
        'open_in_new_tab' => 'Afficher un bouton pour ouvrir la carte dans un nouvel onglet',
        'save' => 'Enregistrer',
    ],

    'public' => [
        'title' => 'Bluemap',
        'missing_config' => 'Aucun lien Bluemap configuré pour le moment.',
        'configure_link' => 'Configurer depuis le panneau admin.',
        'open_tab' => 'Ouvrir Bluemap dans un nouvel onglet',
    ],
];
