<?php

namespace Italofantone\Notes;

use Illuminate\Support\ServiceProvider;

class NotesServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        $this->loadViewsFrom(__DIR__ . '/resources/views', 'notes');

        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
    }
}
