<?php Core\View::render("header", ["title" => "Admin sekce"]);
// výše je zkrácený zápis pro use Core\View; View::render("header");

echo '<form action="/PCSFSD_final_project/admin/updated" class="form" method="post"><br>
            <input type="hidden" name="id" value="' . $oneTree["id"] . '"><br>
            <input type="text" name="name" placeholder="Vlož jméno stromu" value="' . $oneTree["name"] . '"><br>
            <input type="text" name="form" placeholder="převažující forma růstu" value="' . $oneTree["form"] . '"><br>
            <input type="text" name="origin" placeholder="Vlož jméno stromu" value="' . $oneTree["origin"] . '"><br>
            <input type="text" name="synonyms" placeholder="synonyma" value="' . $oneTree["synonyms"] . '"><br>
            <input type="text" name="short_descr" placeholder="Popisek" value="' . $oneTree["short_descr"] . '"><br>
            <input type="text" name="growth" placeholder="růst" value="' . $oneTree["growth"] . '"><br>
            <input type="text" name="bloom" placeholder="květ" value="' . $oneTree["bloom"] . '"><br>
            <input type="text" name="fruit" placeholder="plod" value="' . $oneTree["fruit"] . '"><br>
            <input type="text" name="flavor" placeholder="chuť" value="' . $oneTree["flavor"] . '"><br>
            <input type="text" name="harvest" placeholder="sklizeň" value="' . $oneTree["harvest"] . '"><br>
            <input type="text" name="ripeness" placeholder="konzumní zralost" value="' . $oneTree["ripeness"] . '"><br>
            <input type="text" name="fruitfulness" placeholder="plodnost" value="' . $oneTree["fruitfulness"] . '"><br>
            <input type="text" name="resilience" placeholder="odolnost" value="' . $oneTree["resilience"] . '"><br>
            <input type="text" name="storeability" placeholder="skladovatelnost" value="' . $oneTree["storeability"] . '"><br>
            <input type="text" name="utilization" placeholder="využití" value="' . $oneTree["utilization"] . '"><br>
            <input type="text" name="evaluation" placeholder="zhodnocení" value="' . $oneTree["evaluation"] . '"><br>
            <button type="submit">Editovat</button>
            </form>
            '

?>

</body>

</html>