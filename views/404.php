<?php 
Core\View::render("header", ["title" => "404"]);
Core\View::render("menu");
?>

<p class="no-results">Je nám líto, stránka nebyla nenalezena :-(</p>

<?php 
Core\View::render("footer");
?>