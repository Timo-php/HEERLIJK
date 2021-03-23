<?php

namespace heerlijk\partnermodule;

use Illuminate\Support\ServiceProvider;

class partnerModuleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('heerlijk\partnermodule\PartnerController');
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
