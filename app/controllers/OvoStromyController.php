<?php

namespace App\controllers;

use Core\View;
use App\models\Tree;
use App\utils\Debug;

class OvoStromyController
{
    public $kindOfTree = ["jabloň", "hrušeň", "třešeň", "višeň", "broskvoň", "meruňka", "švestka", "skořápkovina"];

    public function show()
    {
        return View::render("ovocne-stromy", 
            ["trees" => (new Tree)->filterForm("strom")]
        );
    }

    public function filter()
    {
        return View::render("findTypeTree", 
            ["trees" => (new Tree)->findType($_GET["type"])]
        );
    }
}