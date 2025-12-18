<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bluemap_settings', function (Blueprint $table) {
            $table->id();
            $table->string('integration_mode')->default('external');
            $table->string('map_url');
            $table->unsignedInteger('iframe_height')->default(720);
            $table->boolean('open_in_new_tab')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bluemap_settings');
    }
};
