<?php

namespace Enviaflores\UI;

use Illuminate\Support\ServiceProvider;

class EnviafloresUIServiceProvider extends ServiceProvider
{
    public function register(): void
    {
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/enviaflores/ui'),
        ], 'public');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'enviaflores-ui');
    }
}
