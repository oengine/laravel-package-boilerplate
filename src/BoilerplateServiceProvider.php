<?php

namespace OEngine\Boilerplate;

use Illuminate\Support\ServiceProvider;
use OEngine\LaravelPackage\ServicePackage;
use OEngine\LaravelPackage\WithServiceProvider;

class BoilerplateServiceProvider extends ServiceProvider
{
    use WithServiceProvider;

    public function configurePackage(ServicePackage $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         */
        $package
            ->name('boilerplate')
            ->hasConfigFile()
            ->hasViews()
            ->hasHelpers()
            ->hasAssets()
            ->hasTranslations()
            ->runsMigrations()
            ->RouteWeb()
            ->runsSeeds();
    }
}
