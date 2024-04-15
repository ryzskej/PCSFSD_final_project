<?php

Core\View::render("header", ["title" => "Filtr ovocných dřevin"]);
Core\View::render("menu");
?>

<div class="all-buttons">

    <form action="/PCSFSD_final_project/findTypeTree">
        <input name="type" type="hidden" value="jabloň">
        <button class="one-button" type="submit" class="button--success">Jabloně</button>
    </form>

    <form action="/PCSFSD_final_project/findTypeTree">
        <input name="type" type="hidden" value="hrušeň">
        <button class="one-button" type="submit" class="button--success">Hrušně</button>
    </form>

    <form action="/PCSFSD_final_project/findTypeTree">
        <input name="type" type="hidden" value="třešeň">
        <button class="one-button" type="submit" class="button--success">Třešně</button>
    </form>

    <form action="/PCSFSD_final_project/findTypeTree">
        <input name="type" type="hidden" value="višeň">
        <button class="one-button" type="submit" class="button--success">Višně</button>
    </form>

    <form action="/PCSFSD_final_project/findTypeTree">
        <input name="type" type="hidden" value="švestka">
        <button class="one-button" type="submit" class="button--success">Švestky</button>
    </form>

    <form action="/PCSFSD_final_project/findTypeTree">
        <input name="type" type="hidden" value="meruňka">
        <button class="one-button" type="submit" class="button--success">Meruňky</button>
    </form>

    <form action="/PCSFSD_final_project/findTypeTree">
        <input name="type" type="hidden" value="broskvoň">
        <button class="one-button" type="submit" class="button--success">Broskvoně</button>
    </form>

    <form action="/PCSFSD_final_project/findTypeTree">
        <input name="type" type="hidden" value="skořápkoviny">
        <button class="one-button" type="submit" class="button--success">Skořápkoviny</button>
    </form>


</div>


<div class="all-items">

    <?php
    foreach ($trees as $key => $value) {
        Core\View::render("card", ["value" => $value]);
    }

    ?>

</div>

<?php 
Core\View::render("footer"); 
?>