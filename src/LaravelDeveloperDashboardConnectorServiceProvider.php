<?php

namespace Remeritus\LaravelDeveloperDashboardConnector;

use Remeritus\LaravelDeveloperDashboardConnector\Commands\LaravelDeveloperDashboardConnectorCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelDeveloperDashboardConnectorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-developer-dashboard-connector')
            ->hasConfigFile()
            ->hasRoute('api');
    }
}
