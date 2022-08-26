<?php

namespace Remeritus\LaravelDeveloperDashboardConnector\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Remeritus\LaravelDeveloperDashboardConnector\LaravelDeveloperDashboardConnector
 */
class LaravelDeveloperDashboardConnector extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Remeritus\LaravelDeveloperDashboardConnector\LaravelDeveloperDashboardConnector::class;
    }
}
