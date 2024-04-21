<?php
Core\View::render("header", ["title" => "Filtr ovocných dřevin"]);
Core\View::render("menu");
?>

<!-- formulář s vybranými kritérii. Textový zdroj tahán z models\Tree a rendrován přes foreach -->
<form action="/PCSFSD_final_project/filter">

    <label class="filterBy" for="type">Zvol typ dřeviny</label>
    <select name="type" id="type">
        <optgroup label="Stromy">
            <?php foreach (App\models\Tree::$kindOfTree as $key => $value) {
                echo '<option value="' . $value . '">' . $value . '</option>';
            } ?>
        </optgroup>
        <optgroup label="Keře">
            <?php foreach (App\models\Tree::$kindOfBush as $key => $value) {
                echo '<option value="' . $value . '">' . $value . '</option>';
            } ?>
        </optgroup>
        <option value="vše">nerozhoduje</option>
    </select>

    <br><br>

    <label class="filterBy" for="ripeness">Kdy má ovoce konzumně dozrávat?</label>
    <select name="ripeness" id="ripeness">
        <?php foreach (App\models\Tree::$month as $key => $value) {
            echo '<option value="' . $value . '">' . $value . '</option>';
        } ?>
        <option value="vše">nerozhoduje</option>
    </select>

    <br><br>

    <button class="ButtonfilterBy">odešli</button>
</form>

<!-- úvodní stránka vypíše všechny dřeviny.  Při odeslání formuláře se buď vypíše seznam daných dřevin, nebo warning hláška -->
<div class="all-items">
    <?php
    if (count($trees) != 0) {
        foreach ($trees as $key => $value) {
            Core\View::render("card", ["value" => $value]);
        }
    } else {
        echo '<p class="no-results">Pro zadané kritéria nebyl nalezen žádný výsledek</p>';
    }
    ?>
</div>

<?php
Core\View::render("footer");
?>