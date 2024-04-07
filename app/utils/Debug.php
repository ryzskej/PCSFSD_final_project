<?php 

namespace App\utils;

class Debug 
{
    public static function dump($variable)
    {
        echo "<pre>";
        var_dump($variable);
        echo "</pre>";
    }
}