<?php

namespace App\models;

use Core\Database;

class BaseModel
{

    protected $database;
    
    // každý model (Tree, User...) má extends tuto třídu (dědí odtud) a tak tedy vždy automaticky zdědí spojení s databází
    public function __construct()
    {
        $this->database = new Database();
    }
}