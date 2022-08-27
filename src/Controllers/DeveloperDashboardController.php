<?php

namespace Remeritus\LaravelDeveloperDashboardConnector\Controllers;

use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use Illuminate\Http\Response as HttpResponse;
use Symfony\Component\HttpKernel\Exception\HttpException;

class DeveloperDashboardController
{
    public function connect(Request $request): string
    {
        if ($this->authorize($request)->denied()) {
            throw new HttpException(HttpResponse::HTTP_UNAUTHORIZED);
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
            return Response::denyWithStatus(403);
        }

        return Response::allow();
    }
}
