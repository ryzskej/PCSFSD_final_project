<?php
Core\View::render("header", ["title" => "Admin sekce"]);
?>

<body>
    <a href="admin/logout">Odhlásit se</a>
    <a href="/PCSFSD_final_project">Domů</a>

    <h1>Stromy</h1>

    <form action="/PCSFSD_final_project/admin" class="form" method="post">
        <h2>Vlož novou dřevinu</h2>
        <select name="type" id="ripeness">
            <option value="jabloň">jabloň</option>
            <option value="hrušeň">hrušeň</option>
            <option value="švestka">švestka</option>
            <option value="meruňka">meruňka</option>
            <option value="višeň">višeň</option>
            <option value="třešeň">třešeň</option>
            <option value="broskvoň">broskvoň</option>
            <option value="skořápkovina">skořápkovina</option>
        </select><br>
        <input type="text" name="name" placeholder="Vlož jméno stromu" require><br>
        <input type="text" name="short_descr" placeholder="Krátký popisek" require><br>
        <input type="text" name="origin" placeholder="Původ" require><br>
        <input type="text" name="synonyms" placeholder="synonyma" require><br>
        <input type="text" name="growth" placeholder="růst" require><br>
        <input type="text" name="bloom" placeholder="květ" require><br>
        <input type="text" name="fruit" placeholder="plod" require><br>
        <input type="text" name="flavor" placeholder="chuť" require><br>
        <input type="text" name="harvest" placeholder="sklizeň" require><br>
        <input type="text" name="ripeness" placeholder="konzumní zralost" require><br>
        <input type="text" name="fruitfulness" placeholder="plodnost" require><br>
        <input type="text" name="resilience" placeholder="Odolnost" require><br>
        <input type="text" name="storeability" placeholder="skladovatelnost" require><br>
        <input type="text" name="utilization" placeholder="využití" require><br>
        <input type="text" name="evaluation" placeholder="celkové zhodnocení" require><br>
        <input type="text" name="form" placeholder="převažující forma růstu" require><br>
        <button type="submit">Odešli</button>
    </form>

    <div class="all-items all-items--admin">

        <?php

        // === VÝPIS STROMŮ ===
        foreach ($trees as $value) {
            echo '
                <div class="one-tree-card ">
                    <h2>' . $value["type"] . " " . $value["name"] . '</h2>
                    <p>Popisek: ' . $value["short_descr"] . '
                    <form action="/PCSFSD_final_project/admin/delete">
                        <input name="id" type="hidden" value="' . $value["id"] . '">
                        <button>Vymazat</button>    
                    </form>
                    <form action="/PCSFSD_final_project/admin/update" method="POST">
                        <input name="id" type="hidden" value="' . $value["id"] . '">
                        <button>Editovat</button>    
                    </form>
                        </div>
   
            ';
        }
        ?>
    </div>


    <h1>Uživatelé</h1>
    <div class="all-items all-items--admin">
        <?php

        // === VÝPIS UŽIVATELŮ ===
        foreach ($users as $value) {
            echo '
            <div class="one-tree-card">
                <p>ID: ' . $value["id"] . '<br>
                <p>ID: ' . $value["email"] . '<br>
                <button>Smazat</button>
            </div>
        ';
        }
        ?>
    </div>

</body>
</html>