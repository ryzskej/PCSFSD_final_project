<?php

namespace App\controllers;

use Core\View;

class JedlekereController
{
    public function show()
    {
        View::render("jedlekere");
    }
}
