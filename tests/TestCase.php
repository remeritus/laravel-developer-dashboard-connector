<?php

namespace Remeritus\LaravelDeveloperDashboardConnector\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Remeritus\LaravelDeveloperDashboardConnector\LaravelDeveloperDashboardConnectorServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Remeritus\\LaravelDeveloperDashboardConnector\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelDeveloperDashboardConnectorServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-developer-dashboard-connector_table.php.stub';
        $migration->up();
        */
    }
}
