<?php

namespace Core;

class Router 
{

    // pole cest (zatím prázdné, potom se naplní prostřednictvím funkce addRoute)
    public $routes = [];


    // metoda přidání cesty do pole výše, tahle funkce jen vytvoří pole, jinak nic nedělá
    public function addRoute($route, $controller, $callback, $http_method)
    {
        // defacto Router->routes, čili nakrm mi zatím prázdné pole routes klíčem GET-POST+route danými kontrolery a callbacky
        $this->routes[$http_method . $route] = 
        [
            "controller" => $controller,
            "callback" => $callback,
        ];
    }

    // metoda k vykonání requestu
    public function run()
    {
        // zjistit, co je napsáno v URL adrese na úrovni index.php. Pomáhá nám superglobální proměnná $_SERVER
        $url = $_SERVER["REQUEST_METHOD"] . $_SERVER["REQUEST_URI"];
        $url = parse_url($url)['path'];

        if (array_key_exists($url, $this->routes)) {
    
            $controller = $this->routes[$url]["controller"];  // vybere klíč podle url a v něm poté value s klíčem "controller"
            $callback = $this->routes[$url]["callback"];      // totéž co nahoře 
            
            // inicializovat daný controler a na něm konkrétní metodu
            $controller = new $controller(); 
            $controller->$callback();  
            // (new $controller)->$callback();      tohle je zkrácený ekvivalent dvou řádků výše
        
        } else {
            View::render("404");
        }
    }

}

// začínám od implementace - napíšu program, jak by měl na konci vypadat a pak to jen rozkouskuju do po jednotlivých částech