<?php

namespace App\controllers;

use Core\Auth;
use Core\View;
use App\models\User;
use App\utils\Debug;

class RegistrationController
{
    public function show()
    {
        return View::render("registration");
    }

    public function create()
    {
        // pokud se hesla neshodují, vypíše se hláška
        if ($_POST["password"] !== $_POST["password2"]){
            return header("location: /PCSFSD_final_project/registration?error-password=wrong_password");
        
        // metoda User::create obsahuje kontrolu, jestli už není email obsazen. Pokud je, vrátí false a přeskočí na třetí bod
        } else if ((new User)->create($_POST)) {

            $user_id = (new User)->findByEmail($_POST['email'])[0]["id"];
            Auth::login($user_id);
            return header("location: /PCSFSD_final_project/admin");

        // hesla byly v pořádku, jen název mailu už je rezervován
        } else {
            return header("location: /PCSFSD_final_project/registration?error-email=email_taken");
        }
    }
}
