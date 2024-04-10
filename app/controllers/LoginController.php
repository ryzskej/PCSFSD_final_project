<?php

namespace App\controllers;

use Core\Auth;
use Core\View;
use App\models\User;

class LoginController
{
    public function show()
    {
        return View::render("login");
    }

    public function create()
    {

        // pokud mail existuje, vrátí true
        if ((new User)->exists($_POST['email'])) {
            // vrátí uživatele
            $user = (new User)->findByEmail($_POST['email']);

            // zkontroluj, že sedí heslo a pokud ano, přihlaš
            $password_hash = $user[0]['password'];
            $password = $_POST['password'];

            // pokud jsou hesla shodná, zaloguj uživatele a přesměruj na admin sekci
            // POZOR - u password_verify je první proměnná heslo z formuláře a druhá proměnná heslo z databáze
            if (password_verify($password, $password_hash)) {
                Auth::login($user[0]['id']);
                return header('location: admin');
            } else {
                return header('location: login?error=wrond_credentials');
            };
        }

        // pokud nesedí mail nebo heslo, vrať chybovou hlášku
        return header('location: login?error=wrond_credentials');
    }

    public function logout()
    {
        Auth::logout();
        return header("location: /PCSFSD_final_project/");
    }
}
