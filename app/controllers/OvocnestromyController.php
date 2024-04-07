<?php

namespace App\controllers;

use Core\View;
use App\models\Tree;

class OvocnestromyController
{
    public function show()
    {
        View::render("ovocnestromy", 
        [
            "trees" => (new Tree)->all()
        ]);
    }
}