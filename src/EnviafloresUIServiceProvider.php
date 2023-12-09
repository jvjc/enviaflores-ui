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
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'enviaflores-ui');

        $this->publishes([
            __DIR__.'/../resources/js' => public_path('vendor/enviaflores-ui/js'),
        ], 'public');
    }
}
