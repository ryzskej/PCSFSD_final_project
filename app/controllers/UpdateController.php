<?php

namespace App\controllers;

use Core\View;
use App\models\Tree;
use App\utils\Debug;

class UpdateController
{
    public function show()
    {
        return View::render("Update", [
            "oneTree" => (new Tree)->findTree($_POST["id"])
        ]);
    }

    public function update()
    {
        (new Tree)->update($_POST);
        header('location: /PCSFSD_final_project/admin');
    }
}
