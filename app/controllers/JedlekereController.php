<?php

namespace App\controllers;

use Core\View;
use App\models\Tree;


class JedleKereController
{
    public function show()
    {
        return View::render("jedle-kere", 
            ["trees" => (new Tree)->filterForm()]
        );
    }

    public function filter()
    {
        return View::render("findTypeBush", 
            ["trees" => (new Tree)->findType($_GET["type"])]
        );
    }
}