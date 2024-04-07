<?php

namespace App\controllers;

use Core\View;
use App\models\Tree;

class DashboardController
{
    public function show()
    {

        // controller je tady most mezi získáním dat a vrácením view. předává data z db do view    
        return View::render(
            "dashboard",
            [
                "trees" => (new Tree)->all()
            ]
        );
    }

    public function create()
    {
        (new Tree)->create($_POST);
        header('location: /PCSFSD_final_project/');
    }

    public function delete()
    {
    }
}
