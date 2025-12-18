<?php

namespace Azuriom\Plugin\Bluemap\Models;

use Illuminate\Database\Eloquent\Model;

class BluemapSetting extends Model
{
    protected $fillable = [
        'integration_mode',
        'map_url',
        'iframe_height',
        'open_in_new_tab',
    ];

    protected $casts = [
        'open_in_new_tab' => 'bool',
    ];
}
