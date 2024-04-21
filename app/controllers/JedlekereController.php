<?php

namespace App\controllers;

use Core\View;
use App\models\Tree;

class JedleKereController
{
    public function show()
    {
        $form = "keř";
        $type = isset($_GET['type']) ? $_GET['type'] : false;

        if ($type) {
            return View::render(
                "jedle-kere",
                ["trees" => (new Tree)->filterType($form, $type)]
            );
        } else {
            return View::render(
                "jedle-kere",
                ["trees" => (new Tree)->findForm($form)]
            );
        }
    }
}
