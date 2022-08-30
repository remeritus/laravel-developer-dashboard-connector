<?php

use Illuminate\Http\Response;

it('will fail without token', function () {
    $this->withoutExceptionHandling();

    $response = $this->get('ldd/connect');
    expect($response)
        ->toBe(Response::HTTP_UNAUTHORIZED);
});

it('will fail with wrong token', function () {
    $this->withoutExceptionHandling();

    $response = $this->withToken('WrongToken')
        ->get('ldd/connect');

    expect($response->getStatusCode())
        ->toBe(Response::HTTP_UNAUTHORIZED);
});

it('will succeed with correct token', function () {
    $this->withoutExceptionHandling();

    $response = $this->withToken('CorrectToken')
        ->get('ldd/connect');

    expect($response->getStatusCode())
        ->toBe(Response::HTTP_OK);
});
