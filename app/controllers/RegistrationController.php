<?php 

namespace App\controllers;

use Core\View;
use App\models\User;

class RegistrationController
{
    public function show()
    {
        return View::render("registration");
    }

    public function create()
    {
        (new User)->create($_POST);
    }
}