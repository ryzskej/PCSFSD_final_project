<div class="all-buttons">
    <?php foreach($items as $key => $value){
        echo '
        <form action="/PCSFSD_final_project/' . $kindOf . '">
            <input name="type" type="hidden" value="' . $value . '">
            <button class="one-button" type="submit" class="button--success">' . $value . '</button>
        </form>';
    } ?>
</div>

    <!-- původní verze bez použití foreach -->

    <!-- <form action="/PCSFSD_final_project/findTypeTree">
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
        <input name="type" type="hidden" value="skořápkovina">
        <button class="one-button" type="submit" class="button--success">Skořápkoviny</button>
    </form> -->