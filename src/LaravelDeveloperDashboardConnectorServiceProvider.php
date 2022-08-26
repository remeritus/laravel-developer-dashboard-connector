<?php

namespace Remeritus\LaravelDeveloperDashboardConnector;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Remeritus\LaravelDeveloperDashboardConnector\Commands\LaravelDeveloperDashboardConnectorCommand;

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
            ->hasViews()
            ->hasMigration('create_laravel-developer-dashboard-connector_table')
            ->hasCommand(LaravelDeveloperDashboardConnectorCommand::class);
    }
}
