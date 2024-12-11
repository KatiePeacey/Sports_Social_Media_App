<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\Coach;
use App\Http\Middleware\Manager;
use App\Http\Middleware\Player;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'manager'=>Manager::class,
            'coach'=>Coach::class,
            'player'=>Player::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
