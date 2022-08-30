<?php

namespace Remeritus\LaravelDeveloperDashboardConnector;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelDeveloperDashboardConnectorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-developer-dashboard-connector')
            ->hasConfigFile()
            ->hasRoute('api');
    }
}
