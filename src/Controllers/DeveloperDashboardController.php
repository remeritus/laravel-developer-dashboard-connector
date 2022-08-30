<?php

namespace Remeritus\LaravelDeveloperDashboardConnector\Controllers;

use Illuminate\Http\Request;

class DeveloperDashboardController
{

    public function connect(Request $request): string
    {
        $this->authorize($request);

        return json_encode($this->getLaravelData());
    }

    private function getLaravelData(): array
    {
        return [
            'data' => [
                'Laravel Version' => app()->version(),
                'PHP Version' => phpversion(),
            ],
        ];
    }

    private function authorize(Request $request): void
    {
        if ($request->bearerToken() != config('developer-dashboard-connector.developer-dashboard.token')) {
            abort(401, 'Invalid API Token.');
        }
    }
}
