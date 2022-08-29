<?php

namespace Remeritus\LaravelDeveloperDashboardConnector\Controllers;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;

class DeveloperDashboardController
{
    public function connect(Request $request): string
    {
        if ($this->authorize($request)->denied()) {
            // return \response()->json(['message' => 'Token mismatch.'], 401);
            abort(401, 'Token mismatch.');
        }

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

    private function authorize(Request $request): Response
    {
        $bearerToken = $request->bearerToken();

        if ($bearerToken != config('developer-dashboard-connector.developer-dashboard.token')) {
            return Response::deny(null, 403);
        }

        return Response::allow();
    }
}
