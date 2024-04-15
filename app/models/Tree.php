<?php

namespace App\models;

use App\utils\Debug;

class Tree extends BaseModel
{
    public function all()
    {
        return $this->database->sql('SELECT * FROM trees');
    }

    public function create($data = [])
    {

        // $type = $data["type"];
        // $name = $data["name"];
        // $short_descr = $data["short_descr"];
        // $origin = $data["origin"];
        // $synonyms = $data["synonyms"];
        // $growth = $data["growth"];
        // $bloom = $data["bloom"];
        // $fruit = $data["fruit"];
        // $flavor = $data["flavor"];
        // $harvest = $data["harvest"];
        // $ripeness = $data["ripeness"];
        // $fruitfulness = $data["fruitfulness"];
        // $resilience = $data["resilience"];
        // $storeability = $data["storeability"];
        // $utilization = $data["utilization"];
        // $evaluation = $data["evaluation"];
        // $form = $data["form"];

        // $sql = "INSERT INTO trees (type, name, short_descr, origin, synonyms, growth, bloom, fruit, flavor, harvest, ripeness, fruitfulness, resilience, storeability, utilization, evaluation, form) VALUES ('$type', '$name', '$short_descr', '$origin', '$synonyms', '$growth', '$bloom', '$fruit', '$flavor', '$harvest', '$ripeness', '$fruitfulness', '$resilience', '$storeability', '$utilization', '$evaluation', '$form')";

        return $this->database->sql("INSERT INTO trees (type, name, short_descr, ripeness) VALUES (" . "'" . $data['type'] . "'" . ", " . "'" . $data['name'] . "'" . ", " . "'" . $data['short_descr'] . "'" . ", " . "'" . $data['ripeness'] . "'" . ")");

        // $result = $this->database->sql($sql);

        // return $result;

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
    
    public function findType($type)
    {
        return $this->database->sql("SELECT * FROM trees where type = " . "'" . $type . "'");
    }

    public function filterBy(array $data)
    {
        $type = $data["type"] == 'vše' ? '%' : '%' . $data["type"] . '%';
        $ripeness = $data["ripeness"] == 'vše' ? '%' : '%' . $data["ripeness"] . '%';
        $flavor = $data["flavor"] == 'vše' ? '%' : '%' . $data["flavor"] . '%';

        $sql = "SELECT * FROM trees WHERE type LIKE '$type' and ripeness_filter LIKE '$ripeness' and flavor_filter LIKE '$flavor'";

        return $this->database->sql($sql);

        // return $this->database->sql('SELECT * from trees where type = "' . $data['type'] . '" and ripeness = "' . $data['ripeness'] . '" and flavor = "' . $data['chut'] . '"');
    }

    public function filterForm($form)
    {
        return $this->database->sql("SELECT * FROM trees where form = " . "'" . $form . "'");
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
