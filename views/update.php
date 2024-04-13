<?php Core\View::render("header", ["title" => "Admin sekce"]);
// výše je zkrácený zápis pro use Core\View; View::render("header");

echo '<form action="/PCSFSD_final_project/admin/updated" class="form" method="post">
        <input type="text" name="name" placeholder="Vlož jméno stromu" value="'.$oneTree[0]["name"].'">
        <input type="hidden" name="id" value="'.$oneTree[0]["id"].'">
        <label for="ripeness">Jablko zraje podle roční doby: ?</label>
        <select name="ripeness" id="ripeness">';

        $options = array("květen", "červen", "červenec", "srpen", "září", "říjen", "listopad", "prosinec");
        foreach ($options as $option) {
            echo '<option value="' . $option . '"';
            if ($option == $oneTree[0]["ripeness"]) {
                echo ' selected';
            }
            echo '>' . $option . '</option>';
            }

            echo '</select>
            <input type="text" name="short_descr" placeholder="Popisek" value="'.$oneTree[0]["short_descr"].'"><br>
            <button type="submit">Editovat</button>
            </form>
            '

?>

</body>
</html>