<?php

Core\View::render("header", ["title" => "Databáze ovocných dřevin"]);
Core\View::render("menu");

use Core\View;
use App\utils\Debug;
?>


<div class="all-items">

    <?php
    foreach ($trees as $key => $value) {
        echo View::render("card", ["value" => $value]);
    }
    ?>

</div>


<?php
Core\View::render("footer");
?>