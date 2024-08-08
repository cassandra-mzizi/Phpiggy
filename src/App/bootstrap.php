<?php

declare(strict_types=1);

require __DIR__.'/../../vendor/autoload.php';

use Framework\App;
use App\Controllers\{HomeController, AboutController, TransactionsController};

$app = new App();

$app->get('/', [HomeController::class, 'home']);
$app->get('/about', [AboutController::class, 'about']);
$app->get('/transactions', [TransactionsController::class, 'transactions']);

return $app;

