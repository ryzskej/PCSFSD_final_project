<?php

$types = array_merge(App\models\Tree::$kindOfTree, App\models\Tree::$kindOfTree);
$category = App\models\Tree::$category;
$month = App\models\Tree::$month;

Core\View::render("header", ["title" => "Admin sekce"]);
?>

<body>
    <a href="admin/logout">Odhlásit se</a>
    <a href="/PCSFSD_final_project">Domů</a>

    <h1>Výpis dřevin</h1>

    <form action="/PCSFSD_final_project/admin" class="form form--admin" method="post">
        <h2>Vlož novou dřevinu</h2>

        <select name="type">
            <?php foreach ($types as $key => $value) {echo '<option value="' . $value . '">' . $value . '</option>';} ?>
        </select><br>

        <select name="form">
            <option value="strom">strom</option>
            <option value="keř">keř</option>
        </select><br>

        <div class="flex">
        <?php foreach ($category as $key => $value) {
            echo '
                <div>
                    <label for=" ' . $key . ' ">' . $value . '</label><br>
                    <textarea rows="4" cols="50" name="' . $key . '" class="form__input"></textarea><br>
                </div>
            ';
        } ?>
        </div>

        <h3>Ve kterém měsíci plody dřeviny dozrávají?</h3>
        <?php foreach($month as $key => $value){echo '
            <label for=" ' . $value . '">' . $value . '
                <input type="checkbox" name="ripeness_filter[]" id="' . $value . '" value="' . $value . '">
            </label>
            ';} ?>

        <!-- <label for="name">Jméno stromu</label><br>
        <textarea rows="2" cols="30" name="name" class="form__input"></textarea><br>
        <input type="text" name="short_descr" placeholder="Krátký popisek"><br>
        <input type="text" name="origin" placeholder="Původ"><br>
        <input type="text" name="synonyms" placeholder="synonyma"><br>
        <input type="text" name="growth" placeholder="růst"><br>
        <input type="text" name="bloom" placeholder="květ"><br>
        <input type="text" name="fruit" placeholder="plod"><br>
        <input type="text" name="flavor" placeholder="chuť"><br>
        <input type="text" name="harvest" placeholder="sklizeň"><br>
        <input type="text" name="ripeness" placeholder="konzumní zralost"><br>
        <input type="text" name="fruitfulness" placeholder="plodnost"><br>
        <input type="text" name="resilience" placeholder="Odolnost"><br>
        <input type="text" name="storeability" placeholder="skladovatelnost"><br>
        <input type="text" name="utilization" placeholder="využití"><br>
        <input type="text" name="evaluation" placeholder="celkové zhodnocení"><br>
        <input type="text" name="form" placeholder="převažující forma růstu"><br> -->
        <button type="submit">Odešli</button>
    </form>

    <div class="all-items all-items--admin">
        <?php
        // ===== VÝPIS STROMŮ =====
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

    <!-- ===== UŽIVATELÉ ===== -->
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