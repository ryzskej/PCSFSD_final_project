<?php

namespace Core;

use App\utils\Debug;

class View
{
    public static function render($view_name, $data = [], $user = [])
    {

        foreach($data ?? [] as $variable_name => $value){
            $$variable_name = $value;           // hodnota se přiřadí do nově vytvořené dynamické proměnné
        }
        
        foreach($user ?? [] as $variable_name => $value){
            $$variable_name = $value;           // hodnota se přiřadí do nově vytvořené dynamické proměnné
        }

        include "views/$view_name.php";
    }
}