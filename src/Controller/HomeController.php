<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * Home Controller
 *
 */
class HomeController extends AppController
{
    public function index()
    {
        $name = "Cássío G";
        $age = 22;

        $this->set(compact('name', 'age'));
        $this->render('index', "master");
    }
}
