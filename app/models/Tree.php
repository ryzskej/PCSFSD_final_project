<?php

namespace App\models;

use App\utils\Debug;

class Tree extends BaseModel
{
    public function all()
    {
        return $this->database->sql('SELECT * FROM trees');
    }

    public function ripeness()
    {
        return $this->database->sql('SELECT ripeness FROM trees where ripeness = "podzimni"');
    }

    public function create($data = [])
    {
        $this->database->sql("INSERT INTO trees (type, name, short_descr, ripeness) VALUES (" . "'" . $data['type'] . "'" . ", " . "'" . $data['name'] . "'" . ", " . "'" . $data['short_descr'] . "'" . ", " . "'" . $data['ripeness'] . "'" . ")");
    }

    public function deleteTree($id)
    {
        $this->database->sql("DELETE FROM trees WHERE id = " . "'" . $id . "'");
    }

    public function update(array $post)
    {
        $sql = 'UPDATE trees SET name = "' . $post['name'] . '", short_descr = "' . $post['short_descr'] . '", ripeness = "' . $post['ripeness'] . '" WHERE id = "' . $post['id'] . '"';

        $this->database->sql($sql);
    }

    public function findTree($id)
    {
        return $this->database->sql("SELECT * FROM trees where id = " . "'" . $id . "'");
    }
    
    public function findType($type)
    {
        return $this->database->sql("SELECT * FROM trees where type = " . "'" . $type . "'");
    }

    public function filterBy(array $data)
    {
        return $this->database->sql('SELECT * from trees where type = "' . $data['type'] . '" and ripeness = "' . $data['ripeness'] . '" and chut = "' . $data['chut'] . '"');
    }

    public function filterForm()
    {
        return $this->database->sql("SELECT * FROM trees where form = 'keř'");
    }
}
