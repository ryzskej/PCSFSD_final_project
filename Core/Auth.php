<?php

namespace Core;

class Auth
{
    public static function user(): int|null
    {
        // pokud session existuje, přihoď do ní ID, pokud neexistuje, vyhoď null
        return $_SESSION['id'] ?? null;
    }

    ////////////////////////////////////////////////////
    public static function login($id)
    {
        $_SESSION['id'] = $id;
    }

    ////////////////////////////////////////////////////
    public static function logout()
    {
        session_unset();

        session_destroy();
    }
}