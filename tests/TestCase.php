<?php

namespace Remeritus\LaravelDeveloperDashboardConnector\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Remeritus\LaravelDeveloperDashboardConnector\LaravelDeveloperDashboardConnectorServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
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
    }
}
