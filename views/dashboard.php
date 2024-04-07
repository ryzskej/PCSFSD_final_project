<?php

use App\utils\Debug;

 Core\View::render("header");
 Core\View::render("menu")?>


    <?php 
        echo '<div class="all-buttons">
                <form action="/PCSFSD_final_project/ovocnestromy">
                    <input name="where" type="hidden" value="letni">
                    <button class="one-button" type="submit" class="button--success">Letní odrůdy</button>
                </form>
                <form action="/PCSFSD_final_project/ovocnestromy">
                    <input name="where" type="hidden" value="podzimni">
                    <button class="one-button" type="submit" class="button--success">Podzimni odrůdy</button>
                </form>
                <form action="/PCSFSD_final_project/ovocnestromy">
                    <input name="where" type="hidden" value="zimni">
                    <button class="one-button" type="submit" class="button--success">Zimní odrůdy</button>
                </form>
            </div>
                ';
    ?>

    <div class="all-items">
    
    <?php
        foreach($trees as $key => $value){
            echo ' 
                <div class="one-tree-card">
                    <h2>Název: '.$value["tree"].'</h2>
                    <p>Popis: '.$value["description"].'</p>
                    <p>Doba zrání: '.$value["whereIsMature"].'</p>
                </div>
            ';
        }
    ?>

    </div>

</body>
</html>
