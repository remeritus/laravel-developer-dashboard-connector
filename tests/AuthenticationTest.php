<?php


use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;

it('will fail without token', function () {

    $response = $this->get('ldd/connect');

    expect($response->getStatusCode())
        ->toBe(Response::HTTP_UNAUTHORIZED);
});

it('will fail with wrong token', function () {

    $response = $this->withToken('WrongToken')
        ->get('ldd/connect');

    expect($response->getStatusCode())
        ->toBe(Response::HTTP_UNAUTHORIZED);
});

it('will succeed with correct token', function () {

    $response = $this->withToken('CorrectToken')
        ->get('ldd/connect');

    expect($response->getStatusCode())
        ->toBe(Response::HTTP_OK);
});
