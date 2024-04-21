<?php

namespace App\controllers;

use Core\View;
use App\models\Tree;
use App\utils\Debug;

class DetailController
{
    public function showDetail()
    {
        return View::render(
            "detail",
            ["trees" => (new Tree)->findTree($_GET["id"])]
        );
    }
}
