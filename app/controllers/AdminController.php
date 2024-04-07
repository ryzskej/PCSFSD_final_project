<?php

namespace App\controllers;

use Core\View;
use App\models\Tree;
use App\models\User;
use App\utils\Debug;

class AdminController
{
    public $tree;

    public function __construct()
    {
        $this->tree = new Tree();
    }

    // používá se i index místo show
    public function show()
    {
        return View::render("Admin", [
            "trees" => $this->tree->all()
        ], [
            "users" => (new User)->all()
        ]);
    }

    public function create()
    {
        $this->tree->create($_POST);
        header('location: /PCSFSD_final_project/admin');
    }

    public function deleteTree()
    {
        $this->tree->deleteTree($_GET["id-tree"]);
        header('location: /PCSFSD_final_project/admin');
    }
}