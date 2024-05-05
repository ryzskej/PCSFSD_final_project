<?php
Core\View::render("header", ["title" => "404"]);
Core\View::render("menu");
?>

<p>Stránka je ve výstavbě</p>

<?php
Core\View::render("footer");
?>