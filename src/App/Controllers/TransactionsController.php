<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Config\Paths;

class TransactionsController
{

    private TemplateEngine $view;

    public function __construct()
    {
        $this->view = new TemplateEngine(Paths::VIEW);
    }

    public function transactions()
    {
        echo $this->view->render("transactions.php", [
          'title' => 'Transactions',
        ]);
    }

}