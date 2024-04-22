<?php

namespace App\controllers;

use Core\View;
use App\models\Tree;
use App\utils\Debug;

class FilterController
{

    public $tree;

    public function __construct()
    {
        $this->tree = new Tree();
    }

    // public function show()
    // {
    //     return View::render(
    //         "filter"
    //     );
    // }

    // public function filter()
    // {

    //     $trees = $this->tree->filterBy($_GET);

    //     return View::render(
    //         "results",
    //         ["trees" => $trees]
    //     );
    // }

    public function show()
    {
        $trees = isset($_GET["type"]) ? true : false;

        if ($trees) {
            $trees = $this->tree->filterBy($_GET);

            return View::render(
                "filter",
                ["trees" => $trees]
            );
        } else {
            return View::render("filter", ["trees" => $this->tree->all()]);
        }
    }

    public function findInDatabase()
    {
        return View::render(
            "findInDatabase",
            ["trees" => $this->tree->findInDatabase($_GET["search"])]
        );
    }
}
