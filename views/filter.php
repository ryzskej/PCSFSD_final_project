<?php

use Core\View;
use App\utils\Debug;

Core\View::render("header", ["title" => "Filtr ovocných dřevin"]);
Core\View::render("menu");
?>
                <form action="/PCSFSD_final_project/results">
                    <select name="type" id="ripeness">
                        <option value="Jabloň">Jabloň</option>
                        <option value="Hrušeň">Hrušeň</option>
                        <option value="Třešeň">Třešeň</option>
                    </select>
                    <select name="ripeness" id="ripeness">
                        <option value="Květen">květen</option>
                        <option value="Září">září</option>
                        <option value="Říjen">říjen</option>
                    </select>
                    <select name="chut" id="chut">
                        <option value="dobrá">dobrá</option>
                        <option value="chválitebná">chválitebná</option>
                        <option value="výborná">výborná</option>
                    </select>
                    <button>odešli</button>
                </form>

        <div class="all-items">
        </div>
    <?php

    // foreach ($trees as $key => $value) {
    //     if (!isset($_GET['where']) && !isset($_GET['flavour'])) {
    //         echo View::render("card", ["value" => $value]);
    //     } else if ($_GET['where'] == $value['ripeness'])
    //         echo View::render("card", ["value" => $value]);
    // }
    Core\View::render("footer"); 
    ?>


?>