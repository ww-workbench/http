<?php
declare(strict_types=1);

use Nyholm\Psr7\Factory\Psr17Factory;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ServerRequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\UploadedFileFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;

$psrFactory = new Psr17Factory();

return [
    RequestFactoryInterface::class => $psrFactory,
    ResponseFactoryInterface::class => $psrFactory,
    ServerRequestFactoryInterface::class => $psrFactory,
    StreamFactoryInterface::class => $psrFactory,
    UploadedFileFactoryInterface::class => $psrFactory,
    UriFactoryInterface::class => $psrFactory,
];