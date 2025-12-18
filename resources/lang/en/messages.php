<?php

return [
    'saved' => 'Bluemap settings updated successfully.',

    'nav' => [
        'map' => 'Bluemap',
    ],

    'admin' => [
        'title' => 'Bluemap configuration',
        'menu' => 'Bluemap',
        'integration_mode' => 'Integration mode',
        'integration_mode_help' => 'Choose whether the map link comes from the database (SQL) or an external Bluemap instance URL.',
        'modes' => [
            'sql' => 'SQL (stored in the Azuriom database)',
            'external' => 'External link',
        ],
        'map_url' => 'Bluemap URL',
        'map_url_help' => 'The full URL to the Bluemap web interface (for example, https://example.com/bluemap/).',
        'iframe_height' => 'Iframe height (px)',
        'iframe_height_help' => 'Height used for the embedded iframe on the public page.',
        'open_in_new_tab' => 'Show a button to open the map in a new tab',
        'save' => 'Save settings',
    ],

    'public' => [
        'title' => 'Bluemap',
        'missing_config' => 'No Bluemap link configured yet.',
        'configure_link' => 'Configure it from the admin panel.',
        'open_tab' => 'Open Bluemap in a new tab',
    ],
];
