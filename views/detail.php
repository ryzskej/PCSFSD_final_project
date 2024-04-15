<?php 
Core\View::render("header", ["title" => $trees['name']]);
Core\View::render("menu");
?>

<article class="full-detail">
    <h1><?php echo $trees["name"] ?></h1>
    <p><b>Původ:</b> <?php echo $trees["origin"] ?></p>
    <p><b>Synonyma:</b> <?php echo $trees["synonyms"] ?></p>
    <p><b>Růst:</b> <?php echo $trees["growth"] ?></p>
    <p><b>Květ:</b> <?php echo $trees["bloom"] ?></p>
    <p><b>Plod:</b> <?php echo $trees["fruit"] ?></p>
    <p><b>Chuť:</b> <?php echo $trees["flavor"] ?></p>
    <p><b>Sklizeň:</b> <?php echo $trees["harvest"] ?></p>
    <p><b>Konzumní zralost:</b> <?php echo $trees["ripeness"] ?></p>
    <p><b>Plodnost:</b> <?php echo $trees["fruitfulness"] ?></p>
    <p><b>Odolnost:</b> <?php echo $trees["resilience"] ?></p>
    <p><b>Skladovatelnost:</b> <?php echo $trees["storeability"] ?></p>
    <p><b>Použití:</b> <?php echo $trees["utilization"] ?></p>
    <p><b>Zajímavosti:</b> <?php echo $trees["interest"] ?></p>
    <p><b>Celkové zhodnocení:</b> <?php echo $trees["evaluation"] ?></p>
</article>

<?php 
Core\View::render("footer");
?>