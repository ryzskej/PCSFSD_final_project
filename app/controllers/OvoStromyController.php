<?php

namespace App\controllers;

use Core\View;
use App\models\Tree;
use App\utils\Debug;

class OvoStromyController
{
    public function show()
    {
        return View::render("ovocne-stromy", 
            ["trees" => (new Tree)->all()]
        );
    }

    public function filter()
    {
        return View::render("findTypeTree", 
            ["trees" => (new Tree)->findType($_GET["type"])]
        );
    }
}