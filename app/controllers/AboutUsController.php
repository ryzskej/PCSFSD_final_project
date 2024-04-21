<?php

namespace App\controllers;

use Core\View;

class AboutUsController
{
    public function show()
    {    
        View::Render("about-us");
    }
}