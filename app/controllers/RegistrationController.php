<?php

namespace App\controllers;

use Core\View;
use App\models\User;
use Core\Auth;

class RegistrationController
{
    public function show()
    {
        return View::render("registration");
    }

    public function create()
    {
        if ((new User)->create($_POST)) {

            $user_id = (new User)->findByEmail($_POST['email'])[0]["id"];
            Auth::login($user_id);
            return header("location: /PCSFSD_final_project/admin");
        } else {
            return header("location: /PCSFSD_final_project/registration?error=email_taken");
        }
    }
}
