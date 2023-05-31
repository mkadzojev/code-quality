<?php

namespace Toolkit\Quality;

use Illuminate\Support\ServiceProvider;

class QualityServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->commands([
            Commands\QualityInstallCommand::class,
        ]);
    }


    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Register magic
    }
}
