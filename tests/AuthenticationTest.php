<?php

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

it('will fail without token', function () {
    $this->withoutExceptionHandling();

    $response = $this->get('ldd/connect');
    dd($response);
    expect($response->)
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
