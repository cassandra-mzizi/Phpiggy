<?php

declare(strict_types=1);

require __DIR__.'/../../vendor/autoload.php';

//adding new
use Framework\App;
use App\Config\Paths;

use function App\Config\registerRoutes;

$app = new App(Paths::SOURCE."app/container-definitions.php");
registerRoutes($app);
return $app;

