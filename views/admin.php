<?php Core\View::render("header") ?>


<body>

    <h1>Stromy</h1>
    <div class="all-items all-items--admin">

        <?php

        // === VÝPIS STROMŮ ===
        foreach ($trees as $value) {
            echo '
                <div class="one-tree-card">
                    <h3>Název: ' . $value["tree"] . '</h3>
                    <p>Popisek: ' . $value["description"] . '
                    <p>ID: ' . $value["id"] . '<br>
                    <form action="/PCSFSD_final_project/admin/delete">
                        <input name="id-tree" type="hidden" value="' . $value["id"] . '">
                        <button>Vymazat</button>    
                    </form>
                    <form action="/PCSFSD_final_project/admin/update" method="POST">
                        <input name="id-tree" type="hidden" value="' . $value["id"] . '">
                        <button>Editovat</button>    
                    </form>
                        </div>
   
            ';
        }
        ?>
    </div>

    <form action="/PCSFSD_final_project/admin" class="form" method="post">
        <input type="text" name="firstNameT" placeholder="Vlož jméno stromu" require>
        <input type="number" name="heightT" placeholder="Vlož výšku stromu" require><br>
        <label for="whereIsMature">Kdy zraje jablko?</label>
        <select name="whereIsMature" id="whereIsMature">
            <option value="letni">V létě</option>
            <option value="podzimni">Na podzim</option>
            <option value="zimni">V zimě</option>
        </select>
        <input type="text" name="descriptionT" placeholder="Popisek" require><br>
        <button type="submit">Odešli</button>
    </form>

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