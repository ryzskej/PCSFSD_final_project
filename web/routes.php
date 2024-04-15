<?php

// require "./app/controllers/DashboardController.php" //||\\ nebo jednoduše viz níže
use Core\Router;
// use App\controllers\OvocnestromyController;
use App\controllers\DetailController;
use App\controllers\AdminController;
use App\controllers\LoginController;
use App\controllers\FilterController;
use App\controllers\UpdateController;
use App\controllers\DashboardController;
use App\controllers\JedleKereController;
use App\controllers\OvoStromyController;
use App\controllers\RegistrationController;

// inicializuji objekt Router   
$router = new Router();

// pouze do pole routes přidám pole s daty níže, nic jiného metoda addRoute nedělá, pouze přidává do pole
$router->addRoute("/PCSFSD_final_project/", DashboardController::class, "show", "GET");
$router->addRoute("/PCSFSD_final_project/", DashboardController::class, "create", "POST");

$router->addRoute("/PCSFSD_final_project/login", LoginController::class, "show", "GET");
$router->addRoute("/PCSFSD_final_project/login", LoginController::class, "create", "POST");
$router->addRoute("/PCSFSD_final_project/admin/logout", LoginController::class, "logout", "GET");

$router->addRoute("/PCSFSD_final_project/registration", RegistrationController::class, "show", "GET");
$router->addRoute("/PCSFSD_final_project/registration", RegistrationController::class, "create", "POST");

$router->addRoute("/PCSFSD_final_project/admin", AdminController::class, "create", "POST");
$router->addRoute("/PCSFSD_final_project/admin", AdminController::class, "show", "GET");
$router->addRoute("/PCSFSD_final_project/admin/delete", AdminController::class, "deleteTree", "GET");

$router->addRoute("/PCSFSD_final_project/admin/update", UpdateController::class, "show", "POST");

$router->addRoute("/PCSFSD_final_project/admin/updated", UpdateController::class, "update", "POST");

$router->addRoute("/PCSFSD_final_project/ovocne-stromy", OvoStromyController::class, "show", "GET");
$router->addRoute("/PCSFSD_final_project/findTypeTree", OvoStromyController::class, "filter", "GET");

$router->addRoute("/PCSFSD_final_project/jedle-kere", JedleKereController::class, "show", "GET");
$router->addRoute("/PCSFSD_final_project/findTypeBush", JedleKereController::class, "filter", "GET");

$router->addRoute("/PCSFSD_final_project/filter", FilterController::class, "show", "GET");
$router->addRoute("/PCSFSD_final_project/results", FilterController::class, "filter", "GET");
$router->addRoute("/PCSFSD_final_project/findInDatabase", FilterController::class, "findInDatabase", "GET");

$router->addRoute("/PCSFSD_final_project/detail", DetailController::class, "showDetail", "GET");

// teprve tady se spouští kód, který vezme aktuální url, porovná ji s routy a poté buď vyhodí dané view, nebo 404
$router->run();