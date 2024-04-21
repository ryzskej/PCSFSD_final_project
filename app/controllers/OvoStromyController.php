<?php

namespace App\controllers;

use Core\View;
use App\models\Tree;
use App\utils\Debug;

class OvoStromyController
{
    public function show()
    {
        $form = "strom";
        $type = isset($_GET['type']) ? $_GET['type'] : false;

        if ($type) {
            return View::render(
                "ovocne-stromy",
                ["trees" => (new Tree)->filterType($form, $type)]
            );
        } else {
            return View::render(
                "ovocne-stromy",
                ["trees" => (new Tree)->findForm($form)]
            );
        }
    }
}
