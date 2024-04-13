<?php

Core\View::render("header", ["title" => "Filtr ovocných dřevin"]);
Core\View::render("menu");

?>

<div class="all-items"></div>

<?php
foreach ($trees as $key => $value) {
    Core\View::render("card", ["value" => $value]);
}

?>

</div>

<?php Core\View::render("footer") ?>