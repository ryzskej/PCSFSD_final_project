<?php

namespace App\controllers;

use Core\View;
use App\models\Tree;

class DashboardController
{
    public function show()
    {
        return View::render(
            "dashboard",
            [
                "trees" => (new Tree)->all()
            ]
        );
    }
}
