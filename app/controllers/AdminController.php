<?php

namespace App\controllers;

use Core\Auth;
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

    public function show()
    {
        if (Auth::user()) {
            return View::render("Admin", [
                "trees" => $this->tree->all()
            ], [
                "users" => (new User)->all()
            ]);
        } else {
            header('location: /PCSFSD_final_project/login');
        }
    }

    public function create()
    {
        $this->tree->create($_POST);
        Debug::dump($_POST);
        die();
        header('location: /PCSFSD_final_project/admin');
    }


    public function deleteTree()
    {
        $this->tree->deleteTree($_GET["id"]);
        header('location: /PCSFSD_final_project/admin');
    }
}
