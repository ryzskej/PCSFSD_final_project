<?php

use Core\View;

Core\View::render("header", ["title" => "Jedlé keře"]);
Core\View::render("menu");
?>

<div class="all-buttons">
    <form action="/PCSFSD_final_project/findTypeBush">
        <input name="type" type="hidden" value="rybíz">
        <button class="one-button" type="submit" class="button--success">Rybíze</button>
    </form>

    <form action="/PCSFSD_final_project/findTypeBush">
        <input name="type" type="hidden" value="bez">
        <button class="one-button" type="submit" class="button--success">Bezy</button>
    </form>

    <form action="/PCSFSD_final_project/findTypeBush">
        <input name="type" type="hidden" value="angrešt">
        <button class="one-button" type="submit" class="button--success">Angrešty</button>
    </form>

    <form action="/PCSFSD_final_project/findTypeBush">
        <input name="type" type="hidden" value="jeřáb">
        <button class="one-button" type="submit" class="button--success">Jeřáby</button>
    </form>

    <form action="/PCSFSD_final_project/findTypeBush">
        <input name="type" type="hidden" value="josta">
        <button class="one-button" type="submit" class="button--success">Josty</button>
    </form>

    <form action="/PCSFSD_final_project/findTypeBush">
        <input name="type" type="hidden" value="hlošina">
        <button class="one-button" type="submit" class="button--success">Hlošiny</button>
    </form>
</div>


<div class="all-items">
    <?php foreach ($trees as $key => $value) {echo View::render("card", ["value" => $value]);}?>
</div>

<?php Core\View::render("footer") ?>

</html>