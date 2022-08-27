<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;

it('will fail without token', function () {
    $response = Http::get(route('connect'));
    expect($response->status())->toBe(Response::HTTP_UNAUTHORIZED);
});

it('will fail with wrong token', function () {
    putenv('DEVELOPER_DASHBOARD_TOKEN=CorrectToken');

    $response = Http::withToken('WrongToken')
                ->get(route('connect'));

    expect($response->status())->toBe(Response::HTTP_UNAUTHORIZED);
});

it('will succeed with correct token', function () {
    putenv('DEVELOPER_DASHBOARD_TOKEN=CorrectToken');

    $response = Http::withToken('CorrectToken')
        ->get(route('connect'));

    expect($response->status())->toBe(Response::HTTP_OK);
});
