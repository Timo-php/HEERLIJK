<?php

namespace HEERLIJK\PartnerModule;

use Illuminate\Support\ServiceProvider;

class PartnerModuleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('HEERLIJK\PartnerModule\PartnerSelectController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }
}
