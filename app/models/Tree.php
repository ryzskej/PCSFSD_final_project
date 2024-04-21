<?php

namespace App\models;

class Tree extends BaseModel
{
    public static $kindOfTree = ["jabloň", "hrušeň", "třešeň", "višeň", "broskvoň", "meruňka", "švestka", "kdoule", "oskeruše", "kaki", "muďoul", "skořápkovina"];
    
    public static $kindOfBush = ["rybíz", "angrešt", "maliny", "jahody", "ostružiny", "josta", "bez", "hlošina", "borůvka", "brusinka", "hroznové víno", "moruše", "muchovník", "trnka", "fík", "granátové jablko", "mišpule", "kiwi"];
    
    public static $category = ["name" => "jméno", "short_descr" => "krátký popisek", "origin" => "původ", "synonyms" => "synonyma", "growth" => "růst", "bloom" => "kvetení", "fruit" => "plod", "flavor" => "chuť" , "harvest" => "sklizeň", "ripeness" => "konzumní zralost", "fruitfulness" => "plodnost", "resilience" => "odolnost", "storeability" => "skladovatelnost", "utilization" => "využití", "evaluation" => "celkové hodnocení"];

    public static $month = ["leden", "únor", "březen", "duben", "květen", "červen", "červenec", "srpen", "září", "říjen", "listopad", "prosinec"];

    // angrešt, rybíz, josta, malina, ostružina, borůvka, jahoda, brusinka, hroznové víno, moruše, muchovník, trnka, mišpule, kiwi, fík, granátové jablko, bez, hlošina, rakytník, jeřáb, zimolez, dřín, kustovnice, šicha, hloh, myrobalán, ugni molinae (čilská myrta), kalina

    public function all()
    {

        return $this->database->sql("SELECT * FROM trees");
    }

    public function create($data = [])
    {
        $type = $data["type"];
        $name = $data["name"];
        $short_descr = $data["short_descr"];
        $origin = $data["origin"];
        $synonyms = $data["synonyms"];
        $growth = $data["growth"];
        $bloom = $data["bloom"];
        $fruit = $data["fruit"];
        $flavor = $data["flavor"];
        $harvest = $data["harvest"];
        $ripeness = $data["ripeness"];
        $fruitfulness = $data["fruitfulness"];
        $resilience = $data["resilience"];
        $storeability = $data["storeability"];
        $utilization = $data["utilization"];
        $evaluation = $data["evaluation"];
        $form = $data["form"];

        $sql = "INSERT INTO trees (type, name, short_descr, origin, synonyms, growth, bloom, fruit, flavor, harvest, ripeness, fruitfulness, resilience, storeability, utilization, evaluation, form) VALUES ('$type', '$name', '$short_descr', '$origin', '$synonyms', '$growth', '$bloom', '$fruit', '$flavor', '$harvest', '$ripeness', '$fruitfulness', '$resilience', '$storeability', '$utilization', '$evaluation', '$form')";

        return $this->database->sql($sql);

        // nebo takhle sice na pár řádků, ale hrozně nepřehledně
        // return $this->database->sql("INSERT INTO trees (type, name, short_descr, ripeness) VALUES (" . "'" . $data['type'] . "'" . ", " . "'" . $data['name'] . "'" . ", " . "'" . $data['short_descr'] . "'" . ", " . "'" . $data['ripeness'] . "'" . ")");
    }

    public function deleteTree($id)
    {
        return $this->database->sql("DELETE FROM trees WHERE id = " . "'" . $id . "'");
    }

    public function update(array $post)
    {
        $sql = 'UPDATE trees SET name = "' . $post['name'] . '", short_descr = "' . $post['short_descr'] . '", ripeness = "' . $post['ripeness'] . '" WHERE id = "' . $post['id'] . '"';

        return $this->database->sql($sql);
    }

    ///////////////////////////////////////////////////////////

    public function findTree($id)
    {
        return $this->database->sql("SELECT * FROM trees where id = " . "'" . $id . "'")[0];
    }



    public function filterType($form, $type)
    {
        $sql = "SELECT * FROM trees WHERE form = '$form' and type = '$type'";
        return $this->database->sql($sql);
    }




    public function findForm($form)
    {
        $sql = "SELECT * FROM trees WHERE form = '$form'";
        return $this->database->sql($sql);
    }

    public function filterBy(array $data)
    {
        $type = $data["type"] == 'vše' ? '%' : '%' . $data["type"] . '%';
        $ripeness = $data["ripeness"] == 'vše' ? '%' : '%' . $data["ripeness"] . '%';

        $sql = "SELECT * FROM trees WHERE type LIKE '$type' and ripeness_filter LIKE '$ripeness'";

        return $this->database->sql($sql);

        // return $this->database->sql('SELECT * from trees where type = "' . $data['type'] . '" and ripeness = "' . $data['ripeness'] . '" and flavor = "' . $data['chut'] . '"');
    }

    public function findInDatabase($input)
    {
        // return $this->database->sql("SELECT * FROM trees where name = " . "'" . $input . "'");
        $input = '%' . $input . '%';
        $sql = "SELECT * FROM trees WHERE name LIKE '$input'";
        $result = $this->database->sql($sql);

        return $result;
    }
}
