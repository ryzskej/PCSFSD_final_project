<?php Core\View::render("header", ["title" => "Admin sekce"]) ?>


<body>
    <a href="admin/logout">Odhlásit se</a>

    <h1>Stromy</h1>

    <form action="/PCSFSD_final_project/admin" class="form" method="post">
        <input type="text" name="type" placeholder="Vlož druh stromu" require><br>
        <input type="text" name="name" placeholder="Vlož jméno stromu" require><br>
        <label for="ripeness">Měsíc konzumní zralosti?</label><br>
        <select name="ripeness" id="ripeness">
            <option value="červenec">Červenec</option>
            <option value="srpen">Srpen</option>
            <option value="září">Září</option>
        </select><br>
        <input type="text" name="short_descr" placeholder="Popisek" require><br>
        <button type="submit">Odešli</button>
    </form>

    <div class="all-items all-items--admin">

        <?php

        // === VÝPIS STROMŮ ===
        foreach ($trees as $value) {
            echo '
                <div class="one-tree-card">
                    <h3>Název: ' . $value["name"] . '</h3>
                    <p>Popisek: ' . $value["short_descr"] . '
                    <p>ID: ' . $value["id"] . '<br>
                    <p>Konzumní zralost: ' . $value["ripeness"] . '<br>
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