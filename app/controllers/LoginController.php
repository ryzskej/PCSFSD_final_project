<?php

namespace App\controllers;

use Core\View;

class LoginController
{
    public function show()
    {
        return View::render("login");
    }
}