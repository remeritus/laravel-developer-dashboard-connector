<?php

namespace Remeritus\LaravelDeveloperDashboardConnector\Commands;

use Illuminate\Console\Command;

class LaravelDeveloperDashboardConnectorCommand extends Command
{
    public $signature = 'laravel-developer-dashboard-connector';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
