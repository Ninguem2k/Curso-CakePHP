<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * AdminUsers Controller
 *
 */
class AdminUsersController extends AppController
{
    public function index()
    {
        var_dump("Teste AdminUsersController");
        die();
    }
    public function show($arg1)
    {
        var_dump("Teste AdminUsersController" . $arg1);
        die();
    }
}
