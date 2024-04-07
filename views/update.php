<?php Core\View::render("header")?>
<!-- výše je zkrácený zápis pro use Core\View; View::render("header");  -->

<?php

use App\utils\Debug;

Debug::dump($oneTree);

echo '<form action="/PCSFSD_final_project/admin/updated" class="form" method="post">
        <input type="text" name="firstNameT" placeholder="Vlož jméno stromu" value="'.$oneTree[0]["tree"].'">
        <input type="hidden" name="id" value="'.$oneTree[0]["id"].'">
        <input type="number" name="heightT" placeholder="Vlož výšku stromu" value="'.$oneTree[0]["height"].'"><br>
        <label for="whereIsMature">Jablko zraje podle roční doby: ?</label>
        <select name="whereIsMature" id="whereIsMature">';

        $options = array("letni", "podzimni", "zimni");
        foreach ($options as $option) {
            echo '<option value="' . $option . '"';
            if ($option == $oneTree[0]["whereIsMature"]) {
                echo ' selected';
            }
            echo '>' . $option . '</option>';
            }

            echo '</select>
            <input type="text" name="descriptionT" placeholder="Popisek" value="'.$oneTree[0]["description"].'"><br>
            <button type="submit">Editovat</button>
            </form>
            '

?>

</body>
</html>