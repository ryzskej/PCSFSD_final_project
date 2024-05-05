<?php
Core\View::render("header", ["title" => "Filtr ovocných dřevin"]);
Core\View::render("menu");
?>

<!-- formulář s vybranými kritérii. Textový zdroj tahán z models\Tree a rendrován přes foreach -->
<form action="/PCSFSD_final_project/filter">

    <!-- políčko s výběrem dřeviny -->
    <label class="filterBy" for="type">Zvolte typ dřeviny</label>
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
        <option value="vše" selected>nerozhoduje</option>
    </select>

    <br><br>

    <!-- políčko s výběrem měsíce dozrávání -->
    <label class="filterBy" for="ripeness">Ve kterém měsíci má ovoce dozrávat?</label>
    <select name="ripeness" id="ripeness">
        <?php foreach (App\models\Tree::$month as $key => $value) {
            echo '<option value="' . $value . '">' . $value . '</option>';
        } ?>
        <option value="vše" selected>nerozhoduje</option>
    </select>

    <br><br>

    <!-- políčko s výběrem míry oslunění -->
    <label class="filterBy" for="insolation">Vyberte míru oslunění</label>
    <select name="insolation" id="insolation">
        <?php foreach (App\models\Tree::$insolation as $key => $value) {
            echo '<option value="' . $value . '">' . $value . '</option>';
        } ?>
        <option value="vše" selected>nerozhoduje</option>
    </select>

    <br><br>

    <button class="ButtonfilterBy">odešli</button>
</form>



<!-- Výpíše uživateli, co vybral za konkrétní hodnoty ve filtru -->
<p class="show-selected"><?php if (isset($_GET["type"])) {
        echo 'Vybral jste typ dřeviny - ' . $_GET["type"] . ', dozrává v měsíci - ' . $_GET["ripeness"] . ' a míra oslunění - ' . $_GET["insolation"] . '';
    } ?></p>

<!-- úvodní stránka vypíše všechny dřeviny.  Při odeslání formuláře se buď vypíše seznam daných dřevin, nebo warning hláška nic nenalezeno -->
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