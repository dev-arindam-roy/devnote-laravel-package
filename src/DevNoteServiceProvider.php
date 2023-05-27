<?php

namespace CreativeSyntax\DevNote;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Http\Kernel;
use CreativeSyntax\DevNote\Http\Middleware\DevNoteMiddleware;

class DevNoteServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(Kernel $kernel): void
    {
        //$this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        $kernel->appendMiddlewareToGroup('web', DevNoteMiddleware::class);

        $this->publishes([
            __DIR__ . '/public' => public_path('vendor/devnote'),
        ], 'devnote-assets');

        //php artisan vendor:publish --provider="CreativeSyntax\DevNote\DevNoteServiceProvider" --force
        //php artisan vendor:publish --tag=devnote-assets --force
    }
}