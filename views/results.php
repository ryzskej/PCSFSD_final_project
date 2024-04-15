<?php

Core\View::render("header", ["title" => "Filtr ovocných dřevin"]);
Core\View::render("menu");
?>

<form action="/PCSFSD_final_project/results">
    <select name="type" id="type">
        <option value="Jabloň">Jabloň</option>
        <option value="Hrušeň">Hrušeň</option>
        <option value="Třešeň">Třešeň</option>
        <option value="Višeň">Višeň</option>
        <option value="Meruňka">Meruňka</option>
        <option value="Broskev">Broskev</option>
        <option value="Skořápkovina">Skořápkovina</option>
        <option value="vše">nerozhoduje</option>
    </select>
    <select name="ripeness" id="ripeness">
        <option value="Leden">Leden</option>
        <option value="Únor">Únor</option>
        <option value="Březen">Březen</option>
        <option value="Duben">duben</option>
        <option value="Květen">květen</option>
        <option value="Červen">červen</option>
        <option value="Červenec">červenec</option>
        <option value="Srpen">srpen</option>
        <option value="Září">září</option>
        <option value="Říjen">říjen</option>
        <option value="Listopad">listopad</option>
        <option value="Prosinec">prosinec</option>
        <option value="vše">nerozhoduje</option>
    </select>
    <select name="flavor" id="flavor">
        <option value="dobrá">dobrá</option>
        <option value="chválitebná">chválitebná</option>
        <option value="výborná">výborná</option>
        <option value="jedinečná">jedinečná</option>
        <option value="vše">nerozhoduje</option>
    </select>
    <button>odešli</button>
</form>

<div class="all-items">
    <?php
    if (count($value) !== 0) {
        foreach ($trees as $key => $value) {
            Core\View::render("card", ["value" => $value]);
        }
    } else {
        echo '<p class="no-results">Pro zadané kritéria nebyl nalezen žádný výsledek</p>';
    }
    ?>
</div>

<?php Core\View::render("footer") ?>