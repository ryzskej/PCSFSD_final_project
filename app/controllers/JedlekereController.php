<?php

namespace App\controllers;

use Core\View;
use App\models\Tree;


class JedleKereController
{
    public $kindOfBush = ["rybíz", "angrešt", "maliny", "jahody", "ostružiny", "josta", "bez", "hlošina"];

    public function show()
    {
        return View::render("jedle-kere", 
            ["trees" => (new Tree)->filterForm("keř")]
        );
    }

    public function filter()
    {
        return View::render("findTypeBush", 
            ["trees" => (new Tree)->findType($_GET["type"])]
        );
    }
}