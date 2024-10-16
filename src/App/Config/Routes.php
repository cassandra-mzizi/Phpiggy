<?php

declare(strict_types=1);

namespace App\Config;

//calling instance
use Framework\App;
use App\Controllers\{HomeController, AboutController, TransactionsController};

//registering the routes
function registerRoutes(App $app)
{
    $app->get('/', [HomeController::class, 'home']);
    $app->get('/about', [AboutController::class, 'about']);
    $app->get('/transactions', [TransactionsController::class, 'transactions']);
}