<?php

namespace Paulido\Ui\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Paulido\Ui\Classes\Danger;


class UiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../../routes/routes.php');
        // Blade::componentNamespace('Paulido\\Views\\Components', 'paulido');
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'ui');
        // include __DIR__.'/routes.php';
        // Blade::component('package-danger', Danger::class);
        // Blade::component('picon', Icon::class);
    }
}
